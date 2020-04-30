
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi ion-ios7-paper"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter">15</span>
                                            Total Case
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                       <span class="mini-stat-icon"><i class="mdi ion-ios7-paper"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter">9</span>
                                            Running Case
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter">5000</span>
                                            Total Case Fine
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter">2000</span>
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
                                            <h4 class="mt-0 m-b-15 header-title">Recent Crimes</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                    <th>Serial No</th>
                                                    <th>Car Number</th>
                                                    <th>Location</th>
                                                    <th>Start date</th>
                                                    <th>Fine</th>
                                                    
                                                    <th>Status</th>
                                                     <th>Details</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>11-2342</td>
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                    <td>Danmondi</td>
                                                    <td>2011/04/25</td>
                                                    <td>‎৳320,800 </td>
                                                    <td><a href="#" >More</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>11-2343</td>
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                    <td>Kolabagan</td>
                                                    <td>2011/07/25</td>
                                                    <td>‎৳170,750</td>
                                                      <td><a href="#" >More</a></td>  </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>11-2344</td>
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                    <td>Uttora</td>
                                                    <td>2009/01/12</td>
                                                    <td>‎৳86,000</td>
                                                 <td><a href="#" >More</a></td> </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>11-2345</td>
                                                    <td><span class="badge badge-default">Deactive</span></td>
                                                    <td>Motijil</td>
                                                    <td>2012/03/29</td>
                                                    <td>‎৳433,060</td>
                                                  <td><a href="#" >More</a></td>  </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                             <div class="row">
                               

                               

                                 <?php foreach($all_car_info as $car) { ?>
                                          <div class="col-md-6 col-lg-6 col-xl-3">

                                    <!-- Simple card -->
                                    
                                    <div class="card m-b-20">
                                        <a href="<?php echo base_url();?>super_admin/single_car_info/<?php echo $car->car_number; ?>">
                                        <img class="card-img-top img-fluid" src="<?php echo $car->photo;?>" alt="Card image cap"> </a>
                                        <div class="card-block">
                                            <h4 class="card-title font-20 mt-0"><?php echo $car->car_name;?></h4>
                                           
                                            <h6>CAR NUMBER:<?php echo $car->car_number;?></h6>
                                            <p class="card-text">Click on photos or more button to know about car information .</p>
                                            <a href="<?php echo base_url();?>super_admin/single_car_info/<?php echo $car->car_number; ?>" class="btn btn-primary waves-effect waves-light" style="width: 100%;">MORE</a>
                                        </div>
                                    </div>
                                      
                                   

                                </div><!-- end col -->
                                <?php } ?>
                            </div>  
                                   <div class="row">
                              

                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h4 class="btn btn-primary waves-effect waves-light" style="width:100%;">Car Parking Lot 1 </h4>
                                
                                            <table class="table table-inverse" style="width: 76%;margin-left:40px;max-width: 88%;">
                                                    
                                              
                                                
                                                <tbody>
                                                      <tr>
                                                <th class="th-right">1</th>
                                               
                                                    <th class="th-left">11</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">2</td>
                                                    <th class="th-left">12</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">3</td>
                                                    <th class="th-left">13</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">4</td>
                                                    <th class="th-left">14</td>
                                                </tr>
                                                 <tr>
                                                <th class="th-right">5</th>
                                               
                                                    <th class="th-left">15</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">6</td>
                                                    <th class="th-left">16</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">7</td>
                                                    <th class="th-left">17</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">8</td>
                                                    <th class="th-left">18</td>
                                                </tr>
                                                 <tr>
                                                <th class="th-right">9</th>
                                               
                                                    <th class="th-left">19</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">10</td>
                                                    <th class="th-left">20</td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                          <h4 class="btn btn-primary waves-effect waves-light" style="width:100%;">Car Parking Lot 2 </h4>

                                            <table class="table table-inverse" style="width: 76%;margin-left:40px;max-width: 88%;">
                                                    
                                              
                                                
                                                <tbody>
                                                      <tr>
                                                <th class="th-right">1</th>
                                               
                                                    <th class="th-left">11</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">2</td>
                                                    <th class="th-left">12</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">3</td>
                                                    <th class="th-left">13</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">4</td>
                                                    <th class="th-left">14</td>
                                                </tr>
                                                 <tr>
                                                <th class="th-right">5</th>
                                               
                                                    <th class="th-left">15</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">6</td>
                                                    <th class="th-left">16</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">7</td>
                                                    <th class="th-left">17</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">8</td>
                                                    <th class="th-left">18</td>
                                                </tr>
                                                 <tr>
                                                <th class="th-right">9</th>
                                               
                                                    <th class="th-left">19</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">10</td>
                                                    <th class="th-left">20</td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                               <div class="col-lg-4">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                             <h4 class="btn btn-primary waves-effect waves-light" style="width:100%;">Car Parking Lot 3 </h4>

                                          <br>  <table class="table table-inverse" style="width: 76%;margin-left:40px;max-width: 88%;">
                                                    
                                              
                                                
                                                <tbody>
                                                      <tr>
                                                <th class="th-right">1</th>
                                               
                                                    <th class="th-left">11
                                                   
                                                    </th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">2</td>
                                                    <th class="th-left">12</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">3</td>
                                                    <th class="th-left">13</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">4</td>
                                                    <th class="th-left">14</td>
                                                </tr>
                                                 <tr>
                                                <th class="th-right">5</th>
                                               
                                                    <th class="th-left">15</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">6</td>
                                                    <th class="th-left">16</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">7</td>
                                                    <th class="th-left">17</td>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">8</td>
                                                    <th class="th-left">18</td>
                                                </tr>
                                                 <tr>
                                                <th class="th-right">9</th>
                                               
                                                    <th class="th-left">19</th>
                                                </tr>
                                                <tr>
                                                   
                                                    <th class="th-right">10</td>
                                                    <th class="th-left">20</td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                               
                            </div> <!-- end row -->
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