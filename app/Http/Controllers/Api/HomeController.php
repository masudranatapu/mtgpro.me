<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialIcon;
use Illuminate\Http\Request;

class HomeController extends ResponceController
{
    public function getSettings()
    {
        $settings = getSetting();
        return $this->sendResponse(200, "Settings", $settings, true, []);
    }

    public function getSocialIcons()
    {
        $social_icon    = SocialIcon::all();

        return $this->sendResponse(200, 'Social Icons', $social_icon, true, []);
    }
}
