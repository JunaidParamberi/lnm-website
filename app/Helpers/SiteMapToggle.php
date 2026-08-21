<?php

namespace App\Helpers;
use App\Models\sitemap as sitemap;

class SiteMapToggle{
public static function getSiteMap($section){

    $siteMap = sitemap::where('section', $section)->first();
    return $siteMap->is_active;
}
}
