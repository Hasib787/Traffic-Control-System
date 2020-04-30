
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

                           

                            <!-- end row -->


                           
                            
                        <div class="row">
                               

                               
                                 <?php $case_id=0?>
                                 <?php foreach($view_payment_attachment as $payment) { ?>
                            
                                <div class="col-md-6 col-lg-6 col-xl-7">

                                    
                                    <div class="card m-b-20">
                                       
                                        <img class="card-img-top img-fluid" src="<?php echo $payment->attachment;?>" alt="Card image cap"> 
                                        
                                    </div>
                                          <?php $case_id=$payment->case_id?>
                                         <?php } ?>

                                </div><!-- end col -->
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                 <div class="card m-b-20">
                                        <div class="card-block">
                                              <?php foreach($all_paper_info as $paper) { ?>
                                               <?php if( $case_id==$paper->case_id){?>
                                            <h4 class="mt-0 header-title">Papers Location Information <span style="float: right"> <?php echo $paper->date?></span> </h4>
                                            <p class="text-muted m-b-30 font-14"><?php echo $paper->note?> </p>

                                              <?php } ?>
                                             <?php } ?>
                                        </div>
                                    </div>
                                         <form  action="<?php echo base_url();?>super_admin/payment_confirmation" method="post"> 
                                
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">If you get all papers </h4>
                                            <h6>(Click the Button below)</h6><br><br>
                                            <input type="hidden" name="case_id" value="<?php echo $case_id?>">

                                            <div class="button-items">
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-primary btn-lg btn-block">Get Paper</button>
                                           
                                            </div>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                          
                            </div>  
                            <!-- end row -->
                         


                        </div><!-- container -->


                    </div>
                   
                   
                            <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Masud|Rana.
                    
                </footer>

            </div>
