
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
                                       <div style="float: right; ">
                                           <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Update
                                                        </button>
                                                       
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
                                                    <th class="th-color">S/N</th>
                                                    <th class="th-color">Case Id</th>
                                                    <th class="th-color">Car Number</th>
                                                     <th class="th-color">Reason</th>
                                                    <th class="th-color">Location</th>
                                                    <th class="th-color">Fine</th>
                                                    <th class="th-color">Pay</th>
                                                    <th class="th-color">Due</th>
                                                    <th class="th-color">Start Date</th>
                                                    <th class="th-color">Status</th>
                                                    <th class="th-color">Details</th>
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
                                                    <td><?php echo $case->car_number?></td>
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
                                                 <td><a href="<?php echo base_url();?>super_admin/single_case_info/<?php echo $case_id?>/<?php echo $case->car_number?>" >MORE</a></td>
                                                    
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