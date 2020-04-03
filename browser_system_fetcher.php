<?php

/*!
 * Browser & System Fetcher
 * https://github.com/youssefbouali/PHP_Open_Tools/blob/master/browser_system_fetcher.php
 *
 * Copyright (c) Bouali
 * Released under the MIT license
 * https://bouali.ml/
 *
 * Date: 2020-01-16 22:42 GMT+1
 */

function getOS($user_agent) {

    $os_platform = "Unknown System";

    $os_array = array(
					'/windows nt 10/i'      =>  'Windows 10',
					'/windows nt 6.3/i'     =>  'Windows 8.1',
					'/windows nt 6.2/i'     =>  'Windows 8',
					'/windows nt 6.1/i'     =>  'Windows 7',
					'/windows nt 6.0/i'     =>  'Windows Vista',
					'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
					'/windows nt 5.1/i'     =>  'Windows XP',
					'/windows xp/i'         =>  'Windows XP',
					'/windows nt 5.0/i'     =>  'Windows 2000',
					'/windows me/i'         =>  'Windows ME',
					'/win98/i'              =>  'Windows 98',
					'/win95/i'              =>  'Windows 95',
					'/win16/i'              =>  'Windows 3.11',
					'/linux/i'              =>  'Linux',
					'/mac os x/i'           =>  'Mac OS X',
					'/macintosh/i'          =>  'Macintosh',
					'/mac_powerpc/i'        =>  'Mac OS 9',
					'/ubuntu/i'             =>  'Ubuntu',
					'/iphone/i'             =>  'iPhone',
					'/ipod/i'               =>  'iPod',
					'/ipad/i'               =>  'iPad',
					/*'/android/i'            =>  'Android',*/
					
					
					'/android 9/i'          =>  'Android 9 Pie',
					'/android 8/i'          =>  'Android 8 Oreo',
					
					'/android 7/i'          =>  'Android 7 Nougat',
					'/android 6/i'          =>  'Android 6 Marshmallow',
					'/android 5/i'          =>  'Android 5 Lollipop',
					
					'/android 4.4/i'        =>  'Android 4.4 KitKat',
					
					'/android 4.3/i'        =>  'Android 4.3 Jelly_Bean',
					'/android 4.2/i'        =>  'Android 4.2 Jelly_Bean',
					'/android 4.1/i'        =>  'Android 4.1 Jelly_Bean',
					'/android 4.0/i'        =>  'Android 4.0 Ice_Cream_Sandwich',
					
					'/android 3/i'          =>  'Android 3 Honeycomb',
					
					'/android 2.2/i'        =>  'Android 2.2 Froyo',
					'/android 2.1/i'        =>  'Android 2.1 Eclair',
					'/android 2.0/i'        =>  'Android 2.0 Eclair',
					
					'/android 1.6/i'        =>  'Android 1.6 Donut',
					'/android 1.1/i'        =>  'Android 1.1 Petit_Four',
					'/android 1.0/i'        =>  'Android 1.0',
					
					'/blackberry/i'         =>  'BlackBerry',
					'/webos/i'              =>  'Mobile',
					'/Googlebot/i'          =>  'Googlebot',
					'/facebookexternalhit/i'=>  'Facebookbot',
					);

					
					
    foreach ($os_array as $regex => $value){
        if (preg_match($regex, $user_agent)){
            $os_platform = $value;
		}
	}
		
		
		
    return $os_platform;
}



// system  windows / android / iphone
// system version  windows 7 / Android 5 Lollipop
// system bit  64 / 32

// device  SM Samsung SM-J1 SM-J2 SM-J3 SM-J5 SM-J7 - SM-A5 / Nexus 5 / Sony / Infinix - Infinix HOT 4


function getBrowser($user_agent) {

    $browser = "Unknown Browser";

	$browser_array = array(
						'/msie/i'           => 'Internet Explorer',
						'/firefox/i'        => 'Firefox',
                        '/safari/i'         => 'Safari',
						'/mobile/i'         => 'Handheld Browser',
                        '/chrome/i'         => 'Chrome',
						'/SamsungBrowser/i' => 'Samsung Browser',
						'/UCBrowser/i'      => 'UC Browser',
						'/YaBrowser/i'      => 'Yandex Browser',
                        '/edge/i'           => 'Edge',
                        '/opera/i'          => 'Opera',
                        '/netscape/i'       => 'Netscape',
                        '/maxthon/i'        => 'Maxthon',
                        '/konqueror/i'      => 'Konqueror',
						'/Googlebot/i'      =>  'Googlebot',//Chrome
						'/facebookexternalhit/i'=>  'Facebookbot',
						);

    foreach ($browser_array as $regex => $value){
        if (preg_match($regex, $user_agent)){
            $browser = $value;
		}
	}
		
		
		
    return $browser;
}


//$user_agent = "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1)";
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$user_os = getOS($user_agent);
$user_browser = getBrowser($user_agent);

echo "<strong>Operating System: </strong>".$user_os."<br /><strong>Browser: </strong>".$user_browser;


echo "<br /><strong>HTTP USER_AGENT: </strong>".$user_agent;

?>