<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function trending_roms() {
        return 'trending_roms';
    }

    public function trending_roms_post() {
        return 'trending_roms_post';
    }


    public function trending_emulators() {
        return 'trending_emulators';
    }

    public function trending_emulators_post() {
        return 'trending_emulators_post';
    }


    public function trending_platforms() {
        return 'trending_platforms';
    }

    public function trending_platforms_post() {
        return 'trending_platforms_post';
    }


    public function hot_roms() {
        return 'hot_roms';
    }

    public function hot_roms_post() {
        return 'hot_roms_post';
    }


    public function hot_emulators() {
        return 'hot_emulators';
    }

    public function hot_emulators_post() {
        return 'hot_emulators_post';
    }


    public function hot_platforms() {
        return 'hot_platforms';
    }

    public function hot_platforms_post() {
        return 'hot_platforms_post';
    }


}
