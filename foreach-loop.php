<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 3/6/2016
 * Time: 10:32 AM
 */

$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $key => $num) {
    if ($num == 5) {
        $arr[$key] = 0;
    }
}
print_r($arr); //5 got replaced to 0 - See more at: http://www.christianmontoya.com/2007/11/09/php-techniques-i-use-all-the-time/#sthash.KRGAGAQd.dpuf