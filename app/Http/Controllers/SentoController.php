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

        $sentos = Sento::simplePaginate(15);
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
        //     'name.required' => '???????????????????????????',
        //     'type_code.required' => '?????????????????????',
        //     'prefecture_code.required' => '???????????????????????????',
        //     'postal_code.required' => '?????????????????????',
        //     'address1.required' => '???????????????????????????',
        //     'address2.required' => '?????????????????????',
        //     'address3.required' => '???????????????????????????',
        //     'access.required' => '?????????????????????',
        //     'parking_info.required' => '???????????????????????????',
        //     'telephone.required' => '?????????????????????',
        //     'web_home_page.required' => '???????????????????????????',
        //     'regular_holiday.required' => '?????????????????????',
        //     'business_hours' => '???????????????????????????',
        //     'adult_fee.required' => '?????????????????????',
        //     'child_fee.required' => '???????????????????????????',
        //     'credit_card_use_yes.required' => '?????????????????????',
        //     'paypay_use_yes.required' => '???????????????????????????',
        //     'open_all_night_yes.required' => '?????????????????????',
        //     'stay_yes.required' => '???????????????????????????',
        //     'target_of_use.required' => '???????????????????????????',
        //     'change_spring.required' => '?????????????????????',
        //     'men_capacity.required' => '???????????????????????????',
        //     'woman_capacity.required' => '?????????????????????',
        //     'spring_quality.required' => '?????????????????????',
        //     'men_temperature.required' => '???????????????????????????',
        //     'woman_temperature.required' => '?????????????????????',
        //     'drink_spring_yes.required' => '???????????????????????????',
        //     'undressing_space.required' => '?????????????????????',
        //     'face_wash_stand.required' => '???????????????????????????',
        //     'body_wash_space.required' => '?????????????????????',
        //     'shower_area.required' => '???????????????????????????',
        //     'jet_bath.required' => '?????????????????????',
        //     'carbonate_bath.required' => '???????????????????????????',
        //     'sleeping_bath.required' => '???????????????????????????',
        //     'utase_hot_water.required' => '?????????????????????',
        //     'dry_sauna.required' => '???????????????????????????',
        //     'mist_sauna.required' => '???????????????????????????',
        //     'steam_sauna.required' => '?????????????????????',
        //     'salt_sauna.required' => '???????????????????????????',
        //     'water_bath.required' => '???????????????????????????',
        //     'medicine_bath.required' => '???????????????????????????',
        //     'electric_bath.required' => '?????????????????????',
        //     'tv_in_the_bath.required' => '???????????????????????????',
        //     'open_air_bath.required' => '?????????????????????',
        //     'relax_space.required' => '???????????????????????????',
        //     'bedrock_bath.required' => '???????????????????????????',
        //     'powder_room.required' => '?????????????????????',
        //     'akasuri.required' => '???????????????????????????',
        //     'family_bath.required' => '???????????????????????????',
        //     'private_bath.required' => '?????????????????????',
        //     'relax_space_wide.required' => '?????????????????????',
        //     'relax_space_small.required' => '???????????????????????????',
        //     'sleeping_space.required' => '???????????????????????????',
        //     'free_wifi.required' => '?????????????????????',
        //     'electric_source.required' => '???????????????????????????',
        //     'manga_space.required' => '?????????????????????',
        //     'working_space.required' => '???????????????????????????',
        //     'food_space.required' => '???????????????????????????',
        //     'body_massage_service.required' => '?????????????????????',
        //     'massage_chair.required' => '???????????????????????????',
        //     'shopping_area.required' => '???????????????????????????',
        //     'game_corner.required' => '?????????????????????',
        //     'smoking_area.required' => '?????????????????????',
        //     'beauty_salon.required' => '?????????????????????',
        //     'multipurpose_toilet.required' => '???????????????????????????',
        //     'vending_machine.required' => '???????????????????????????',
        //     'foot_spring.required' => '?????????????????????',
        //     'allow_tattoo.required' => '???????????????????????????',
        //     'heterosexual_bathing.required' => '?????????????????????',
        //     'duty_swimsuit.required' => '???????????????????????????',
        //     'free_shampoo.required' => '???????????????????????????',
        //     'free_conditioner.required' => '?????????????????????',
        //     'free_bodysoap.required' => '???????????????????????????',
        //     'free_facesoap.required' => '???????????????????????????',
        //     'free_razor.required' => '?????????????????????',
        //     'free_shaver.required' => '???????????????????????????',
        //     'free_shaving_cream.required' => '?????????????????????',
        //     'free_toothbrush.required' => '???????????????????????????',
        //     'free_bathtowel.required' => '???????????????????????????',
        //     'free_sauna_set.required' => '?????????????????????',
        //     'free_toner.required' => '???????????????????????????',
        //     'free_makeup_remover.required' => '?????????????????????',
        //     'free_cotton_swab.required' => '???????????????????????????',
        //     'free_tonic.required' => '???????????????????????????',
        //     'free_lotion.required' => '?????????????????????',
        //     'free_nomal_soap.required' => '?????????????????????',
        //     'paid_shampoo.required' => '???????????????????????????',
        //     'paid_conditioner.required' => '???????????????????????????',
        //     'paid_bodysoap.required' => '???????????????????????????',
        //     'paid_facesoap.required' => '???????????????????????????',
        //     'paid_razor.required' => '???????????????????????????',
        //     'paid_shaver.required' => '???????????????????????????',
        //     'paid_shaving_cream.required' => '???????????????????????????',
        //     'paid_toothbrush.required' => '???????????????????????????',
        //     'paid_bathtowel.required' => '???????????????????????????',
        //     'paid_handtowel.required' => '???????????????????????????',
        //     'paid_dryer.required' => '???????????????????????????',
        //     'paid_sauna_set.required' => '???????????????????????????',
        //     'paid_toner.required' => '???????????????????????????',
        //     'paid_makeup_remover.required' => '???????????????????????????',
        //     'paid_cotton_swab.required' => '???????????????????????????',
        //     'paid_tonic.required' => '???????????????????????????',
        //     'paid_lotion.required' => '???????????????????????????',
        //     'paid_nomal_soap.required' => '???????????????????????????',
        //     'supplement.required' => '???????????????????????????',
        //     'closed_info.required' => '???????????????????????????',
        //     'closed_signal.required' => '???????????????????????????',
        //     'main_img.required' => '???????????????????????????',
        //     'main_img_caption.required' => '???????????????????????????',
        //     'other_img1.required' => '???????????????????????????',
        //     'other_img1_caption.required' => '???????????????????????????',
        //     'other_img2.required' => '???????????????????????????',
        //     'other_img2_caption.required' => '???????????????????????????',
        //     'other_img3.required' => '???????????????????????????',
        //     'other_img3_caption.required' => '???????????????????????????',
        //     'other_img4.required' => '???????????????????????????',
        //     'other_img4_caption.required' => '???????????????????????????',
        //     'other_img5.required' => '???????????????????????????',
        //     'other_img5_caption.required' => '???????????????????????????',
        //     'other_img6.required' => '???????????????????????????',
        //     'other_img6_caption.required' => '???????????????????????????',


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
