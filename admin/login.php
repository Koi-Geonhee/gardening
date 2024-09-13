<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
      <meta name="author" content="AdminKit">
      <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="../assets/back/img/icons/icon-48x48.png" />
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <title>Admin</title>
      <link href="../assets/back/css/app.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <style>
         .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
         }
         
         .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
         }
         
         .closebtn:hover {
            color: black;
         }
      </style>
   </head>
   <body>
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Login</h1>
                            <?php if(isset($_SESSION['error'])):?>
                                <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                    <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
                                </div>
                            <?php endif?>
                        </div>
                        <div class="card-body">
                            <form action="include/admin_form.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control mb-3" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group has-success">
                                    <label>Password</label>
                                    <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                                </div>
                                <div>
                                    <input id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"
                                        value="Sign In" name="login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
      <script src="../assets/back/js/app.js"></script>
   </body>
</html>