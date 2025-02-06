<?php

namespace App\Helpers;

class ImageHelper
{
    public static function getImageUrl($imageName)
    {
        return asset('assets/' . $imageName);
    }
}