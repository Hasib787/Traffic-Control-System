
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">
                             <div class="row">
                                  <form class="col-6" action="<?php echo base_url();?>super_admin/save_attachment" enctype="multipart/form-data"  method="post"> 
                                <div class="col-12">
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

                                            <h2 class="mt-0 header-title">Add Payment Clip</h2>
                                             <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Car Number</label>
                                                <div class="col-sm-10">
                                                     <select name="c_number" class="form-control" required>
                                                         <option value="0">Select Case ID</option>
                                                          <?php foreach($all_car_info as $car) { ?>
                                                        <option value="<?php echo $car->car_number?>"><?php echo $car->car_number?></option>
                                                          <?php } ?>
                                                   
                                                         
                                                         
                                                    </select>    </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Case ID</label>
                                                <div class="col-sm-10">
                                                     <select name="case_id" class="form-control" required>
                                                         <option value="0">Select Case ID</option>
                                                          <?php foreach($all_case_id as $car) { ?>
                                                        <option value="<?php echo $car->case_id?>"><?php echo $car->case_id?></option>
                                                          <?php } ?>
                                                   
                                                         
                                                         
                                                    </select>    </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Attachment</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="photo" type="file" id="example-number-input">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group m-b-0" style="float: right;">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                </form>
                                 <form class="col-6" action="<?php echo base_url();?>super_admin/save_payment" method="post"> 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h2 class="mt-0 header-title">Take Payment to CCCS </h2>
                                           
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Car Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="car_number" placeholder="Enter your car number"  id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Case ID</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="case_id" placeholder="Case ID" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Payment Amount</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="amount" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group m-b-0" style="float: right;">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                </form>
                                
                                 
                            </div> <!-- end row -->

                           
                           

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                        
                </footer>

            </div>