<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;


class bannerController extends Controller
{
    public function showbanner()
    {
        $banner = Banner::all();
        return $banner;
    }
}
