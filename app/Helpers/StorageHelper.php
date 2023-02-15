<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;

class StorageHelper
{

    private static $DEFAULT_IMAGE_LINK = 'public/assets/uploads';
    private static $DEFAULT_VIDEO_LINK = 'public/videos/';

    private static $IS_AVATAR = 1;

    private static $DEFAULT_FILES = 'public/image';

    public static function ImageLink()
    {
        return SELF::$DEFAULT_IMAGE_LINK;
    }

    public static function VideoLink()
    {
        return SELF::$DEFAULT_VIDEO_LINK;
    }

    public static function AvatarLink()
    {
        return SELF::$DEFAULT_IMAGE_LINK;
    }

    public static function uploadImage($image, $path,  $width = null, $height = null)
    {
        // $path       = SELF::$DEFAULT_IMAGE_LINK.$path;
        $image      = $image;
        $img        = Image::make($image->getRealPath());
        if (isset($width)) {
            $img->resize($width, $height);
        }
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $image_name = formatFileName($image);
        Image::make($img)->resize($width ?? 635, $height ?? null)->save($path . '/' . $image_name);
        $photo = '/' . $path . '/' . $image_name;
        return $photo;
    }
}
