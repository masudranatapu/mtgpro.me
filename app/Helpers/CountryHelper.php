<?php
namespace App\Helpers;
use App;
class CountryHelper{


    public static function CurrencySymbol(){
        return [
            'AED' => 'د.إ',
            'AFN' => 'Af',
            'ALL' => 'Lek',
            'AMD' => 'դ',
            'ANG' => 'ƒ',
            'AOA' => 'Kz',
            'ARS' => '$',
            'AUD' => '$',
            'AWG' => 'ƒ',
            'AZN' => '₼',
            'BAM' => 'KM',
            'BBD' => '$',
            'BDT' => '৳',
            'BGN' => 'лв',
            'BHD' => '.د.ب',
            'BIF' => 'FBu',
            'BMD' => '$',
            'BND' => '$',
            'BOB' => '$b',
            'BRL' => 'R$',
            'BSD' => '$',
            'BTN' => 'Nu.',
            'BWP' => 'P',
            'BYR' => 'p.',
            'BZD' => 'BZ$',
            'CAD' => '$',
            'CDF' => 'FC',
            'CHF' => 'CHF',
            'CLF' => 'UF',
            'CLP' => '$',
            'CNY' => '¥',
            'COP' => '$',
            'CRC' => '₡',
            'CUP' => '⃌',
            'CVE' => '$',
            'CZK' => 'Kč',
            'DJF' => 'Fdj',
            'DKK' => 'kr',
            'DOP' => 'RD$',
            'DZD' => 'دج',
            'EGP' => 'E£',
            'ETB' => 'Br',
            'EUR' => '€',
            'FJD' => '$',
            'FKP' => '£',
            'GBP' => '£',
            'GEL' => 'ლ',
            'GHS' => '¢',
            '=>' => '£',
            'GMD' => 'D',
            'GNF' => 'FG',
            'GTQ' => 'Q',
            'GYD' => '$',
            'HKD' => '$',
            'HNL' => 'L',
            'HRK' => 'kn',
            'HTG' => 'G',
            'HUF' => 'Ft',
            'IDR' => 'Rp',
            'ILS' => '₪',
            'INR' => '₹',
            'IQD' => 'ع.د',
            'IRR' => '﷼',
            'ISK' => 'kr',
            'JEP' => '£',
            'JMD' => 'J$',
            'JOD' => 'JD',
            'JPY' => '¥',
            'KES' => 'KSh',
            'KGS' => 'лв',
            'KHR' => '៛',
            'KMF' => 'CF',
            'KPW' => '₩',
            'KRW' => '₩',
            'KWD' => 'د.ك',
            'KYD' => '$',
            'KZT' => '₸',
            'LAK' => '₭',
            'LBP' => '£',
            'LKR' => '₨',
            'LRD' => '$',
            'LSL' => 'L',
            'LTL' => 'Lt',
            'LVL' => 'Ls',
            'LYD' => 'ل.د',
            'MAD' => 'د.م.',
            'MDL' => 'L',
            'MGA' => 'Ar',
            'MKD' => 'ден',
            'MMK' => 'K',
            'MNT' => '₮',
            'MOP' => 'MOP$',
            'MRO' => 'UM',
            'MUR' => '₨',
            'MVR' => '.ރ',
            'MWK' => 'MK',
            'MXN' => '$',
            'MYR' => 'RM',
            'MZN' => 'MT',
            'NAD' => '$',
            'NGN' => '₦',
            'NIO' => 'C$',
            'NOK' => 'kr',
            'NPR' => '₨',
            'NZD' => '$',
            'OMR' => '﷼',
            'PAB' => 'B/.',
            'PEN' => 'S/.',
            'PGK' => 'K',
            'PHP' => '₱',
            'PKR' => '₨',
            'PLN' => 'zł',
            'PYG' => 'Gs',
            'QAR' => '﷼',
            'RON' => 'lei',
            'RSD' => 'Дин.',
            'RUB' => '₽',
            'RWF' => 'ر.س',
            'SAR' => '﷼',
            'SBD' => '$',
            'SCR' => '₨',
            'SDG' => '£',
            'SEK' => 'kr',
            'SGD' => '$',
            'SHP' => '£',
            'SLL' => 'Le',
            'SOS' => 'S',
            'SRD' => '$',
            'STD' => 'Db',
            'SVC' => '$',
            'SYP' => '£',
            'SZL' => 'L',
            'THB' => '฿',
            'TJS' => 'TJS',
            'TMT' => 'm',
            'TND' => 'د.ت',
            'TOP' => 'T$',
            'TRY' => '₤',
            'TTD' => '$',
            'TWD' => 'NT$',
            'TZS' => 'TSh',
            'UAH' => '₴',
            'UGX' => 'USh',
            'USD' => '$',
            'UYU' => '$U',
            'UZS' => 'лв',
            'VEF' => 'Bs',
            'VND' => '₫',
            'VUV' => 'VT',
            'WST' => 'WS$',
            'XAF' => 'FCFA',
            'XCD' => '$',
            'XDR' => 'SDR',
            'XOF' => 'FCFA',
            'XPF' => 'F',
            'YER' => '﷼',
            'ZAR' => 'R',
            'ZMK' => 'ZK',
            'ZWL' => 'Z$',
        ];

    }

    public static function CountryCodes(){
        return [
            'AF' => 'Afghanistan',
            'AX' => 'Aland Islands',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua And Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia And Herzegovina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo',
            'CD' => 'Congo, Democratic Republic',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Cote D\'Ivoire',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands (Malvinas)',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard Island & Mcdonald Islands',
            'VA' => 'Holy See (Vatican City State)',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran, Islamic Republic Of',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle Of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KR' => 'Korea',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Lao People\'s Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao',
            'MK' => 'Macedonia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia, Federated States Of',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territory, Occupied',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'BL' => 'Saint Barthelemy',
            'SH' => 'Saint Helena',
            'KN' => 'Saint Kitts And Nevis',
            'LC' => 'Saint Lucia',
            'MF' => 'Saint Martin',
            'PM' => 'Saint Pierre And Miquelon',
            'VC' => 'Saint Vincent And Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome And Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia And Sandwich Isl.',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard And Jan Mayen',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad And Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks And Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UM' => 'United States Outlying Islands',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Viet Nam',
            'VG' => 'Virgin Islands, British',
            'VI' => 'Virgin Islands, U.S.',
            'WF' => 'Wallis And Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',

        ];
   }

