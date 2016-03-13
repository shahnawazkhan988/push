<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/8/2016
 * Time: 12:31 PM
 */

class DB{

    protected static $table = 'basetable';

    public function select(){

        echo "select * from".static::$table;
    }

    public function insert(){
        echo "insert into".static::$table;
    }


}

class abc extends DB{
    protected  static $table='shani';
}
$db = new DB;

$abc = new abc;

echo $abc->insert();
