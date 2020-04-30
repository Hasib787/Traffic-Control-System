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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

         <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
         <link href="<?php echo base_url();?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/from.css" rel="stylesheet" type="text/css">

        <style>
            img {
    vertical-align: middle;
    height: 100px;
}
        </style>
    </head>


    <body>

        <!-- Begin page style="background-image: url(<?php echo base_url();?>assets/images/bg.jpg);" -->
        <div class="accountbg"  ></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-block">
                                    <h4  id="alertify-error" style="color:red;">
          <?php 
                $exception=$this->session->userdata('exception');
                if(isset($exception))
                {
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
          ?>
          
      </h4>
      <h4 style="color:green;">
          <?php 
                $message=$this->session->userdata('message');
                if(isset($message))
                {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
          ?>
          
      </h4>

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="<?php echo base_url()?>welcome/index" class="logo logo-admin"><img src="<?php echo base_url();?>assets/images/logo.png" height="54" alt="logo"></a>
                    </h3>

                    <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" method="post" action="<?php echo base_url(); ?>admin_login/check_login">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="admin_email_address" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" name="admin_password" required="" placeholder="Password">
                                </div>
                            </div>
                            
                            
                                          


                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                       <span class="custom-control-description">Remember me</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button  id="alertify-error" class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                            

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a id="myBtn"  href="#" class="text-muted"><i class="mdi mdi-lock    "></i> Forgot  password?</a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="<?php echo base_url()?>admin_login/create_account" class="text-muted"><i class="mdi mdi-account-circle"></i> Create  account</a>
                                </div>
                            </div>
                        </form>
                        
                      
                        
                       
                        <!-- Trigger/Open The Modal -->
                   
                            
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                
                     
                                <form  action="<?php echo base_url(); ?>welcome/product" method="post">
                   
                                    <table>
                                        <tbody>
                                            <tr>
                                             
                                                <td> <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>"></td>
                                            </tr>
                                            <tr><legend style="text-align: center;">Change Your Password</legend>
                                             
      
          
                                            </tr>
                                            <tr>
                                              
                                               <input  type="text" id="name" name="email_address" placeholder="Enter your email address">
                                   
                                           <input name="old_password" type="text" placeholder="Enter old password">
                                         <input name="new_password" type="text" placeholder="Enter new password">
                                            </tr>
                                    
                                        
                                            <tr>
                                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button  id="alertify-error" class="btn btn-primary btn-block waves-effect waves-light" onclick="return confirm('Are you sure?')" type="submit">Change</button>
                                </div>
                            </div>
                                             
                                            </tr>
                                        </tbody>
                                    </table>
                                

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a id="myBtn"  href="<?php echo base_url()?>welcome/index" class="text-muted"><i class="mdi mdi-lock    "></i> Login</a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="<?php echo base_url()?>welcome/create_account" class="text-muted"><i class="mdi mdi-account-circle"></i> Create  account</a>
                                </div>
                            </div>
                                </form></br></br>
                          
                                
                                
                            </div>

                        </div>

                        <script>
                            // Get the modal
                            var modal = document.getElementById('myModal');

                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal 
                            btn.onclick = function () {
                                modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function () {
                                modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function (event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                           
                        
                        

                    </div>
                    </div>

                </div>
            </div>
        </div>
<div>


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