<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\Answer\TblAnswer;
use App\Models\Guest\TblGuest;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class GuestRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function flush_guest()
    {
        session()->forget(['decision','yes_decision','no_decision','aktivitas','prestasi','personal_branding','komunikasi']);
        Session::flush();

        return redirect('/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {
        // $user = $request->session()->get('guest');

        $validatedData = $request->validate([
            'full_name'      => 'required|max:255',
            // 'email'          => 'required|unique:tbl_guests|email:rfc,dns',
            'email'          => 'required|email:rfc,dns',
            'school_name'    => 'required', 'string',
            'grade'          => 'required|max:255',
        ]);

            $arrr = array();
            $register = new TblGuest();
            $register->full_name    = $request->full_name;
            $register->email        = $request->email;
            $register->school_name  = $request->school_name;
            $register->grade        = $request->grade;
            // dd($akademik_no[$i]);
            $arrr[]=$register;
        
        
            if(empty($request->session()->get('register'))){
                $guest_register = new TblGuest();
                $guest_register->fill($validatedData);
                $request->session()->put('register', $validatedData);
            }else{
                $request->session()->put('register', $validatedData);
            }


        // $check_user = false;
        if (TblGuest::where('email', '=', $request->email)->exists()) {
            // $check_user = true;
            $lihat_user = TblGuest::where('email', '=', $request->email)->first();
            Session::put('id_guest', $lihat_user->id);
            // dd($lihat_user->id);

            return redirect('/konfirmasi');
        }
            // $check_user = false;
            // $lihat_user = null;
            
            // $data = TblGuest::UpdateOrCreate([
            //     'full_name'     => $request->full_name,
            //     'email'         => $request->email,
            //     'school_name'   => $request->school_name,
            //     'grade'         => $request->grade
            // ]);
            // Session::put('id_guest', $data->id);
            return redirect('/akademik_decision');
        
        // dd($check_user,$lihat_user);
        

        // $dataa = ([
        //     'full_name' => $data['full_name'],
        //     'email' => $data['email'],
        //     'school_name' => $data['school_name'],
        //     'grade' => $data['grade'],
        //     ]);
            // dd($dataa);
            // TblGuest::updateOrCreate($dataa);
            // Session::put('id_guest', $dataa->id);
        // Create New User
        // $guest              = new TblGuest();
        // $guest->full_name   = $request->full_name;
        // $guest->email       = $request->email;
        // $guest->school_name = $request->school_name;
        // $guest->grade       = $request->grade;
        // dd($guest);
        
        // $guest->save();
        
        // Session::put('id_guest', $guest->id);
            //redirect dengan pesan sukses
            
        
        // return redirect('/akademik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi(Request $request)
    {
        $guest   = Session::get('register');
        $lihat_user = TblGuest::where('email', '=', $guest['email'])->first();

        $guest_id   = $guest['id'];
        // $guest = TblGuest::get('id');
        
        $hasil      = TblAnswer::where('id_guest' ,'=', $guest_id)->sum('answer');
        $category1  = TblAnswer::where('id_guest' ,'=', $guest_id)->get();
        $aaa = collect($category1)->groupBy('category');
        $bbb = $aaa->map(function($bb){
            return $bb->sum('answer');
        });
        
        $academic       = ($bbb['academic'] >= 15) ? 1 : 0 ;
        $aktivitas      = ($bbb['aktivitas'] >= 20) ? 1 : 0 ;
        $prestasi       = ($bbb['prestasi'] >= 15) ? 1 : 0 ;
        $personal_brand = ($bbb['personal_brand'] >= 10) ? 1 : 0 ;
        $komunikasi     = ($bbb['komunikasi'] >= 10) ? 1 : 0 ;

        // dd($academic,$aktivitas,$prestasi ,$personal_brand,$komunikasi , $aaa, $bbb, $hasil);
        $jawaban = TblAnswer::where('id_guest' ,'=', $guest_id)->with('guestss')->first();

        return view('konfirmasi.konfirmasi',compact('guest_id','lihat_user','bbb','academic','aktivitas','prestasi','personal_brand','komunikasi','jawaban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}