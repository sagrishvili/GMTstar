<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>startup</title>
    <link href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/pace/pace-theme-big-counter.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style1.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/main-style.css');?>" rel="stylesheet" />
   
    <link href="<?php echo base_url('assets/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet" />
   </head>
<body>



    
    <div id="wrapper" >

        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            
            <a class="navbar-brand" href="<?php base_url('index.php/main/profile') ?>">
                    <img src="<?php echo base_url('assets/img/gmtstar.jpg');?>" alt="" />
                </a>
            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-messages">
                    <li> შეტყობინებები </li>
                    </ul>

                 </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('index.php/main') ?>"><i class="fa fa-sign-out fa-fw"></i>გამოსვლა</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?php echo base_url('assets/img/user.jpg');?>" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                     <?php

                       foreach($info as $value)
                        {
                           echo "<li style='font-size: 12pt; color: white; padding: 15px; margin-left: 15px;'>".$value."</li>";
                        }





                        ?>

                         <li><a style='font-size: 12pt; color: red; padding: 15px; margin-left: 15px;' href="<?php echo base_url('index.php/main/useridea') ?>">ჩემი იდეა/პროდუქტი</a></li>


                         <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">ჩემი იდეა</a>
                    
                        </ul>
                        <!-- second-level-items -->
                    
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">დარეგისტრირებული კომპანიები</h1>
               <div class="row">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i><?php echo $infocomp[0]; ?>
                        </div>

                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><?php echo $infocomp[1];  ?></h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-time"></i><?php echo $infocomp[2]; ?></small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?php echo $infocomp[3]; ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="collapse" id="collapseExample">
  <div class="well">

  <form>
      <textarea cols="130" rows="5"></textarea>
      <p><button>Submit</button>
  </form>



    
  </div>
</div>






</div>
</div>
    <script src="<?php echo base_url('assets/plugins/jquery-1.10.2.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js');?>"></script>
    <script src="<?php echo base_url('assets/scripts/siminta.js');?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url('assets/plugins/morris/raphael-2.1.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/morris/morris.js');?>');?>"></script>
    <script src="<?php echo base_url('assets/scripts/dashboard-demo.js');?>"></script>

</body>

</html>