    public static function Language(){
        return [
            'af_NA' => 'Afrikaans (Namibia)',
            'af_ZA' => 'Afrikaans (South Africa)',
            'af' => 'Afrikaans',
            'ak_GH' => 'Akan (Ghana)',
            'ak' => 'Akan',
            'sq_AL' => 'Albanian (Albania)',
            'sq' => 'Albanian',
            'am_ET' => 'Amharic (Ethiopia)',
            'am' => 'Amharic',
            'ar_DZ' => 'Arabic (Algeria)',
            'ar_BH' => 'Arabic (Bahrain)',
            'ar_EG' => 'Arabic (Egypt)',
            'ar_IQ' => 'Arabic (Iraq)',
            'ar_JO' => 'Arabic (Jordan)',
            'ar_KW' => 'Arabic (Kuwait)',
            'ar_LB' => 'Arabic (Lebanon)',
            'ar_LY' => 'Arabic (Libya)',
            'ar_MA' => 'Arabic (Morocco)',
            'ar_OM' => 'Arabic (Oman)',
            'ar_QA' => 'Arabic (Qatar)',
            'ar_SA' => 'Arabic (Saudi Arabia)',
            'ar_SD' => 'Arabic (Sudan)',
            'ar_SY' => 'Arabic (Syria)',
            'ar_TN' => 'Arabic (Tunisia)',
            'ar_AE' => 'Arabic (United Arab Emirates)',
            'ar_YE' => 'Arabic (Yemen)',
            'ar' => 'Arabic',
            'hy_AM' => 'Armenian (Armenia)',
            'hy' => 'Armenian',
            'as_IN' => 'Assamese (India)',
            'as' => 'Assamese',
            'asa_TZ' => 'Asu (Tanzania)',
            'asa' => 'Asu',
            'az_Cyrl' => 'Azerbaijani (Cyrillic)',
            'az_Cyrl_AZ' => 'Azerbaijani (Cyrillic, Azerbaijan)',
            'az_Latn' => 'Azerbaijani (Latin)',
            'az_Latn_AZ' => 'Azerbaijani (Latin, Azerbaijan)',
            'az' => 'Azerbaijani',
            'bm_ML' => 'Bambara (Mali)',
            'bm' => 'Bambara',
            'eu_ES' => 'Basque (Spain)',
            'eu' => 'Basque',
            'be_BY' => 'Belarusian (Belarus)',
            'be' => 'Belarusian',
            'bem_ZM' => 'Bemba (Zambia)',
            'bem' => 'Bemba',
            'bez_TZ' => 'Bena (Tanzania)',
            'bez' => 'Bena',
            'bn_BD' => 'Bengali (Bangladesh)',
            'bn_IN' => 'Bengali (India)',
            'bn' => 'Bengali',
            'bs_BA' => 'Bosnian (Bosnia and Herzegovina)',
            'bs' => 'Bosnian',
            'bg_BG' => 'Bulgarian (Bulgaria)',
            'bg' => 'Bulgarian',
            'my_MM' => 'Burmese (Myanmar [Burma])',
            'my' => 'Burmese',
            'yue_Hant_HK' => 'Cantonese (Traditional, Hong Kong SAR China)',
            'ca_ES' => 'Catalan (Spain)',
            'ca' => 'Catalan',
            'tzm_Latn' => 'Central Morocco Tamazight (Latin)',
            'tzm_Latn_MA' => 'Central Morocco Tamazight (Latin, Morocco)',
            'tzm' => 'Central Morocco Tamazight',
            'chr_US' => 'Cherokee (United States)',
            'chr' => 'Cherokee',
            'cgg_UG' => 'Chiga (Uganda)',
            'cgg' => 'Chiga',
            'zh_Hans' => 'Chinese (Simplified Han)',
            'zh_Hans_CN' => 'Chinese (Simplified Han, China)',
            'zh_Hans_HK' => 'Chinese (Simplified Han, Hong Kong SAR China)',
            'zh_Hans_MO' => 'Chinese (Simplified Han, Macau SAR China)',
            'zh_Hans_SG' => 'Chinese (Simplified Han, Singapore)',
            'zh_Hant' => 'Chinese (Traditional Han)',
            'zh_Hant_HK' => 'Chinese (Traditional Han, Hong Kong SAR China)',
            'zh_Hant_MO' => 'Chinese (Traditional Han, Macau SAR China)',
            'zh_Hant_TW' => 'Chinese (Traditional Han, Taiwan)',
            'zh' => 'Chinese',
            'kw_GB' => 'Cornish (United Kingdom)',
            'kw' => 'Cornish',
            'hr_HR' => 'Croatian (Croatia)',
            'hr' => 'Croatian',
            'cs_CZ' => 'Czech (Czech Republic)',
            'cs' => 'Czech',
            'da_DK' => 'Danish (Denmark)',
            'da' => 'Danish',
            'nl_BE' => 'Dutch (Belgium)',
            'nl_NL' => 'Dutch (Netherlands)',
            'nl' => 'Dutch',
            'ebu_KE' => 'Embu (Kenya)',
            'ebu' => 'Embu',
            'en_AS' => 'English (American Samoa)',
            'en_AU' => 'English (Australia)',
            'en_BE' => 'English (Belgium)',
            'en_BZ' => 'English (Belize)',
            'en_BW' => 'English (Botswana)',
            'en_CA' => 'English (Canada)',
            'en_GU' => 'English (Guam)',
            'en_HK' => 'English (Hong Kong SAR China)',
            'en_IN' => 'English (India)',
            'en_IE' => 'English (Ireland)',
            'en_IL' => 'English (Israel)',
            'en_JM' => 'English (Jamaica)',
            'en_MT' => 'English (Malta)',
            'en_MH' => 'English (Marshall Islands)',
            'en_MU' => 'English (Mauritius)',
            'en_NA' => 'English (Namibia)',
            'en_NZ' => 'English (New Zealand)',
            'en_MP' => 'English (Northern Mariana Islands)',
            'en_PK' => 'English (Pakistan)',
            'en_PH' => 'English (Philippines)',
            'en_SG' => 'English (Singapore)',
            'en_ZA' => 'English (South Africa)',
            'en_TT' => 'English (Trinidad and Tobago)',
            'en_UM' => 'English (U.S. Minor Outlying Islands)',
            'en_VI' => 'English (U.S. Virgin Islands)',
            'en_GB' => 'English (United Kingdom)',
            'en_US' => 'English (United States)',
            'en_ZW' => 'English (Zimbabwe)',
            'en' => 'English',
            'eo' => 'Esperanto',
            'et_EE' => 'Estonian (Estonia)',
            'et' => 'Estonian',
            'ee_GH' => 'Ewe (Ghana)',
            'ee_TG' => 'Ewe (Togo)',
            'ee' => 'Ewe',
            'fo_FO' => 'Faroese (Faroe Islands)',
            'fo' => 'Faroese',
            'fil_PH' => 'Filipino (Philippines)',
            'fil' => 'Filipino',
            'fi_FI' => 'Finnish (Finland)',
            'fi' => 'Finnish',
            'fr_BE' => 'French (Belgium)',
            'fr_BJ' => 'French (Benin)',
            'fr_BF' => 'French (Burkina Faso)',
            'fr_BI' => 'French (Burundi)',
            'fr_CM' => 'French (Cameroon)',
            'fr_CA' => 'French (Canada)',
            'fr_CF' => 'French (Central African Republic)',
            'fr_TD' => 'French (Chad)',
            'fr_KM' => 'French (Comoros)',
            'fr_CG' => 'French (Congo - Brazzaville)',
            'fr_CD' => 'French (Congo - Kinshasa)',
            'fr_CI' => 'French (Côte d’Ivoire)',
            'fr_DJ' => 'French (Djibouti)',
            'fr_GQ' => 'French (Equatorial Guinea)',
            'fr_FR' => 'French (France)',
            'fr_GA' => 'French (Gabon)',
            'fr_GP' => 'French (Guadeloupe)',
            'fr_GN' => 'French (Guinea)',
            'fr_LU' => 'French (Luxembourg)',
            'fr_MG' => 'French (Madagascar)',
            'fr_ML' => 'French (Mali)',
            'fr_MQ' => 'French (Martinique)',
            'fr_MC' => 'French (Monaco)',
            'fr_NE' => 'French (Niger)',
            'fr_RW' => 'French (Rwanda)',
            'fr_RE' => 'French (Réunion)',
            'fr_BL' => 'French (Saint Barthélemy)',
            'fr_MF' => 'French (Saint Martin)',
            'fr_SN' => 'French (Senegal)',
            'fr_CH' => 'French (Switzerland)',
            'fr_TG' => 'French (Togo)',
            'fr' => 'French',
            'ff_SN' => 'Fulah (Senegal)',
            'ff' => 'Fulah',
            'gl_ES' => 'Galician (Spain)',
            'gl' => 'Galician',
            'lg_UG' => 'Ganda (Uganda)',
            'lg' => 'Ganda',
            'ka_GE' => 'Georgian (Georgia)',
            'ka' => 'Georgian',
            'de_AT' => 'German (Austria)',
            'de_BE' => 'German (Belgium)',
            'de_DE' => 'German (Germany)',
            'de_LI' => 'German (Liechtenstein)',
            'de_LU' => 'German (Luxembourg)',
            'de_CH' => 'German (Switzerland)',
            'de' => 'German',
            'el_CY' => 'Greek (Cyprus)',
            'el_GR' => 'Greek (Greece)',
            'el' => 'Greek',
            'gu_IN' => 'Gujarati (India)',
            'gu' => 'Gujarati',
            'guz_KE' => 'Gusii (Kenya)',
            'guz' => 'Gusii',
            'ha_Latn' => 'Hausa (Latin)',
            'ha_Latn_GH' => 'Hausa (Latin, Ghana)',
            'ha_Latn_NE' => 'Hausa (Latin, Niger)',
            'ha_Latn_NG' => 'Hausa (Latin, Nigeria)',
            'ha' => 'Hausa',
            'haw_US' => 'Hawaiian (United States)',
            'haw' => 'Hawaiian',
            'he_IL' => 'Hebrew (Israel)',
            'he' => 'Hebrew',
            'hi_IN' => 'Hindi (India)',
            'hi' => 'Hindi',
            'hu_HU' => 'Hungarian (Hungary)',
            'hu' => 'Hungarian',
            'is_IS' => 'Icelandic (Iceland)',
            'is' => 'Icelandic',
            'ig_NG' => 'Igbo (Nigeria)',
            'ig' => 'Igbo',
            'id_ID' => 'Indonesian (Indonesia)',
            'id' => 'Indonesian',
            'ga_IE' => 'Irish (Ireland)',
            'ga' => 'Irish',
            'it_IT' => 'Italian (Italy)',
            'it_CH' => 'Italian (Switzerland)',
            'it' => 'Italian',
            'ja_JP' => 'Japanese (Japan)',
            'ja' => 'Japanese',
            'kea_CV' => 'Kabuverdianu (Cape Verde)',
            'kea' => 'Kabuverdianu',
            'kab_DZ' => 'Kabyle (Algeria)',
            'kab' => 'Kabyle',
            'kl_GL' => 'Kalaallisut (Greenland)',
            'kl' => 'Kalaallisut',
            'kln_KE' => 'Kalenjin (Kenya)',
            'kln' => 'Kalenjin',
            'kam_KE' => 'Kamba (Kenya)',
            'kam' => 'Kamba',
            'kn_IN' => 'Kannada (India)',
            'kn' => 'Kannada',
            'kk_Cyrl' => 'Kazakh (Cyrillic)',
            'kk_Cyrl_KZ' => 'Kazakh (Cyrillic, Kazakhstan)',
            'kk' => 'Kazakh',
            'km_KH' => 'Khmer (Cambodia)',
            'km' => 'Khmer',
            'ki_KE' => 'Kikuyu (Kenya)',
            'ki' => 'Kikuyu',
            'rw_RW' => 'Kinyarwanda (Rwanda)',
            'rw' => 'Kinyarwanda',
            'kok_IN' => 'Konkani (India)',
            'kok' => 'Konkani',
            'ko_KR' => 'Korean (South Korea)',
            'ko' => 'Korean',
            'khq_ML' => 'Koyra Chiini (Mali)',
            'khq' => 'Koyra Chiini',
            'ses_ML' => 'Koyraboro Senni (Mali)',
            'ses' => 'Koyraboro Senni',
            'lag_TZ' => 'Langi (Tanzania)',
            'lag' => 'Langi',
            'lv_LV' => 'Latvian (Latvia)',
            'lv' => 'Latvian',
            'lt_LT' => 'Lithuanian (Lithuania)',
            'lt' => 'Lithuanian',
            'luo_KE' => 'Luo (Kenya)',
            'luo' => 'Luo',
            'luy_KE' => 'Luyia (Kenya)',
            'luy' => 'Luyia',
            'mk_MK' => 'Macedonian (Macedonia)',
            'mk' => 'Macedonian',
            'jmc_TZ' => 'Machame (Tanzania)',
            'jmc' => 'Machame',
            'kde_TZ' => 'Makonde (Tanzania)',
            'kde' => 'Makonde',
            'mg_MG' => 'Malagasy (Madagascar)',
            'mg' => 'Malagasy',
            'ms_BN' => 'Malay (Brunei)',
            'ms_MY' => 'Malay (Malaysia)',
            'ms' => 'Malay',
            'ml_IN' => 'Malayalam (India)',
            'ml' => 'Malayalam',
            'mt_MT' => 'Maltese (Malta)',
            'mt' => 'Maltese',
            'gv_GB' => 'Manx (United Kingdom)',
            'gv' => 'Manx',
            'mr_IN' => 'Marathi (India)',
            'mr' => 'Marathi',
            'mas_KE' => 'Masai (Kenya)',
            'mas_TZ' => 'Masai (Tanzania)',
            'mas' => 'Masai',
            'mer_KE' => 'Meru (Kenya)',
            'mer' => 'Meru',
            'mfe_MU' => 'Morisyen (Mauritius)',
            'mfe' => 'Morisyen',
            'naq_NA' => 'Nama (Namibia)',
            'naq' => 'Nama',
            'ne_IN' => 'Nepali (India)',
            'ne_NP' => 'Nepali (Nepal)',
            'ne' => 'Nepali',
            'nd_ZW' => 'North Ndebele (Zimbabwe)',
            'nd' => 'North Ndebele',
            'nb_NO' => 'Norwegian Bokmål (Norway)',
            'nb' => 'Norwegian Bokmål',
            'nn_NO' => 'Norwegian Nynorsk (Norway)',
            'nn' => 'Norwegian Nynorsk',
            'nyn_UG' => 'Nyankole (Uganda)',
            'nyn' => 'Nyankole',
            'or_IN' => 'Oriya (India)',
            'or' => 'Oriya',
            'om_ET' => 'Oromo (Ethiopia)',
            'om_KE' => 'Oromo (Kenya)',
            'om' => 'Oromo',
            'ps_AF' => 'Pashto (Afghanistan)',
            'ps' => 'Pashto',
            'fa_AF' => 'Persian (Afghanistan)',
            'fa_IR' => 'Persian (Iran)',
            'fa' => 'Persian',
            'pl_PL' => 'Polish (Poland)',
            'pl' => 'Polish',
            'pt_BR' => 'Portuguese (Brazil)',
            'pt_GW' => 'Portuguese (Guinea-Bissau)',
            'pt_MZ' => 'Portuguese (Mozambique)',
            'pt_PT' => 'Portuguese (Portugal)',
            'pt' => 'Portuguese',
            'pa_Arab' => 'Punjabi (Arabic)',
            'pa_Arab_PK' => 'Punjabi (Arabic, Pakistan)',
            'pa_Guru' => 'Punjabi (Gurmukhi)',
            'pa_Guru_IN' => 'Punjabi (Gurmukhi, India)',
            'pa' => 'Punjabi',
            'ro_MD' => 'Romanian (Moldova)',
            'ro_RO' => 'Romanian (Romania)',
            'ro' => 'Romanian',
            'rm_CH' => 'Romansh (Switzerland)',
            'rm' => 'Romansh',
            'rof_TZ' => 'Rombo (Tanzania)',
            'rof' => 'Rombo',
            'ru_MD' => 'Russian (Moldova)',
            'ru_RU' => 'Russian (Russia)',
            'ru_UA' => 'Russian (Ukraine)',
            'ru' => 'Russian',
            'rwk_TZ' => 'Rwa (Tanzania)',
            'rwk' => 'Rwa',
            'saq_KE' => 'Samburu (Kenya)',
            'saq' => 'Samburu',
            'sg_CF' => 'Sango (Central African Republic)',
            'sg' => 'Sango',
            'seh_MZ' => 'Sena (Mozambique)',
            'seh' => 'Sena',
            'sr_Cyrl' => 'Serbian (Cyrillic)',
            'sr_Cyrl_BA' => 'Serbian (Cyrillic, Bosnia and Herzegovina)',
            'sr_Cyrl_ME' => 'Serbian (Cyrillic, Montenegro)',
            'sr_Cyrl_RS' => 'Serbian (Cyrillic, Serbia)',
            'sr_Latn' => 'Serbian (Latin)',
            'sr_Latn_BA' => 'Serbian (Latin, Bosnia and Herzegovina)',
            'sr_Latn_ME' => 'Serbian (Latin, Montenegro)',
            'sr_Latn_RS' => 'Serbian (Latin, Serbia)',
            'sr' => 'Serbian',
            'sn_ZW' => 'Shona (Zimbabwe)',
            'sn' => 'Shona',
            'ii_CN' => 'Sichuan Yi (China)',
            'ii' => 'Sichuan Yi',
            'si_LK' => 'Sinhala (Sri Lanka)',
            'si' => 'Sinhala',
            'sk_SK' => 'Slovak (Slovakia)',
            'sk' => 'Slovak',
            'sl_SI' => 'Slovenian (Slovenia)',
            'sl' => 'Slovenian',
            'xog_UG' => 'Soga (Uganda)',
            'xog' => 'Soga',
            'so_DJ' => 'Somali (Djibouti)',
            'so_ET' => 'Somali (Ethiopia)',
            'so_KE' => 'Somali (Kenya)',
            'so_SO' => 'Somali (Somalia)',
            'so' => 'Somali',
            'es_AR' => 'Spanish (Argentina)',
            'es_BO' => 'Spanish (Bolivia)',
            'es_CL' => 'Spanish (Chile)',
            'es_CO' => 'Spanish (Colombia)',
            'es_CR' => 'Spanish (Costa Rica)',
            'es_DO' => 'Spanish (Dominican Republic)',
            'es_EC' => 'Spanish (Ecuador)',
            'es_SV' => 'Spanish (El Salvador)',
            'es_GQ' => 'Spanish (Equatorial Guinea)',
            'es_GT' => 'Spanish (Guatemala)',
            'es_HN' => 'Spanish (Honduras)',
            'es_419' => 'Spanish (Latin America)',
            'es_MX' => 'Spanish (Mexico)',
            'es_NI' => 'Spanish (Nicaragua)',
            'es_PA' => 'Spanish (Panama)',
            'es_PY' => 'Spanish (Paraguay)',
            'es_PE' => 'Spanish (Peru)',
            'es_PR' => 'Spanish (Puerto Rico)',
            'es_ES' => 'Spanish (Spain)',
            'es_US' => 'Spanish (United States)',
            'es_UY' => 'Spanish (Uruguay)',
            'es_VE' => 'Spanish (Venezuela)',
            'es' => 'Spanish',
            'sw_KE' => 'Swahili (Kenya)',
            'sw_TZ' => 'Swahili (Tanzania)',
            'sw' => 'Swahili',
            'sv_FI' => 'Swedish (Finland)',
            'sv_SE' => 'Swedish (Sweden)',
            'sv' => 'Swedish',
            'gsw_CH' => 'Swiss German (Switzerland)',
            'gsw' => 'Swiss German',
            'shi_Latn' => 'Tachelhit (Latin)',
            'shi_Latn_MA' => 'Tachelhit (Latin, Morocco)',
            'shi_Tfng' => 'Tachelhit (Tifinagh)',
            'shi_Tfng_MA' => 'Tachelhit (Tifinagh, Morocco)',
            'shi' => 'Tachelhit',
            'dav_KE' => 'Taita (Kenya)',
            'dav' => 'Taita',
            'ta_IN' => 'Tamil (India)',
            'ta_LK' => 'Tamil (Sri Lanka)',
            'ta' => 'Tamil',
            'te_IN' => 'Telugu (India)',
            'te' => 'Telugu',
            'teo_KE' => 'Teso (Kenya)',
            'teo_UG' => 'Teso (Uganda)',
            'teo' => 'Teso',
            'th_TH' => 'Thai (Thailand)',
            'th' => 'Thai',
            'bo_CN' => 'Tibetan (China)',
            'bo_IN' => 'Tibetan (India)',
            'bo' => 'Tibetan',
            'ti_ER' => 'Tigrinya (Eritrea)',
            'ti_ET' => 'Tigrinya (Ethiopia)',
            'ti' => 'Tigrinya',
            'to_TO' => 'Tonga (Tonga)',
            'to' => 'Tonga',
            'tr_TR' => 'Turkish (Turkey)',
            'tr' => 'Turkish',
            'uk_UA' => 'Ukrainian (Ukraine)',
            'uk' => 'Ukrainian',
            'ur_IN' => 'Urdu (India)',
            'ur_PK' => 'Urdu (Pakistan)',
            'ur' => 'Urdu',
            'uz_Arab' => 'Uzbek (Arabic)',
            'uz_Arab_AF' => 'Uzbek (Arabic, Afghanistan)',
            'uz_Cyrl' => 'Uzbek (Cyrillic)',
            'uz_Cyrl_UZ' => 'Uzbek (Cyrillic, Uzbekistan)',
            'uz_Latn' => 'Uzbek (Latin)',
            'uz_Latn_UZ' => 'Uzbek (Latin, Uzbekistan)',
            'uz' => 'Uzbek',
            'vi_VN' => 'Vietnamese (Vietnam)',
            'vi' => 'Vietnamese',
            'vun_TZ' => 'Vunjo (Tanzania)',
            'vun' => 'Vunjo',
            'cy_GB' => 'Welsh (United Kingdom)',
            'cy' => 'Welsh',
            'yo_NG' => 'Yoruba (Nigeria)',
            'yo' => 'Yoruba',
            'zu_ZA' => 'Zulu (South Africa)',
            'zu' => 'Zulu'
        ];
    }

