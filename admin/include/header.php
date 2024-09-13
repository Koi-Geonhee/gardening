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
            background-color: green;
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
      <div class="wrapper">
         <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
               <a class="sidebar-brand" href="index.html">
               <span class="align-middle">Admin</span>
               </a>
               <ul class="sidebar-nav">
                  <li class="sidebar-header">
                     Pages
                  </li>
                  <li class="sidebar-item active">
                     <a class="sidebar-link" href="index.php">
                     <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                     </a>
                  </li>
                  <li class="sidebar-item active">
                     <a class="sidebar-link" href="product.php">
                     <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Products</span>
                     </a>
                  </li>
                  <li class="sidebar-item active">
                     <a class="sidebar-link" href="orders.php">
                     <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Orders</span>
                     </a>
                  </li>
                  <li class="sidebar-item active">
                     <a class="sidebar-link" href="users.php">
                     <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Customer</span>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
               <a class="sidebar-toggle js-sidebar-toggle">
               <i class="hamburger align-self-center"></i>
               </a>
               <div class="navbar-collapse collapse">
                  <ul class="navbar-nav navbar-align">
                     <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                        </a>
                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                           Admin
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                           <a class="dropdown-item" href="../logout.php">Log out</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>