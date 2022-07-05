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
        if (!session()->exists('id_guest')) {
            return redirect('/');
        }
        
        $decision = Session::get('decision');
        return view('questions.welcome',compact('decision'));
    }

    public function akademik_yes_view(Request $request)
    {
        if (!session()->exists('id_guest')) {
            return redirect('/');
        }
        
        $yes_decision = Session::get('yes_decision');
        
        return view('questions.akademik_yes',compact('yes_decision'));
    }
    public function akademik_no_view(Request $request)
    {
        if (!session()->exists('id_guest')) {
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
        if (!session()->exists('id_guest')) {
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
        if (!session()->exists('id_guest')) {
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
        if (!session()->exists('id_guest')) {
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
        if (!session()->exists('id_guest')) {
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
        if (!session()->exists('id_guest')) {
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

        $validatedData = $request->validate([
            'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);

            $arrr = array();
            $decision = new TblAnswer;
            $decision->id_guest           = $request->id_guest;
            $decision->category           = $request->category;
            $decision->questions_number   = $request->questions_number;
            $decision->answer             = $request->answer;
            // dd($akademik_no[$i]);
            $arrr[]=$decision;
        
        
            if(empty($request->session()->get('decision'))){
                $akademik_decision = new TblAnswer();
                $akademik_decision->fill($validatedData);
                $request->session()->put('decision', $validatedData);
            }else{
                $request->session()->put('decision', $validatedData);
            }

        // dd($validatedData);
        if($request->answer =='Yes'){
            return redirect('/akademik_yes_view');
        }
        else{
            return redirect('/akademik_no_view');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function akademik_yes(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $arrr = array();

        for ($i = 0; $i < count($request->answer); $i++) {
            $akademik_yes = new TblAnswer;
            // $akademik_yes->id_guest           = $request->id_guest;
            $akademik_yes->category           = $request->category[$i];
            $akademik_yes->questions_number   = $request->questions_number[$i];
            $akademik_yes->answer             = $request->answer[$i];
            // dd($akademik_no[$i]);
            $arrr[]=$akademik_yes;
        }
        
            if(empty($request->session()->get('yes_decision'))){
                $yes_decision = new TblAnswer();
                $yes_decision->fill($arrr);
                $request->session()->put('yes_decision', $arrr);
            }else{
                // $no_decision = $request->session()->get('no_decision');
                // $no_decision->fill($arr);
                $request->session()->put('yes_decision', $arrr);
                // dd($no_decision['answer'][0]);
            }

            session()->forget(['no_decision']);
        
            return redirect('/soal_aktivitas');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function akademik_no(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $arr = array();

        for ($i = 0; $i < count($request->answer); $i++) {
            $akademik_no = new TblAnswer;
            // $akademik_no->id_guest           = $request->id_guest;
            $akademik_no->category           = $request->category[$i];
            $akademik_no->questions_number   = $request->questions_number[$i];
            $akademik_no->answer             = $request->answer[$i];
            // dd($akademik_no[$i]);
            $arr[]=$akademik_no;
        }
        // dd($arr);
            if(empty($request->session()->get('no_decision'))){
                $no_decision = new TblAnswer();
                $no_decision->fill($arr);
                $request->session()->put('no_decision', $arr);
            }else{
                $request->session()->put('no_decision', $arr);
                // dd($no_decision['answer'][0]);
            }


        session()->forget(['yes_decision']);
        
            return redirect('/soal_aktivitas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aktivitas(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $arr = array();

        for ($i = 0; $i < count($request->answer); $i++) {
            $activities = new TblAnswer;
            // $activities->id_guest           = $request->id_guest;
            $activities->category           = $request->category[$i];
            $activities->questions_number   = $request->questions_number[$i];
            $activities->answer             = $request->answer[$i];
            // dd($activities[$i]);
            $arr[]=$activities;
            // dd($arr);
        }
        
            if(empty($request->session()->get('aktivitas'))){
                $aktivitas = new TblAnswer();
                $aktivitas->fill($arr);
                $request->session()->put('aktivitas', $arr);
            }else{
                $request->session()->put('aktivitas', $arr);
                // dd($no_decision['answer'][0]);
            }
        return redirect('/soal_prestasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function prestasi(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $arr = array();

        for ($i = 0; $i < count($request->answer); $i++) {
            $prestasi = new TblAnswer;
            // $prestasi->id_guest           = $request->id_guest;
            $prestasi->category           = $request->category[$i];
            $prestasi->questions_number   = $request->questions_number[$i];
            $prestasi->answer             = $request->answer[$i];
            // dd($prestasi);
            $arr[]=$prestasi;
            // dd($prestasi);
        }
        
            if(empty($request->session()->get('prestasi'))){
                $prestasi = new TblAnswer();
                $prestasi->fill($arr);
                $request->session()->put('prestasi', $arr);
            }else{
                $request->session()->put('prestasi', $arr);
            }

            return redirect('/soal_personal_brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function personal_brand(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $arr = array();

        for ($i = 0; $i < count($request->answer); $i++) {
            $personal_brand = new TblAnswer;
            // $personal_brand->id_guest           = $request->id_guest;
            $personal_brand->category           = $request->category[$i];
            $personal_brand->questions_number   = $request->questions_number[$i];
            $personal_brand->answer             = $request->answer[$i];
            // dd($akademik_no[$i]);
            $arr[]=$personal_brand;
        }
        
        
            if(empty($request->session()->get('personal_branding'))){
                $personal_branding = new TblAnswer();
                $personal_branding->fill($arr);
                $request->session()->put('personal_branding', $arr);
            }else{
                $request->session()->put('personal_branding', $arr);
            }

            return redirect('/soal_komunikasi');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function komunikasi(Request $request)
    {
        $request->validate([
            // 'id_guest'          => 'required',
            'category'          => 'required',
            'questions_number'  => 'required',
            'answer'            => 'required',
        ]);
        
        $arr = array();

        for ($i = 0; $i < count($request->answer); $i++) {
            $communication = new TblAnswer;
            // $communication->id_guest           = $request->id_guest;
            $communication->category           = $request->category[$i];
            $communication->questions_number   = $request->questions_number[$i];
            $communication->answer             = $request->answer[$i];
            // dd($akademik_no[$i]);
            $arr[]=$communication;
        }
        
            if(empty($request->session()->get('komunikasi'))){
                $komunikasi = new TblAnswer();
                $komunikasi->fill($arr);
                $request->session()->put('komunikasi', $arr);
            }else{
                $request->session()->put('komunikasi', $arr);
            }
            
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
                $guest_id = Session::get('id_guest');
                $communication = new TblAnswer;
                $communication->id_guest           = $guest_id;
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
            $mail->subject('Result');
        });
        // \Mail::to('faelantoniwijaya@gmail.com')->send(new MyTestMail($data));
        // dd("Email is Sent.....");
        
        return redirect('/result_view');
    }
}