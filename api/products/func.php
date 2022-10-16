<?php


function getProducts(){
	$product_results =array();
	$collection = (new MongoDB\Client)->miners->products;
	$cursor = $collection->find();
	$data_to_encode = array();
	foreach($cursor as $mongo){
		$data['_id'] = $mongo['_id'];
		$data['sku'] = $mongo['sku'];
		$data['upc'] = $mongo['upc'];
		$data['desc'] = $mongo['desc'];
		$data_to_encode[] = $data;
	}
	
	$json = json_encode($data_to_encode);
	echo $json;
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