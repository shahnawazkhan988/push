<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/11/2016
 * Time: 12:11 PM
 */
 

trait abc{

    private function xyz(){
        echo"trait class private function xyz";

    }
}

class tshirt{

    use abc{

        abc::xyz as public shani;
    }
}

$obj = new tshirt();

$obj->shani();