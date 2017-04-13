<?php


function index(){
	render("hospital/index", array(
		"hospitals" => getAllPatients()
		));
}