<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/11/2016
 * Time: 3:25 PM
 */

class XYZ{

    private $array = ['a'=>'A', 'b'=>'B', 'c'=>'C'];


    public function xx(){
        echo"XYZ class is echo";
    }

    public function __construct(){

        echo"Xyz construct";
    }

    public function __get($name){

        if(array_key_exists($name, $this->array)){
            return $this->array[$name];

        }
        else{
            return "Trying to access non existing varaiable : $name";
        }
    }
}