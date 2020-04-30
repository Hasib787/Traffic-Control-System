
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

                          
                            <!-- end row -->


                            <div class="row">

                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title">Recent Crime List</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th class="th-color">Serial Number</th>
                                                    <th class="th-color">Case Number</th>
                                                    <th class="th-color">Car Number</th>
                                                    <th class="th-color">Location</th>
                                                    <th class="th-color">Start date</th>
                                                    <th class="th-color">Fine</th>
                                                     <th class="th-color">Status</th>
                                                    <th class="th-color">Details</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                    <?php $i=1;;?>
                                                    <?php $case_id=0;?>
                                                      <?php foreach($last_ten_case as $case) { ?>   
                                               <tr>
                                                   <td> <?php echo $i++;
                                                    $case_id=$case->case_id;
                                                   ?></td>
                                                    <td><?php echo $case->case_id?></td>
                                                    <td><?php echo $case->car_number?></td>
                                                    <td><?php echo $case->location?></td>
                                                    <td><?php echo $case->start_date?></td>
                                                    <td>‎৳<?php echo $case->fine?></td>
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                    <td><a href="<?php echo base_url();?>welcome/single_case_info/<?php echo $case_id?>/<?php echo $case->car_number?>" >MORE</a></td>
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


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Masud|Rana.
                </footer>

            </div>