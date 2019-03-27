 <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> Create a new Account </h3>
                </div> 
  
                <form class="form-horizontal m-t-40" method="POST" id="register_account">
                    <div id="response_msg"></div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="BankName" value="" required="" placeholder="Bank Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" name="AccountNo" value="" required="" placeholder="Account Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" name="Bvn" value="" required="" placeholder="BVN">
                        </div>
                    </div>
                      <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="CorporateName" value="" placeholder="Company Name">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="BnRcNumber" value="" placeholder="CAC Registration Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="Certificate" value="" placeholder="CAC Certificate Type">
                        </div>
                    </div>
                      <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" name="CreateWithExistingEmail" value="true" checked>
                                <i class="fa"></i> 
                                 Create with existing <strong><a href="#">Emai</a></strong>
                            </label>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="FirstName" value="" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="LastName" value="" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" required="" name="PhoneNo" value="" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="col-xs-12">
                            <input class="form-control" type="date" required="" name="Dob" value="" placeholder="Date of Birth">
                        </div>
                    </div>
                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender</label>
                                        <div class="col-md-9">
                                            <div class="radio-inline">
                                                <label class="cr-styled" for="example-radio4">
                                                    <input type="radio" id="example-radio4" name="Gender" value="Female"> 
                                                    <i class="fa"></i>
                                                    Female
                                                </label>
                                            </div>
                                            <div class="radio-inline">
                                                <label class="cr-styled" for="example-radio5">
                                                    <input type="radio" id="example-radio5" name="Gender" value="Male"> 
                                                    <i class="fa"></i> 
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                     <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="Email" required="" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control " type="password" name="Password"  required="" placeholder="Password">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control " type="password" name="ConfirmPassword"  required="" placeholder="Confrim Password">
                        </div>
                    </div>
                    <div class="">
                       <div class="col-xs-12"></div> 
                       <select class="form-control">
                        <option >Account Type</option>
                        <option value="Savings">Savings</option>
                        <option value="Current">Current</option>
                        <option value="Corprate">Corprate</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked>
                                <i class="fa"></i> 
                                 I accept <strong><a href="#">Terms and Conditions</a></strong>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-purple w-md" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="login.html">Already have account?</a>
                        </div>
                    </div>
                </form>                                  
                
            </div>
        </div>