    public static function Currency(){
        return [

                "BD"=> "BDT",
                "BE"=> "EUR",
                "BF"=> "XOF",
                "BG"=> "BGN",
                "BA"=> "BAM",
                "BB"=> "BBD",
                "WF"=> "XPF",
                "BL"=> "EUR",
                "BM"=> "BMD",
                "BN"=> "BND",
                "BO"=> "BOB",
                "BH"=> "BHD",
                "BI"=> "BIF",
                "BJ"=> "XOF",
                "BT"=> "BTN",
                "JM"=> "JMD",
                "BV"=> "NOK",
                "BW"=> "BWP",
                "WS"=> "WST",
                "BQ"=> "USD",
                "BR"=> "BRL",
                "BS"=> "BSD",
                "JE"=> "GBP",
                "BY"=> "BYR",
                "BZ"=> "BZD",
                "RU"=> "RUB",
                "RW"=> "RWF",
                "RS"=> "RSD",
                "TL"=> "USD",
                "RE"=> "EUR",
                "TM"=> "TMT",
                "TJ"=> "TJS",
                "RO"=> "RON",
                "TK"=> "NZD",
                "GW"=> "XOF",
                "GU"=> "USD",
                "GT"=> "GTQ",
                "GS"=> "GBP",
                "GR"=> "EUR",
                "GQ"=> "XAF",
                "GP"=> "EUR",
                "JP"=> "JPY",
                "GY"=> "GYD",
                "GG"=> "GBP",
                "GF"=> "EUR",
                "GE"=> "GEL",
                "GD"=> "XCD",
                "GB"=> "GBP",
                "GA"=> "XAF",
                "SV"=> "USD",
                "GN"=> "GNF",
                "GM"=> "GMD",
                "GL"=> "DKK",
                "GI"=> "GIP",
                "GH"=> "GHS",
                "OM"=> "OMR",
                "TN"=> "TND",
                "JO"=> "JOD",
                "HR"=> "HRK",
                "HT"=> "HTG",
                "HU"=> "HUF",
                "HK"=> "HKD",
                "HN"=> "HNL",
                "HM"=> "AUD",
                "VE"=> "VEF",
                "PR"=> "USD",
                "PS"=> "ILS",
                "PW"=> "USD",
                "PT"=> "EUR",
                "SJ"=> "NOK",
                "PY"=> "PYG",
                "IQ"=> "IQD",
                "PA"=> "PAB",
                "PF"=> "XPF",
                "PG"=> "PGK",
                "PE"=> "PEN",
                "PK"=> "PKR",
                "PH"=> "PHP",
                "PN"=> "NZD",
                "PL"=> "PLN",
                "PM"=> "EUR",
                "ZM"=> "ZMK",
                "EH"=> "MAD",
                "EE"=> "EUR",
                "EG"=> "EGP",
                "ZA"=> "ZAR",
                "EC"=> "USD",
                "IT"=> "EUR",
                "VN"=> "VND",
                "SB"=> "SBD",
                "ET"=> "ETB",
                "SO"=> "SOS",
                "ZW"=> "ZWL",
                "SA"=> "SAR",
                "ES"=> "EUR",
                "ER"=> "ERN",
                "ME"=> "EUR",
                "MD"=> "MDL",
                "MG"=> "MGA",
                "MF"=> "EUR",
                "MA"=> "MAD",
                "MC"=> "EUR",
                "UZ"=> "UZS",
                "MM"=> "MMK",
                "ML"=> "XOF",
                "MO"=> "MOP",
                "MN"=> "MNT",
                "MH"=> "USD",
                "MK"=> "MKD",
                "MU"=> "MUR",
                "MT"=> "EUR",
                "MW"=> "MWK",
                "MV"=> "MVR",
                "MQ"=> "EUR",
                "MP"=> "USD",
                "MS"=> "XCD",
                "MR"=> "MRO",
                "IM"=> "GBP",
                "UG"=> "UGX",
                "TZ"=> "TZS",
                "MY"=> "MYR",
                "MX"=> "MXN",
                "IL"=> "ILS",
                "FR"=> "EUR",
                "IO"=> "USD",
                "SH"=> "SHP",
                "FI"=> "EUR",
                "FJ"=> "FJD",
                "FK"=> "FKP",
                "FM"=> "USD",
                "FO"=> "DKK",
                "NI"=> "NIO",
                "NL"=> "EUR",
                "NO"=> "NOK",
                "NA"=> "NAD",
                "VU"=> "VUV",
                "NC"=> "XPF",
                "NE"=> "XOF",
                "NF"=> "AUD",
                "NG"=> "NGN",
                "NZ"=> "NZD",
                "NP"=> "NPR",
                "NR"=> "AUD",
                "NU"=> "NZD",
                "CK"=> "NZD",
                "XK"=> "EUR",
                "CI"=> "XOF",
                "CH"=> "CHF",
                "CO"=> "COP",
                "CN"=> "CNY",
                "CM"=> "XAF",
                "CL"=> "CLP",
                "CC"=> "AUD",
                "CA"=> "CAD",
                "CG"=> "XAF",
                "CF"=> "XAF",
                "CD"=> "CDF",
                "CZ"=> "CZK",
                "CY"=> "EUR",
                "CX"=> "AUD",
                "CR"=> "CRC",
                "CW"=> "ANG",
                "CV"=> "CVE",
                "CU"=> "CUP",
                "SZ"=> "SZL",
                "SY"=> "SYP",
                "SX"=> "ANG",
                "KG"=> "KGS",
                "KE"=> "KES",
                "SS"=> "SSP",
                "SR"=> "SRD",
                "KI"=> "AUD",
                "KH"=> "KHR",
                "KN"=> "XCD",
                "KM"=> "KMF",
                "ST"=> "STD",
                "SK"=> "EUR",
                "KR"=> "KRW",
                "SI"=> "EUR",
                "KP"=> "KPW",
                "KW"=> "KWD",
                "SN"=> "XOF",
                "SM"=> "EUR",
                "SL"=> "SLL",
                "SC"=> "SCR",
                "KZ"=> "KZT",
                "KY"=> "KYD",
                "SG"=> "SGD",
                "SE"=> "SEK",
                "SD"=> "SDG",
                "DO"=> "DOP",
                "DM"=> "XCD",
                "DJ"=> "DJF",
                "DK"=> "DKK",
                "VG"=> "USD",
                "DE"=> "EUR",
                "YE"=> "YER",
                "DZ"=> "DZD",
                "US"=> "USD",
                "UY"=> "UYU",
                "YT"=> "EUR",
                "UM"=> "USD",
                "LB"=> "LBP",
                "LC"=> "XCD",
                "LA"=> "LAK",
                "TV"=> "AUD",
                "TW"=> "TWD",
                "TT"=> "TTD",
                "TR"=> "TRY",
                "LK"=> "LKR",
                "LI"=> "CHF",
                "LV"=> "EUR",
                "TO"=> "TOP",
                "LT"=> "LTL",
                "LU"=> "EUR",
                "LR"=> "LRD",
                "LS"=> "LSL",
                "TH"=> "THB",
                "TF"=> "EUR",
                "TG"=> "XOF",
                "TD"=> "XAF",
                "TC"=> "USD",
                "LY"=> "LYD",
                "VA"=> "EUR",
                "VC"=> "XCD",
                "AE"=> "AED",
                "AD"=> "EUR",
                "AG"=> "XCD",
                "AF"=> "AFN",
                "AI"=> "XCD",
                "VI"=> "USD",
                "IS"=> "ISK",
                "IR"=> "IRR",
                "AM"=> "AMD",
                "AL"=> "ALL",
                "AO"=> "AOA",
                "AQ"=> "",
                "AS"=> "USD",
                "AR"=> "ARS",
                "AU"=> "AUD",
                "AT"=> "EUR",
                "AW"=> "AWG",
                "IN"=> "INR",
                "AX"=> "EUR",
                "AZ"=> "AZN",
                "IE"=> "EUR",
                "ID"=> "IDR",
                "UA"=> "UAH",
                "QA"=> "QAR",
                "MZ"=> "MZN"

        ];
    }

