<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap/3.2.0/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url(); ?>assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!-- DATA TABLES -->
        <link href="<?php echo base_url(); ?>assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/datatables/dataTables.responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css">

        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="<?php echo $this->lang->line('page_layout_superadmin_header'); ?>" />
                <?php //echo $this->lang->line('page_layout_superadmin_header'); ?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $username ? $username : '';?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <!-- <img src="<?php //echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image" /> -->
                                    <p>
                                        <?php echo $username ? $username : '';?> - <?php echo $username ? $username : '';?>
                                        <small><!-- Member since Nov. 2012 --></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat"><?php echo $this->lang->line('text_link_profile'); ?></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('sessions/logout'); ?>" class="btn btn-default btn-flat"><?php echo $this->lang->line('text_link_sign_out'); ?></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!-- <img src="<?php echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image" /> -->
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->lang->line('text_hello'); ?>, <?php echo $username ? $username : '';?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->lang->line('text_online'); ?></a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!-- <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="<?php if ($this->uri->uri_string() == 'admin') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('admin'); ?>">
                                <i class="fa fa-dashboard"></i> <span><?php echo $this->lang->line('menu_dashboard'); ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($this->uri->uri_string() == 'admin/users') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('admin/users'); ?>">
                                <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_user_list'); ?></span>
                            </a>
                        </li>
                        <li class="treeview <?php if ($this->uri->segment(2) ==  'report') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('admin/report/proposals'); ?>">
                                <i class="fa fa-table"></i> <span><?php echo $this->lang->line('menu_reports'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3) == 'proposals' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('admin/report/proposals'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_report_proposals'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3) == 'events' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('admin/report/events'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_report_events'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $page_panel ? $page_panel : 'Admin Panel'; ?>
                        <small><?php echo $page_header ? $page_header : 'Admin Board'; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $page_header ? $page_header : 'Admin Board'; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content" id="<?php echo $page_name ? $page_name : 'page-name'; ?>">
                    <?php echo $content; ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/3.2.0/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!-- <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script> -->
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>


        <script src="<?php echo base_url(); ?>assets/js/jquery.ui.autocomplete.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
        <!--<script type="text/javascript" charset="utf-8" src="media/ZeroClipboard/ZeroClipboard.js"></script>-->
        <script src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js" type="text/javascript"></script> 


        <!--<script type="text/javascript" charset="utf-8" src="<?php echo base_url(); ?>assets/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8" src="<?php echo base_url(); ?>assets/media/ZeroClipboard/ZeroClipboard.js"></script>
        <script type="text/javascript" charset="utf-8" src="<?php echo base_url(); ?>assets/media/js/TableTools.js"></script>-->

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script> -->

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/demo.js" type="text/javascript"></script>
		<!-- page script -->
        
        <?php if (isset($page_js) && is_array($page_js)) {
            foreach ($page_js as $js) {
                if ($js != '') { ?>
                    <script src="<?php echo base_url() . $js; ?>" type="text/javascript"></script>
        <?php
                }
            }
        } ?>

    </body>
</html>