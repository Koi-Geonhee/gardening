<?php require_once 'include/header.php'?>
<?php
    require_once '../include/db.php';
    if(isset($_GET['delete_id'])){
        $query1 = "DELETE FROM users WHERE uid=".$_GET['delete_id'];

        $result1 = mysqli_query($conn, $query1);
        if($result1){
            $_SESSION['success'] = "The data has been deleted successfully";
        }
    }

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    
?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer Listing</strong> </h1>
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
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
                                    <th>Customer Name</th>
                                    <th>Customer Address</th>
                                    <th>Customer Email</th>
                                    <th>Customer Contact</th>
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
                                        <td><?php echo $data['name']?></td>
                                        <td><?php echo $data['address']?></td>
                                        <td><?php echo $data['email']?></td>
                                        <td><?php echo $data['phone']?></td>

                                        <td>
                                            <div class="table-data-feature">
                                                <a href="javascript:delete_id(<?php echo $data['uid']; ?>)" class="btn btn-danger btn-sm">
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
                window.location.href = 'users.php?delete_id=' + id;
            }
        }
    </script>
<?php require_once 'include/footer.php'?>
