<?php
session_start();
include "updatecasual.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Panel</title>
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
    
    
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" sizes="180x180" href="../images/icon.png"/>
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../bootstrap4/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="../bootstrap4/css/all.min.css"/>
<link rel="stylesheet" href="../bootstrap4/css/typeahead.css"/>
<script src="../bootstrap4/jquery/sweetalert.min.js"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
        #header{
            background-color:#030f40;
        }
        #sidebar .nav-item .nav-link{
            background-color: #020129;
            
        }
        #sidebar .nav-item .nav-link span{
            color:white;
                        font-size: 16px;
        }
        #sidebar{
            background-color: #020129;
            
        }
        #sidebar .nav-item .nav-link .bi{
            color: white;
            font-weight: 400!important;
            font-size: 20px;
            
        }
        #sidebar .nav-item ul a span{
            color:white;
            font-weight: 400!important;
        }
        #sidebar .nav-item ul a i{
            color:white;
            font-weight: 400!important;
        }
        #header .d-flex .logo span{
            color:white;
            font-size:16;
        }
        #header .d-flex .bi{
            color: white;
        }
        #header .nav-item .nav-link span{
            color:white;
        }
        
    
    </style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" >

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span style="font-size:20px;" class="d-none d-lg-block">FESTIVE FLOUR MILLERS LTD</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../user.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucfirst(substr($_SESSION["FirstName"],0,1)) .".". $_SESSION['LastName']    ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["FirstName"] ." ". $_SESSION['LastName']    ?></h6>
              <span><?php echo $_SESSION["usertype"]   ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../welcome.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../usermanagement/users.php">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
          <li>
            <a href="../usermanagement/role.php">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
          <li>
            <a href="../usermanagement/logs.php">
              <i class="bi bi-circle"></i><span>View Logs</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../contacts/suppliers/suppliers.php">
              <i class="bi bi-circle"></i><span>Suppliers</span>
            </a>
          </li>
          <li>
            <a href="../contacts/customers/customers.php">
              <i class="bi bi-circle"></i><span>Customers</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-check"></i><span>Raw Materials</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../rawmaterials/rawmaterial.php">
              <i class="bi bi-circle"></i><span>Raw Materials</span>
            </a>
          </li>
          <li>
              <a href="../rawmaterials/unit.php">
              <i class="bi bi-circle"></i><span>Add Unit</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tools"></i><span>Production</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
        <a href="../production/addvalues.php.php">
              <i class="bi bi-arrow-right"></i><span>Add Procuction Values</span>
            </a>
          </li>
          <li>
            <a href="../production/produce.php">
              <i class="bi bi-arrow-right"></i><span>Produce</span>
            </a>
          </li>
          <li>
            <a href="../production/dailyProduction.php">
              <i class="bi bi-arrow-right"></i><span>Selling price</span>
            </a>
          </li>


        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bag-heart-fill"></i><span>Purchases</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="../purchases/products.php">
              <i class="bi bi-circle"></i><span>Purchases</span>
            </a>
          </li>
          <li>
            <a href="purchases/addpurchases.php">
              <i class="bi bi-circle"></i><span>Add Purchases</span>
            </a>
          </li>
          <li>
            <a href="../packets.php">
              <i class="bi bi-circle"></i><span>Manage Packets</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
	  
	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sell-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart4"></i><span>Sell</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sell-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../sell/sell.php">
              <i class="bi bi-circle"></i><span>Sell</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#stokeout-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-x"></i><span>Stock Out</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="stokeout-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../stockout/stockout.php">
              <i class="bi bi-arrow-right"></i><span>Stock Out</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#expense-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-x"></i><span>Expense</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="expense-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../expenses/expenses.php">
              <i class="bi bi-arrow-right"></i><span>Expenses</span>
            </a>
          </li>
          <li>
            <a href="../expenses/expensecategory.php">
              <i class="bi bi-arrow-right"></i><span>Expense Category</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#payment-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-credit-card"></i><span>Payment Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="payment-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../payments/payments.php">
              <i class="bi bi-circle-fill"></i><span>Payments</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	  	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#customer-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Customer Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="customer-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../customerorders/customerorders.php">
              <i class="bi bi-circle"></i><span>Orders</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	  	  	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-chat-dots-fill"></i><span>Sms To Customers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../sms/sms.php">
              <i class="bi bi-circle"></i><span>Sms</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	  	  	  	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tax-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear-fill"></i><span>Tax Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tax-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../tax/tax.php">
              <i class="bi bi-circle"></i><span>Tax</span>
            </a>
          </li>
        </ul>
      </li>
	  
	  	  	  	  	  	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#hrm-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-fill"></i><span>HRM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hrm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="hrm.php">
              <i class="bi bi-circle"></i><span>HRM</span>
            </a>
          </li>
          <li>
            <a href="attendance.php">
              <i class="bi bi-circle"></i><span>Attendance</span>
            </a>
          </li>
        </ul>
      </li>
	  
	    	  	  	  	  	  	  	        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book-half"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../logout.php">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>
   </aside><!-- End Sidebar-->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    
      <style>
        .card{
            border-top:4px solid #3c8dbc;
            font-size:20px;
        }
        .card div{
            margin-top: 10px;
        }
        .card input{
            height:40px;
                
        }
        #main span{
            font-size:25px;
            
        }
        #main{
            padding-bottom:10px;
            color:#525f7f;
        }
        .card select{
            height:40px;
            font-size:18px;
        }
        ::placeholder{
            font-size:18px;
        }
        #save{
            background-color: #3c8dbc;
            padding: 5px;
            color:white;
            margin-top: 30px;
            font-size:20px;
            width:150px;
            margin-left:auto;
            margin-right:auto;
        }
        #date{
            font-size:18px;
            color:#525f7f;
        }
          #myTable th{
               color:#525f7f;
              font-size:18px;
          }
          #myTable td{
              color:gray;
              font-size: 15px;
          }
          #myTable td a{
              text-decoration-line: none;
              font-size: 15px;
          }
    </style>
  <main id="main" class="main">
      <div class="row">
<body>
<div class="container">
  <h2>Update Casual Details</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="First Name">First Name:</label>
      <input type="text" class="form-control" id="FirstName" value="<?php echo $fname;?>" name="FirstName">
    </div>
    <div class="form-group">
      <label for="LastName">Last Name:</label>
      <input type="text" class="form-control" id="Lastname" value="<?php echo $lname;?>" name="LastName">
    </div>
    <div class="form-group">
      <label for="PhoneNumber">Phone Number</label>
      <input type="tel" class="form-control" id="PhoneNumber" value="<?php echo $pnumber;?>" name="PhoneNumber">
    </div>
    <div class="form-group">
      <label for="Role">Role:</label>
      <input type="text" class="form-control" id="Role" value="<?php echo $Role;?>" name="Role">
    </div>
    <div class="form-group">
      <label for="AddedOn">AddedOn:</label>
      <input type="text" class="form-control" id="Date" value="<?php echo $AddedOn;?>" name="AddedOn">
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update Changes</button>
    <a href="hrm.php" class="btn btn-danger col-md-3">Back</a>
  </form>
</div>
</body>
</html>
      </div></div></div></div></main></body></html>