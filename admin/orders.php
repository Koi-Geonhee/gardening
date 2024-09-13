<?php require_once 'include/header.php'?>
<?php
    require_once '../include/db.php';
    $query = "SELECT products.product_name,products.price,users.name,users.address,orders.order_date,products.image
    FROM orders
    JOIN products on products.product_id = orders.product_id
    JOIN users on users.uid = orders.uid";
    $result = mysqli_query($conn, $query);

    
?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Order Listing</strong> </h1>
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Latest Orders</h5>
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
                                    <th>Customer name</th>
                                    <th>Customer address</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Ordered Quantity</th>
                                    <th>Order Date</th>
                                    <th>Image</th>
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
                                        <td><?php echo $data['name']?></td>
                                        <td><?php echo $data['address']?></td>
                                        <td><?php echo $data['product_name']?></td>
                                        <td><?php echo $data['price']?></td>
                                        <td>1</td>
                                        <td><?php echo $data['order_date']?></td>
                                        <td>
                                            <td><img src="<?php echo '../images/products/'.$data['image']?>" alt="" width="100"></td>

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
                window.location.href = 'fruits.php?delete_id=' + id;
            }
        }
    </script>
<?php require_once 'include/footer.php'?>
