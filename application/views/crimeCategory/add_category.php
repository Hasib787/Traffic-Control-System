
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">
                             <div class="row">
                                 <div class="col-3"></div>
                                 <form class="col-9" action="<?php echo base_url();?>welcome/save_category" method="post"> 
                                <div class="col-8">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h2 class="mt-0 header-title">Add New Crime Category  </h2>
                                           <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" value="<?php echo date("Y-d-m");?>" id="example-date-input">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Category ID</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="case_id" placeholder="category ID" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" placeholder="Category Name" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                               <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-10">
                                                    <select  class="form-control">
                                                             <option>Type</option>
                                                              <option>General Crimes </option>
                                                              <option>General Crimes </option>
                                                              <option>Driver Related </option>
                                                    </select>
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
                            
                              
                            <div class="row">

                                <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">General Crimes</h4>
                                    <div class="card m-b-20">

                                  

                                             <div class="form-group">
                                                  
                                                     
                                                    <div>

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">General fine</span>
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
                         
                            
                            
                            
                            </div>
                        </div>