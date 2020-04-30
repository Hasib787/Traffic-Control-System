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
        <style>
            .th-color{
              background-color:#5cc79a;
              color: #f6fcf9;
              text-align: center;
             }
        </style>
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/plugins/summernote/summernote.css" rel="stylesheet" />
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
                        <a href="<?php echo base_url(); ?>welcome/home.html" class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" height="42" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="<?php echo base_url(); ?>assets/images/users/photo3.jpg" alt="" class="rounded-circle">
                        </div>
                        <div class="user-info">
                            <h4 class="font-16">Masud Rana</h4>
                            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url();?>welcome/home" class="waves-effect">
                                    <i class="mdi ion-search"></i>
                                    <span> SEARCH CAR </span>
                                </a>
                            </li>

                              <li class="has_sub">
                                <a href="javascript:void(0);"><i class="ion-clipboard"></i><span> CRIME CATEGORY </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url();?>welcome/add_category"><i class="ion-clipboard"></i>Add Category</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/category_list"><i class="ion-clipboard"></i> Manage Category</a></li>
                                </ul>
                            </li>

                             <li>
                                <a href="<?php echo base_url();?>welcome/crime_list" class="waves-effect">
                                    <i class="ion-ios7-paper-outline"></i>
                                    <span> LATEST CRIME </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);"><i class="mdi ti-email"></i> <span> EMAIL </span> </a>
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
                                    <li><a href="<?php echo base_url();?>welcome/payment_received"><i class="mdi ti-credit-card"></i>Received</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/payment_pending"><i class="mdi ti-credit-card"></i>Pending</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/payment_finish"><i class="mdi ti-credit-card"></i>Finish</a></li>
                                  
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);"><i class="mdi ion-person"></i> <span> User </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url();?>welcome/add_user"><i class="mdi ion-person-add"></i> Add User</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/list_user"><i class="mdi ion-person-stalker"></i> User List</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);"><i class="mdi ti-file"></i> <span> Report </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url();?>welcome/email"><i class="ion-document"></i>Crime Report</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/inbox"><i class="mdi- ti-file"></i>Payment Report</a></li>
                                    <li><a href="<?php echo base_url();?>welcome/sent_email"><i class="ion-document"></i>Case Report</a></li>
                                    <li> <a href="<?php echo base_url();?>welcome/Trash"><i class="ion-android-note"></i>Increase & Decrease </a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>welcome/complain" class="waves-effect">
                                    <i class="mdi ion-chatbox-working"></i>
                                        <span>COMPLAINS </span>
                                </a>
                            </li>


                           
                         
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
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
                                        <img src="<?php echo base_url();?>assets/images/users/photo3.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/profile"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/create_account"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Create Account</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">SAFETY ROAD </h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
            <!-- Start right Content here -->

            <?php echo $maincontent ?>
            
            
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
         <!--Summernote js-->
        <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                 // set focus to editable area after initializing summernote
                });
            });
        </script>

    </body>

<!-- Mirrored from themesdesign.in/admiry/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:07:56 GMT -->
</html>