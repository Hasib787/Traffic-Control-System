
<!-- Top Bar End -->

<div class="page-content-wrapper ">

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <form class="col-8" action="<?php echo base_url(); ?>super_admin/save_complain" enctype="multipart/form-data"  method="post"> 
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-block">
                            <?php
                            $message = $this->session->userdata('message');
                            if ($message) {
                                ?>
                            <h4 class="valid_box" style="color: #67a8e4;"><?php echo $message; ?></h4>
                                <?php
                                $this->session->unset_userdata('message');
                            } else {
                                
                            }
                            ?>

                            <h2 class="mt-0 header-title">Add Complain</h2>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <textarea style="width: 100%" class="summernote" id="summernote" name="complain" rows="8">
                                    </textarea>
                                </div>
                            </div>



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



        </div> <!-- end row -->




    </div><!-- container -->


</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">

</footer>

</div>