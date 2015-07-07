<!DOCTYPE html>
<html class="login-bg">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->lang->line('page_layout_login_title'); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap/3.2.0/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
			html, body {
				overflow-x: none !important;
				font-family: "Source Sans Pro",sans-serif;
				min-height: 100%;
				background-color: transparent !important;
			}
			body{
				background-color: transparent !important;
			}
		</style>
    </head>
    <body>
		<div class="mask-white"></div>
        <div class="form-box" id="login-box">
            <div class="header"><?php echo $this->lang->line('page_login_header'); ?></div>
            <?php echo form_open(site_url('sessions/login'), array('class'=>'clearfix', 'id'=>'login-form')); ?>
                <div class="body bg-gray">
                <p class="error" style="color: red;"><span><?php echo $this->session->flashdata('error_access') ? $this->session->flashdata('error_access') : ''; ?></span></p>
                	<div class="input-group" style="margin-bottom:10px;">
                      <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                      <input type="text" name="email" class="form-control" placeholder="<?php echo $this->lang->line('ph_email'); ?>"/>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                      <input type="password" name="password" class="form-control" placeholder="<?php echo $this->lang->line('ph_password'); ?>"/>
                    </div>        
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> <?php echo $this->lang->line('remember_me'); ?>
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" id="btn_login" name="btn_login" value="Login" class="btn bg-olive btn-block"><i class="icon-unlock"></i> <?php echo $this->lang->line('btn_sign_me_in'); ?></button>
                    
                    <p><a href="<?php echo site_url('sessions/forgot'); ?>"><?php echo $this->lang->line('btn_forgot_password'); ?></a></p>
                    
                    <!-- <a href="<?php // echo site_url('sessions/register'); ?>" class="text-center">Register a new membership</a> -->
                </div>
            <?php echo form_close(); ?>

            <!-- <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div> -->
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/3.2.0/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>