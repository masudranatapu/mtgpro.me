<?php
namespace App\Helpers;
use DateTime;
use DateTimeZone;
use DateInterval;
use Carbon\Carbon;
class DateTimeHelper{

    public static $DATE_FORMAT_A = 'D M d, Y';
    public static $DATE_FORMAT_B ='Y-m-d';
    public static $DATE_FORMAT_C = 'd M y';
    public static $TIME_FORMAT_A = 'H:i:s a';
    public static $TIME_FORMAT_B = 'H:i:s';
    public static $FIRST_DAY = 'Y-m-01 00:00:00';
    public static $LAST_DAY = 'Y-m-t 23:59:59';

    public static $DAY = 'd';
    public static $MONTH = 'F';
    public static $YEAR = 'Y';


    //returns current date time of machine
    public static function CurrentDateTime($dateFormat = null){
        if ($dateFormat == null) {
            $dateFormat = SELF::ConcatenateDateTime(SELF::$DATE_FORMAT_B, SELF::$TIME_FORMAT_B);
        }

        return date($dateFormat);

    }

    //return the first and last day of the month
    public static function FirstLastDayInMonth($dateTime = null){

        return ['firstDay' => date(SELF::$FIRST_DAY, strtotime(date($dateTime))),
                    'lastDay' => date(SELF::$LAST_DAY,strtotime(date($dateTime)))
                ];

    }
    // returns an array of date and time
    //@param string dateTime
    public static function DateTime($dateTime, $dateFormat = null, $timeFormat = null){


        if ($dateFormat == null && $timeFormat == null) {
            $dateFormat = SELF::$DATE_FORMAT_B;
            $timeFormat = SELF::$TIME_FORMAT_B;
        }

        $date = date($dateFormat, strtotime($dateTime));
        $time =  date($timeFormat, strtotime($dateTime));

        return ['date' => $date,
                    'time' => $time];

    }

    //return date time of a given zone
    public static function ZoneDateTime($zone){
        $date = new DateTime("now", new DateTimeZone($zone) );
        return $date;
    }

    //reset datetime to 00::00::00
    public static function DateTimeReset(DateTime $dateTimeObject){

        $dateTime = $dateTimeObject;
        $dateTime->setTime(0,0,0);

        // echo $date->format('Y-m-d H:i:s');
    // $dateTime->getTimestamp();

        return  $dateTime;
    }

    public static function DateTimeSetMidnight(DateTime $dateTimeObject){

        $dateTime = $dateTimeObject;
        $dateTime->setTime(23,59,59);

        // echo $date->format('Y-m-d H:i:s');
    // $dateTime->getTimestamp();

        return  $dateTime;
    }

    //datetime object to string
    public static function DateTimeStringToObject(string $dateTimeString){

        $dateTimeObject = new DateTime($dateTimeString);

        return  $dateTimeObject;
    }


    //add days to date
    public static function AddDays(DateTime $dateTimeObject, string $day){

        $dateTime = $dateTimeObject;
        $dateTime->add(new DateInterval($day));

        return $dateTime;
    }

    //format object to string
    public static function ObjectToString($dateTime, $dateTimeFormat = null){

        if ( $dateTimeFormat == null) {

            $dateTimeFormat = SELF::ConcatenateDateTime(SELF::$DATE_FORMAT_B, SELF::$TIME_FORMAT_B);
        }

        return $dateTime->format($dateTimeFormat);
    }

    //concatenate strings date and time
    public static function ConcatenateDateTime($date, $time){
        return $date.' '.$time;
    }

    //return day month year from datetime
    public static function DayMonthYear($dateTime){

        $day = date('d', strtotime($dateTime));
        $month = date('m', strtotime($dateTime));
        $year = date('Y', strtotime($dateTime));

        return  [
            'day' => $day,
            'month' => $month,
            'year' => $year
        ];


    }

    public static function MinutesDifference($dateTime){
        $currentdateTime = SELF::CurrentDateTime();
        $datetime1 = strtotime($dateTime);
        $datetime2 = strtotime($currentdateTime);
        $interval  = abs($datetime2 - $datetime1);
        $minutes   = round($interval / 60);
        return $minutes;
    }

    public static function DaysToMonth($joining_date){
        $currentDate = date("d-m-Y");
        $date1 = date_create("".$joining_date."");
        $date2 = date_create("".$currentDate."");
        $diff12 = date_diff($date2, $date1);
        $hub_days = $diff12->days;

        $months = $diff12->m;
        $years = $diff12->y;
    }

    public static function SubtractYear(int $subtractYear){

        $a = SELF::CurrentDateTime();
        $dayMonthYear = SELF::DayMonthYear(SELF::CurrentDateTime());
        $ageYear = $dayMonthYear['year'] - $subtractYear;
        $dayMonthYear['day'] = '01';
        $dayMonthYear['month'] = '01';
        $dayMonthYear['year'] = $ageYear;
        return SELF::ConcatenateDateArray($dayMonthYear, SELF::$DATE_FORMAT_B);
    }

    public static function ConcatenateDateArray($dateArray, $dateFormat){
        $dayMonthYear = $dateArray['year'].'-'.$dateArray['month'].'-'.$dateArray['day'];
        $newDate = date($dateFormat, strtotime($dayMonthYear));
        return $newDate;
    }

    public static function Greeting(){
        $Hour = date('G');
        if ( $Hour >= 0 && $Hour <= 11 ) {
            return "Good Morning!";
        } else if ( $Hour >= 12 && $Hour <= 18 ) {
            return "Good Afternoon!";
        } else if ( $Hour >= 19 || $Hour <= 23 ) {
            return "Good Evening!";
        }
    }

    public static function Week(){
    // For current week the time-string will be "sunday -1 week"
   // here -1 denotes last week
   $firstday = date('l - d/m/Y', strtotime("sunday -1 week"));
   //echo "First day of this week: ", $firstday, "\n";

   // For previous week the time-string wil be "sunday -2 week"
   // here -2 denotes week before last week
   $firstday = date('l - d/m/Y', strtotime("sunday -2 week"));
   //echo "First day of last week: ", $firstday, "\n";

   // For next week the time-string wil be "sunday 0 week"
   // here 0 denotes this week
   $firstday = date('l - d/m/Y', strtotime("sunday 0 week"));
   //echo "First day of next week: ", $firstday, "\n";

   // For week after next week the time-string wil be "sunday 1 week"
   // here 1 denotes next week
   $firstday = date('l - d/m/Y', strtotime("sunday 1 week"));
   //echo "First day of week after next week : ", $firstday;
   }

   public static function Today(){
       return Carbon::today()->toDateString();
   }

}
