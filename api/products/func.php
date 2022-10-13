<?php


function getProducts(){
	$product =array();
	$collection = (new MongoDB\Client)->miners->products;
	$cursor = $collection->find();
    foreach ($cursor as $document) {
       echo $document['_id'], "<br>";
		echo $document['upc'], "<br>";
    }
	//echo json_encode($cursor);
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