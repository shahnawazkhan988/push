<?php
/**
 * Created by Kamran Khatti.
 * User: kamrankhatti@yahoo.com
 * Date: 2/11/2016
 * Time: 3:25 PM
 */

function __autoload($classes){

    include_once"$classes.php";
}

$abc= new ABC();
$abc->dd();


$xyz = new XYZ();
$xyz->xx();

echo $xyz->a;