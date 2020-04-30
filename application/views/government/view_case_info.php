
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

                         

                            <!-- end row -->


                            <form  action="<?php echo base_url();?>welcome/update_case" method="post"> 
                             <div class="row">
                                  <?php foreach($view_payment_attachment as $payment) { ?>
                                 <div class="col-md-6 col-lg-6 col-xl-8">

                                    <!-- Simple card -->
                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="<?php echo $payment->attachment;?>" alt="Card image cap">
                                       
                                    </div>
                                    
                                  <?php }?>  
                                         <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Crimes Information</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                    <th class="th-color">Case Id</th>
                                                    <th class="th-color">Start Date</th>
                                                     <th class="th-color">Fine</th>
                                                    <th class="th-color">Status</th>
                                                    <th class="th-color">Update</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                     <?php $case_id=0;?>
                                                <?php foreach($all_single_car_case as $case) { ?>   
                                                    
                                               <tr>
                                                   <?php if($new_case_id== $case->case_id){?>
                                                   
                                                    <td><?php echo $case->case_id?></td>
                                                      <td><?php echo $case->start_date?></td>
                                                      
                                                    <td>‎৳<?php echo $case->fine?></td>
                                                    <?php if($case->fine-$case->amount<=0){
                                                        echo'<td><span class="badge badge-default">Close</span></td>';
                                                     
                                                    }
                                                    else
                                                       
                                                         echo'<td><span class="badge badge-primary">Active</span></td>';
                                                    
                                                 ?>
                                                 <td><select name="case_status" class="form-control" required>
                                                         <option value="0">Select</option>
                                                        <option value="Close">Close</option>
                                                        <option value="Active">Active</option>
                                                        
                                                         
                                                         
                                                    </select>
                                                     <input type="hidden" name="case_id" value="<?php echo $case->case_id?>"
                                                 
                                                 </td>
                                                    
                                                </tr>
                                                <?php }?>
                                                <?php }?>
                                               
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div><!-- end col -->
                                
                                <div class="col-md-6 col-lg-6 col-xl-4">

                                    <!-- Simple card -->
                                   <div class="card m-b-20">
                                        <div class="card-block">

                                            <h6 >All papers in Government Office </h6>

                                            <div class="">
                                              
                                                <table class="table table-bordered table-striped table-responsive">
                                                    <thead>
                                                  
                                                    </thead>
                                                    <tbody>
                                                   
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Driving License</th>
                                                        </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Insorance papers</th>
                                                     </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Category</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row"></th>
                                                    </tr>
                                                                                                    
                                                   
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end col -->

                              

                                  
                                          
                            </div>
                             <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h2 class="mt-0 header-title">Write a note to car authority </h2>
                                           
                                              <textarea class="summernote" id="summernote" name="note" rows="18">
                                              </textarea><br>
                                            
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
                            
                           
                            
                               <div class="row">
                               
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi ion-ios7-paper"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <?php $total_case=0; $total_fine=0; $running_case=0; $amount=0;
                                            ?>
                                            <?php foreach($all_single_car_case as $case) { ?>   
                                              <?php
                                               $total_case=$total_case+1;
                                               $total_fine=$total_fine+$case->fine;
                                               $amount=$amount+$case->amount;
                                               
                                              ?>
                                            <?php if($case->fine-$case->amount<=0){
                                                         
                                                    }
                                                    else
                                                    {
                                                       $running_case++; 
                                                    }
                                                       
                                                 ?>
                                                <?php }?>
                                            <span class="counter">
                                            <?php echo $total_case;
                                            ?></span>
                                             
                                            
                                            Total Case
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                       <span class="mini-stat-icon"><i class="mdi ion-ios7-paper"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                           
                                            <span class="counter"><?php echo $running_case?></span>
                                            Running Case
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter"><?php echo $total_fine?></span>
                                            Total Case Fine
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter"><?php echo $total_fine-$amount;?></span>
                                            Total Due
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Crimes Information</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                    <th class="th-color">S/N</th>
                                                    <th class="th-color">Case Id</th>
                                                     <th class="th-color">Reason</th>
                                                    <th class="th-color">Location</th>
                                                    <th class="th-color">Fine</th>
                                                    <th class="th-color">Pay</th>
                                                    <th class="th-color">Due</th>
                                                    <th class="th-color">Start Date</th>
                                                    <th class="th-color">Status</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                     <?php $case_id=0;?>
                                                <?php foreach($all_single_car_case as $case) { ?>   
                                               <tr>
                                                    <td><?php echo $i++;
                                                        $total_case=$total_case+1;  
                                                        $case_id=$case->case_id;
                                                        ?></td>
                                                    <td><?php echo $case->case_id?></td>
                                                    <td><?php echo $case->reason?></td>
                                                    <td><?php echo $case->location?></td>
                                                    <td>‎৳<?php echo $case->fine?></td>
                                                    <td>‎৳<?php echo $case->amount ?></td>
                                                    <td style=" color: red;">‎৳<?php echo sprintf("%.2f", $case->fine-$case->amount);  ?></td>
                                                    <td><?php echo $case->start_date?></td>
                                                    <?php if($case->fine-$case->amount<=0){
                                                        echo'<td><span class="badge badge-default">Close</span></td>';
                                                     
                                                    }
                                                    else
                                                       
                                                         echo'<td><span class="badge badge-primary">Active</span></td>';
                                                    
                                                 ?>
                                                
                                                    
                                                </tr>
                                                <?php }?>
                                               
                                               
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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