<?php 

class TV{
	
	public $mobel ;
	public $volume;
	
	function volumeUp()
	{
		$this->volume++;
	}
	
	function volumeDown()
	{
		$this->volume--;
	}
	
	function __construct($m, $v){
		
		$this->model = $m;
		$this->volume = $v;
	}
}

class tvwithTimer extends TV{
	
	public $timer = true;
}

class plazmaTV extends TV{
	
}

$tv_one = new tvwithTimer('samsung', 5);
$tv_two = new plazmaTV('sony', 0);

$tv_one->volumeUp();
$tv_two->volumeDown();


echo $tv_one->volume .''. $tv_one->model .'<br \>'.
$tv_two->volume;