<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekatsu_user;

class Sekatsu_userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekatsu_user = Sekatsu_user::latest()->get();
        // dd($sekatsu_user);

        return view('sekatsu')
            ->with(['sekatsu_user' => $sekatsu_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sentos');
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
            'visit_date' => 'required',
            'visit_name' => 'required',
            'sekatsu_comment' => 'required',
        ], [
            'visit_date.required' => '日付を入力して下さい',
            'visit_name.required' => '施設名を入力して下さい',
            'sekatsu_comment.required' => 'コメント入力は必須です',
        ]);

        $sekatsu_user = new Sekatsu_user();
        $sekatsu_user->visit_name = $request->visit_name;
        $sekatsu_user->visit_date = $request->visit_date;
        $sekatsu_user->sekatsu_comment = $request->sekatsu_comment;
        $sekatsu_user->visit_temperature_men = $request->visit_temperature_men;
        $sekatsu_user->visit_temperature_woman = $request->visit_temperature_woman;
        $sekatsu_user->visit_temperature_woman = $request->visit_temperature_woman;
        $sekatsu_user->file = $request->file;
        $sekatsu_user->save();




        return redirect()
            ->route('sekatsu_user_index');

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


