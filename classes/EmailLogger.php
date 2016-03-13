<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 5:14 PM
 */
 
class EmailLogger implements Loggerinterface{

    public function log($message){
        echo "Emial: $message";
    }
}