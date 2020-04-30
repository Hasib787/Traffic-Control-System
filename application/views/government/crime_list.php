
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">

                          

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h4 class="mt-0 header-title">Latest Crime List</h4>
                                            <p class="text-muted m-b-30 font-14">
                                            </p>

                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-color">S/N</th>
                                                    <th class="th-color">Case Number</th>
                                                    <th class="th-color">Car Number</th>
                                                    <th class="th-color">Reason</th>
                                                    <th class="th-color">Status</th>
                                                    <th class="th-color">Location</th>
                                                    <th class="th-color">Start date</th>
                                                    <th class="th-color">Fine</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                    <?php $i=1?>
                                                 <?php foreach($all_case as $case) { ?>   
                                               <tr>
                                                   <td><?php echo $i++?></td>
                                                    <td><?php echo $case->case_id?></td>
                                                    <td><?php echo $case->car_number?></td>
                                                      <td><?php echo $case->reason?></td>
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                    <td><?php echo $case->location?></td>
                                                    <td><?php echo $case->start_date?></td>
                                                    <td>‎৳<?php echo $case->fine?></td>
                                                </tr>
                                                <?php }?>
                                               
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Masud|Rana
                </footer>

            </div>
            <!-- End Right content here -->

       