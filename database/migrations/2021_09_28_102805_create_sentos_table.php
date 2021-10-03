<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentos', function (Blueprint $table) {

            $table->id();
            $table->string('name', 50)->nullable();
            $table->char('type_code', 2)->nullable();
            $table->char('prefecture_code', 2)->nullable();
            $table->char('postal_code', 8)->nullable();
            $table->string('address1', 10)->nullable();
            $table->string('address2', 30)->nullable();
            $table->string('address3', 30)->nullable();
            $table->string('access', 50)->nullable();
            $table->string('parking_info', 30)->nullable();
            $table->string('telephone', 30)->nullable();
            $table->string('web_home_page', 100)->nullable();
            $table->string('regular_holiday', 50)->nullable();
            $table->string('business_hours', 50)->nullable();
            $table->smallInteger('adult_fee')->nullable();
            $table->smallInteger('child_fee')->nullable();
            $table->boolean('credit_card_use_yes')->nullable();
            $table->boolean('paypay_use_yes')->nullable();
            $table->boolean('open_all_night_yes')->nullable();
            $table->boolean('stay_yes')->nullable();
            $table->char('target_of_use', 20)->nullable();
            $table->boolean('change_spring')->nullable();
            $table->tinyInteger('men_capacity')->nullable();
            $table->tinyInteger('woman_capacity')->nullable();
            $table->char('spring_quality', 2)->nullable();
            $table->tinyInteger('men_temperature')->nullable();
            $table->tinyInteger('woman_temperature')->nullable();
            $table->boolean('drink_spring_yes')->nullable();
            $table->boolean('undressing_space')->nullable();
            $table->boolean('face_wash_stand')->nullable();
            $table->boolean('body_wash_space')->nullable();
            $table->boolean('shower_area')->nullable();
            $table->boolean('jet_bath')->nullable();
            $table->boolean('carbonate_bath')->nullable();
            $table->boolean('sleeping_bath')->nullable();
            $table->boolean('utase_hot_water')->nullable();
            $table->boolean('dry_sauna')->nullable();
            $table->boolean('mist_sauna')->nullable();
            $table->boolean('steam_sauna')->nullable();
            $table->boolean('salt_sauna')->nullable();
            $table->boolean('water_bath')->nullable();
            $table->boolean('medicine_bath')->nullable();
            $table->boolean('electric_bath')->nullable();
            $table->boolean('tv_in_the_bath')->nullable();
            $table->boolean('open_air_bath')->nullable();
            $table->boolean('relax_space')->nullable();
            $table->boolean('bedrock_bath')->nullable();
            $table->boolean('powder_room')->nullable();
            $table->boolean('akasuri')->nullable();
            $table->boolean('family_bath')->nullable();
            $table->boolean('private_bath')->nullable();
            $table->boolean('relax_space_wide')->nullable();
            $table->boolean('relax_space_small')->nullable();
            $table->boolean('sleeping_space')->nullable();
            $table->boolean('free_wifi')->nullable();
            $table->boolean('electric_source')->nullable();
            $table->boolean('manga_space')->nullable();
            $table->boolean('working_space')->nullable();
            $table->boolean('food_space')->nullable();
            $table->boolean('body_massage_service')->nullable();
            $table->boolean('massage_chair')->nullable();
            $table->boolean('shopping_area')->nullable();
            $table->boolean('game_corner')->nullable();
            $table->boolean('smoking_area')->nullable();
            $table->boolean('beauty_salon')->nullable();
            $table->boolean('multipurpose_toilet')->nullable();
            $table->boolean('vending_machine')->nullable();
            $table->boolean('foot_spring')->nullable();
            $table->boolean('allow_tattoo')->nullable();
            $table->boolean('heterosexual_bathing')->nullable();
            $table->boolean('duty_swimsuit')->nullable();
            $table->boolean('free_shampoo')->nullable();
            $table->boolean('free_conditioner')->nullable();
            $table->boolean('free_bodysoap')->nullable();
            $table->boolean('free_facesoap')->nullable();
            $table->boolean('free_razor')->nullable();
            $table->boolean('free_shaver')->nullable();
            $table->boolean('free_shaving_cream')->nullable();
            $table->boolean('free_toothbrush')->nullable();
            $table->boolean('free_bathtowel')->nullable();
            $table->boolean('free_handtowel')->nullable();
            $table->boolean('free_dryer')->nullable();
            $table->boolean('free_sauna_set')->nullable();
            $table->boolean('free_toner')->nullable();
            $table->boolean('free_milky_lotion')->nullable();
            $table->boolean('free_makeup_remover')->nullable();
            $table->boolean('free_cotton_swab')->nullable();
            $table->boolean('free_tonic')->nullable();
            $table->boolean('free_lotion')->nullable();
            $table->boolean('free_nomal_soap')->nullable();
            $table->boolean('paid_shampoo')->nullable();
            $table->boolean('paid_conditioner')->nullable();
            $table->boolean('paid_bodysoap')->nullable();
            $table->boolean('paid_facesoap')->nullable();
            $table->boolean('paid_razor')->nullable();
            $table->boolean('paid_shaver')->nullable();
            $table->boolean('paid_shaving_cream')->nullable();
            $table->boolean('paid_toothbrush')->nullable();
            $table->boolean('paid_bathtowel')->nullable();
            $table->boolean('paid_handtowel')->nullable();
            $table->boolean('paid_dryer')->nullable();
            $table->boolean('paid_sauna_set')->nullable();
            $table->boolean('paid_toner')->nullable();
            $table->boolean('paid_milky_lotion')->nullable();
            $table->boolean('paid_makeup_remover')->nullable();
            $table->boolean('paid_cotton_swab')->nullable();
            $table->boolean('paid_tonic')->nullable();
            $table->boolean('paid_lotion')->nullable();
            $table->boolean('paid_nomal_soap')->nullable();
            $table->string('supplement', 100)->nullable();
            $table->string('closed_info', 100)->nullable();
            $table->string('main_img')->nullable();
            $table->string('main_img_caption', 200)->nullable();
            $table->string('other_img1')->nullable();
            $table->string('other_img1_caption', 200)->nullable();
            $table->string('other_img2')->nullable();
            $table->string('other_img2_caption', 200)->nullable();
            $table->string('other_img3')->nullable();
            $table->string('other_img3_caption', 200)->nullable();
            $table->string('other_img4')->nullable();
            $table->string('other_img4_caption', 200)->nullable();
            $table->string('other_img5')->nullable();
            $table->string('other_img5_caption', 200)->nullable();
            $table->string('other_img6')->nullable();
            $table->string('other_img6_caption', 200)->nullable();
            $table->boolean('closed_signal')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentos');
    }
}
