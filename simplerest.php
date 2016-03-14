<?php
	class SimpleREST{	
		public static function processRequest(){
			$request_method = $_SERVER['REQUEST_METHOD'];
			echo $request_method;
		}
	}


	$try = new SimpleREST;
	$try->processRequest();
?>