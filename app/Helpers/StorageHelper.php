<?php
namespace App\Helpers;
use Intervention\Image\Facades\Image;
class StorageHelper
{

    private static $DEFAULT_IMAGE_LINK = 'upload/';
    private static $DEFAULT_VIDEO_LINK = 'public/videos/';

    private static $IS_AVATAR = 1;

    private static $DEFAULT_FILES = 'public/image';

    public static function ImageLink(){
        return SELF::$DEFAULT_IMAGE_LINK;
    }

    public static function VideoLink(){
        return SELF::$DEFAULT_VIDEO_LINK;
    }

    public static function AvatarLink(){
        return SELF::$DEFAULT_IMAGE_LINK;
    }

    public static function uploadImage($image,$path){
        $path       = SELF::$DEFAULT_IMAGE_LINK.$path;
        $image      = $image;
        $img        = Image::make($image->getRealPath());
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $base_name  = preg_replace('/\..+$/', '', $image->getClientOriginalName());
        $base_name  = explode(' ', $base_name);
        $base_name  = implode('-', $base_name);
        $image_name = $base_name."-".uniqid().$image->getClientOriginalName();
        Image::make($img)->save($path.'/'.$image_name);
        $photo = '/'.$path .'/'. $image_name;
        return $photo;
    }



}


