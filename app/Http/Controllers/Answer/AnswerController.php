<?php

namespace App\Http\Controllers\Answer;
use App\Http\Controllers\Controller;
use App\Models\Answer\TblAnswer;
use App\Models\Guest\TblGuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function akademik_decision(Request $request)
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        
        $decision = Session::get('decision');
        return view('questions.welcome',compact('decision'));
    }

    public function akademik_yes_view(Request $request)
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        
        $yes_decision = Session::get('yes_decision');
        
        return view('questions.akademik_yes',compact('yes_decision'));
    }
    public function akademik_no_view(Request $request)
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        
        $no_decision = Session::get('no_decision');
        
        return view('questions.akademik_no',compact('no_decision'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function soal_aktivitas()
    {   
        if (!session()->exists('register')) {
            return redirect('/');
        }
        
        $decision = Session::get('decision');
        $no_decision = Session::get('no_decision');
        $yes_decision = Session::get('yes_decision');
        $aktivitas = Session::get('aktivitas');
        return view('questions.aktivitas',compact('no_decision','decision','yes_decision','aktivitas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function soal_prestasi()
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        $prestasi = Session::get('prestasi');
        return view('questions.prestasi',compact('prestasi'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function soal_personal_brand()
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        $personal_branding = Session::get('personal_branding');
        return view('questions.personal_brand',compact('personal_branding'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function soal_komunikasi()
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        $decision = Session::get('decision');
        $no_decision = Session::get('no_decision');
        $yes_decision = Session::get('yes_decision');
        $aktivitas = Session::get('aktivitas');
        $prestasi = Session::get('prestasi');
        $presonal_branding = Session::get('presonal_branding');
        $komunikasi = Session::get('komunikasi');

        return view('questions.komunikasi',compact('komunikasi','no_decision','decision','yes_decision','aktivitas','prestasi','presonal_branding'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result_view()
    {
        if (!session()->exists('register')) {
            return redirect('/');
        }
        $guest_id   = Session::get('id_guest');
        $guest = TblGuest::get('id');
        
        $hasil      = TblAnswer::where('id_guest' ,'=', $guest_id)->sum('answer');
        $category1  = TblAnswer::where('id_guest' ,'=', $guest_id)->get();
        $aaa        = collect($category1)->groupBy('category');
        $bbb        = $aaa->map(function($bb){
            return $bb->sum('answer');
        });
        
        $academic       = ($bbb['academic'] >= 15) ? 1 : 0 ;
        $aktivitas      = ($bbb['aktivitas'] >= 20) ? 1 : 0 ;
        $prestasi       = ($bbb['prestasi'] >= 15) ? 1 : 0 ;
        $personal_brand = ($bbb['personal_brand'] >= 10) ? 1 : 0 ;
        $komunikasi     = ($bbb['komunikasi'] >= 10) ? 1 : 0 ;
        // dd($academic,$aktivitas,$prestasi ,$personal_brand,$komunikasi , $aaa, $bbb, $hasil);
        $jawaban = TblAnswer::where('id_guest' ,'=', $guest_id)->with('guestss')->first();
        // dd($hasil);
        
        return view('result.result_answer', compact('bbb','academic','aktivitas','prestasi','personal_brand','komunikasi','jawaban'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function akademik(Request $request)
    {

        // dd($validatedData);
        if($request->answer =='Yes'){
            return redirect('/akademik_yes_view');
        }
        else{
            return redirect('/akademik_no_view');
        }
    }

    public function akademiksession(Request $request)
    {

        // return $request;

        $validatedData = $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);

            $arrr = array();
            $decision = new TblAnswer;
            // $decision->id_guest           = $request->id_guest;
            $decision->category           = $request->category;
            $decision->questions_number   = $request->questions_number;
            $decision->answer             = $request->answer;
            // dd($akademik_no[$i]);
            $arrr[]=$decision;
        
            
        
            if(empty($request->session()->get('decision'))){
                $akademik_decision = new TblAnswer();
                $akademik_decision->fill($validatedData);
                $request->session()->put('decision', $validatedData);
                return false;
            }else{
                $request->session()->put('decision', $validatedData);
                return true;
            }

        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function akademik_yes()
    {
            return redirect('/soal_aktivitas');
        
    }

    public function akademik_yes_session(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $decision = Session::get('yes_decision')== null ?  [] :  Session::get('yes_decision');
        $nomor = $request->number;

        if (!empty($decision[$nomor])){
            // unset($decision[$nomor]);
            $decision[$nomor]=[];
            $request->session()->put('yes_decision', $decision);
        }
        // $arrr = array();
        // return $decision;
        // for ($i = 0; $i < count($request->answer); $i++) {
            // $akademik_yes = new TblAnswer;
            // $akademik_yes->id_guest           = $request->id_guest;
            // $akademik_yes->category           = $request->category;
            // $akademik_yes->questions_number   = $request->questions_number;
            // $akademik_yes->answer             = $request->answer;
            
            // dd($akademik_no[$i]);
            $decision[$nomor] = array(
                // "id_guest" => $request->id_guest,
                "category" => $request->category,
                "questions_number" => $request->questions_number,
                "answer" => $request->answer,
                );
            // $arrr=(array)$akademik_yes;
            // $arr = array_merge($decision,$arrr);
            
            echo json_encode($decision);
            // return $arr;
        // }
        // dd($arr);
            if(empty($request->session()->get('yes_decision')[$nomor])){
                $yes_decision = new TblAnswer();
                $yes_decision->fill($decision);
                $request->session()->put('yes_decision', $decision);
            }else{
                // $no_decision = $request->session()->get('no_decision');
                // $no_decision->fill($arr);
                // $jawaban = $request->session()->get('yes_decision');
                
                $request->session()->put('yes_decision', $decision);
                // dd($no_decision['answer'][0]);
            }

            session()->forget(['no_decision']);
        
            // return redirect('/soal_aktivitas');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function akademik_no()
    {
            return redirect('/soal_aktivitas');
    }

    public function akademik_no_session(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $decision = Session::get('no_decision')== null ?  [] :  Session::get('no_decision');
        $nomor = $request->number;

        if (!empty($decision[$nomor])){
            // unset($decision[$nomor]);
            $decision[$nomor]=[];
            $request->session()->put('no_decision', $decision);
        }
        // $arrr = array();
        // return $decision;
        // for ($i = 0; $i < count($request->answer); $i++) {
            // $akademik_yes = new TblAnswer;
            // $akademik_yes->id_guest           = $request->id_guest;
            // $akademik_yes->category           = $request->category;
            // $akademik_yes->questions_number   = $request->questions_number;
            // $akademik_yes->answer             = $request->answer;
            
            // dd($akademik_no[$i]);
            $decision[$nomor] = array(
                // "id_guest" => $request->id_guest,
                "category" => $request->category,
                "questions_number" => $request->questions_number,
                "answer" => $request->answer,
                );
            // $arrr=(array)$akademik_yes;
            // $arr = array_merge($decision,$arrr);
            
            echo json_encode($decision);
            // return $arr;
        // }
        // dd($arr);
            if(empty($request->session()->get('no_decision')[$nomor])){
                $no_decision = new TblAnswer();
                $no_decision->fill($decision);
                $request->session()->put('no_decision', $decision);
            }else{
                // $no_decision = $request->session()->get('no_decision');
                // $no_decision->fill($arr);
                // $jawaban = $request->session()->get('yes_decision');
                
                $request->session()->put('no_decision', $decision);
                // dd($no_decision['answer'][0]);
            }

            session()->forget(['yes_decision']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aktivitas()
    {
            return redirect('/soal_prestasi');
    }

    public function aktivitas_session(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $activities = Session::get('aktivitas')== null ?  [] :  Session::get('aktivitas');
        $nomor = $request->number;

        if (!empty($activities[$nomor])){
            // unset($decision[$nomor]);
            $activities[$nomor]=[];
            $request->session()->put('aktivitas', $activities);
        }
            $activities[$nomor] = array(
                // "id_guest" => $request->id_guest,
                "category" => $request->category,
                "questions_number" => $request->questions_number,
                "answer" => $request->answer,
                );
            echo json_encode($activities);

            if(empty($request->session()->get('aktivitas')[$nomor])){
                $aktivitas = new TblAnswer();
                $aktivitas->fill($activities);
                $request->session()->put('aktivitas', $activities);
            }else{
                $request->session()->put('aktivitas', $activities);
            }





        // $request->validate([
        //     // 'id_guest'          => 'required',
        //     'category'          => 'required',
        //     'questions_number'  => 'required',
        //     'answer'            => 'required',
        // ]);
        
        // $arr = array();

        // for ($i = 0; $i < count($request->answer); $i++) {
        //     $activities = new TblAnswer;
        //     // $activities->id_guest           = $request->id_guest;
        //     $activities->category           = $request->category[$i];
        //     $activities->questions_number   = $request->questions_number[$i];
        //     $activities->answer             = $request->answer[$i];
        //     // dd($activities[$i]);
        //     $arr[]=$activities;
        //     // dd($arr);
        // }
        
        //     if(empty($request->session()->get('aktivitas'))){
        //         $aktivitas = new TblAnswer();
        //         $aktivitas->fill($arr);
        //         $request->session()->put('aktivitas', $arr);
        //     }else{
        //         $request->session()->put('aktivitas', $arr);
        //         // dd($no_decision['answer'][0]);
        //     }
        // return redirect('/soal_prestasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function prestasi()
    {
            return redirect('/soal_personal_brand');
    }

    
    public function prestasi_session(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $prestasi = Session::get('prestasi')== null ?  [] :  Session::get('prestasi');
        $nomor = $request->number;

        if (!empty($prestasi[$nomor])){
            // unset($decision[$nomor]);
            $prestasi[$nomor]=[];
            $request->session()->put('prestasi', $prestasi);
        }
            $prestasi[$nomor] = array(
                // "id_guest" => $request->id_guest,
                "category" => $request->category,
                "questions_number" => $request->questions_number,
                "answer" => $request->answer,
                );
            echo json_encode($prestasi);

            if(empty($request->session()->get('prestasi')[$nomor])){
                $aktivitas = new TblAnswer();
                $aktivitas->fill($prestasi);
                $request->session()->put('prestasi', $prestasi);
            }else{
                $request->session()->put('prestasi', $prestasi);
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function personal_brand()
    {
            return redirect('/soal_komunikasi');
    }

    public function personal_brand_session(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $personal_brand = Session::get('personal_branding')== null ?  [] :  Session::get('personal_branding');
        $nomor = $request->number;

        if (!empty($personal_brand[$nomor])){
            // unset($decision[$nomor]);
            $personal_brand[$nomor]=[];
            $request->session()->put('personal_branding', $personal_brand);
        }
            $personal_brand[$nomor] = array(
                // "id_guest" => $request->id_guest,
                "category" => $request->category,
                "questions_number" => $request->questions_number,
                "answer" => $request->answer,
                );
            echo json_encode($personal_brand);

            if(empty($request->session()->get('personal_branding')[$nomor])){
                $personal_branding = new TblAnswer();
                $personal_branding->fill($personal_brand);
                $request->session()->put('personal_branding', $personal_brand);
            }else{
                $request->session()->put('personal_branding', $personal_brand);
            }




        // $request->validate([
        //     // 'id_guest'          => 'required',
        //     'category'          => 'required',
        //     'questions_number'  => 'required',
        //     'answer'            => 'required',
        // ]);
        
        // $arr = array();

        // for ($i = 0; $i < count($request->answer); $i++) {
        //     $personal_brand = new TblAnswer;
        //     // $personal_brand->id_guest           = $request->id_guest;
        //     $personal_brand->category           = $request->category[$i];
        //     $personal_brand->questions_number   = $request->questions_number[$i];
        //     $personal_brand->answer             = $request->answer[$i];
        //     // dd($akademik_no[$i]);
        //     $arr[]=$personal_brand;
        // }
        
        
        //     if(empty($request->session()->get('personal_branding'))){
        //         $personal_branding = new TblAnswer();
        //         $personal_branding->fill($arr);
        //         $request->session()->put('personal_branding', $arr);
        //     }else{
        //         $request->session()->put('personal_branding', $arr);
        //     }

        //     return redirect('/soal_komunikasi');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function komunikasi()
    {

        $guest = TblGuest::create(Session::get('register'));
        Session::put('id_guest', $guest->id);

        $akademic_decision = !empty(Session::get('no_decision')) ? Session::get('no_decision') : Session::get('yes_decision') ;

        $array_session = [];

        $array_session = array_merge(   
            [Session::get('decision')],
            $akademic_decision,
            Session::get('aktivitas'),
            Session::get('prestasi'),
            Session::get('personal_branding'),
            Session::get('komunikasi'),
            Session::get('aktivitas'),
            );
        // $array_session = array_merge($array_session, $akademic_decision);
        
        for ($i = 0; $i < count($array_session); $i++) {
            // $guest_id = Session::get('id_guest');
            $communication = new TblAnswer;
            $communication->id_guest           = $guest->id;
            $communication->category           = $array_session[$i]['category'];
            $communication->questions_number   = $array_session[$i]['questions_number'];
            $communication->answer             = $array_session[$i]['answer'];
            // dd($akademik_no[$i]);
            // $arr[]=$communication;
            $communication->save();
        }
        
        
        // dd($communication);
        return redirect('/send_mail');
    }

    public function komunikasi_session(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $communication = Session::get('komunikasi')== null ?  [] :  Session::get('komunikasi');
        $nomor = $request->number;

        if (!empty($communication[$nomor])){
            // unset($decision[$nomor]);
            $communication[$nomor]=[];
            $request->session()->put('komunikasi', $communication);
        }
            $communication[$nomor] = array(
                // "id_guest" => $request->id_guest,
                "category" => $request->category,
                "questions_number" => $request->questions_number,
                "answer" => $request->answer,
                );
            echo json_encode($communication);

            if(empty($request->session()->get('komunikasi')[$nomor])){
                $komunikasi = new TblAnswer();
                $komunikasi->fill($communication);
                $request->session()->put('komunikasi', $communication);
            }else{
                $request->session()->put('komunikasi', $communication);
            }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi_yes($id)
    {
        // $guest_id   = Session::get('id_guest');
        TblAnswer::where('id_guest', $id)->delete();
        // $post->delete();
        return redirect('/akademik_decision');
    }

    public function generatePDF()
    {
        
        $guest_id   = Session::get('id_guest');
        $guest = TblGuest::get('id');
        
        
        $hasil      = TblAnswer::where('id_guest' ,'=', $guest_id)->sum('answer');
        $category1  = TblAnswer::where('id_guest' ,'=', $guest_id)->get();
        $aaa        = collect($category1)->groupBy('category');
        $bbb        = $aaa->map(function($bb){
            return $bb->sum('answer');
        });
        
        $data["academic"]       = ($bbb['academic'] >= 15) ? 1 : 0;
        $data["aktivitas"]      = ($bbb['aktivitas'] >= 20) ? 1 : 0 ;
        $data["prestasi"]       = ($bbb['prestasi'] >= 15) ? 1 : 0 ;
        $data["personal_brand"] = ($bbb['personal_brand'] >= 10) ? 1 : 0;
        $data["komunikasi"]     = ($bbb['komunikasi'] >= 10) ? 1 : 0;
        $data["lihat_user"]     = TblGuest::where('id', '=', $guest_id)->first();
        // dd($academic,$aktivitas,$prestasi ,$personal_brand,$komunikasi , $aaa, $bbb, $hasil);
        $data["jawaban"]        = TblAnswer::where('id_guest' ,'=', $guest_id)->with('guestss')->first();
        // dd($hasil);
        $email_pengguna = TblAnswer::where('id_guest' ,'=', $guest_id)->with('guestss')->first();
        // if ($guest_id) {
        //     \Mail::to($email_pengguna->guestss->email)->send(new MyTestMail($data));
        //     return new JsonResponse(
        //         [
        //             'success' => true, 
        //             'message' => "Thank you for subscribing to our email, please check your inbox"
        //         ], 
        //         200
        //     );
        // }
        // dd($email_pengguna->guestss->email);
        Mail::send('email.mailing', $data, function($mail) use ($email_pengguna) {
            $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->to($email_pengguna->guestss->email);
            $mail->subject('Hasil All-In Kuesioner');
        });
        // \Mail::to('faelantoniwijaya@gmail.com')->send(new MyTestMail($data));
        // dd("Email is Sent.....");
        
        return redirect('/result_view');
    }
}