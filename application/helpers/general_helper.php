<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function dump($data){
		echo "<pre>";
		print_r($data);
		echo "<pre>";
	}
	
	
	
function dumpEx($data){
		echo "<pre>";
		print_r($data);
		echo "<pre>";
		exit;
	}