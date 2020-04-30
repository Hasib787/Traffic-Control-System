
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">

                          

                            <div class="row">
                                <div class="col-6">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h4 class="mt-0 header-title">All Complain List</h4>
                                            <p class="text-muted m-b-30 font-14">
                                            </p>

                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-color">S/N</th>
                                                    <th class="th-color">User Id</th>
                                                    <th class="th-color">Complain</th>
                                                    <th class="th-color">Date</th>
                                                     <th class="th-color">Action</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                    <?php $i=1?>
                                                 <?php foreach($all_complain as $com) { ?>   
                                               <tr>
                                                   <td><?php echo $i++?></td>
                                                    <td><?php echo $com->user_id?></td>
                                                    <td><?php  
                                                           
                                                          
                                                            echo "Compline Title here";
                                                            ?>
                                                    
                                                    </td>
                                                      <td><?php echo $com->date?></td>
                                                      <td>
                                                          <a href="<?php echo base_url();?>welcome/view_complain/<?php echo $com->complain_id?>">
                                                             <button type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-eye" style="float:right" title="View"></i></button></a>
                                                          <a href="<?php echo base_url();?>welcome/delete_complain/<?php echo $com->complain_id?>">  <button type="button" onclick="return confirm('Are you sure?')" class="btn btn-danger waves-effect waves-light"><i class="ion-trash-b" style="float:right" title="Delete"></i></button>
                                                             </a>
                                                           
                                                      </td>
                                                </tr>
                                                <?php }?>
                                               
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                 <div class="col-6">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <p class="text-muted m-b-30 font-14">
                                            </p>

                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-color">Complain</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                   
                                               
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

       