<!DOCTYPE html>
<html>
<head>
    <?php $this->load->helper('url');?>
	<title>Login Error</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>"> 
    <style type="text/css">
        .container-fluid
        {
        	padding:0px;
        }
     	.hed
     	{
            background-color:#3b5997;
            height:80px;

     	}
     	.body
     	{
     		 background-color: white;
            height: 300px;
            margin-top: 30px;
            margin-left: 200px;
            margin-right: 200px;
            
     	}
     	.h3
     	{
     		color:blue;
     	}
    </style>
</head>
<body>

	<div class="container-fluid">
                            
        <div class="hed">
        <div class="row">
            <div class="col-md-offset-2 col-md-3 col-sm-offset-3 col-sm-4 col-xs-offset-3 col-xs-4">
             <img src="<?php echo base_url().'images/fb.jpg'?>">
			</div>
            <div class="col-md-offset-0 col-md-2  col-sm-2 col-xs-2" style="margin-top:16px;">
            <button type="submit" class="btn btn-success">Sign Up</button>
            </div>
        </div>
        </div>
        
        	<div class="row" style="background-color: #e9ebee;
                                height:400px;
                                margin-left:0px;
                                margin-right:0px;">
            <div class="body">                    
        		<div class="col-md-offset-2 col-md-8 col-md-offset-2 ">
        		<div class="row">
        		<h3 class="h3 hidden-sm hidden-xs">Facebook Login</h3>
        		<hr>
        		<div class="row">
               <!--  <?php
                        //foreach ($data as $value) {
                        # code...

                        ?> -->
                    <div class="col-md-offset-2 col-md-10 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/signin/regUser'?>" method="post">
                         
                       
                        

        			
                    <div class="form-group">
                    <label class="control-label col-md-2" for="email">Email or Phone:</label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="username">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Password:</label>
                    <div class="col-md-4">          
                    <input type="password" class="form-control" id="pwd" name="password">
                    </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-md-offset-2 col-md-10 hidden-sm hidden-xs">
                    <div class="checkbox">
                    <label><input type="checkbox">keep me logged in</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-primary">log In</button>
                    or <a href="#" class="">Sign up for facebook</a><br>
                    <a href="#" class="">Forgotten password?</a>
                    </div>
                    </div>
                    </form>
                    </div>

        			<!-- <div class="col-md-offset-2 col-md-8">
        			<form class="form-horizontal">
        			<div class="form-group">
        			<label>email or phone:</label>
        	        <input type="email" class="form-control" id="email" ><br>
        	        <label>password:</label>
        	        <input type="password" class="form-control" id="pwd">
        	        </form>
        	        </div>
        	        <div class="checkbox">
                    <label><input type="checkbox"> keep me logged in</label>
                    </div>
                    </div>
                    
        	        <div class="btn">
                    <button type="submit" class="btn btn-primary">log In</button>
                    or <a href="#" class="">sign up for facebook</a><br><br>
                    <a href="#" class="">forgotten password?</a>
        	        </div>
        	        -->
              

        		</div>
        		</div>
        		</div>
        		
        	</div>
        </div>
    
        
    </div>
</body>

</html>