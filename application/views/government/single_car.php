
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">
                            <form action="<?php echo base_url();?>welcome/search_crime" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-12">
                                    <div class="mini-stat clearfix bg-primary">
                                        <div class="form-group row">
                                           
                                                 <div class="col-sm-10">
                                                     <input class="form-control" type="text" name="search" placeholder="Searching......" id="example-search-input">
                                                </div>
                                              <div class="col-sm-2">
                                                  <button type="submit" class="btn btn-outline-secondary waves-effect">Search</button>
                                                </div>
                                            
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
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
                                            <span class="counter">500</span>
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
                                        <img class="card-img-top img-fluid" src="<?php echo $car->photo;?>" alt="Card image cap"></br>
                                        <img class="card-img-top img-fluid" src="<?php echo $car->att;?>" alt="Card image cap">
                                       
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
                                                     <th class="th-color">Serial No</th>
                                                    <th class="th-color">Case Number</th>
                                                    <th class="th-color">Car Number</th>
                                                    <th class="th-color">Location</th>
                                                    <th class="th-color">Fine</th>
                                                    <th class="th-color">Pay</th>
                                                    <th class="th-color">Due</th>
                                                    <th class="th-color">Start Date</th>
                                                    <th class="th-color">Due Date</th>
                                                    <th class="th-color">Status</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                    <?php $i=1;?>
                                                <?php foreach($all_single_car_case as $case) { ?>   
                                               <tr>
                                                    <td><?php echo $i++;
                                                        $total_case=$total_case+1;    
                                                        ?></td>
                                                    <td><?php echo $case->case_id?></td>
                                                    <td><?php echo $case->car_number?></td>
                                                    <td><?php echo $case->location?></td>
                                                    <td>‎৳<?php echo $case->fine?></td>
                                                    <td>‎৳<?php echo $case->amount ?></td>
                                                    <td style=" color: red;">‎৳<?php echo sprintf("%.2f", $case->fine-$case->amount);  ?></td>
                                                    <td><?php echo $case->start_date?></td>
                                                    <td><?php echo $case->date?></td>
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
                              <from>

                             <div class="row">
                               
                                <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">General Crimes</h4>
                                    <div class="card m-b-20">
                                        

                                  

                                             <div class="form-group">
                                                  
                                                 <form action="<?php echo base_url();?>welcome/make_crime" method="post">
                                                    <div>

                                                       
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="general" value="general" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">General fine</span>
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="hydrolic_horn" value="hydrolic Horn" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Using hydrolic horn</span>
                                                        </label>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="deny_order" value="deny_order" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobey police order, refusal to cooperate </span>
                                                        </label>
                                                          <label class="custom-control custom-checkbox">
                                                              <input type="checkbox"name="deny_signel" value="deny_signal" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobeying red signal</span>
                                                        </label></br>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="careless_drive"  value="careless_drive" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Careless driving</span>
                                                        </label></br>
                                                          <label class="custom-control custom-checkbox">
                                                              <input type="checkbox" name="accident" value="accident" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Accident related fine </span>
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="safety" value="Driving with out safety" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without safety </span>
                                                        </label></br>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="smoke" value="smoke" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Black smoke emission</span>
                                                        </label></br> 
                                                         <label class="custom-control custom-checkbox">
                                                             <select name="location" class="form-control" required>
                                                         <option value="0">Select Occurrence  Location</option>
                                                        <option value="Danmondi">Danmondi</option>
                                                        <option value="Motijil">Motijil</option>
                                                        <option value="Uttora">Uttora</option>
                                                        <option value="Kolabagan">Kolabagan</option>
                                                        <option value="MohammodPur"> Mohammedpur</option> 
                                                        <option value="Romna">Romna</option>
                                                        <option value="Tajgoan">Tajgoan</option>
                                                        <option value="Banani">Banani</option>
                                                        <option value="Mirput">Mirpur</option>
                                                        <option value="Polton">Polton</option>
                                                        <option value="Komolapur">Komolapur</option>
                                                        <option value="Khilkhat">Khilkhat</option>
                                                        <option value="Khilgoan">Khilgoan</option>
                                                        <option value="New Market">New Market</option>
                                                             
                                                         
                                                         
                                                    </select>
                                                           
                                                        </label><input type="hidden" value="<?php echo $car_number;?>" name="car_number">
                                                        </br>
                                                        <div class="form-group m-b-0" style="float: right;margin-right: 88px;">
                                                    <div>
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>


                                                      

                                                    </div>
                                                     </form>
                                                </div>
                                      
                                            
                                             
                                        </div>
                                    </div>
                                </div>

                                      <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">Car Paper Related Crimes</h4>
                                    <div class="card m-b-20">

                                  

                                             <div class="form-group">
                                                  
                                                     
                                                    <div>

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Modification of car and sale without permission</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without registration, fitness, or route permit</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Overloading the car</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without insurance</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Careless driving</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without permission </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without safety </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description"> Blocking road or public place</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">Driver Related</h4>
                                    <div class="card m-b-20">

                                  

                                             <div class="form-group">
                                                  
                                                     
                                                    <div>

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Unauthorized touch/use of car</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Using hydrolic horn</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobey police order, refusal to cooperate </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobeying red signal</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Careless driving</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Accident related fine </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without safety </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Black smoke emission</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                    

                            </div>
 </form>
                        </div><!-- container -->


                    </div>
                    <div class="form-group m-b-0" style="float: right;margin-right: 20px;">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                   
                            <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Masud|Rana.
                </footer>

            </div>