<?php require_once 'include/header.php'?>
<?php
    require_once '../include/db.php';
    if(isset($_GET['delete_id'])){
        $query1 = "DELETE FROM products WHERE product_id=".$_GET['delete_id'];

        $result1 = mysqli_query($conn, $query1);
        if($result1){
            $_SESSION['success'] = "The data has been deleted successfully";
        }
    }

    $query = "SELECT * FROM products";
    $result = mysqli_query($conn,$query);

    
?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Gardening Product Listing</strong> </h1>
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Latest Products</h5>
                            <div style="float: right;">
                                <a href="add_product.php" class="btn btn-primary">Add Product</a>
                            </div>
                            <?php if(isset($_SESSION['success'])):?>
                                <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                    <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
                                </div>
                            <?php endif?>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Short Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(mysqli_num_rows($result) == 0): ?>
                                    <tr>
                                        <td colspan="8" class="text-center">No Data Found</td>
                                    </tr>
                                    <?php endif?>
                                    <?php foreach($result as $i => $data):?>
                                    <tr class="tr-shadow">
                                        <td><?php echo ++$i;?></td>
                                        <td><?php echo $data['product_name']?></td>
                                        <td><?php echo $data['type']?></td>
                                        <td><?php echo $data['price']?></td>
                                        <td><?php echo $data['quantity']?></td>
                                        <td><?php echo $data['short_description']?></td>
                                        <td><img src="<?php echo '../images/products/'.$data['image']?>" alt="" width="100"></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="#" class="btn btn-primary btn-sm">
                                                    Edit
                                                </a>
                                                <a href="javascript:delete_id(<?php echo $data['product_id']; ?>)" class="btn btn-danger btn-sm">
                                                    Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script>
        function delete_id(id) {
            if (confirm('Are you sure you want to delete this?')) {
                window.location.href = 'product.php?delete_id=' + id;
            }
        }
    </script>
<?php require_once 'include/footer.php'?>
