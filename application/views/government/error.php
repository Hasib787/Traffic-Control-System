
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">
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

                        <div class="container">
                            
                              <div class="accountbg"></div>
        <div class="wrapper-page">
         
            <div class="card">
                <div class="card-block">

                    <div class="ex-page-content text-center"style="height:313px;">
                        <h1 style="color:red;">404</h1>
                        <h3 class=""> Value not found!</h3><br>

                     <div class=" text-center">
                                                        
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Make Case </button>
                                                    </div>

                                                    <!-- sample modal content -->
                                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                             <form action="<?php echo base_url();?>welcome/make_crime" method="post">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Case Making Form</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                   
                                                                    <div class="row">
                                                                    <div class="col-xl-12">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">Crime List</h4>
                                    <div class="card m-b-20">
                                        

                                  

                                             <div class="form-group">
                                                  
                                                
                                                    <div>

                                                       <div class="form-group">
                                                 
                                                    <div>
                                                        <input data-parsley-type="number" name="car_number" type="text"
                                                               class="form-control" required
                                                               placeholder="Enter Car Number"/>
                                                    </div>
                                                </div>
                                                        
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
                                                           
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="general" value="general" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">General fine</span>
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="hydrolic_horn" value="hydrolic" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Using hydrolic horn</span>
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="deny_order" value="deny_order" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobey police order </span>
                                                        </label></br>
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
                                                        </label>

                                                      

                                                    </div>
                                                   
                                                </div>
                                      
                                            
                                             
                                        </div>
                                    </div>
                                                                    </div></div>
                                                                        
                                                                    
                                                                    
                                                                </div>
                                                                <div class="modal-footer">
                                                                   <div class="form-group m-b-0" style="float: right;margin-right: 88px;">
                                                    <div>
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>   </div>
                                                            </div><!-- /.modal-content -->
                                                              </form>
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    
                                                
                    </div>

                </div>
            </div>
           
               
        </div>

                            
                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Admiry - By Themesdesign.
                </footer>

            </div>