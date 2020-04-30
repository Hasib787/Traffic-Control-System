
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

                           

                            <!-- end row -->


                           
                            
                             <div class="row">
                                 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Receive All Payment Attachments <a href="#" target="" ></a></h4>
                                           
                                            
                                          
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                     <th class="th-color">Serial No</th>
                                                     <th class="th-color"> Date</th>
                                                     <th class="th-color"> Car Number</th>
                                                      <th class="th-color"> Attachment</th> 
                                                     <th class="th-color">Action</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                     
                                                    <?php $i=1;?>
                                                <?php foreach($all_payment_received as $payment) { ?>   
                                               <tr>
                                                    <td style="text-align: center;"><?php echo $i++;    
                                                        ?></td>
                                                   <td style="text-align: center;"><?php echo $payment->date?></td>
                                                    <td style="text-align: center;"><?php echo $payment->c_number?></td>
                                                    <td style="text-align: center;"><a href="<?php echo base_url();?>welcome/view_case_info/<?php echo $payment->c_number?>/<?php echo $payment->payment_attachment_id?>/<?php echo $payment->case_id?>"><img src="<?php echo $payment->attachment?>"></a></td>
                                                     <td style="text-align: center;">
                                                         <a href="<?php echo base_url();?>welcome/view_case_info/<?php echo $payment->c_number?>/<?php echo $payment->payment_attachment_id?>" >
                                                             <button type="button" class="btn btn-info waves-effect waves-light">View</button></a>
                                                        
                                                       
                                                       
                                                        
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