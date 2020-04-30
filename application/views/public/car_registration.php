
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">

                            <div class="row">
                                <div class="col-2">
                                    
                                </div>
                                <div class="col-8">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <?php
$message = $this->session->userdata('message');
if ($message) {
    ?>
    <h4 class="valid_box"><?php echo $message; ?></h4>
    <?php
    $this->session->unset_userdata('message');
} else {
    
}
?>


                                            <h2 class="mt-0 header-title">Car Registration Form</h2>
                                            <form action="<?php echo base_url(); ?>super_admin/save_car_info" enctype="multipart/form-data" method="post" >
                                           
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Car Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="car_number" type="text" placeholder="Enter your name"  id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input"  class="col-sm-2 col-form-label">Car Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="car_name" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="category" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Color</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="color" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                           
                                             <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">CC</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="cc" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Chasis Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="chasis_number" type="text" value="4444" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Body Type</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="body_type" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Horse Power</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="horse_power" type="tel" placeholder="1-(555)-555-5555"  id="example-tel-input">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-email-input" n class="col-sm-2 col-form-label">Fuel Type</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="fuel_type" type="text" placeholder=""  id="example-email-input">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Manufacture Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="mnu_date" type="date" value="2013-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                         <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Registration Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="reg_date" type="date" value="2015-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Car Image</label>
                                                <div class="col-sm-10">
                                                   
                                                    <div class="fallback">
                                                      <dl>
            <dt><label> Image</label></dt>
            <dd><input type="file" name="photo"></dd>
        </dl>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                           <div style="float: right; ">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                           
                                           
                                         
                                         </form>
                                          
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-2">
                                    
                                </div>
                            </div> <!-- end row -->
                            <div class="form-group m-b-0" style="float: right;margin-right: 20px;">
                                                   
                                                </div>

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Masud|Rana.
                </footer>

            </div>