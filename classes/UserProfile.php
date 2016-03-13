<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 2:40 PM
 */
 
class UserProfile {

    private $logger;

    public function createUser()
    {

    echo"Creating User";
    $this->logger->log("User Create");
    }

    public function updateUser()
    {
        echo"Updating User";
        $this->logger->log("User Update");
    }

    public function deleteUser()
    {
        echo "Deleting User";
        $this->logger->log("User Delete");
    }

    public function __construct(Loggerinterface $logger){
        $this->logger = $logger;
    }
}