<?php require_once 'include/header.php'?>
<!DOCTYPE html>
<html lang="en">
   <main class="content">
      <div class="container-fluid p-0">
         <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Forms</h1>
         </div>
         <div class="row">
            <div class="col-12 col-lg-6">
               <div class="card">
                  <div class="card-header">
                     <h5 class="card-title mb-0">Add Gardening Products</h5>
                  </div>
                  <div class="card-body">
                    <form action="include/admin_form.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Produt Name</label>
                            <input name="product_name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Produt Type</label>
                            <input name="type" type="text" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Produt Price</label>
                            <input name="price" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Produt Quantity</label>
                            <input name="quantity" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Short Description</label>
                            <textarea name="short_description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Product Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div>
                            <input id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-3"
                                value="Submit" name="post_product">
                        </div>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>

<?php require_once 'include/footer.php'?>
