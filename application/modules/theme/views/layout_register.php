<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Delizia | Register</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-light-blue-gradient">

        <div class="form-box" id="reg-box">
            <div class="header">Create a account</div>
            <?php echo form_open(site_url('sessions/create_user'), array('class'=>'clearfix', 'id'=>'reg-form')); ?>
                <div class="body bg-gray">
                    <div id="errors" class="form-group" style="display: none;">
                        #errors
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_v" class="form-control" placeholder="Confirm password"/>
                    </div>
                    <div class="form-group">
                        <p><input type="checkbox" name="terms" id="terms" value="1"> <small>Check our <a href="#"><strong>terms and conditions</strong></a> before sign up. If you familiar with our terms, go ahead click CREATE MY ACCOUNT button.</small>
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" id="btn_register" name="btn_register" value="Register" class="btn bg-olive btn-block"><i class="icon-unlock"></i> Sign me in</button>
                    
                    <p><a href="<?php echo site_url('sessions/forgot'); ?>">I forgot my password</a></p>
                    
                    <a href="<?php echo site_url('sessions/register'); ?>" class="text-center">Register a new membership</a>
                </div>
            <?php echo form_close(); ?>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom-admin.js"></script>

    </body>
</html>