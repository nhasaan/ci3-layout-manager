<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap/3.2.0/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
        <link href="<?php echo base_url(); ?>assets/css/uploadfile.css" rel="stylesheet" type="text/css" />
        
        <!-- Google grid gallery css -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" />
        <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>-->
        <!--/ Google grid gallery css end -->

        <!-- FancyApps css start -->
        <link href="<?php echo base_url(); ?>assets/fancyapps/source/jquery.fancybox.css" rel="stylesheet" />
        <!-- FancyApps css end -->

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
            <a href="<?php echo site_url('userpanel'); ?>" class="logo">
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
                                <span><?php echo $username ? $username : 'Userpanel';?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <!-- <img src="<?php //echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image" /> -->
                                    <p>
                                        <?php echo $username ? $username : 'Userpanel';?> - <?php echo $username ? $username : 'Userpanel';?>
                                        <small><!-- Member since Nov. 2012 --></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url('dashboard/password_change'); ?>" class="btn btn-default btn-flat"><?php echo $this->lang->line('page_change_password'); ?></a>
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
                        <!-- <div class="pull-left image">
                            <img src="<?php //echo base_url(); ?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div> -->
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
                        <li class="<?php if ($this->uri->uri_string() == 'userpanel') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('userpanel'); ?>">
                                <i class="fa fa-dashboard"></i> <span><?php echo $this->lang->line('menu_dashboard'); ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($this->uri->segment(2) ==  'customers' ) { echo 'active'; } ?>">
                            <a href="<?php echo site_url('userpanel/customers'); ?>">
                                <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_customers'); ?></span>
                            </a>
                        </li>

                        <li class="treeview <?php if ($this->uri->segment(2) ==  'locations' || $this->uri->segment(2) ==  'location') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('userpanel/locations'); ?>">
                                <i class="fa fa-table"></i> <span><?php echo $this->lang->line('menu_location'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if ($this->uri->segment(3) == 'types') { echo 'active'; } ?> <?php echo $this->uri->segment(3); ?> ">
                                    <a href="<?php echo site_url('userpanel/location/types'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_location_types'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(2); ?> <?php echo $this->uri->segment(2) == 'locations' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/locations'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_locations'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview <?php if ($this->uri->segment(2) ==  'proposals' || $this->uri->segment(2) ==  'event_types') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('userpanel/proposals'); ?>">
                                <i class="fa fa-table"></i> <span><?php echo $this->lang->line('menu_proposal'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(2) == 'event_types' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/event_types'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_event_types'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(2); ?> <?php echo $this->uri->segment(2) == 'proposals' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/proposals'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_business_proposals'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview <?php if ($this->uri->segment(2) == 'stock') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('userpanel/stock/categories'); ?>">
                                <i class="fa fa-table"></i> <span><?php echo $this->lang->line('menu_stock'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3) == 'categories' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/stock/categories'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_categories'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3) == 'products' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/stock/products'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_products'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3) == 'stockins' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/stock/stockins'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_stock_ins'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3) == 'stockouts' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/stock/stockouts'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_stock_outs'); ?></span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(4) == 'event' ? ' active' : ''; ?>">
                                    <a href="<?php echo site_url('userpanel/stock/stockin/event'); ?>">
                                        <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_stock_ins_event'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if ($this->uri->segment(2) ==  'albums' || $this->uri->segment(2) ==  'album') { echo 'active'; } ?>">
                            <a href="<?php echo site_url('userpanel/albums'); ?>">
                                <i class="fa fa-th"></i> <span><?php echo $this->lang->line('menu_albums'); ?></span>
                            </a>
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
                        <?php echo $page_panel ? $page_panel : 'User Panel'; ?>
                        <small><?php echo $page_header ? $page_header : 'Dashboard'; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $page_header ? $page_header : 'Dashboard'; ?></li>
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
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        
        <!-- Morris.js charts -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script> -->
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

        <!-- fancybox -->
        <script src="<?php echo base_url(); ?>assets/fancyapps/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/jquery.ui.autocomplete.js" type="text/javascript"></script>

        <!-- DATA TABES SCRIPT -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js" type="text/javascript"></script>


        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script> -->

        <!-- AdminLTE for demo purposes -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/AdminLTE/demo.js" type="text/javascript"></script> -->
		<!-- page script -->
        
        <script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.uploadfile.min.js"></script>

        <?php if( ($this->uri->segment(2) == 'albums') || ($this->uri->segment(2) == 'album') || ($this->uri->segment(1) == 'albums') || ($this->uri->segment(1) == 'album') ) { ?>
        <script type="text/javascript">
          
            // console.log('ok');
            $("#coverimageupload").uploadFile({
                url: "<?php echo base_url_tr('album/album_image_add'); ?>",
                multiple: false,
                fileName: "cover_image",
                onSuccess:function(files,data,xhr) {
                    //alert(data);
                   $("#cover_image").val(data);
                }        
            });

            $(".confirm").on("click",function(){
                var url = $(this).attr('href');
                    bootbox.confirm("Are you sure you want to change the stutus?", function(result) {
                    if (result) {    
                        location.replace(url);
                    }
                }); 
                return false; 
            });

            // console.log('sdfjhsdjfh')
            $("#albumimageupload").uploadFile({
                url: "<?php echo base_url_tr('album/add_album_images'); ?>",
                multiple: true,
                fileName: "album_image",
                formData: {"album_id":"<?php echo isset($album_id) ? $album_id : '';?>"},
                onSuccess:function(files,data,xhr) {
                    if(data){
                        var imgdata = JSON.parse(data);
                        //alert(data);
                        if(imgdata){
                        var img = "<li class='ui-state-default col-lg-3 col-xs-6'>"
                                 +"<div class='item' style='text-align: center; border: 1px solid #ddd'>"
                                 +"<a class='fancybox-button' data-rel='fancybox-button' title='Photo' href='<?php echo base_url('uploads/album/gallery');?>/"+imgdata.file_name+"'>"
                                 +"<div class='zoom'>"
                                 +"<img src='<?php echo base_url('uploads/album/gallery/thumbs');?>/"+imgdata.file_name+"' style='height:150px;' />"
                                 +"<div class='zoom-icon'></div>"  
                                 +"</div>" 
                                 +"</a>"
                                 +"<div class='details'>"
                                 //+"<a href='#' class='icon'><i class='icon-paper-clip'></i></a>"
                                 //+"<a href='#' class='icon'><i class='icon-link'></i></a>"
                                 //+"<a href='#' class='icon'><i class='icon-pencil'></i></a>"
                                 +"<a href='#' class='icon deletealbumImage' ><i class='icon-remove'></i></a>"
                                 +"</div></div></li>"       
                            $("#sortable").prepend(img);  
                        }
                    }
                },
                afterUploadAll:function(files,data,xhr)
                {
                    //You can get data of the plugin using obj
                    location.reload();
                }
            });
            
            // console.log(' click on deletealbumImage')
            $(document).on("click",".deletealbumImage",function(e){
                e.preventDefault();
                var href = $(this).attr('href');
                bootbox.confirm("Are you sure?", function(result) {

                    console.log(href)
                    if(result==true){
                        $.ajax({
                            type: "POST",
                            url: href,
                            //formData: {"IMG_ID":"<?php //echo $image_id;?>"},
                            data:"IMG_ID=''",
                            success: function(result){
                                location.reload();
                            }
                        });
                    }
                });
            });

            //console.log('sortable')
            /*$( "#sortable" ).sortable({
                update: function(event, ui){
                    var order = $(this).sortable('serialize');
                        //alert(order);            
                        
                        $.ajax({ 
                            url: "<?php echo base_url_tr('album/sort_gallery'); ?>",
                            type:'POST',
                            data: order, 
                            success: function(data) 
                            {
                                alert("ok");
                            },
                            error: function(data) 
                            {
                                alert("not done");
                            }
                        });
                
                }
            });*/
        </script>
        <?php } ?>
        
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