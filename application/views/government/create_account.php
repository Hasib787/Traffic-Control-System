<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesdesign.in/admiry/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:11:18 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Car Crime Control System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
         <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<style>
            img {
    vertical-align: middle;
    height: 100px;
}
        </style>
    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page" style="max-width:718px;">

            <div class="card">
                <div class="card-block">
                                    <h4  id="alertify-error" style="color:red;">
      
          
      </h4>

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="<?php echo base_url()?>welcome/index" class="logo logo-admin"><img src="<?php echo base_url();?>assets/images/logo.png" height="54" alt="logo"></a>
                    </h3>

                  

                    <div class="col-lg-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h4 class="text-muted text-center font-18"><b>Create New Account</b></h4>
                                            <form class="" action="<?php echo base_url(); ?>super_admin/public_registration" method="post">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="name" required placeholder="Enter Your Name"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="password" id="pass2" name="password" class="form-control" required
                                                               placeholder="Password"/>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <input type="password" class="form-control" required
                                                               data-parsley-equalto="#pass2"
                                                               placeholder="Re-Type Password"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <div>
                                                        <input type="email" class="form-control" required name="email"
                                                               parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>address</label>
                                                    <div>
                                                        <input type="text" name="address" type="url" class="form-control"
                                                               required />
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div>
                                                        <input data-parsley-type="number" type="text"
                                                               class="form-control" required name="number"
                                                               placeholder="Enter only numbers"/>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label>Textarea</label>
                                                    <div>
                                                        <textarea required class="form-control" name="about" rows="5"></textarea>
                                                        <input  name="department" value="pubilc" type="hidden"/>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-left:38%; ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div> <!-- end col -->

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/admiry/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:11:18 GMT -->
</html>