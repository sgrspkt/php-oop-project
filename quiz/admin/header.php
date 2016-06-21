<?php

require_once('classes/connection.class.php');
require_once('classes/admin.class.php');

$conObj = new Connection();

$objAdmin=new admin();
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php?homepage" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>QU</b>IZ</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Quiz</b>APP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php if($_SESSION['username'] != null ){
                echo "<span>Welcome</span>  " . $_SESSION['username'];
                }?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?php if($_SESSION['username'] != null ){
                echo $_SESSION['username'];
                //echo $_SESSION['admin_id'];
                }
                 $views = $objAdmin->viewAdmin();
                 if(sizeof($views>0)){
    foreach($views as $value){
      
      echo "-".$value['role'];
       echo "<small>".$value['updated_at']."</small>";
  
  }
    }           











                 ?>
                 
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>