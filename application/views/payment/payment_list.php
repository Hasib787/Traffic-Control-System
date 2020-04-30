
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

                           

                            <!-- end row -->


                           
                            
                             <div class="row">
                                 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Crimes Information <a href="#" target="" ></a></h4>
                                           
                                            
                                          
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                     <th class="th-color">Serial No</th>
                                                     <th class="th-color">Car Number</th>
                                                     <th class="th-color">Case Number</th>
                                                     <th class="th-color">Pay Amount</th>
                                                     <th class="th-color">Payment Date</th>
                                                     <th class="th-color">Action</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                     
                                                    <?php $i=1;?>
                                                <?php foreach($all_payment_info as $payment) { ?>   
                                               <tr>
                                                    <td><?php echo $i++;    
                                                        ?></td>
                                                    <td><?php echo $payment->car_number?></td>
                                                    <td><?php echo $payment->case_id?></td>
                                                    <td>‎৳<?php echo $payment->amount ?></td>
                                                     <td><?php echo $payment->date?></td>
                                                     <td >
                                                         <a href="<?php echo base_url();?>super_admin/invoice" >
                                                             <button type="button" class="btn btn-info waves-effect waves-light"><i class="ion-android-printer" style="float:right" title="Print"></i></button></a>
                                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="ion-trash-b" style="float:right" title="Delete"></i></button>
 
                                                       
                                                       
                                                        
                                                     </td>
                                                  
                                                    
                                                    
                                                </tr>
                                                <?php }?>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                              <from>

                             
 </form>
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