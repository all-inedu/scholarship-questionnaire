<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
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
        session()->forget(['decision','yes_decision','no_decision','aktivitas','prestasi','personal_branding','komunikasi']);
        Session::flush();
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $request->validate([
            'full_name'      => 'required|max:255',
            // 'email'          => 'required|unique:tbl_guests|email:rfc,dns',
            'email'          => 'required|email:rfc,dns',
            'school_name'    => 'required', 'string',
            'grade'          => 'required|max:255',
        ]);


        // $check_user = false;
        if (TblGuest::where('email', '=', $request->email)->exists()) {
            $check_user = true;
            $lihat_user = TblGuest::where('email', '=', $request->email)->first();
            return redirect('/konfirmasi_jawab_ulang',compact('lihat_user'));
        }else{
            
            $check_user = false;
            $lihat_user = null;
            
            $data = TblGuest::UpdateOrCreate([
                'full_name'     => $request->full_name,
                'email'         => $request->email,
                'school_name'   => $request->school_name,
                'grade'         => $request->grade
            ]);
            Session::put('id_guest', $data->id);
        }


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
            return redirect('/akademik_decision');
        
        // return redirect('/akademik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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