 <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Payment Gateway Dashboard </h3> 
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6"> 
                                <div class="tile-stats white-bg"> 
                                    <div class="status">
                                        <h3 class="m-t-0">15% more</h3> 
                                        <p>Monthly transaction increase</p>
                                    </div> 
                                    <div class="chart-inline">
                                        <span class="inlinesparkline"><canvas width="383" height="32"></canvas></span> 
                                    </div>
                                </div> 
                            </div>

                            <div class="col-sm-6"> 
                                <div class="tile-stats white-bg"> 
                                    <div class="status">
                                        <h3 class="m-t-0">15</h3> 
                                        <p>Transactions this week</p>
                                    </div> 
                                    <span class="dynamicbar-big"><canvas width="205" height="32"></canvas></span> 
                                </div> 
                            </div>

                            <div class="col-sm-6"> 
                                <div class="tile-stats white-bg"> 
                                    <div class="status">
                                        <h3 class="m-t-0">10</h3> 
                                        <p>Abandoned Trasactions</p>
                                    </div> 
                                    <span id="compositeline"><canvas width="383" height="32"></canvas></span> 
                                </div> 
                            </div>

                            <div class="col-sm-6"> 
                                <div class="tile-stats white-bg"> 
                                    <div class="col-sm-8">
                                        <div class="status">
                                        <h3 class="m-t-15">03-04-2019</h3> 
                                        <p>Next Settlement</p>
                                    </div> 
                                    </div>
                                    <div class="col-sm-4 m-t-20">
                                        <span class="sparkpie-big"><canvas width="98" height="50"></canvas></span> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Latest Settlements</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Transaction ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="active">
                                                    <td>1</td>
                                                    <td>10-04-2019</td>
                                                    <td>30,000</td>
                                                    <td>1hds2jj</td>
                                                </tr>
                                                <tr class="success">
                                                    <td>3</td>
                                                    <td>12-04-2019</td>
                                                    <td>100,000</td>
                                                    <td>1hds242</td>
                                                </tr>
                                                <tr class="danger">
                                                    <td>9</td>
                                                    <td>10-05-2019</td>
                                                    <td>10,000</td>
                                                    <td>1hds293</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet"><!-- /primary heading -->
                            
                            <div id="portlet1" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                           <div class="portlet-heading">
                                            <h3 class="portlet-title text-dark text-uppercase">
                                  Payment gateway latest Transactions
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet3"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet3" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Email</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Transaction ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>olumide@gmail.com</td>
                                                    <td>50,000</td>
                                                    <td>26/04/2015</td>
                                                    <td><span class="label label-info">Pending</span></td>
                                                    <td>100234sd</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>tobiloba@yahoo.com</td>
                                                    <td>2,000</td>
                                                    <td>26/04/2015</td>
                                                    <td><span class="label label-success">Success</span></td>
                                                    <td>100234ds</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>yusufusman@gmail.com</td>
                                                    <td>30,000</td>
                                                    <td>10/05/2015</td>
                                                    <td><span class="label label-danger">Failed</span></td>
                                                    <td>100234hg</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>ebukadike@gmail.com</td>
                                                    <td>1,450</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-success">Success</span></td>
                                                    <td>100235sk</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>ekong@gmail.com</td>
                                                    <td>100,000</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-info">Pending</span></td>
                                                    <td>100234tk</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="m-b-15 text-uppercase">Transactions status</h4>
                                            <p class="small">Paystack - <span class="text-purple">80%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-purple progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                              </div><!-- /.progress-bar .progress-bar-danger -->
                                            </div><!-- /.progress .no-rounded -->
                                            <p class="small">Flutterwaves - <span class="text-warning">65%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                              </div><!-- /.progress-bar .progress-bar-warning -->
                                            </div><!-- /.progress .no-rounded -->
                                            <p class="small">POS - <span class="text-success">40%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                              </div><!-- /.progress-bar .progress-bar-success -->
                                            </div><!-- /.progress .no-rounded -->
                                            <p class="small">Payouts POS- <span class="text-info">70%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                              </div><!-- /.progress-bar .progress-bar-info -->
                                            </div><!-- /.progress .no-rounded -->
                                            <p class="small">Payout Payment Gateway - <span class="text-info">50%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                              </div><!-- /.progress-bar .progress-bar-pink -->
                                            </div><!-- /.progress .no-rounded -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- /Portlet -->

                    </div> <!-- end col -->

                    
                </div> <!-- End row -->





                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">

                    </div>
                </div>


            </div>