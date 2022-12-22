<?php
namespace App\Helpers;
use Illuminate\Support\Str;

class StringHelper{

    private static $STRING_SEPARATOR = '|';
    public static $REMOVE_ARRAY_A = array(", ,", "|  |",);
    public static $REMOVE_ARRAY_B   = array(",", "|");
    public static $REMOVE_ARRAY_C  = ' | ';

    //returns a text with limited number of words
    public static function StringLimit(string $text, int $limit) {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }

    public static function Replace($replaceOld, $replaceNew, $string){
        str_replace($replaceOld, $replaceNew, $string);
    }


    public static function StringExplode(string $text){
        return explode(",", $text);
    }

    //returns everything after the given value in a string:
    public static function After(string $text, string $after){
        return Str::after($text, $after);
    }

    //returns everything before the given value in a string:
    public static function Before(string $text, string $before){
        return Str::before($text, $before);
    }

    public static function StringSeparator(){
        return SELF::$STRING_SEPARATOR;
    }

    public static function RemoveCharacter($REMOVE_ARRAY_A, $REMOVE_ARRAY_B, $REMOVE_ARRAY_C, string $text){
               $newText = str_replace($REMOVE_ARRAY_A, $REMOVE_ARRAY_B, $text);
        $replace_last =    rtrim($newText,$REMOVE_ARRAY_C);
        return $replace_last;
    }

    public static function Mask($number, $maskingCharacter = 'X') {
        return substr($number, 0, 4) . str_repeat($maskingCharacter, strlen($number) - 8) . substr($number, -4);
    }

    public static function getColor() {
        return  substr(md5(rand()), 0, 6);
    }

}

