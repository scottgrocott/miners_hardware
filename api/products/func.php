<?php


function getProducts(){
	$collection = (new MongoDB\Client)->test->users;
	$cursor = $collection->find();

	foreach ($cursor as $document) {
		echo $document['_id'], "<br>";
		echo $document['email'], "<br>";
	}
}


function createProduct(){
	/*
	SKU
	UPC
	dept
	store_id
	Desc
	inventory array()
	received array()
	
	*/
	
	
	
}

function updateProduct(){
	/*
	SKU
	UPC
	dept
	store_id
	Desc
	inventory array(ISODate,int,notes)
	received array(ISODate,int,notes)
	
	*/
	
	
	
}