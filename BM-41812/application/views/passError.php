<!DOCTYPE html>
<html>
<head>
    <?php $this->load->helper('url');?>
	<title>Password incorrect</title>
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
     	/*.form-style
        {
            border:1px solid #bdc7d8;
            color:black;
            width:100%;
            height: 100%;
        }
       /* .row1*/
       /* {
        	background-color: #e9ebee;
        }*/
        .rowdesign
        {
        	/*margin-top: 15px;
        */
          
            /*border: 1px solid;*/
            background-color: white;
            height: 350px;
            margin-top: 40px;
            margin-left: 60px;
            margin-right: 60px;
            
            /*text-align: center;*/
        }
        .h3
        {
        	color: blue;
        }
        

    </style>
</head>
<body>


	<div class="container-fluid ">
                            
        <div class="hed">

		<div class="row">
            <div class="col-md-offset-2 col-md-3">
            	<img src="<?php echo base_url().'images/fb.jpg'?>">
            </div>
            <div class="col-md-offset-0 col-md-2" style="margin-top:16px;">
            	<button type="submit" class="btn btn-success">Sign Up</button>
            </div>
        </div>
        </div>

        <div class="row" style="background-color: #e9ebee;
                                height:450px;
                                margin-left:0px;
                                margin-right:0px;">
       			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
        			<div class="row">
        	 		<div class="rowdesign">
        				<div class="col-md-12">
						<h3 class="h3">Facebook Login</h3>
        				<hr>
        				</div>
        					<div class="row">
                            
        						<div class="col-md-offset-2 col-md-10">
        						<form class="form-horizontal" action="<?php echo base_url().'index.php/signin/regUser'?>"  method="post">
                                <?php
                                    foreach ($data as  $value) {
                                        # code...
                                    
                                    
                                ?>
                                <input type="hidden" name="username" value="<?php  echo $value['vchr_user_name']; ?>"> 
                    			<div class="form-group">
                    			<label class="control-label col-md-2">login as:</label>
                    			
                    			<img src="<?php echo $value['vchr_prof_pic'];?>" width='50px'>
                    			<?php echo $value['vchr_first_name'];?> 
                    			<br/> 
                    			
								<div class="col-md-offset-2 col-md-2">
                    			<a href="#">Not <?php echo $value['vchr_first_name'];?>?</a>
                    			</div>
                    			</div>
                    			<div class="form-group">
                    			<label class="control-label col-md-2" for="pwd">Password:</label>
                    			<div class="col-md-4">           
                    			<input type="password" class="form-control" id="pwd" name="password">
                    			</div>
                    			</div>
                    			<div class="form-group">        
                    			<div class="col-md-offset-2 col-md-10">
                    			<div class="checkbox">
                    			<label><input type="checkbox">keep me logged in</label>
                    			</div>
                    			</div>
                    			</div>
                    			<div class="form-group">        
                    			<div class="col-md-offset-2 col-md-10">
                    			<button type="submit" class="btn btn-primary">log In</button>
                    			or <a href="#" class="">sign up for facebook</a><br>
                    			<a href="#" class="">forgotten password?</a>
                    			</div>
                    			</div>
                    			</form>
                                <?php
                                }
                                ?>
                    	</div>
                    	</div>
                    </div>
                    </div>
            	</div>
        </div>
    </div>    
</body>
</html>


										<!-- <label>Login as:</label><br>
            		</div>
            	</div>
            <div class="row">
            <div class="col-md-offset-2 col-md-2 col-md-0ffset-1 col-md-7">
        	<label>password:</label>
        	<input type="text" size="30"><br>
        	<form action="">
            <input type="checkbox">keep me logged in</form>
        	</div>
        	</div>
        	<div class="row">
        	<div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-primary">log In</button>
            or <a href="#" class="">sign up for facebook</a><br><br>
            <a href="#" class="">forgotten password?</a>
            </div>
        	</div>
        	</div>
        	    </div>
         -->
        