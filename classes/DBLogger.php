<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 3:13 PM
 */

class DBLogger implements Loggerinterface{

    public function log($message){
        echo"DB: $message";
    }
}
