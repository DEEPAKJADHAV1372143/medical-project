<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="">
        <style>
        .login{
            background-color:gray;
            height:100vh;
        }
       .loginText{
           padding:20px;
           background-color:blue;
           color:white;
            position:fixed;
            top:28%;
            left:28%;        
       }
       @media (max-width:600px){
        .loginText{
           padding:20px;
         
            position:fixed;
            top:0;
            left:0;
            bottom:0;
            right:0;        
       }
       }
       input{
        background-color:rgba(94, 26, 0,0.4) !important;
       }
        </style>
    </head>
    <body>

    <section class="login">
        <div class="loginBox row">
        <div class="col-md-4"></div>
            <div class="loginText col-md-4">
            <h2 class="text-center text-uppercase">Login Page</h2>
            <form method="post" action="<?php echo base_url(); ?>index.php/Welcome/login_valid">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" >
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" >
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
                <button type="submit" name="login" value="Login" class="btn btn-primary">Login</button>
                </form>  
                <span class="text-danger"><?php  echo $this->session->flashdata('error'); ?></span>         
            </div>
            <div class="col-md-4"></div>
        </div>
    </section>

    </body>
    </html>