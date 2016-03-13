<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/11/2016
 * Time: 11:56 AM
 */

/* ek class main multiple 'Traits' call kar saktay hain
but un main same naam kay function hon to 'Fatal error ahay ga conflict ka'

us ko  handle karnay kay liay 'Insteadof' use kartay haio or dono function use karnay ho to dosray ko call
karanay kay liay 'AS' liktay hain or new naam difine karna parta hai jesay humnay nichay 'huwalk'
kara hai.
*/
 
trait dog{

    public function walk(){

        echo "Dog is walking here";
    }
}

trait human{

    public  function walk(){
        echo " mean and women also walk";
    }
}

class base{

    use dog,human{
        dog::walk insteadof human;
        human::walk as huwalk;
    }
}


$dg = new base;
$dg->huwalk();

$hu = new base;
$hu->walk();