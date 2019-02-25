<?php
header('Content-Type:text/html;charset=utf-8');
class MyGreeter{
	public function greet(){
		date_default_timezone_set('Asia/Shanghai');
		$hour = date('H');
		if($hour>0 && $hour<12){
			echo "Good morning";
		}elseif($hour>12 && $hour<18){
			echo "Good afternoon";
		}elseif($hour>18 && $hour<24){
			echo "Good evening";
		}
	}
}
$greeter = new MyGreeter();
