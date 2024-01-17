<?php include_once('../database/connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php') ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('sidebar.php') ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
     
    <?php include('cards.php') ?>
             <!-- Add User -->
             <div class="col-12">
             <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Prodcut Information</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="p_name" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Product Price</label>
                  <div class="col-sm-10">
                    <input type="number" name="p_price" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Product Qty</label>
                  <div class="col-sm-10">
                    <input type="number" name="p_qty" class="form-control" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="p_image" type="file" id="formFile">
                  </div>
                </div>

                             
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Product Details</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="p_details" style="height: 100px" required></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="cid">

                    
                    <?php 
                      $query = "SELECT * FROM `catogery` ";
                      $res = mysqli_query($con, $query);
                      while($row = mysqli_fetch_assoc($res))
                      { ?>

                      <option name="<?php  $row['Cat_Id'] ?>"  ><?php echo $row['Cat_Name'] ?></option>
                     <?php
                      }
                    
                      ?>

                    </select>
                  </div>
                </div>
               

                <div class="row mb-3">
                 
                  
                    <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
                 
                </div>

              </form>

            </div>
          </div>
            </div><!-- End User -->
         </div>

        

       

    
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php 

  if(isset($_POST['submit']))
  {
    $pname = $_POST['p_name'];
    $pprice = $_POST['p_price'];
    $pqty = $_POST['p_qty'];
    $pimage = $_FILES['p_image'];
    $pdetails = $_POST['p_details'];
    $cid = $_POST['cid'];


    $imgName = $pname.$pimage['name'];
    move_uploaded_file($pimage['tmp_name'], "../Images/Products/".$imgName);


    $query = "INSERT INTO `products` (`Pro_Name` , `Pro_Price`, `Pro_qty`, `Pro_Image`, `Pro_Details`, `CategoryName`)
     VALUES ('$pname',$pprice,$pqty,'$imgName','$pdetails', '$cid')";
    $res = mysqli_query($con, $query);
    if($res)
    {
      echo"<script> window.location.assign('./showproduct.php')</script>";
    }
    else 
    {
      echo"<script>alert('Please Try Again....')</script>";
    }

  }

?>