    public static function ISO(){
        return
        [
            [
                "alpha2" => "AC",
                "alpha3" => "",
                "countryCallingCodes" => [
                    "+247"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "SHP",
                "languages" => [
                    "eng"
                ],
                "name" => "Ascension Island",
                "status" => "reserved"
            ],
            [
                "alpha2" => "AD",
                "alpha3" => "AND",
                "countryCallingCodes" => [
                    "+376"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "AND",
                "languages" => [
                    "cat"
                ],
                "name" => "Andorra",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AE",
                "alpha3" => "ARE",
                "countryCallingCodes" => [
                    "+971"
                ],
                "currencies" => [
                    "AED"
                ],
                "ioc" => "UAE",
                "languages" => [
                    "ara"
                ],
                "name" => "United Arab Emirates",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AF",
                "alpha3" => "AFG",
                "countryCallingCodes" => [
                    "+93"
                ],
                "currencies" => [
                    "AFN"
                ],
                "ioc" => "AFG",
                "languages" => [
                    "pus"
                ],
                "name" => "Afghanistan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AG",
                "alpha3" => "ATG",
                "countryCallingCodes" => [
                    "+1 268"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "ANT",
                "languages" => [
                    "eng"
                ],
                "name" => "Antigua And Barbuda",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AI",
                "alpha3" => "AIA",
                "countryCallingCodes" => [
                    "+1 264"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Anguilla",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AL",
                "alpha3" => "ALB",
                "countryCallingCodes" => [
                    "+355"
                ],
                "currencies" => [
                    "ALL"
                ],
                "ioc" => "ALB",
                "languages" => [
                    "alb"
                ],
                "name" => "Albania",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AM",
                "alpha3" => "ARM",
                "countryCallingCodes" => [
                    "+374"
                ],
                "currencies" => [
                    "AMD"
                ],
                "ioc" => "ARM",
                "languages" => [
                    "arm",
                    "rus"
                ],
                "name" => "Armenia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AO",
                "alpha3" => "AGO",
                "countryCallingCodes" => [
                    "+244"
                ],
                "currencies" => [
                    "AOA"
                ],
                "ioc" => "ANG",
                "languages" => [
                    "por"
                ],
                "name" => "Angola",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AQ",
                "alpha3" => "ATA",
                "countryCallingCodes" => [
                    "+672"
                ],
                "currencies" => [

                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Antarctica",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AR",
                "alpha3" => "ARG",
                "countryCallingCodes" => [
                    "+54"
                ],
                "currencies" => [
                    "ARS"
                ],
                "ioc" => "ARG",
                "languages" => [
                    "spa"
                ],
                "name" => "Argentina",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AS",
                "alpha3" => "ASM",
                "countryCallingCodes" => [
                    "+1 684"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "ASA",
                "languages" => [
                    "eng",
                    "smo"
                ],
                "name" => "American Samoa",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AT",
                "alpha3" => "AUT",
                "countryCallingCodes" => [
                    "+43"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "AUT",
                "languages" => [
                    "ger"
                ],
                "name" => "Austria",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AU",
                "alpha3" => "AUS",
                "countryCallingCodes" => [
                    "+61"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "AUS",
                "languages" => [
                    "eng"
                ],
                "name" => "Australia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AW",
                "alpha3" => "ABW",
                "countryCallingCodes" => [
                    "+297"
                ],
                "currencies" => [
                    "AWG"
                ],
                "ioc" => "ARU",
                "languages" => [
                    "dut"
                ],
                "name" => "Aruba",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AX",
                "alpha3" => "ALA",
                "countryCallingCodes" => [
                    "+358"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "swe"
                ],
                "name" => "Åland Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "AZ",
                "alpha3" => "AZE",
                "countryCallingCodes" => [
                    "+994"
                ],
                "currencies" => [
                    "AZN"
                ],
                "ioc" => "AZE",
                "languages" => [
                    "aze"
                ],
                "name" => "Azerbaijan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BA",
                "alpha3" => "BIH",
                "countryCallingCodes" => [
                    "+387"
                ],
                "currencies" => [
                    "BAM"
                ],
                "ioc" => "BIH",
                "languages" => [
                    "bos",
                    "cre",
                    "srp"
                ],
                "name" => "Bosnia & Herzegovina",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BB",
                "alpha3" => "BRB",
                "countryCallingCodes" => [
                    "+1 246"
                ],
                "currencies" => [
                    "BBD"
                ],
                "ioc" => "BAR",
                "languages" => [
                    "eng"
                ],
                "name" => "Barbados",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BD",
                "alpha3" => "BGD",
                "countryCallingCodes" => [
                    "+880"
                ],
                "currencies" => [
                    "BDT"
                ],
                "ioc" => "BAN",
                "languages" => [
                    "ben"
                ],
                "name" => "Bangladesh",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BE",
                "alpha3" => "BEL",
                "countryCallingCodes" => [
                    "+32"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "BEL",
                "languages" => [
                    "dut",
                    "fre",
                    "ger"
                ],
                "name" => "Belgium",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BF",
                "alpha3" => "BFA",
                "countryCallingCodes" => [
                    "+226"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "BUR",
                "languages" => [
                    "fre"
                ],
                "name" => "Burkina Faso",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BG",
                "alpha3" => "BGR",
                "countryCallingCodes" => [
                    "+359"
                ],
                "currencies" => [
                    "BGN"
                ],
                "ioc" => "BUL",
                "languages" => [
                    "bul"
                ],
                "name" => "Bulgaria",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BH",
                "alpha3" => "BHR",
                "countryCallingCodes" => [
                    "+973"
                ],
                "currencies" => [
                    "BHD"
                ],
                "ioc" => "BRN",
                "languages" => [
                    "ara"
                ],
                "name" => "Bahrain",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BI",
                "alpha3" => "BDI",
                "countryCallingCodes" => [
                    "+257"
                ],
                "currencies" => [
                    "BIF"
                ],
                "ioc" => "BDI",
                "languages" => [
                    "fre"
                ],
                "name" => "Burundi",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BJ",
                "alpha3" => "BEN",
                "countryCallingCodes" => [
                    "+229"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "BEN",
                "languages" => [
                    "fre"
                ],
                "name" => "Benin",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BL",
                "alpha3" => "BLM",
                "countryCallingCodes" => [
                    "+590"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "Saint Barthélemy",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BM",
                "alpha3" => "BMU",
                "countryCallingCodes" => [
                    "+1 441"
                ],
                "currencies" => [
                    "BMD"
                ],
                "ioc" => "BER",
                "languages" => [
                    "eng"
                ],
                "name" => "Bermuda",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BN",
                "alpha3" => "BRN",
                "countryCallingCodes" => [
                    "+673"
                ],
                "currencies" => [
                    "BND"
                ],
                "ioc" => "BRU",
                "languages" => [
                    "may",
                    "eng"
                ],
                "name" => "Brunei Darussalam",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BO",
                "alpha3" => "BOL",
                "countryCallingCodes" => [
                    "+591"
                ],
                "currencies" => [
                    "BOB",
                    "BOV"
                ],
                "ioc" => "BOL",
                "languages" => [
                    "spa",
                    "aym",
                    "que"
                ],
                "name" => "Bolivia, Plurinational State Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BQ",
                "alpha3" => "BES",
                "countryCallingCodes" => [
                    "+599"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [
                    "dut"
                ],
                "name" => "Bonaire, Saint Eustatius And Saba",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BR",
                "alpha3" => "BRA",
                "countryCallingCodes" => [
                    "+55"
                ],
                "currencies" => [
                    "BRL"
                ],
                "ioc" => "BRA",
                "languages" => [
                    "por"
                ],
                "name" => "Brazil",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BS",
                "alpha3" => "BHS",
                "countryCallingCodes" => [
                    "+1 242"
                ],
                "currencies" => [
                    "BSD"
                ],
                "ioc" => "BAH",
                "languages" => [
                    "eng"
                ],
                "name" => "Bahamas",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BT",
                "alpha3" => "BTN",
                "countryCallingCodes" => [
                    "+975"
                ],
                "currencies" => [
                    "INR",
                    "BTN"
                ],
                "ioc" => "BHU",
                "languages" => [
                    "dzo"
                ],
                "name" => "Bhutan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BV",
                "alpha3" => "BVT",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "NOK"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Bouvet Island",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BW",
                "alpha3" => "BWA",
                "countryCallingCodes" => [
                    "+267"
                ],
                "currencies" => [
                    "BWP"
                ],
                "ioc" => "BOT",
                "languages" => [
                    "eng",
                    "tsn"
                ],
                "name" => "Botswana",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BY",
                "alpha3" => "BLR",
                "countryCallingCodes" => [
                    "+375"
                ],
                "currencies" => [
                    "BYR"
                ],
                "ioc" => "BLR",
                "languages" => [
                    "bel",
                    "rus"
                ],
                "name" => "Belarus",
                "status" => "assigned"
            ],
            [
                "alpha2" => "BZ",
                "alpha3" => "BLZ",
                "countryCallingCodes" => [
                    "+501"
                ],
                "currencies" => [
                    "BZD"
                ],
                "ioc" => "BIZ",
                "languages" => [
                    "eng"
                ],
                "name" => "Belize",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CA",
                "alpha3" => "CAN",
                "countryCallingCodes" => [
                    "+1"
                ],
                "currencies" => [
                    "CAD"
                ],
                "ioc" => "CAN",
                "languages" => [
                    "eng",
                    "fre"
                ],
                "name" => "Canada",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CC",
                "alpha3" => "CCK",
                "countryCallingCodes" => [
                    "+61"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Cocos (Keeling) Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CD",
                "alpha3" => "COD",
                "countryCallingCodes" => [
                    "+243"
                ],
                "currencies" => [
                    "CDF"
                ],
                "ioc" => "COD",
                "languages" => [
                    "fre",
                    "lin",
                    "kon",
                    "swa"
                ],
                "name" => "Democratic Republic Of Congo",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CF",
                "alpha3" => "CAF",
                "countryCallingCodes" => [
                    "+236"
                ],
                "currencies" => [
                    "XAF"
                ],
                "ioc" => "CAF",
                "languages" => [
                    "fre",
                    "sag"
                ],
                "name" => "Central African Republic",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CG",
                "alpha3" => "COG",
                "countryCallingCodes" => [
                    "+242"
                ],
                "currencies" => [
                    "XAF"
                ],
                "ioc" => "CGO",
                "languages" => [
                    "fre",
                    "lin"
                ],
                "name" => "Republic Of Congo",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CH",
                "alpha3" => "CHE",
                "countryCallingCodes" => [
                    "+41"
                ],
                "currencies" => [
                    "CHF",
                    "CHE",
                    "CHW"
                ],
                "ioc" => "SUI",
                "languages" => [
                    "ger",
                    "fre",
                    "ita",
                    "roh"
                ],
                "name" => "Switzerland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CI",
                "alpha3" => "CIV",
                "countryCallingCodes" => [
                    "+225"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "CIV",
                "languages" => [
                    "fre"
                ],
                "name" => "Cote d'Ivoire",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CK",
                "alpha3" => "COK",
                "countryCallingCodes" => [
                    "+682"
                ],
                "currencies" => [
                    "NZD"
                ],
                "ioc" => "COK",
                "languages" => [
                    "eng",
                    "mao"
                ],
                "name" => "Cook Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CL",
                "alpha3" => "CHL",
                "countryCallingCodes" => [
                    "+56"
                ],
                "currencies" => [
                    "CLP",
                    "CLF"
                ],
                "ioc" => "CHI",
                "languages" => [
                    "spa"
                ],
                "name" => "Chile",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CM",
                "alpha3" => "CMR",
                "countryCallingCodes" => [
                    "+237"
                ],
                "currencies" => [
                    "XAF"
                ],
                "ioc" => "CMR",
                "languages" => [
                    "eng",
                    "fre"
                ],
                "name" => "Cameroon",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CN",
                "alpha3" => "CHN",
                "countryCallingCodes" => [
                    "+86"
                ],
                "currencies" => [
                    "CNY"
                ],
                "ioc" => "CHN",
                "languages" => [
                    "chi"
                ],
                "name" => "China",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CO",
                "alpha3" => "COL",
                "countryCallingCodes" => [
                    "+57"
                ],
                "currencies" => [
                    "COP",
                    "COU"
                ],
                "ioc" => "COL",
                "languages" => [
                    "spa"
                ],
                "name" => "Colombia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CP",
                "alpha3" => "",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Clipperton Island",
                "status" => "reserved"
            ],
            [
                "alpha2" => "CR",
                "alpha3" => "CRI",
                "countryCallingCodes" => [
                    "+506"
                ],
                "currencies" => [
                    "CRC"
                ],
                "ioc" => "CRC",
                "languages" => [
                    "spa"
                ],
                "name" => "Costa Rica",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CU",
                "alpha3" => "CUB",
                "countryCallingCodes" => [
                    "+53"
                ],
                "currencies" => [
                    "CUP",
                    "CUC"
                ],
                "ioc" => "CUB",
                "languages" => [
                    "spa"
                ],
                "name" => "Cuba",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CV",
                "alpha3" => "CPV",
                "countryCallingCodes" => [
                    "+238"
                ],
                "currencies" => [
                    "CVE"
                ],
                "ioc" => "CPV",
                "languages" => [
                    "por"
                ],
                "name" => "Cabo Verde",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CW",
                "alpha3" => "CUW",
                "countryCallingCodes" => [
                    "+599"
                ],
                "currencies" => [
                    "ANG"
                ],
                "ioc" => "",
                "languages" => [
                    "dut"
                ],
                "name" => "Curacao",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CX",
                "alpha3" => "CXR",
                "countryCallingCodes" => [
                    "+61"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Christmas Island",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CY",
                "alpha3" => "CYP",
                "countryCallingCodes" => [
                    "+357"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "CYP",
                "languages" => [
                    "gre",
                    "tur"
                ],
                "name" => "Cyprus",
                "status" => "assigned"
            ],
            [
                "alpha2" => "CZ",
                "alpha3" => "CZE",
                "countryCallingCodes" => [
                    "+420"
                ],
                "currencies" => [
                    "CZK"
                ],
                "ioc" => "CZE",
                "languages" => [
                    "cze"
                ],
                "name" => "Czech Republic",
                "status" => "assigned"
            ],
            [
                "alpha2" => "DE",
                "alpha3" => "DEU",
                "countryCallingCodes" => [
                    "+49"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "GER",
                "languages" => [
                    "ger"
                ],
                "name" => "Germany",
                "status" => "assigned"
            ],
            [
                "alpha2" => "DG",
                "alpha3" => "",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Diego Garcia",
                "status" => "reserved"
            ],
            [
                "alpha2" => "DJ",
                "alpha3" => "DJI",
                "countryCallingCodes" => [
                    "+253"
                ],
                "currencies" => [
                    "DJF"
                ],
                "ioc" => "DJI",
                "languages" => [
                    "ara",
                    "fre"
                ],
                "name" => "Djibouti",
                "status" => "assigned"
            ],
            [
                "alpha2" => "DK",
                "alpha3" => "DNK",
                "countryCallingCodes" => [
                    "+45"
                ],
                "currencies" => [
                    "DKK"
                ],
                "ioc" => "DEN",
                "languages" => [
                    "dan"
                ],
                "name" => "Denmark",
                "status" => "assigned"
            ],
            [
                "alpha2" => "DM",
                "alpha3" => "DMA",
                "countryCallingCodes" => [
                    "+1 767"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "DMA",
                "languages" => [
                    "eng"
                ],
                "name" => "Dominica",
                "status" => "assigned"
            ],
            [
                "alpha2" => "DO",
                "alpha3" => "DOM",
                "countryCallingCodes" => [
                    "+1 809",
                    "+1 829",
                    "+1 849"
                ],
                "currencies" => [
                    "DOP"
                ],
                "ioc" => "DOM",
                "languages" => [
                    "spa"
                ],
                "name" => "Dominican Republic",
                "status" => "assigned"
            ],
            [
                "alpha2" => "DZ",
                "alpha3" => "DZA",
                "countryCallingCodes" => [
                    "+213"
                ],
                "currencies" => [
                    "DZD"
                ],
                "ioc" => "ALG",
                "languages" => [
                    "ara"
                ],
                "name" => "Algeria",
                "status" => "assigned"
            ],
            [
                "alpha2" => "EA",
                "alpha3" => "",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Ceuta, Mulilla",
                "status" => "reserved"
            ],
            [
                "alpha2" => "EC",
                "alpha3" => "ECU",
                "countryCallingCodes" => [
                    "+593"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "ECU",
                "languages" => [
                    "spa",
                    "que"
                ],
                "name" => "Ecuador",
                "status" => "assigned"
            ],
            [
                "alpha2" => "EE",
                "alpha3" => "EST",
                "countryCallingCodes" => [
                    "+372"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "EST",
                "languages" => [
                    "est"
                ],
                "name" => "Estonia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "EG",
                "alpha3" => "EGY",
                "countryCallingCodes" => [
                    "+20"
                ],
                "currencies" => [
                    "EGP"
                ],
                "ioc" => "EGY",
                "languages" => [
                    "ara"
                ],
                "name" => "Egypt",
                "status" => "assigned"
            ],
            [
                "alpha2" => "EH",
                "alpha3" => "ESH",
                "countryCallingCodes" => [
                    "+212"
                ],
                "currencies" => [
                    "MAD"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Western Sahara",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ER",
                "alpha3" => "ERI",
                "countryCallingCodes" => [
                    "+291"
                ],
                "currencies" => [
                    "ERN"
                ],
                "ioc" => "ERI",
                "languages" => [
                    "eng",
                    "ara",
                    "tir"
                ],
                "name" => "Eritrea",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ES",
                "alpha3" => "ESP",
                "countryCallingCodes" => [
                    "+34"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "ESP",
                "languages" => [
                    "spa"
                ],
                "name" => "Spain",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ET",
                "alpha3" => "ETH",
                "countryCallingCodes" => [
                    "+251"
                ],
                "currencies" => [
                    "ETB"
                ],
                "ioc" => "ETH",
                "languages" => [
                    "amh"
                ],
                "name" => "Ethiopia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "EU",
                "alpha3" => "",
                "countryCallingCodes" => [
                    "+388"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "European Union",
                "status" => "reserved"
            ],
            [
                "alpha2" => "FI",
                "alpha3" => "FIN",
                "countryCallingCodes" => [
                    "+358"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "FIN",
                "languages" => [
                    "fin",
                    "swe"
                ],
                "name" => "Finland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "FJ",
                "alpha3" => "FJI",
                "countryCallingCodes" => [
                    "+679"
                ],
                "currencies" => [
                    "FJD"
                ],
                "ioc" => "FIJ",
                "languages" => [
                    "eng",
                    "fij"
                ],
                "name" => "Fiji",
                "status" => "assigned"
            ],
            [
                "alpha2" => "FK",
                "alpha3" => "FLK",
                "countryCallingCodes" => [
                    "+500"
                ],
                "currencies" => [
                    "FKP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Falkland Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "FM",
                "alpha3" => "FSM",
                "countryCallingCodes" => [
                    "+691"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Micronesia, Federated States Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "FO",
                "alpha3" => "FRO",
                "countryCallingCodes" => [
                    "+298"
                ],
                "currencies" => [
                    "DKK"
                ],
                "ioc" => "FAI",
                "languages" => [
                    "fao",
                    "dan"
                ],
                "name" => "Faroe Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "FR",
                "alpha3" => "FRA",
                "countryCallingCodes" => [
                    "+33"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "FRA",
                "languages" => [
                    "fre"
                ],
                "name" => "France",
                "status" => "assigned"
            ],
            [
                "alpha2" => "FX",
                "alpha3" => "",
                "countryCallingCodes" => [
                    "+241"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "France, Metropolitan",
                "status" => "reserved"
            ],
            [
                "alpha2" => "GA",
                "alpha3" => "GAB",
                "countryCallingCodes" => [
                    "+241"
                ],
                "currencies" => [
                    "XAF"
                ],
                "ioc" => "GAB",
                "languages" => [
                    "fre"
                ],
                "name" => "Gabon",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GB",
                "alpha3" => "GBR",
                "countryCallingCodes" => [
                    "+44"
                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "GBR",
                "languages" => [
                    "eng",
                    "cor",
                    "gle",
                    "gla",
                    "wel"
                ],
                "name" => "United Kingdom",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GD",
                "alpha3" => "GRD",
                "countryCallingCodes" => [
                    "+473"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "GRN",
                "languages" => [
                    "eng"
                ],
                "name" => "Grenada",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GE",
                "alpha3" => "GEO",
                "countryCallingCodes" => [
                    "+995"
                ],
                "currencies" => [
                    "GEL"
                ],
                "ioc" => "GEO",
                "languages" => [
                    "geo"
                ],
                "name" => "Georgia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GF",
                "alpha3" => "GUF",
                "countryCallingCodes" => [
                    "+594"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "French Guiana",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GG",
                "alpha3" => "GGY",
                "countryCallingCodes" => [
                    "+44"
                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "GCI",
                "languages" => [
                    "fre"
                ],
                "name" => "Guernsey",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GH",
                "alpha3" => "GHA",
                "countryCallingCodes" => [
                    "+233"
                ],
                "currencies" => [
                    "GHS"
                ],
                "ioc" => "GHA",
                "languages" => [
                    "eng"
                ],
                "name" => "Ghana",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GI",
                "alpha3" => "GIB",
                "countryCallingCodes" => [
                    "+350"
                ],
                "currencies" => [
                    "GIP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Gibraltar",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GL",
                "alpha3" => "GRL",
                "countryCallingCodes" => [
                    "+299"
                ],
                "currencies" => [
                    "DKK"
                ],
                "ioc" => "",
                "languages" => [
                    "kal"
                ],
                "name" => "Greenland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GM",
                "alpha3" => "GMB",
                "countryCallingCodes" => [
                    "+220"
                ],
                "currencies" => [
                    "GMD"
                ],
                "ioc" => "GAM",
                "languages" => [
                    "eng"
                ],
                "name" => "Gambia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GN",
                "alpha3" => "GIN",
                "countryCallingCodes" => [
                    "+224"
                ],
                "currencies" => [
                    "GNF"
                ],
                "ioc" => "GUI",
                "languages" => [
                    "fre"
                ],
                "name" => "Guinea",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GP",
                "alpha3" => "GLP",
                "countryCallingCodes" => [
                    "+590"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "Guadeloupe",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GQ",
                "alpha3" => "GNQ",
                "countryCallingCodes" => [
                    "+240"
                ],
                "currencies" => [
                    "XAF"
                ],
                "ioc" => "GEQ",
                "languages" => [
                    "spa",
                    "fre",
                    "por"
                ],
                "name" => "Equatorial Guinea",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GR",
                "alpha3" => "GRC",
                "countryCallingCodes" => [
                    "+30"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "GRE",
                "languages" => [
                    "gre"
                ],
                "name" => "Greece",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GS",
                "alpha3" => "SGS",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "South Georgia And The South Sandwich Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GT",
                "alpha3" => "GTM",
                "countryCallingCodes" => [
                    "+502"
                ],
                "currencies" => [
                    "GTQ"
                ],
                "ioc" => "GUA",
                "languages" => [
                    "spa"
                ],
                "name" => "Guatemala",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GU",
                "alpha3" => "GUM",
                "countryCallingCodes" => [
                    "+1 671"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "GUM",
                "languages" => [
                    "eng"
                ],
                "name" => "Guam",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GW",
                "alpha3" => "GNB",
                "countryCallingCodes" => [
                    "+245"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "GBS",
                "languages" => [
                    "por"
                ],
                "name" => "Guinea-bissau",
                "status" => "assigned"
            ],
            [
                "alpha2" => "GY",
                "alpha3" => "GUY",
                "countryCallingCodes" => [
                    "+592"
                ],
                "currencies" => [
                    "GYD"
                ],
                "ioc" => "GUY",
                "languages" => [
                    "eng"
                ],
                "name" => "Guyana",
                "status" => "assigned"
            ],
            [
                "alpha2" => "HK",
                "alpha3" => "HKG",
                "countryCallingCodes" => [
                    "+852"
                ],
                "currencies" => [
                    "HKD"
                ],
                "ioc" => "HKG",
                "languages" => [
                    "chi",
                    "eng"
                ],
                "name" => "Hong Kong",
                "status" => "assigned"
            ],
            [
                "alpha2" => "HM",
                "alpha3" => "HMD",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Heard Island And McDonald Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "HN",
                "alpha3" => "HND",
                "countryCallingCodes" => [
                    "+504"
                ],
                "currencies" => [
                    "HNL"
                ],
                "ioc" => "HON",
                "languages" => [
                    "spa"
                ],
                "name" => "Honduras",
                "status" => "assigned"
            ],
            [
                "alpha2" => "HR",
                "alpha3" => "HRV",
                "countryCallingCodes" => [
                    "+385"
                ],
                "currencies" => [
                    "HRK"
                ],
                "ioc" => "CRO",
                "languages" => [
                    "hrv"
                ],
                "name" => "Croatia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "HT",
                "alpha3" => "HTI",
                "countryCallingCodes" => [
                    "+509"
                ],
                "currencies" => [
                    "HTG",
                    "USD"
                ],
                "ioc" => "HAI",
                "languages" => [
                    "fre",
                    "hat"
                ],
                "name" => "Haiti",
                "status" => "assigned"
            ],
            [
                "alpha2" => "HU",
                "alpha3" => "HUN",
                "countryCallingCodes" => [
                    "+36"
                ],
                "currencies" => [
                    "HUF"
                ],
                "ioc" => "HUN",
                "languages" => [
                    "hun"
                ],
                "name" => "Hungary",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IC",
                "alpha3" => "",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Canary Islands",
                "status" => "reserved"
            ],
            [
                "alpha2" => "ID",
                "alpha3" => "IDN",
                "countryCallingCodes" => [
                    "+62"
                ],
                "currencies" => [
                    "IDR"
                ],
                "ioc" => "INA",
                "languages" => [
                    "ind"
                ],
                "name" => "Indonesia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IE",
                "alpha3" => "IRL",
                "countryCallingCodes" => [
                    "+353"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "IRL",
                "languages" => [
                    "eng",
                    "gle"
                ],
                "name" => "Ireland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IL",
                "alpha3" => "ISR",
                "countryCallingCodes" => [
                    "+972"
                ],
                "currencies" => [
                    "ILS"
                ],
                "ioc" => "ISR",
                "languages" => [
                    "heb",
                    "ara",
                    "eng"
                ],
                "name" => "Israel",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IM",
                "alpha3" => "IMN",
                "countryCallingCodes" => [
                    "+44"
                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng",
                    "glv"
                ],
                "name" => "Isle Of Man",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IN",
                "alpha3" => "IND",
                "countryCallingCodes" => [
                    "+91"
                ],
                "currencies" => [
                    "INR"
                ],
                "ioc" => "IND",
                "languages" => [
                    "eng",
                    "hin"
                ],
                "name" => "India",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IO",
                "alpha3" => "IOT",
                "countryCallingCodes" => [
                    "+246"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "British Indian Ocean Territory",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IQ",
                "alpha3" => "IRQ",
                "countryCallingCodes" => [
                    "+964"
                ],
                "currencies" => [
                    "IQD"
                ],
                "ioc" => "IRQ",
                "languages" => [
                    "ara",
                    "kur"
                ],
                "name" => "Iraq",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IR",
                "alpha3" => "IRN",
                "countryCallingCodes" => [
                    "+98"
                ],
                "currencies" => [
                    "IRR"
                ],
                "ioc" => "IRI",
                "languages" => [
                    "per"
                ],
                "name" => "Iran, Islamic Republic Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IS",
                "alpha3" => "ISL",
                "countryCallingCodes" => [
                    "+354"
                ],
                "currencies" => [
                    "ISK"
                ],
                "ioc" => "ISL",
                "languages" => [
                    "ice"
                ],
                "name" => "Iceland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "IT",
                "alpha3" => "ITA",
                "countryCallingCodes" => [
                    "+39"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "ITA",
                "languages" => [
                    "ita"
                ],
                "name" => "Italy",
                "status" => "assigned"
            ],
            [
                "alpha2" => "JE",
                "alpha3" => "JEY",
                "countryCallingCodes" => [
                    "+44"
                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "JCI",
                "languages" => [
                    "eng",
                    "fre"
                ],
                "name" => "Jersey",
                "status" => "assigned"
            ],
            [
                "alpha2" => "JM",
                "alpha3" => "JAM",
                "countryCallingCodes" => [
                    "+1 876"
                ],
                "currencies" => [
                    "JMD"
                ],
                "ioc" => "JAM",
                "languages" => [
                    "eng"
                ],
                "name" => "Jamaica",
                "status" => "assigned"
            ],
            [
                "alpha2" => "JO",
                "alpha3" => "JOR",
                "countryCallingCodes" => [
                    "+962"
                ],
                "currencies" => [
                    "JOD"
                ],
                "ioc" => "JOR",
                "languages" => [
                    "ara"
                ],
                "name" => "Jordan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "JP",
                "alpha3" => "JPN",
                "countryCallingCodes" => [
                    "+81"
                ],
                "currencies" => [
                    "JPY"
                ],
                "ioc" => "JPN",
                "languages" => [
                    "jpn"
                ],
                "name" => "Japan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KE",
                "alpha3" => "KEN",
                "countryCallingCodes" => [
                    "+254"
                ],
                "currencies" => [
                    "KES"
                ],
                "ioc" => "KEN",
                "languages" => [
                    "eng",
                    "swa"
                ],
                "name" => "Kenya",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KG",
                "alpha3" => "KGZ",
                "countryCallingCodes" => [
                    "+996"
                ],
                "currencies" => [
                    "KGS"
                ],
                "ioc" => "KGZ",
                "languages" => [
                    "rus"
                ],
                "name" => "Kyrgyzstan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KH",
                "alpha3" => "KHM",
                "countryCallingCodes" => [
                    "+855"
                ],
                "currencies" => [
                    "KHR"
                ],
                "ioc" => "CAM",
                "languages" => [
                    "khm"
                ],
                "name" => "Cambodia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KI",
                "alpha3" => "KIR",
                "countryCallingCodes" => [
                    "+686"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "KIR",
                "languages" => [
                    "eng"
                ],
                "name" => "Kiribati",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KM",
                "alpha3" => "COM",
                "countryCallingCodes" => [
                    "+269"
                ],
                "currencies" => [
                    "KMF"
                ],
                "ioc" => "COM",
                "languages" => [
                    "ara",
                    "fre"
                ],
                "name" => "Comoros",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KN",
                "alpha3" => "KNA",
                "countryCallingCodes" => [
                    "+1 869"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "SKN",
                "languages" => [
                    "eng"
                ],
                "name" => "Saint Kitts And Nevis",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KP",
                "alpha3" => "PRK",
                "countryCallingCodes" => [
                    "+850"
                ],
                "currencies" => [
                    "KPW"
                ],
                "ioc" => "PRK",
                "languages" => [
                    "kor"
                ],
                "name" => "Korea, Democratic People's Republic Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KR",
                "alpha3" => "KOR",
                "countryCallingCodes" => [
                    "+82"
                ],
                "currencies" => [
                    "KRW"
                ],
                "ioc" => "KOR",
                "languages" => [
                    "kor"
                ],
                "name" => "Korea, Republic Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KW",
                "alpha3" => "KWT",
                "countryCallingCodes" => [
                    "+965"
                ],
                "currencies" => [
                    "KWD"
                ],
                "ioc" => "KUW",
                "languages" => [
                    "ara"
                ],
                "name" => "Kuwait",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KY",
                "alpha3" => "CYM",
                "countryCallingCodes" => [
                    "+1 345"
                ],
                "currencies" => [
                    "KYD"
                ],
                "ioc" => "CAY",
                "languages" => [
                    "eng"
                ],
                "name" => "Cayman Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "KZ",
                "alpha3" => "KAZ",
                "countryCallingCodes" => [
                    "+7",
                    "+7 6",
                    "+7 7"
                ],
                "currencies" => [
                    "KZT"
                ],
                "ioc" => "KAZ",
                "languages" => [
                    "kaz",
                    "rus"
                ],
                "name" => "Kazakhstan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LA",
                "alpha3" => "LAO",
                "countryCallingCodes" => [
                    "+856"
                ],
                "currencies" => [
                    "LAK"
                ],
                "ioc" => "LAO",
                "languages" => [
                    "lao"
                ],
                "name" => "Lao People's Democratic Republic",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LB",
                "alpha3" => "LBN",
                "countryCallingCodes" => [
                    "+961"
                ],
                "currencies" => [
                    "LBP"
                ],
                "ioc" => "LIB",
                "languages" => [
                    "ara",
                    "arm"
                ],
                "name" => "Lebanon",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LC",
                "alpha3" => "LCA",
                "countryCallingCodes" => [
                    "+1 758"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "LCA",
                "languages" => [
                    "eng"
                ],
                "name" => "Saint Lucia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LI",
                "alpha3" => "LIE",
                "countryCallingCodes" => [
                    "+423"
                ],
                "currencies" => [
                    "CHF"
                ],
                "ioc" => "LIE",
                "languages" => [
                    "ger"
                ],
                "name" => "Liechtenstein",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LK",
                "alpha3" => "LKA",
                "countryCallingCodes" => [
                    "+94"
                ],
                "currencies" => [
                    "LKR"
                ],
                "ioc" => "SRI",
                "languages" => [
                    "sin",
                    "tam"
                ],
                "name" => "Sri Lanka",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LR",
                "alpha3" => "LBR",
                "countryCallingCodes" => [
                    "+231"
                ],
                "currencies" => [
                    "LRD"
                ],
                "ioc" => "LBR",
                "languages" => [
                    "eng"
                ],
                "name" => "Liberia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LS",
                "alpha3" => "LSO",
                "countryCallingCodes" => [
                    "+266"
                ],
                "currencies" => [
                    "LSL",
                    "ZAR"
                ],
                "ioc" => "LES",
                "languages" => [
                    "eng",
                    "sot"
                ],
                "name" => "Lesotho",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LT",
                "alpha3" => "LTU",
                "countryCallingCodes" => [
                    "+370"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "LTU",
                "languages" => [
                    "lit"
                ],
                "name" => "Lithuania",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LU",
                "alpha3" => "LUX",
                "countryCallingCodes" => [
                    "+352"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "LUX",
                "languages" => [
                    "fre",
                    "ger",
                    "ltz"
                ],
                "name" => "Luxembourg",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LV",
                "alpha3" => "LVA",
                "countryCallingCodes" => [
                    "+371"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "LAT",
                "languages" => [
                    "lav"
                ],
                "name" => "Latvia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "LY",
                "alpha3" => "LBY",
                "countryCallingCodes" => [
                    "+218"
                ],
                "currencies" => [
                    "LYD"
                ],
                "ioc" => "LBA",
                "languages" => [
                    "ara"
                ],
                "name" => "Libya",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MA",
                "alpha3" => "MAR",
                "countryCallingCodes" => [
                    "+212"
                ],
                "currencies" => [
                    "MAD"
                ],
                "ioc" => "MAR",
                "languages" => [
                    "ara"
                ],
                "name" => "Morocco",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MC",
                "alpha3" => "MCO",
                "countryCallingCodes" => [
                    "+377"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "MON",
                "languages" => [
                    "fre"
                ],
                "name" => "Monaco",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MD",
                "alpha3" => "MDA",
                "countryCallingCodes" => [
                    "+373"
                ],
                "currencies" => [
                    "MDL"
                ],
                "ioc" => "MDA",
                "languages" => [
                    "rum"
                ],
                "name" => "Moldova",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ME",
                "alpha3" => "MNE",
                "countryCallingCodes" => [
                    "+382"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "MNE",
                "languages" => [
                    "mot"
                ],
                "name" => "Montenegro",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MF",
                "alpha3" => "MAF",
                "countryCallingCodes" => [
                    "+590"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "Saint Martin",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MG",
                "alpha3" => "MDG",
                "countryCallingCodes" => [
                    "+261"
                ],
                "currencies" => [
                    "MGA"
                ],
                "ioc" => "MAD",
                "languages" => [
                    "fre",
                    "mlg"
                ],
                "name" => "Madagascar",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MH",
                "alpha3" => "MHL",
                "countryCallingCodes" => [
                    "+692"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "MHL",
                "languages" => [
                    "eng",
                    "mah"
                ],
                "name" => "Marshall Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MK",
                "alpha3" => "MKD",
                "countryCallingCodes" => [
                    "+389"
                ],
                "currencies" => [
                    "MKD"
                ],
                "ioc" => "MKD",
                "languages" => [
                    "mac"
                ],
                "name" => "Macedonia, The Former Yugoslav Republic Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ML",
                "alpha3" => "MLI",
                "countryCallingCodes" => [
                    "+223"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "MLI",
                "languages" => [
                    "fre"
                ],
                "name" => "Mali",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MM",
                "alpha3" => "MMR",
                "countryCallingCodes" => [
                    "+95"
                ],
                "currencies" => [
                    "MMK"
                ],
                "ioc" => "MYA",
                "languages" => [
                    "bur"
                ],
                "name" => "Myanmar",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MN",
                "alpha3" => "MNG",
                "countryCallingCodes" => [
                    "+976"
                ],
                "currencies" => [
                    "MNT"
                ],
                "ioc" => "MGL",
                "languages" => [
                    "mon"
                ],
                "name" => "Mongolia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MO",
                "alpha3" => "MAC",
                "countryCallingCodes" => [
                    "+853"
                ],
                "currencies" => [
                    "MOP"
                ],
                "ioc" => "MAC",
                "languages" => [
                    "chi",
                    "por"
                ],
                "name" => "Macao",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MP",
                "alpha3" => "MNP",
                "countryCallingCodes" => [
                    "+1 670"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Northern Mariana Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MQ",
                "alpha3" => "MTQ",
                "countryCallingCodes" => [
                    "+596"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Martinique",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MR",
                "alpha3" => "MRT",
                "countryCallingCodes" => [
                    "+222"
                ],
                "currencies" => [
                    "MRO"
                ],
                "ioc" => "MTN",
                "languages" => [
                    "ara",
                    "fre"
                ],
                "name" => "Mauritania",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MS",
                "alpha3" => "MSR",
                "countryCallingCodes" => [
                    "+1 664"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Montserrat",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MT",
                "alpha3" => "MLT",
                "countryCallingCodes" => [
                    "+356"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "MLT",
                "languages" => [
                    "mlt",
                    "eng"
                ],
                "name" => "Malta",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MU",
                "alpha3" => "MUS",
                "countryCallingCodes" => [
                    "+230"
                ],
                "currencies" => [
                    "MUR"
                ],
                "ioc" => "MRI",
                "languages" => [
                    "eng",
                    "fre"
                ],
                "name" => "Mauritius",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MV",
                "alpha3" => "MDV",
                "countryCallingCodes" => [
                    "+960"
                ],
                "currencies" => [
                    "MVR"
                ],
                "ioc" => "MDV",
                "languages" => [
                    "div"
                ],
                "name" => "Maldives",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MW",
                "alpha3" => "MWI",
                "countryCallingCodes" => [
                    "+265"
                ],
                "currencies" => [
                    "MWK"
                ],
                "ioc" => "MAW",
                "languages" => [
                    "eng",
                    "nya"
                ],
                "name" => "Malawi",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MX",
                "alpha3" => "MEX",
                "countryCallingCodes" => [
                    "+52"
                ],
                "currencies" => [
                    "MXN",
                    "MXV"
                ],
                "ioc" => "MEX",
                "languages" => [
                    "spa"
                ],
                "name" => "Mexico",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MY",
                "alpha3" => "MYS",
                "countryCallingCodes" => [
                    "+60"
                ],
                "currencies" => [
                    "MYR"
                ],
                "ioc" => "MAS",
                "languages" => [
                    "msa",
                    "eng"
                ],
                "name" => "Malaysia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "MZ",
                "alpha3" => "MOZ",
                "countryCallingCodes" => [
                    "+258"
                ],
                "currencies" => [
                    "MZN"
                ],
                "ioc" => "MOZ",
                "languages" => [
                    "por"
                ],
                "name" => "Mozambique",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NA",
                "alpha3" => "NAM",
                "countryCallingCodes" => [
                    "+264"
                ],
                "currencies" => [
                    "NAD",
                    "ZAR"
                ],
                "ioc" => "NAM",
                "languages" => [
                    "eng"
                ],
                "name" => "Namibia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NC",
                "alpha3" => "NCL",
                "countryCallingCodes" => [
                    "+687"
                ],
                "currencies" => [
                    "XPF"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "New Caledonia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NE",
                "alpha3" => "NER",
                "countryCallingCodes" => [
                    "+227"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "NIG",
                "languages" => [
                    "fre"
                ],
                "name" => "Niger",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NF",
                "alpha3" => "NFK",
                "countryCallingCodes" => [
                    "+672"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Norfolk Island",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NG",
                "alpha3" => "NGA",
                "countryCallingCodes" => [
                    "+234"
                ],
                "currencies" => [
                    "NGN"
                ],
                "ioc" => "NGR",
                "languages" => [
                    "eng"
                ],
                "name" => "Nigeria",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NI",
                "alpha3" => "NIC",
                "countryCallingCodes" => [
                    "+505"
                ],
                "currencies" => [
                    "NIO"
                ],
                "ioc" => "NCA",
                "languages" => [
                    "spa"
                ],
                "name" => "Nicaragua",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NL",
                "alpha3" => "NLD",
                "countryCallingCodes" => [
                    "+31"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "NED",
                "languages" => [
                    "dut"
                ],
                "name" => "Netherlands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NO",
                "alpha3" => "NOR",
                "countryCallingCodes" => [
                    "+47"
                ],
                "currencies" => [
                    "NOK"
                ],
                "ioc" => "NOR",
                "languages" => [
                    "nor"
                ],
                "name" => "Norway",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NP",
                "alpha3" => "NPL",
                "countryCallingCodes" => [
                    "+977"
                ],
                "currencies" => [
                    "NPR"
                ],
                "ioc" => "NEP",
                "languages" => [
                    "nep"
                ],
                "name" => "Nepal",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NR",
                "alpha3" => "NRU",
                "countryCallingCodes" => [
                    "+674"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "NRU",
                "languages" => [
                    "eng",
                    "nau"
                ],
                "name" => "Nauru",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NU",
                "alpha3" => "NIU",
                "countryCallingCodes" => [
                    "+683"
                ],
                "currencies" => [
                    "NZD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Niue",
                "status" => "assigned"
            ],
            [
                "alpha2" => "NZ",
                "alpha3" => "NZL",
                "countryCallingCodes" => [
                    "+64"
                ],
                "currencies" => [
                    "NZD"
                ],
                "ioc" => "NZL",
                "languages" => [
                    "eng"
                ],
                "name" => "New Zealand",
                "status" => "assigned"
            ],
            [
                "alpha2" => "OM",
                "alpha3" => "OMN",
                "countryCallingCodes" => [
                    "+968"
                ],
                "currencies" => [
                    "OMR"
                ],
                "ioc" => "OMA",
                "languages" => [
                    "ara"
                ],
                "name" => "Oman",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PA",
                "alpha3" => "PAN",
                "countryCallingCodes" => [
                    "+507"
                ],
                "currencies" => [
                    "PAB",
                    "USD"
                ],
                "ioc" => "PAN",
                "languages" => [
                    "spa"
                ],
                "name" => "Panama",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PE",
                "alpha3" => "PER",
                "countryCallingCodes" => [
                    "+51"
                ],
                "currencies" => [
                    "PEN"
                ],
                "ioc" => "PER",
                "languages" => [
                    "spa",
                    "aym",
                    "que"
                ],
                "name" => "Peru",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PF",
                "alpha3" => "PYF",
                "countryCallingCodes" => [
                    "+689"
                ],
                "currencies" => [
                    "XPF"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "French Polynesia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PG",
                "alpha3" => "PNG",
                "countryCallingCodes" => [
                    "+675"
                ],
                "currencies" => [
                    "PGK"
                ],
                "ioc" => "PNG",
                "languages" => [
                    "eng"
                ],
                "name" => "Papua New Guinea",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PH",
                "alpha3" => "PHL",
                "countryCallingCodes" => [
                    "+63"
                ],
                "currencies" => [
                    "PHP"
                ],
                "ioc" => "PHI",
                "languages" => [
                    "eng"
                ],
                "name" => "Philippines",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PK",
                "alpha3" => "PAK",
                "countryCallingCodes" => [
                    "+92"
                ],
                "currencies" => [
                    "PKR"
                ],
                "ioc" => "PAK",
                "languages" => [
                    "urd",
                    "eng"
                ],
                "name" => "Pakistan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PL",
                "alpha3" => "POL",
                "countryCallingCodes" => [
                    "+48"
                ],
                "currencies" => [
                    "PLN"
                ],
                "ioc" => "POL",
                "languages" => [
                    "pol"
                ],
                "name" => "Poland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PM",
                "alpha3" => "SPM",
                "countryCallingCodes" => [
                    "+508"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Saint Pierre And Miquelon",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PN",
                "alpha3" => "PCN",
                "countryCallingCodes" => [
                    "+872"
                ],
                "currencies" => [
                    "NZD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Pitcairn",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PR",
                "alpha3" => "PRI",
                "countryCallingCodes" => [
                    "+1 787",
                    "+1 939"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "PUR",
                "languages" => [
                    "spa",
                    "eng"
                ],
                "name" => "Puerto Rico",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PS",
                "alpha3" => "PSE",
                "countryCallingCodes" => [
                    "+970"
                ],
                "currencies" => [
                    "JOD",
                    "EGP",
                    "ILS"
                ],
                "ioc" => "PLE",
                "languages" => [
                    "ara"
                ],
                "name" => "Palestinian Territory, Occupied",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PT",
                "alpha3" => "PRT",
                "countryCallingCodes" => [
                    "+351"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "POR",
                "languages" => [
                    "por"
                ],
                "name" => "Portugal",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PW",
                "alpha3" => "PLW",
                "countryCallingCodes" => [
                    "+680"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "PLW",
                "languages" => [
                    "eng"
                ],
                "name" => "Palau",
                "status" => "assigned"
            ],
            [
                "alpha2" => "PY",
                "alpha3" => "PRY",
                "countryCallingCodes" => [
                    "+595"
                ],
                "currencies" => [
                    "PYG"
                ],
                "ioc" => "PAR",
                "languages" => [
                    "spa"
                ],
                "name" => "Paraguay",
                "status" => "assigned"
            ],
            [
                "alpha2" => "QA",
                "alpha3" => "QAT",
                "countryCallingCodes" => [
                    "+974"
                ],
                "currencies" => [
                    "QAR"
                ],
                "ioc" => "QAT",
                "languages" => [
                    "ara"
                ],
                "name" => "Qatar",
                "status" => "assigned"
            ],
            [
                "alpha2" => "RE",
                "alpha3" => "REU",
                "countryCallingCodes" => [
                    "+262"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "Reunion",
                "status" => "assigned"
            ],
            [
                "alpha2" => "RO",
                "alpha3" => "ROU",
                "countryCallingCodes" => [
                    "+40"
                ],
                "currencies" => [
                    "RON"
                ],
                "ioc" => "ROU",
                "languages" => [
                    "rum"
                ],
                "name" => "Romania",
                "status" => "assigned"
            ],
            [
                "alpha2" => "RS",
                "alpha3" => "SRB",
                "countryCallingCodes" => [
                    "+381"
                ],
                "currencies" => [
                    "RSD"
                ],
                "ioc" => "SRB",
                "languages" => [
                    "srp"
                ],
                "name" => "Serbia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "RU",
                "alpha3" => "RUS",
                "countryCallingCodes" => [
                    "+7",
                    "+7 3",
                    "+7 4",
                    "+7 8"
                ],
                "currencies" => [
                    "RUB"
                ],
                "ioc" => "RUS",
                "languages" => [
                    "rus"
                ],
                "name" => "Russian Federation",
                "status" => "assigned"
            ],
            [
                "alpha2" => "RW",
                "alpha3" => "RWA",
                "countryCallingCodes" => [
                    "+250"
                ],
                "currencies" => [
                    "RWF"
                ],
                "ioc" => "RWA",
                "languages" => [
                    "eng",
                    "fre",
                    "kin"
                ],
                "name" => "Rwanda",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SA",
                "alpha3" => "SAU",
                "countryCallingCodes" => [
                    "+966"
                ],
                "currencies" => [
                    "SAR"
                ],
                "ioc" => "KSA",
                "languages" => [
                    "ara"
                ],
                "name" => "Saudi Arabia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SB",
                "alpha3" => "SLB",
                "countryCallingCodes" => [
                    "+677"
                ],
                "currencies" => [
                    "SBD"
                ],
                "ioc" => "SOL",
                "languages" => [
                    "eng"
                ],
                "name" => "Solomon Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SC",
                "alpha3" => "SYC",
                "countryCallingCodes" => [
                    "+248"
                ],
                "currencies" => [
                    "SCR"
                ],
                "ioc" => "SEY",
                "languages" => [
                    "eng",
                    "fre"
                ],
                "name" => "Seychelles",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SD",
                "alpha3" => "SDN",
                "countryCallingCodes" => [
                    "+249"
                ],
                "currencies" => [
                    "SDG"
                ],
                "ioc" => "SUD",
                "languages" => [
                    "ara",
                    "eng"
                ],
                "name" => "Sudan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SE",
                "alpha3" => "SWE",
                "countryCallingCodes" => [
                    "+46"
                ],
                "currencies" => [
                    "SEK"
                ],
                "ioc" => "SWE",
                "languages" => [
                    "swe"
                ],
                "name" => "Sweden",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SG",
                "alpha3" => "SGP",
                "countryCallingCodes" => [
                    "+65"
                ],
                "currencies" => [
                    "SGD"
                ],
                "ioc" => "SIN",
                "languages" => [
                    "eng",
                    "chi",
                    "may",
                    "tam"
                ],
                "name" => "Singapore",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SH",
                "alpha3" => "SHN",
                "countryCallingCodes" => [
                    "+290"
                ],
                "currencies" => [
                    "SHP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Saint Helena, Ascension And Tristan Da Cunha",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SI",
                "alpha3" => "SVN",
                "countryCallingCodes" => [
                    "+386"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "SLO",
                "languages" => [
                    "slv"
                ],
                "name" => "Slovenia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SJ",
                "alpha3" => "SJM",
                "countryCallingCodes" => [
                    "+47"
                ],
                "currencies" => [
                    "NOK"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Svalbard And Jan Mayen",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SK",
                "alpha3" => "SVK",
                "countryCallingCodes" => [
                    "+421"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "SVK",
                "languages" => [
                    "slo"
                ],
                "name" => "Slovakia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SL",
                "alpha3" => "SLE",
                "countryCallingCodes" => [
                    "+232"
                ],
                "currencies" => [
                    "SLL"
                ],
                "ioc" => "SLE",
                "languages" => [
                    "eng"
                ],
                "name" => "Sierra Leone",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SM",
                "alpha3" => "SMR",
                "countryCallingCodes" => [
                    "+378"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "SMR",
                "languages" => [
                    "ita"
                ],
                "name" => "San Marino",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SN",
                "alpha3" => "SEN",
                "countryCallingCodes" => [
                    "+221"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "SEN",
                "languages" => [
                    "fre"
                ],
                "name" => "Senegal",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SO",
                "alpha3" => "SOM",
                "countryCallingCodes" => [
                    "+252"
                ],
                "currencies" => [
                    "SOS"
                ],
                "ioc" => "SOM",
                "languages" => [
                    "som"
                ],
                "name" => "Somalia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SR",
                "alpha3" => "SUR",
                "countryCallingCodes" => [
                    "+597"
                ],
                "currencies" => [
                    "SRD"
                ],
                "ioc" => "SUR",
                "languages" => [
                    "dut"
                ],
                "name" => "Suriname",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SS",
                "alpha3" => "SSD",
                "countryCallingCodes" => [
                    "+211"
                ],
                "currencies" => [
                    "SSP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "South Sudan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ST",
                "alpha3" => "STP",
                "countryCallingCodes" => [
                    "+239"
                ],
                "currencies" => [
                    "STD"
                ],
                "ioc" => "STP",
                "languages" => [
                    "por"
                ],
                "name" => "São Tomé and Príncipe",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SU",
                "alpha3" => "",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "RUB"
                ],
                "ioc" => "",
                "languages" => [
                    "rus"
                ],
                "name" => "USSR",
                "status" => "reserved"
            ],
            [
                "alpha2" => "SV",
                "alpha3" => "SLV",
                "countryCallingCodes" => [
                    "+503"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "ESA",
                "languages" => [
                    "spa"
                ],
                "name" => "El Salvador",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SX",
                "alpha3" => "SXM",
                "countryCallingCodes" => [
                    "+1 721"
                ],
                "currencies" => [
                    "ANG"
                ],
                "ioc" => "",
                "languages" => [
                    "dut"
                ],
                "name" => "Sint Maarten",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SY",
                "alpha3" => "SYR",
                "countryCallingCodes" => [
                    "+963"
                ],
                "currencies" => [
                    "SYP"
                ],
                "ioc" => "SYR",
                "languages" => [
                    "ara"
                ],
                "name" => "Syrian Arab Republic",
                "status" => "assigned"
            ],
            [
                "alpha2" => "SZ",
                "alpha3" => "SWZ",
                "countryCallingCodes" => [
                    "+268"
                ],
                "currencies" => [
                    "SZL"
                ],
                "ioc" => "SWZ",
                "languages" => [
                    "eng",
                    "ssw"
                ],
                "name" => "Swaziland",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TA",
                "alpha3" => "",
                "countryCallingCodes" => [
                    "+290"
                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "",
                "languages" => [

                ],
                "name" => "Tristan de Cunha",
                "status" => "reserved"
            ],
            [
                "alpha2" => "TC",
                "alpha3" => "TCA",
                "countryCallingCodes" => [
                    "+1 649"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Turks And Caicos Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TD",
                "alpha3" => "TCD",
                "countryCallingCodes" => [
                    "+235"
                ],
                "currencies" => [
                    "XAF"
                ],
                "ioc" => "CHA",
                "languages" => [
                    "ara",
                    "fre"
                ],
                "name" => "Chad",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TF",
                "alpha3" => "ATF",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "French Southern Territories",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TG",
                "alpha3" => "TGO",
                "countryCallingCodes" => [
                    "+228"
                ],
                "currencies" => [
                    "XOF"
                ],
                "ioc" => "TOG",
                "languages" => [
                    "fre"
                ],
                "name" => "Togo",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TH",
                "alpha3" => "THA",
                "countryCallingCodes" => [
                    "+66"
                ],
                "currencies" => [
                    "THB"
                ],
                "ioc" => "THA",
                "languages" => [
                    "tha"
                ],
                "name" => "Thailand",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TJ",
                "alpha3" => "TJK",
                "countryCallingCodes" => [
                    "+992"
                ],
                "currencies" => [
                    "TJS"
                ],
                "ioc" => "TJK",
                "languages" => [
                    "tgk",
                    "rus"
                ],
                "name" => "Tajikistan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TK",
                "alpha3" => "TKL",
                "countryCallingCodes" => [
                    "+690"
                ],
                "currencies" => [
                    "NZD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "Tokelau",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TL",
                "alpha3" => "TLS",
                "countryCallingCodes" => [
                    "+670"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "TLS",
                "languages" => [
                    "por"
                ],
                "name" => "East Timor",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TM",
                "alpha3" => "TKM",
                "countryCallingCodes" => [
                    "+993"
                ],
                "currencies" => [
                    "TMT"
                ],
                "ioc" => "TKM",
                "languages" => [
                    "tuk",
                    "rus"
                ],
                "name" => "Turkmenistan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TN",
                "alpha3" => "TUN",
                "countryCallingCodes" => [
                    "+216"
                ],
                "currencies" => [
                    "TND"
                ],
                "ioc" => "TUN",
                "languages" => [
                    "ara"
                ],
                "name" => "Tunisia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TO",
                "alpha3" => "TON",
                "countryCallingCodes" => [
                    "+676"
                ],
                "currencies" => [
                    "TOP"
                ],
                "ioc" => "TGA",
                "languages" => [
                    "eng"
                ],
                "name" => "Tonga",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TR",
                "alpha3" => "TUR",
                "countryCallingCodes" => [
                    "+90"
                ],
                "currencies" => [
                    "TRY"
                ],
                "ioc" => "TUR",
                "languages" => [
                    "tur"
                ],
                "name" => "Turkey",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TT",
                "alpha3" => "TTO",
                "countryCallingCodes" => [
                    "+1 868"
                ],
                "currencies" => [
                    "TTD"
                ],
                "ioc" => "TRI",
                "languages" => [
                    "eng"
                ],
                "name" => "Trinidad And Tobago",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TV",
                "alpha3" => "TUV",
                "countryCallingCodes" => [
                    "+688"
                ],
                "currencies" => [
                    "AUD"
                ],
                "ioc" => "TUV",
                "languages" => [
                    "eng"
                ],
                "name" => "Tuvalu",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TW",
                "alpha3" => "TWN",
                "countryCallingCodes" => [
                    "+886"
                ],
                "currencies" => [
                    "TWD"
                ],
                "ioc" => "TPE",
                "languages" => [
                    "chi"
                ],
                "name" => "Taiwan, Province Of China",
                "status" => "assigned"
            ],
            [
                "alpha2" => "TZ",
                "alpha3" => "TZA",
                "countryCallingCodes" => [
                    "+255"
                ],
                "currencies" => [
                    "TZS"
                ],
                "ioc" => "TAN",
                "languages" => [
                    "swa",
                    "eng"
                ],
                "name" => "Tanzania, United Republic Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "UA",
                "alpha3" => "UKR",
                "countryCallingCodes" => [
                    "+380"
                ],
                "currencies" => [
                    "UAH"
                ],
                "ioc" => "UKR",
                "languages" => [
                    "ukr",
                    "rus"
                ],
                "name" => "Ukraine",
                "status" => "assigned"
            ],
            [
                "alpha2" => "UG",
                "alpha3" => "UGA",
                "countryCallingCodes" => [
                    "+256"
                ],
                "currencies" => [
                    "UGX"
                ],
                "ioc" => "UGA",
                "languages" => [
                    "eng",
                    "swa"
                ],
                "name" => "Uganda",
                "status" => "assigned"
            ],
            [
                "alpha2" => "UK",
                "alpha3" => "",
                "countryCallingCodes" => [

                ],
                "currencies" => [
                    "GBP"
                ],
                "ioc" => "",
                "languages" => [
                    "eng",
                    "cor",
                    "gle",
                    "gla",
                    "wel"
                ],
                "name" => "United Kingdom",
                "status" => "reserved"
            ],
            [
                "alpha2" => "UM",
                "alpha3" => "UMI",
                "countryCallingCodes" => [
                    "+1"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "",
                "languages" => [
                    "eng"
                ],
                "name" => "United States Minor Outlying Islands",
                "status" => "assigned"
            ],
            [
                "alpha2" => "US",
                "alpha3" => "USA",
                "countryCallingCodes" => [
                    "+1"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "USA",
                "languages" => [
                    "eng"
                ],
                "name" => "United States",
                "status" => "assigned"
            ],
            [
                "alpha2" => "UY",
                "alpha3" => "URY",
                "countryCallingCodes" => [
                    "+598"
                ],
                "currencies" => [
                    "UYU",
                    "UYI"
                ],
                "ioc" => "URU",
                "languages" => [
                    "spa"
                ],
                "name" => "Uruguay",
                "status" => "assigned"
            ],
            [
                "alpha2" => "UZ",
                "alpha3" => "UZB",
                "countryCallingCodes" => [
                    "+998"
                ],
                "currencies" => [
                    "UZS"
                ],
                "ioc" => "UZB",
                "languages" => [
                    "uzb",
                    "rus"
                ],
                "name" => "Uzbekistan",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VA",
                "alpha3" => "VAT",
                "countryCallingCodes" => [
                    "+379",
                    "+39"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "ita"
                ],
                "name" => "Vatican City State",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VC",
                "alpha3" => "VCT",
                "countryCallingCodes" => [
                    "+1 784"
                ],
                "currencies" => [
                    "XCD"
                ],
                "ioc" => "VIN",
                "languages" => [
                    "eng"
                ],
                "name" => "Saint Vincent And The Grenadines",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VE",
                "alpha3" => "VEN",
                "countryCallingCodes" => [
                    "+58"
                ],
                "currencies" => [
                    "VEF"
                ],
                "ioc" => "VEN",
                "languages" => [
                    "spa"
                ],
                "name" => "Venezuela, Bolivarian Republic Of",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VG",
                "alpha3" => "VGB",
                "countryCallingCodes" => [
                    "+1 284"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "ISV",
                "languages" => [
                    "eng"
                ],
                "name" => "Virgin Islands (British)",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VI",
                "alpha3" => "VIR",
                "countryCallingCodes" => [
                    "+1 340"
                ],
                "currencies" => [
                    "USD"
                ],
                "ioc" => "ISV",
                "languages" => [
                    "eng"
                ],
                "name" => "Virgin Islands (US)",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VN",
                "alpha3" => "VNM",
                "countryCallingCodes" => [
                    "+84"
                ],
                "currencies" => [
                    "VND"
                ],
                "ioc" => "VIE",
                "languages" => [
                    "vie"
                ],
                "name" => "Viet Nam",
                "status" => "assigned"
            ],
            [
                "alpha2" => "VU",
                "alpha3" => "VUT",
                "countryCallingCodes" => [
                    "+678"
                ],
                "currencies" => [
                    "VUV"
                ],
                "ioc" => "VAN",
                "languages" => [
                    "bis",
                    "eng",
                    "fre"
                ],
                "name" => "Vanuatu",
                "status" => "assigned"
            ],
            [
                "alpha2" => "WF",
                "alpha3" => "WLF",
                "countryCallingCodes" => [
                    "+681"
                ],
                "currencies" => [
                    "XPF"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "Wallis And Futuna",
                "status" => "assigned"
            ],
            [
                "alpha2" => "WS",
                "alpha3" => "WSM",
                "countryCallingCodes" => [
                    "+685"
                ],
                "currencies" => [
                    "WST"
                ],
                "ioc" => "SAM",
                "languages" => [
                    "eng",
                    "smo"
                ],
                "name" => "Samoa",
                "status" => "assigned"
            ],
            [
                "alpha2" => "YE",
                "alpha3" => "YEM",
                "countryCallingCodes" => [
                    "+967"
                ],
                "currencies" => [
                    "YER"
                ],
                "ioc" => "YEM",
                "languages" => [
                    "ara"
                ],
                "name" => "Yemen",
                "status" => "assigned"
            ],
            [
                "alpha2" => "YT",
                "alpha3" => "MYT",
                "countryCallingCodes" => [
                    "+262"
                ],
                "currencies" => [
                    "EUR"
                ],
                "ioc" => "",
                "languages" => [
                    "fre"
                ],
                "name" => "Mayotte",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ZA",
                "alpha3" => "ZAF",
                "countryCallingCodes" => [
                    "+27"
                ],
                "currencies" => [
                    "ZAR"
                ],
                "ioc" => "RSA",
                "languages" => [
                    "afr",
                    "eng",
                    "nbl",
                    "som",
                    "tso",
                    "ven",
                    "xho",
                    "zul"
                ],
                "name" => "South Africa",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ZM",
                "alpha3" => "ZMB",
                "countryCallingCodes" => [
                    "+260"
                ],
                "currencies" => [
                    "ZMW"
                ],
                "ioc" => "ZAM",
                "languages" => [
                    "eng"
                ],
                "name" => "Zambia",
                "status" => "assigned"
            ],
            [
                "alpha2" => "ZW",
                "alpha3" => "ZWE",
                "countryCallingCodes" => [
                    "+263"
                ],
                "currencies" => [
                    "USD",
                    "ZAR",
                    "BWP",
                    "GBP",
                    "EUR"
                ],
                "ioc" => "ZIM",
                "languages" => [
                    "eng",
                    "sna",
                    "nde"
                ],
                "name" => "Zimbabwe",
                "status" => "assigned"
            ]
            ];
    }

}


