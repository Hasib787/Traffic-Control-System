
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

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
                                            <span class="counter"><?php echo $running_case;?></span>
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

                            <!-- end row -->


                           
                            
                             <div class="row">
                                 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Crimes Information <a href="#" target="" ><button type="submit" style="float: right;" class="btn btn-dark waves-effect m-l-5">
                                                           <i class="ion-printer"  title="Print"></i>
                                                        </button></a></h4>
                                           
                                            
                                          
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                     <th class="th-color">Serial No</th>
                                                     <th class="th-color">Car Number</th>
                                                     <th class="th-color">Case Number</th>
                                                     <th class="th-color">Pay Amount</th>
                                                     <th class="th-color">Payment Date</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                      <?php $i=1;?>
                                                     <?php $case_id=0;?>
                                                <?php foreach($all_single_car_case as $case) { ?>   
                                              
                                                    <?php 
                                                        $total_case=$total_case+1;  
                                                        $case_id=$case->case_id;
                                                        ?><?php  $case->case_id?>
                                                        <?php  $case->car_number?>
                                                        <?php  $case->location?>
                                                        <?php  $case->fine?>
                                                        <?php  $case->amount ?>
                                                        <?php  $case->start_date?>
                                                        <?php  $case->date?>


                                                <?php }?>
                                                    <?php $i=1;?>
                                                <?php foreach($all_single_car_payment as $payment) { ?>   
                                               <tr>
                                                    <td><?php echo $i++;    
                                                        ?></td>
                                                    <td><?php echo $case->car_number?></td>
                                                    <td><?php echo $payment->case_id?></td>
                                                    <td>‎৳<?php echo $payment->amount ?></td>
                                                     <td><?php echo $payment->date?></td>
                                                  
                                                    
                                                    
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