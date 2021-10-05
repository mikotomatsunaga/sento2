<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sento;
use Illuminate\Pagination\Paginator;

class SentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sentos = Sento::simplePaginate(1);
        // dd($sentos);

        return view('search',compact('sentos'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Sento $sento)
    {
        // $sento = Sento::latest()->get();
        // $sento = Sento::first();
        // dd($sento);

        return view('sentos')
            ->with(['sento' => $sento]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
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
        // $request->validate([
        //     'name' => 'required',
        //     'type_code' => 'required',
        //     'prefecture_code' => 'required',
        //     'postal_code' => 'required',
        //     'address1' => 'required',
        //     'address2' => 'required',
        //     'address3' => 'required',
        //     'access' => 'required',
        //     'parking_info' => 'required',
        //     'telephone' => 'required',
        //     'web_home_page' => 'required',
        //     'regular_holiday' => 'required',
        //     'business_hours' => 'required',
        //     'adult_fee' => 'required',
        //     'child_fee' => 'required',
        //     'credit_card_use_yes' => 'required',
        //     'paypay_use_yes' => 'required',
        //     'open_all_night_yes' => 'required',
        //     'stay_yes' => 'required',
        //     'target_of_use' => 'required',
        //     'change_spring' => 'required',
        //     'men_capacity' => 'required',
        //     'woman_capacity' => 'required',
        //     'spring_quality' => 'required',
        //     'men_temperature' => 'required',
        //     'woman_temperature' => 'required',
        //     'drink_spring_yes' => 'required',
        //     'undressing_space' => 'required',
        //     'face_wash_stand' => 'required',
        //     'body_wash_space' => 'required',
        //     'shower_area' => 'required',
        //     'jet_bath' => 'required',
        //     'carbonate_bath' => 'required',
        //     'sleeping_bath' => 'required',
        //     'utase_hot_water' => 'required',
        //     'dry_sauna' => 'required',
        //     'mist_sauna' => 'required',
        //     'steam_sauna' => 'required',
        //     'salt_sauna' => 'required',
        //     'water_bath' => 'required',
        //     'medicine_bath' => 'required',
        //     'electric_bath' => 'required',
        //     'tv_in_the_bath' => 'required',
        //     'open_air_bath' => 'required',
        //     'relax_space' => 'required',
        //     'bedrock_bath' => 'required',
        //     'powder_room' => 'required',
        //     'akasuri' => 'required',
        //     'family_bath' => 'required',
        //     'private_bath' => 'required',
        //     'relax_space_wide' => 'required',
        //     'relax_space_small' => 'required',
        //     'sleeping_space' => 'required',
        //     'free_wifi' => 'required',
        //     'electric_source' => 'required',
        //     'manga_space' => 'required',
        //     'working_space' => 'required',
        //     'food_space' => 'required',
        //     'body_massage_service' => 'required',
        //     'massage_chair' => 'required',
        //     'shopping_area' => 'required',
        //     'game_corner' => 'required',
        //     'smoking_area' => 'required',
        //     'beauty_salon' => 'required',
        //     'multipurpose_toilet' => 'required',
        //     'vending_machine' => 'required',
        //     'foot_spring' => 'required',
        //     'allow_tattoo' => 'required',
        //     'heterosexual_bathing' => 'required',
        //     'duty_swimsuit' => 'required',
        //     'free_shampoo' => 'required',
        //     'free_conditioner' => 'required',
        //     'free_bodysoap' => 'required',
        //     'free_facesoap' => 'required',
        //     'free_razor' => 'required',
        //     'free_shaver' => 'required',
        //     'free_shaving_cream' => 'required',
        //     'free_toothbrush' => 'required',
        //     'free_bathtowel' => 'required',
        //     'free_handtowel' => 'required',
        //     'free_dryer' => 'required',
        //     'free_sauna_set' => 'required',
        //     'free_toner' => 'required',
        //     'free_milky_lotion' => 'required',
        //     'free_makeup_remover' => 'required',
        //     'free_cotton_swab' => 'required',
        //     'free_tonic' => 'required',
        //     'free_lotion' => 'required',
        //     'free_nomal_soap' => 'required',
        //     'paid_shampoo' => 'required',
        //     'paid_conditioner' => 'required',
        //     'paid_bodysoap' => 'required',
        //     'paid_facesoap' => 'required',
        //     'paid_razor' => 'required',
        //     'paid_shaver' => 'required',
        //     'paid_shaving_cream' => 'required',
        //     'paid_toothbrush' => 'required',
        //     'paid_bathtowel' => 'required',
        //     'paid_handtowel' => 'required',
        //     'paid_dryer' => 'required',
        //     'paid_sauna_set' => 'required',
        //     'paid_milky_lotion' => 'required',
        //     'paid_makeup_remover' => 'required',
        //     'paid_cotton_swab' => 'required',
        //     'paid_tonic' => 'required',
        //     'paid_lotion' => 'required',
        //     'paid_nomal_soap' => 'required',
        //     'supplement' => 'required',
        //     'closed_info' => 'required',
        //     'closed_signal' => 'required',
        //     'main_img' => 'required',
        //     'main_img_caption' => 'required',
        //     'other_img1' => 'required',
        //     'other_img1_caption' => 'required',
        //     'other_img2' => 'required',
        //     'other_img2_caption' => 'required',
        //     'other_img3' => 'required',
        //     'other_img3_caption' => 'required',
        //     'other_img4' => 'required',
        //     'other_img4_caption' => 'required',
        //     'other_img5' => 'required',
        //     'other_img5_caption' => 'required',
        //     'other_img6' => 'required',
        //     'other_img6_caption' => 'required',

        // ], [
        //     'name.required' => 'タイトルは必須です',
        //     'type_code.required' => '本文は必須です',
        //     'prefecture_code.required' => 'タイトルは必須です',
        //     'postal_code.required' => '本文は必須です',
        //     'address1.required' => 'タイトルは必須です',
        //     'address2.required' => '本文は必須です',
        //     'address3.required' => 'タイトルは必須です',
        //     'access.required' => '本文は必須です',
        //     'parking_info.required' => 'タイトルは必須です',
        //     'telephone.required' => '本文は必須です',
        //     'web_home_page.required' => 'タイトルは必須です',
        //     'regular_holiday.required' => '本文は必須です',
        //     'business_hours' => 'タイトルは必須です',
        //     'adult_fee.required' => '本文は必須です',
        //     'child_fee.required' => 'タイトルは必須です',
        //     'credit_card_use_yes.required' => '本文は必須です',
        //     'paypay_use_yes.required' => 'タイトルは必須です',
        //     'open_all_night_yes.required' => '本文は必須です',
        //     'stay_yes.required' => 'タイトルは必須です',
        //     'target_of_use.required' => 'タイトルは必須です',
        //     'change_spring.required' => '本文は必須です',
        //     'men_capacity.required' => 'タイトルは必須です',
        //     'woman_capacity.required' => '本文は必須です',
        //     'spring_quality.required' => '本文は必須です',
        //     'men_temperature.required' => 'タイトルは必須です',
        //     'woman_temperature.required' => '本文は必須です',
        //     'drink_spring_yes.required' => 'タイトルは必須です',
        //     'undressing_space.required' => '本文は必須です',
        //     'face_wash_stand.required' => 'タイトルは必須です',
        //     'body_wash_space.required' => '本文は必須です',
        //     'shower_area.required' => 'タイトルは必須です',
        //     'jet_bath.required' => '本文は必須です',
        //     'carbonate_bath.required' => 'タイトルは必須です',
        //     'sleeping_bath.required' => 'タイトルは必須です',
        //     'utase_hot_water.required' => '本文は必須です',
        //     'dry_sauna.required' => 'タイトルは必須です',
        //     'mist_sauna.required' => 'タイトルは必須です',
        //     'steam_sauna.required' => '本文は必須です',
        //     'salt_sauna.required' => 'タイトルは必須です',
        //     'water_bath.required' => 'タイトルは必須です',
        //     'medicine_bath.required' => 'タイトルは必須です',
        //     'electric_bath.required' => '本文は必須です',
        //     'tv_in_the_bath.required' => 'タイトルは必須です',
        //     'open_air_bath.required' => '本文は必須です',
        //     'relax_space.required' => 'タイトルは必須です',
        //     'bedrock_bath.required' => 'タイトルは必須です',
        //     'powder_room.required' => '本文は必須です',
        //     'akasuri.required' => 'タイトルは必須です',
        //     'family_bath.required' => 'タイトルは必須です',
        //     'private_bath.required' => '本文は必須です',
        //     'relax_space_wide.required' => '本文は必須です',
        //     'relax_space_small.required' => 'タイトルは必須です',
        //     'sleeping_space.required' => 'タイトルは必須です',
        //     'free_wifi.required' => '本文は必須です',
        //     'electric_source.required' => 'タイトルは必須です',
        //     'manga_space.required' => '本文は必須です',
        //     'working_space.required' => 'タイトルは必須です',
        //     'food_space.required' => 'タイトルは必須です',
        //     'body_massage_service.required' => '本文は必須です',
        //     'massage_chair.required' => 'タイトルは必須です',
        //     'shopping_area.required' => 'タイトルは必須です',
        //     'game_corner.required' => '本文は必須です',
        //     'smoking_area.required' => '本文は必須です',
        //     'beauty_salon.required' => '本文は必須です',
        //     'multipurpose_toilet.required' => 'タイトルは必須です',
        //     'vending_machine.required' => 'タイトルは必須です',
        //     'foot_spring.required' => '本文は必須です',
        //     'allow_tattoo.required' => 'タイトルは必須です',
        //     'heterosexual_bathing.required' => '本文は必須です',
        //     'duty_swimsuit.required' => 'タイトルは必須です',
        //     'free_shampoo.required' => 'タイトルは必須です',
        //     'free_conditioner.required' => '本文は必須です',
        //     'free_bodysoap.required' => 'タイトルは必須です',
        //     'free_facesoap.required' => 'タイトルは必須です',
        //     'free_razor.required' => '本文は必須です',
        //     'free_shaver.required' => 'タイトルは必須です',
        //     'free_shaving_cream.required' => '本文は必須です',
        //     'free_toothbrush.required' => 'タイトルは必須です',
        //     'free_bathtowel.required' => 'タイトルは必須です',
        //     'free_sauna_set.required' => '本文は必須です',
        //     'free_toner.required' => 'タイトルは必須です',
        //     'free_makeup_remover.required' => '本文は必須です',
        //     'free_cotton_swab.required' => 'タイトルは必須です',
        //     'free_tonic.required' => 'タイトルは必須です',
        //     'free_lotion.required' => '本文は必須です',
        //     'free_nomal_soap.required' => '本文は必須です',
        //     'paid_shampoo.required' => 'タイトルは必須です',
        //     'paid_conditioner.required' => 'タイトルは必須です',
        //     'paid_bodysoap.required' => 'タイトルは必須です',
        //     'paid_facesoap.required' => 'タイトルは必須です',
        //     'paid_razor.required' => 'タイトルは必須です',
        //     'paid_shaver.required' => 'タイトルは必須です',
        //     'paid_shaving_cream.required' => 'タイトルは必須です',
        //     'paid_toothbrush.required' => 'タイトルは必須です',
        //     'paid_bathtowel.required' => 'タイトルは必須です',
        //     'paid_handtowel.required' => 'タイトルは必須です',
        //     'paid_dryer.required' => 'タイトルは必須です',
        //     'paid_sauna_set.required' => 'タイトルは必須です',
        //     'paid_toner.required' => 'タイトルは必須です',
        //     'paid_makeup_remover.required' => 'タイトルは必須です',
        //     'paid_cotton_swab.required' => 'タイトルは必須です',
        //     'paid_tonic.required' => 'タイトルは必須です',
        //     'paid_lotion.required' => 'タイトルは必須です',
        //     'paid_nomal_soap.required' => 'タイトルは必須です',
        //     'supplement.required' => 'タイトルは必須です',
        //     'closed_info.required' => 'タイトルは必須です',
        //     'closed_signal.required' => 'タイトルは必須です',
        //     'main_img.required' => 'タイトルは必須です',
        //     'main_img_caption.required' => 'タイトルは必須です',
        //     'other_img1.required' => 'タイトルは必須です',
        //     'other_img1_caption.required' => 'タイトルは必須です',
        //     'other_img2.required' => 'タイトルは必須です',
        //     'other_img2_caption.required' => 'タイトルは必須です',
        //     'other_img3.required' => 'タイトルは必須です',
        //     'other_img3_caption.required' => 'タイトルは必須です',
        //     'other_img4.required' => 'タイトルは必須です',
        //     'other_img4_caption.required' => 'タイトルは必須です',
        //     'other_img5.required' => 'タイトルは必須です',
        //     'other_img5_caption.required' => 'タイトルは必須です',
        //     'other_img6.required' => 'タイトルは必須です',
        //     'other_img6_caption.required' => 'タイトルは必須です',


        // ]);


        $sento = new Sento();

        $sento->name = $request->name;
        $sento->type_code = $request->type_code;
        $sento->prefecture_code = $request->prefecture_code;
        $sento->postal_code = $request->postal_code;
        $sento->address1 = $request->address1;
        $sento->address2 = $request->address2;
        $sento->address3 = $request->address3;
        $sento->access = $request->access;
        $sento->parking_info = $request->parking_info;
        $sento->telephone = $request->telephone;
        $sento->web_home_page = $request->web_home_page;
        $sento->regular_holiday = $request->regular_holiday;
        $sento->business_hours = $request->business_hours;
        $sento->adult_fee = $request->adult_fee;
        $sento->child_fee = $request->child_fee;
        $sento->credit_card_use_yes = $request->credit_card_use_yes;
        $sento->paypay_use_yes = $request->paypay_use_yes;
        $sento->open_all_night_yes = $request->open_all_night_yes;
        $sento->stay_yes = $request->stay_yes;
        $sento->target_of_use = $request->target_of_use;
        $sento->change_spring = $request->change_spring;
        $sento->men_capacity = $request->men_capacity;
        $sento->woman_capacity = $request->woman_capacity;
        $sento->spring_quality = $request->spring_quality;
        $sento->men_temperature = $request->men_temperature;
        $sento->woman_temperature = $request->woman_temperature;
        $sento->drink_spring_yes = $request->drink_spring_yes;
        $sento->undressing_space = $request->undressing_space;
        $sento->face_wash_stand = $request->face_wash_stand;
        $sento->body_wash_space = $request->body_wash_space;
        $sento->shower_area = $request->shower_area;
        $sento->jet_bath = $request->jet_bath;
        $sento->carbonate_bath = $request->carbonate_bath;
        $sento->sleeping_bath = $request->sleeping_bath;
        $sento->utase_hot_water = $request->utase_hot_water;
        $sento->dry_sauna = $request->dry_sauna;
        $sento->mist_sauna = $request->mist_sauna;
        $sento->steam_sauna = $request->steam_sauna;
        $sento->salt_sauna = $request->salt_sauna;
        $sento->water_bath = $request->water_bath;
        $sento->medicine_bath = $request->medicine_bath;
        $sento->electric_bath = $request->electric_bath;
        $sento->tv_in_the_bath = $request->tv_in_the_bath;
        $sento->open_air_bath = $request->open_air_bath;
        $sento->relax_space = $request->relax_space;
        $sento->bedrock_bath = $request->bedrock_bath;
        $sento->powder_room = $request->powder_room;
        $sento->akasuri = $request->akasuri;
        $sento->family_bath = $request->family_bath;
        $sento->private_bath = $request->private_bath;
        $sento->relax_space_wide = $request->relax_space_wide;
        $sento->relax_space_small = $request->relax_space_small;
        $sento->sleeping_space = $request->sleeping_space;
        $sento->free_wifi = $request->free_wifi;
        $sento->electric_source = $request->electric_source;
        $sento->manga_space = $request->manga_space;
        $sento->working_space = $request->working_space;
        $sento->food_space = $request->food_space;
        $sento->body_massage_service = $request->body_massage_service;
        $sento->massage_chair = $request->massage_chair;
        $sento->shopping_area = $request->shopping_area;
        $sento->game_corner = $request->game_corner;
        $sento->smoking_area = $request->smoking_area;
        $sento->beauty_salon = $request->beauty_salon;
        $sento->multipurpose_toilet = $request->multipurpose_toilet;
        $sento->vending_machine = $request->vending_machine;
        $sento->foot_spring = $request->foot_spring;
        $sento->allow_tattoo = $request->allow_tattoo;
        $sento->heterosexual_bathing = $request->heterosexual_bathing;
        $sento->duty_swimsuit = $request->duty_swimsuit;
        $sento->free_shampoo = $request->free_shampoo;
        $sento->free_conditioner = $request->free_conditioner;
        $sento->free_bodysoap = $request->free_bodysoap;
        $sento->free_facesoap = $request->free_facesoap;
        $sento->free_razor = $request->free_razor;
        $sento->free_shaver = $request->free_shaver;
        $sento->free_shaving_cream = $request->free_shaving_cream;
        $sento->free_toothbrush = $request->free_toothbrush;
        $sento->free_bathtowel = $request->free_bathtowel;
        $sento->free_dryer = $request->free_dryer;
        $sento->free_sauna_set = $request->free_sauna_set;
        $sento->free_toner = $request->free_toner;
        $sento->free_makeup_remover = $request->free_makeup_remover;
        $sento->free_cotton_swab = $request->free_cotton_swab;
        $sento->free_tonic = $request->free_tonic;
        $sento->free_lotion = $request->free_lotion;
        $sento->free_nomal_soap = $request->free_nomal_soap;
        $sento->paid_shampoo = $request->paid_shampoo;
        $sento->paid_conditioner = $request->paid_conditioner;
        $sento->paid_bodysoap = $request->paid_bodysoap;
        $sento->paid_facesoap = $request->paid_facesoap;
        $sento->paid_razor = $request->paid_razor;
        $sento->paid_shaver = $request->paid_shaver;
        $sento->paid_shaving_cream = $request->paid_shaving_cream;
        $sento->paid_toothbrush = $request->paid_toothbrush;
        $sento->paid_bathtowel = $request->paid_bathtowel;
        $sento->paid_handtowel = $request->paid_handtowel;
        $sento->paid_dryer = $request->paid_dryer;
        $sento->paid_sauna_set = $request->paid_sauna_set;
        $sento->paid_milky_lotion = $request->paid_milky_lotion;
        $sento->paid_makeup_remover = $request->paid_makeup_remover;
        $sento->paid_cotton_swab = $request->paid_cotton_swab;
        $sento->paid_tonic = $request->paid_tonic;
        $sento->paid_lotion = $request->paid_lotion;
        $sento->paid_nomal_soap = $request->paid_nomal_soap;
        $sento->supplement = $request->supplement;
        $sento->closed_info = $request->closed_info;
        $sento->closed_signal = $request->closed_signal;
        $sento->main_img = $request->main_img;
        $sento->main_img_caption = $request->main_img_caption;
        $sento->other_img1 = $request->other_img1;
        $sento->other_img1_caption = $request->other_img1_caption;
        $sento->other_img2 = $request->other_img2;
        $sento->other_img2_caption = $request->other_img2_caption;
        $sento->other_img3 = $request->other_img3;
        $sento->other_img3_caption = $request->other_img3_caption;
        $sento->other_img4 = $request->other_img4;
        $sento->other_img4_caption = $request->other_img4_caption;
        $sento->other_img5 = $request->other_img5;
        $sento->other_img5_caption = $request->other_img5_caption;
        $sento->other_img6 = $request->other_img6;
        $sento->other_img6_caption = $request->other_img6_caption;
        $sento->save();

        // dd($request);

        return redirect()
            ->route('done');
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
