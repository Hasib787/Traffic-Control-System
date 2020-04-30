
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
                                <div class="col-md-6 col-lg-6 col-xl-6">

                                    <!-- Simple card -->
                                   <div class="card m-b-20">
                                        <div class="card-block">

                                            <h6 >Car Information</h6>

                                            <div class="">
                                                <?php $car_number?>
                                                 <?php foreach($all_car as $car) { ?>
                                                <table class="table table-bordered table-striped table-responsive">
                                                    <thead>
                                                  
                                                    </thead>
                                                    <tbody>
                                                   
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Car Number</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->car_number;?></td>
                                                        <?php $car_number=$car->car_number;?>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Car Name</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->car_name;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Category</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->category;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Color</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->color;?></td>
                                                    </tr>
                                                                                                     <tr>
                                                        <th class="text-nowrap" scope="row">CC</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->cc;?></td>
                                                    </tr>
                                                
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">Chassis No</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->chasis_number;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">Body type</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->body_type;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">Fuel type</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->fuel_type;?></td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Horse Power</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->horse_power;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">year of manufacture</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->mnu_date;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">year of registration</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->reg_date;?></td>
                                                    </tr>
                                                   
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end col -->

                              

                                  <div class="col-md-6 col-lg-6 col-xl-6">

                                    <!-- Simple card -->
                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="<?php echo $car->photo;?>" alt="Card image cap">
                                       
                                    </div>

                                </div><!-- end col -->
                                      <?php }?>    
                                          
                            </div>
                             <div class="row">
                                 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Crimes Information</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                    <th>Serial No</th>
                                                    <th>Car Number</th>
                                                    <th>Case Number</th>
                                                    <th>Pay Amount</th>
                                                    <th>Payment Date</th>
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