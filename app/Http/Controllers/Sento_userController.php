<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sento_user;
use Illuminate\Support\Facades\Auth;


class Sento_userController extends Controller
{
    // public function testindex()
    // {
    //     $user = User::first();
    //     dd($user);

    //     return view('dashboard')
    //     ->with(['user' => $user]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $sento_user = Sento_user::first();
        // dd($sento_user);

        // $sento_user = User::all();
        // dd($sento_user);

        return view('sento_users')
            ->with(['sento_user' => $sento_user]);

        // $user = Auth::user();

        // $sento_user = Auth::user()->sento_users()->get();
        // dd($sento_user);
        // return view('sento_users')
        //     ->with(['sento_user' => $sento_user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('sento_users_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'sento_name' => 'required',
            'gender' => 'required',
            'birth_year' => 'required',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'carrier_year' => 'required',
            'carrier_month' => 'required',
            'home_sento' => 'required',
            'went_to_go_sento' => 'required',
            'profile' => 'required',
        ], [
            'file.required' => '写真が添付されていません',
            'sento_name.min.required' => 'セントネームを入力してください',
            'gender.required' => '性別を入力して下さい',
            'birth_year.required' => '生まれた年を入力してください',
            'birth_month.required' => '生まれた月を入力してください',
            'birth_day.required' => '生まれた日付を入力してください',
            'carrier_year.required' => 'セント歴の「年」を入力してください',
            'carrier_month.required' => 'セント歴の「月」を入力してください',
            'home_sento.required' => 'ホームセントを入力して下さい',
            'went_to_go_sento.required' => '行きたいセントを入力してください',
            'profile.required' => '意気込みを入力してください',
        ]);

        $sento_user = new Sento_user();
        $sento_user->user_id = Auth::id();
        $sento_user->file = $request->file;
        $sento_user->sento_name = $request->sento_name;
        $sento_user->gender = $request->gender;
        $sento_user->birth_year = $request->birth_year;
        $sento_user->birth_month = $request->birth_month;
        $sento_user->birth_day = $request->birth_day;
        $sento_user->carrier_year = $request->carrier_year;
        $sento_user->carrier_month = $request->carrier_month;
        $sento_user->home_sento = $request->home_sento;
        $sento_user->went_to_go_sento = $request->went_to_go_sento;
        $sento_user->profile = $request->profile;
        $sento_user->save();

        return redirect()
            ->route('sento_users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // return view('sento_users_edit');
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
        // return view('sento_users_edit');
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
