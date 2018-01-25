<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<title>Inventory Management</title>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php require 'include/sidenav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Clients</a>
        </li>
        <li class="breadcrumb-item active">Add Client</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header"> <i class="fa fa-area-chart"></i>Add Client Information</div>
        <div class="card-body">
          <form action="function/addclientfunc.php" method="post">
              <!-- <div class="form-group">
              <label for="sel1">Type of Client:</label>
              <select class="form-control" id="sel1" name="tos">
                <option value="customer">Customer</option>
                <option value="distributor">Distributor</option>
                <option value="reseller">Reseller</option>
                <option></option>
              </select>
            </div> -->

          <div class="form-group">
              <label for="exampleInputEmail1">Name*</label>
              <input class="form-control" type="text" name="name" value="" placeholder="Name" required>
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Designation*</label>
              <input class="form-control" type="text" name="designation" value="" placeholder="if not know put NA">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Contact Number*</label>
              <input class="form-control" type="text" name="con1" value="" placeholder="eg:0123456789">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alternate Contact*</label>
              <input class="form-control" type="text" name="con2" value="" placeholder="if not available put 0000000000">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email*</label>
              <input class="form-control" type="text" name="email" value="" placeholder="IF not available put NA@NA.NA">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Company Name*</label>
              <input class="form-control" type="text" name="cname" value="" placeholder="company name">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Company Description*</label>
              <textarea class="form-control" type="text" name="cdesc" value="" placeholder="company description"></textarea>
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="addclientformsubmit" value="Submit" class="btn-login">
            <!-- <a class="btn btn-primary btn-block" href="#">Login</a> -->
          </form>
            <div id="add_err"></div>
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
      <!-- Icon Cards-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
  <?php require 'include/headerandfooter/footer.php'; ?>
