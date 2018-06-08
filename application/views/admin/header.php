<!DOCTYPE html>
<html>
<head>

  <title>NATELCOM-X</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/jquery.dataTables.css">

  <!--FONTAWESOME -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/fontawesome-all.css" />
  <!-- CUSTOM CSS-->
  <link href="<?= base_url() ?>assets/css/sticky-footer-navbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/mdb.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.min.css">

   <!-- GOOGLE FONTS-->
  <link href='<?= base_url() ?> http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/datatables.min.css">
</head>
<body>
  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">
          <img src="<?= base_url() ?>assets/img/nav-brand.png" width="30" height="30" alt="NATELCOM" class="d-inline-block align-top">
          National Telecommunications Commission-X
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img width="30" height="30" src="<?= base_url() ?>assets/img/user.png" alt="User-photo">
              <span class="user-info">
                <small>Welcome,</small>
                
                  <?php 
                    echo $this->session->userdata('username'); 
                  ?>
                
              </span> 
              </a>
              <!-- THIS PART IS THE LOGOUT BUTTON-->
              <div class="dropdown-menu" aria-labelledby="user">
                <a class="dropdown-item" href="#"> <!--Link to Change Password Page -->
                  <i class="fas fa-user"></i>
                  <small>Change Password</small> 
                </a>
                <a class="dropdown-item" href="<?=base_url('welcome')?>"> <!-- Link to about -->
                  <i class="fas fa-file"></i>
                  <small>About NTC</small>
                </a>
                <a class="dropdown-item" href="<?= base_url() ?>login/user_logout"> <!-- Logout session -->
                  <i class="fas fa-sign-out-alt"></i>
                  <small>Logout</small>
                </a>
              </div> <!-- END OF NAVBAR LIST -->
            </li> <!-- END OF LIST -->
          </ul> <!-- END OF UNORDERED LIST -->
        </div>
      </nav>
     
      <nav class="col-md-3 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky" id="sidebar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?=base_url('welcome')?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" href="#various">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><i class="fas fa-sort-down float-right"></i>
                  Various
                </a>
                <div class="collapse" id="various" data-parent="#sidebar">
                  <a href="<?=base_url('various_c/view_incoming')?>" class="dropdown-item" data-parent="#various"><i class="fas fa-inbox"></i> Incoming Various</a>
                  <a href="<?=base_url('various_c/view_outgoing')?>" class="dropdown-item" data-parent="#various"><i class="fas fa-sign-out-alt"></i> Outgoing Various</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" href="#ord">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><i class="fas fa-sort-down float-right"></i>
                  Regional Director's Office
                </a>
                <div class="collapse" id="ord" data-parent="#sidebar">
                  <a href="<?=base_url('ord_c/viewIncomingORD')?>" class="dropdown-item" data-parent="ord"><i class="fas fa-inbox"></i> Incoming ORD</a>
                  <a href="<?=base_url('ord_c/viewOutgoingOrd')?>" class="dropdown-item" data-parent="ord"><i class="fas fa-sign-out-alt"></i> Outgoing ORD</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" href="#iar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><i class="fas fa-sort-down float-right"></i>
                  Inspection & Acceptance
                </a>
                <div class="collapse" id="iar" data-parent="#sidebar">
                  <a href="<?=base_url('ia_c/viewRegSupply')?>" class="dropdown-item" data-parent="iar"><i class="fas fa-parachute-box"></i> Regular Supply</a>
                  <a href="<?=base_url('ia_c/viewPettyCash')?>" class="dropdown-item" data-parent="iar"><i class="far fa-money-bill-alt"></i> Petty Cash</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Reports
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current month
                </a>
              </li>
            </ul>
          </div>
        </nav>

    </header>

    <!-- Begin page content -->
    <main role="main" class="container col-md-9 col-xs-11 p-1-2 p-t-2" style="margin-left:340px">
      
    

    