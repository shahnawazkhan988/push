<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/11/2016
 * Time: 11:41 AM
 */

/* trait override karta hai kisi bhi class ko or trait ko overide karna ho
 to child class main usi naam ka function banao to phr 1st priorty usko milay gi
  */
class Base{

    public function abc(){
        echo "the base class method abc";
    }
}

trait Test{

    public function abc(){
        echo "the trait class method abc";
    }
}

class Child extends Base{

    use Test;

    public function abc(){
        echo "the child class method abc";
    }
}

$one = new Child();

$one->abc();