<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesdesign.in/admiry/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:07:30 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
         <title>Car Crime Control System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
        <style>
            .th-color{
              background-color:#5cc79a;
              color: #f6fcf9;
             }
             .th-right{
                 border: 10px solid;
                 border-color: white;
                 width: 40%;
                 text-align: right;
             }
              .th-left{
                 border: 10px solid;
                 border-color: white;
                 width: 40%;
                 text-align: left;
             }
        </style>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
   <style>
            .text-center {
            text-align: center!important;
            height: 96px;
              }
            img {
                vertical-align: middle;
                height: 108px;
            }
        </style>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo">Admiry</a>-->
                        <a href="<?php echo base_url(); ?>super_admin/index" class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" height="42" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="<?php echo base_url(); ?>assets/images/users/photo2.jpg" alt="" class="rounded-circle">
                        </div>
                        <div class="user-info">
                            <h4 class="font-16">Masud Rana</h4>
                            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url();?>super_admin/index" class="waves-effect">
                                    <i class="mdi mdi mdi-comment-processing-outline"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                           
                           
                               <li class="has_sub">
                                <a href="javascript:void(0);"><i class="mdi ti-email"></i> <span> EMAIL <span class="badge badge-primary pull-right">15</span> </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url();?>welcome/email"><i class="ion-compose"></i> Compose</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/inbox"><i class="ion-email"></i>Inbox</a></li>
                                     <li><a href="<?php echo base_url();?>welcome/sent_email"><i class="ion-at"></i> Sent Mail</a></li>
                                      <li> <a href="<?php echo base_url();?>welcome/Trash"><i class="ion-trash-a"></i> Trash</a></li>
                                    
                                </ul>
                            </li>

                        
                             <li class="has_sub">
                                <a href="javascript:void(0);"><i class="mdi ti-credit-card"></i> <span> PAYMENT </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url();?>super_admin/add_payment"><i class="mdi ti-credit-card"></i>Add Payment</a></li>
                                    <li><a href="<?php echo base_url();?>super_admin/payment_list"><i class="ion-clipboard"></i>Payment List</a></li>
                                        <li><a href="<?php echo base_url();?>super_admin/payment_attachment"><i class="ion-clipboard"></i> Attachments</a></li>
                              
                                </ul>
                            </li>
                           

                             <li>
                                <a href="<?php echo base_url();?>super_admin/crime_list" class="waves-effect">
                                    <i class="mdi ion-clipboard"></i>
                                    <span>SUGGESTION </span>
                                </a>
                            </li>

                           

                           
                            <li>
                                <a href="<?php echo base_url();?>super_admin/complain" class="waves-effect">
                                    <i class="mdi ion-chatbox-working"></i>
                                        <span> REVIEW/COMPLAIN </span>
                                </a>
                            </li>



                           
                         
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
             <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>assets/images/users/photo2.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="<?php echo base_url();?>super_admin/profile"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>super_admin/car_registration"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Car Registration</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>super_admin/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>
                                  <?php
                        $error_message = $this->session->userdata('error_message');
                        if ($error_message) {
                            ?>
                            <h4 class="error_box" style="color: red;"><?php echo $error_message; ?></h4>
                            <?php
                            $this->session->unset_userdata('error_message');
                        } else {

                        }
                        ?>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h2 class="page-title">ROAD CAR CRIME CONTROL </h2>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>

            <?php echo $maincontentpublic ?>
            
            
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url(); ?>assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/admiry/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:07:56 GMT -->
</html>