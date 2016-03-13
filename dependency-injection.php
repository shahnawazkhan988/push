<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 12:57 PM
 */
 
class Logger{

        public function log($message){

            echo"Loging message : $message";
        }

}




class UserProfile {

    private $logger;

    public function createUser()
    {
        $this->logger->log("User Created");
    }

    public function deleteUser()
    {
        $this->logger->log("user delete");

    }

    public function updateUser()
    {
        $this->logger->log("user update");
    }

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


}

$logger = new Logger();

$profile = new UserProfile($logger);

$profile->createuser();