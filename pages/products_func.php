<?php

function getProducts(){
    require_once __DIR__ . '/vendor/autoload.php';
	$collection = (new MongoDB\Client)->miners->products;
	$cursor = $collection->find();
    foreach ($cursor as $document) {
       //echo $document['_id'], "<br>";
		//echo $document['upc'], "<br>";
       echo '<tr>';
       echo '<td> '.$document['sku'].'</td>';
       echo '<td>'.$document['upc'].'</td>';
       echo ' <td>'.$document['desc'].'</td>';
      // echo ' <td></td>';
      // echo ' <td></td>';
       echo ' </tr>';
    }

}


function createProduct($sku,$upc,$desc){
	/*
	SKU
	UPC
	loc_id
	store_id
	Desc
	inventory array()
	received array()
	
	*/
    $loc_id = "9LMBR";
	$store_id = 3;

    $collection = (new MongoDB\Client)->miners->products;
	$insertOneResult = $collection->insertOne([
        'sku' => $sku,
        'upc' => $upc,
        'desc'=> $desc,
        'store_id' => $store_id,
        'loc_id' => $loc_id,
        'received' => array(),
        'count' => array(),
        'shrink' => array(),
    ]);
     
     printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
     
     var_dump($insertOneResult->getInsertedId());
	
	
}

function updateProduct($sku,$upc,$desc){
	/*
	SKU
	UPC
	loc_id
	store_id
	Desc
	inventory array(ISODate,int,notes)
	received array(ISODate,int,notes)
	
	*/
    $loc_id = "9LMBR";
	$store_id = 3;
    $collection = (new MongoDB\Client)->miners->products;
    $collection->drop();
    
    $updateResult = $collection->updateOne(
        ['sku' => $sku],
        ['$set' =>['upc' => $upc,
        'desc'=> $desc,
        'store_id' => $store_id,
        'loc_id' => $loc_id,
        'received' => array(),
        'count' => array(),
        'shrink' => array()]]
    );
    
    printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
    printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
    printf("Upserted %d document(s)\n", $updateResult->getUpsertedCount());
    
    $upsertedDocument = $collection->findOne([
        '_id' => $updateResult->getUpsertedId(),
    ]);
    
    //var_dump($upsertedDocument);
	
	
	
}