<?php include $_SERVER['DOCUMENT_ROOT']."/includes/header.php"?>
<?php include "products_func.php"?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" onClick="">New</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>

        </div>
      </div>


<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">SKU</th>
              <th scope="col">UPC</th>
              <th scope="col">Desc.</th>
<!--
              <th scope="col">Last Received</th>
              <th scope="col">Last Count</th>
-->
            </tr>
          </thead>
          <tbody>
   <?php
getProducts();
?>

          </tbody>
        </table>
      </div>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $sku = strtoupper($_POST['sku']);
  $upc = $_POST['upc'];
  $desc = $_POST['desc'];
  if (empty($sku)) {
    echo "sku is empty";
  } else {
    //echo $sku;
    createProduct($sku,$upc,$desc);
  }
}
?>
      <div style="display: block;" id="add">
      <form action="/products" method="post">
 
 <h1 class="h3 mb-3 fw-normal">Add New Product</h1>

 <div class="form-floating">
   <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU">
   <label for="floatingInput">SKU</label>
 </div>
 <div class="form-floating">
   <input type="text" class="form-control" id="upc" name="upc"placeholder="UPC">
   <label for="upc">UPC</label>
 </div>

 <div class="form-floating">
   <input type="text" class="form-control" id="desc" name="desc"placeholder="Description">
   <label for="desc">Description</label>
 </div>
 <button class="w-100 btn btn-lg btn-primary" type="submit">Add Product</button>

</form>
</div>
    </main>
 
<?php include $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"?>