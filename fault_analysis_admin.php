 <?php  include 'header.php'; 
 $charges=0;
 ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><!--<img src="images/logo.png" alt="Logo">-->24/7 WorkMan</a>
                    <a class="navbar-brand hidden" href="./"><!--<img src="images/logo2.png" alt="Logo">--> 24/7 WorkMan</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                 
                    <style>
                        .premium-fault-card {
                            border-radius: 20px;
                            background: rgba(255, 255, 255, 0.95);
                            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
                            border: none;
                            overflow: hidden;
                        }
                        .fault-header {
                            background: linear-gradient(135deg, #ff416c, #ff4b2b);
                            color: white;
                            padding: 20px 25px;
                            display: flex;
                            align-items: center;
                        }
                        .fault-table {
                            border-collapse: separate;
                            border-spacing: 0 10px;
                            margin-top: -10px;
                        }
                        .fault-table tr {
                            background: #fff;
                            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
                            border-radius: 12px;
                            transition: transform 0.2s ease;
                        }
                        .fault-table tr:hover {
                            transform: translateY(-2px);
                            box-shadow: 0 6px 15px rgba(0,0,0,0.06);
                        }
                        .fault-table td {
                            vertical-align: middle;
                            padding: 15px 20px;
                            border: none;
                        }
                        .fault-table td:first-child { border-top-left-radius: 12px; border-bottom-left-radius: 12px; }
                        .fault-table td:last-child { border-top-right-radius: 12px; border-bottom-right-radius: 12px; }
                        
                        .premium-input {
                            border: 2px solid #e9ecef;
                            border-radius: 10px;
                            padding: 10px 15px;
                            transition: border-color 0.3s ease;
                            font-weight: 500;
                            width: 100%;
                            max-width: 200px;
                        }
                        .premium-input:focus {
                            border-color: #ff4b2b;
                            outline: none;
                            box-shadow: 0 0 0 3px rgba(255, 75, 43, 0.2);
                        }
                        .premium-action-area {
                            background: #f8f9fa;
                            border-radius: 15px;
                            padding: 25px;
                            margin-top: 30px;
                            border-left: 5px solid #00c292;
                        }
                        .btn-approve {
                            border-radius: 20px;
                            padding: 8px 20px;
                            font-weight: bold;
                            background: linear-gradient(135deg, #00c292, #009688);
                            border: none;
                            transition: transform 0.2s ease;
                            cursor: pointer;
                        }
                        .btn-approve:hover {
                            transform: translateY(-2px);
                            box-shadow: 0 5px 15px rgba(0,194,146,0.3);
                        }
                    </style>

                    <div class="col-md-12 mb-5">
                        <div class="card premium-fault-card">
                            <div class="fault-header">
                                <i class="fa fa-wrench fa-2x mr-3"></i>
                                <h4 class="mb-0 text-white font-weight-bold" style="color:white !important;">Fault Analysis & Approvals</h4>
                            </div>
                            <div class="card-body p-4 bg-light">
                                <div class="table-responsive">
                                    <table class="table fault-table">
                                        <thead class="text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Fault Details</th>
                                                <th>Admin Amount ($)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include_once 'class.php';
                                                $user = new User();
                                                $id=$_GET['id'];
                                                $res = $user->getfaultList($id);
                                                
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    $cat_id=$row['f_id'];
                                                    $e_id=$row['e_id'];
                                                    $cat_status=$row['f_status'];
                                                    $charges=$row['service_amount'];
                                            ?>
                                            <tr>
                                                <td class="font-weight-bold text-dark">#<?php echo $row['f_id']; ?></td>
                                                <td><span class="text-secondary font-weight-bold"><?php echo $row['f_details']; ?></span></td>
                                                <td>  
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-white border-right-0" style="border-radius: 10px 0 0 10px;"><i class="fa fa-dollar text-success"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control premium-input border-left-0" style="border-radius: 0 10px 10px 0; max-width: 150px;" placeholder="Amount" id="amt<?php echo $cat_id; ?>" name="amt<?php echo $cat_id; ?>" value="<?php echo $row['f_amount']; ?>">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-approve text-light" onClick="Catactivedeactive('<?php echo $cat_id;?>',0)"><i class="fa fa-check-circle"></i> Approve</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="premium-action-area shadow-sm">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label class="font-weight-bold text-dark mb-2 text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;"><i class="fa fa-money text-success"></i> Service Charges</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white border-right-0 shadow-sm" style="border-radius: 12px 0 0 12px; border: 2px solid #e9ecef;"><i class="fa fa-dollar text-success"></i></span>
                                                </div>
                                                <input type="text" class="form-control premium-input border-left-0 shadow-sm" style="border-radius: 0 12px 12px 0; max-width: 250px; font-size: 1.1rem;" placeholder="Enter Service Charges" id="servicecharges" name="servicecharges" value="<?php echo $charges; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <div class="alert alert-warning mb-3 d-inline-block text-left p-2 px-3 shadow-sm" style="border-radius: 10px; font-size: 0.85rem;">
                                                <i class="fa fa-info-circle text-danger"></i> <strong>Note:</strong> After approving all fault amounts, click "Done" to finalize.
                                            </div>
                                            <br>
                                            <a class="btn text-light shadow" style="background: linear-gradient(135deg, #11998e, #38ef7d); border-radius: 30px; padding: 12px 35px; font-weight: bold; font-size: 1.1rem; transition: transform 0.3s ease; cursor:pointer;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" onClick="TotalAmt('<?php echo $e_id;?>')"><i class="fa fa-check"></i> DONE / FINALIZE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->
            
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
      
                <!-- /.orders -->
                <!-- To Do and Live Chat -->
          
                <!-- /To Do and Live Chat -->
                <!-- Calender Chart Weather  -->
                
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        
        <!-- Footer -->
       
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
    
    
    function Catactivedeactive(sid,val){
        var result = document.getElementById("amt"+sid).value;
        if(Object.keys(result).length === 0)
        {
           alert("Please Enter Amount By Admin."); 
            return;
        }
         else{
             
                   $.ajax({
     	              url: 'fault_analysis_amount_approve.php',
           	          type: 'POST',
        
                		data:{amount:result,fid:sid},
                		success:function(data){
                		     location.reload();
                        //alert(data);
              
                		}
                  });
                 
             
              alert(result); 
         }
    
               //   location.reload();
               // event.preventDefault(); 
              
      
          }
 
    
    
    function TotalAmt(eid){
           var inputVal = document.getElementById("servicecharges").value;
       
       if(Object.keys(inputVal).length === 0)
        {
           alert("Please enter service charge."); 
           return;
        }
        //alert(inputVal);
             
                   $.ajax({
     	              url: 'total_amountadd_for_customer.php',
           	          type: 'POST',
        
                		data:{eid:eid,samount:inputVal},
                		success:function(data){
                		     location.reload();
                        alert(data);
              
                		}
                  });
                 
             
              
         
    
               //   location.reload();
               // event.preventDefault(); 
              
      
          }
 
         function deleteb(sid){
        // alert(val);
      $.ajax({
     	url: 'deleteservices.php',
           		type: 'POST',
        
        		data:{sid:sid},
        		success:function(data){
             //alert(data);
              
                		}
                  });
                  location.reload();
               // event.preventDefault(); 
              
      
          }
 
    
    
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
