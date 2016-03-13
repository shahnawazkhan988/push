<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 2:25 PM
 */
 
    function __autoload($class){
    include_once "$class.php";
}

function getLogger($type)
{

    switch($type)
    {
        case 'email';
            return new EmailLogger();
        break;
        case'file';
            return new FileLogger();
        break;
        case'db';
            return new DBLogger();
        break;
    }
}

$logger = getLogger('db');


$profile = new UserProfile($logger);

$profile->createUser();