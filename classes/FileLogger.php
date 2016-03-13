<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 4:04 PM
 */
 
class FileLogger implements Loggerinterface{

    public function log($message){
        echo "File : $message";
    }
}