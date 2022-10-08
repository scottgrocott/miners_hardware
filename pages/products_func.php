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
	loc_id
	store_id
	Desc
	inventory array()
	received array()
	
	*/
	
	
	
}

function updateProduct($sku,$upc,$loc_id,$store_id,$desc){
	/*
	SKU
	UPC
	loc_id
	store_id
	Desc
	inventory array(ISODate,int,notes)
	received array(ISODate,int,notes)
	
	*/
    $collection = (new MongoDB\Client)->miners->products;
    $collection->drop();

    $updateResult = $collection->updateOne(
        ['sku' => $sku],
        ['$set' => ['upc' => $upc,'loc_id'=>'9LMBR','store_id'=>3,'desc'=$desc]],
        ['upsert' => true]
    );

    printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
    printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
    printf("Upserted %d document(s)\n", $updateResult->getUpsertedCount());

    $upsertedDocument = $collection->findOne([
        '_id' => $updateResult->getUpsertedId(),
    ]);

    var_dump($upsertedDocument);
	
	
	
}