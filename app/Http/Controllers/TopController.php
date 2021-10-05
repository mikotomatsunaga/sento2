<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekatsu_user;
use App\Models\Sento;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekatsu_user = Sekatsu_user::latest()->orderByDesc('id')->limit(5)->get();
        // dd($sekatsu_user);

        $sento = Sento::latest()->orderByDesc('id')->limit(5)->get();
        // dd($sento);

        return view('top')
        ->with(['sekatsu_user' => $sekatsu_user])
        ->with(['sento' => $sento]);

    }


    public function top_sekatsu_user()
    {
        $sekatsu_user = Sekatsu_user::latest()->get();
        // dd($sekatsu_user);

        return view('top')
        ->with(['sekatsu_user' => $sekatsu_user]);
    }

    // public function top_sento()
    // {
    //     $sento = Sento::latest(3)->get();
    //     // dd($sento);

    //     return view('top')
    //         ->with(['sento' => $sento]);
    // }

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
        //
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
