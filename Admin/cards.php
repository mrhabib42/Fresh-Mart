<?php include_once('../database/connection.php') ?>

<div class="row">

<!-- Sales Card -->
<div class="col-xxl-4 col-md-4">
  <div class="card info-card sales-card">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">Category <span>| Total</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-bag-check"></i>
        </div>
        <div class="ps-3">
          <?php 
            $query = "SELECT * FROM `catogery` ";
            $res = mysqli_query($con, $query);
          ?>
          <h6><?php echo mysqli_num_rows($res) ?></h6>
          <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Sales Card -->

<!-- Revenue Card -->
<div class="col-xxl-4 col-md-4">
  <div class="card info-card revenue-card">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">Products <span>| Total</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-bucket-fill"></i>
        </div>
        <div class="ps-3">
        <?php 
            $query = "SELECT * FROM `products` ";
            $res = mysqli_query($con, $query);
          ?>
          <h6><?php echo mysqli_num_rows($res) ?></h6>
          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Revenue Card -->

 <!-- Revenue Card -->
 <div class="col-xxl-4 col-md-4">
  <div class="card info-card revenue-card">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">Revenue <span>| This Month</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-currency-dollar"></i>
        </div>
        <div class="ps-3">
          <h6>$3,264</h6>
          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Revenue Card -->


</div>



<div class="row" >