<!DOCTYPE html>
<html>
<head>
	<?php $this->load->helper('url');?>
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>"> 
    <style type="text/css">
        .container-fluid
        {
        	padding:0px;
        	height: 100%;
        }
     	.hed
     	{
            background-color:#3b5997;
            height:60px;
            margin-left:0px; 
            margin-right:0px;
     	}
     	.hed-style
     	{
     		margin-top: 10px;

     	}
     	/*.body
     	{
     		background-color: #e9ebee;
     		width: 100%;
     		height:100%;
     	}*/
     	.design
     	{
     		background-color:#e9ebee;
     		height:100%;
            margin-top: 10px;
            margin-left: 3px;
            margin-right: 0px;
        }
        .design-1
        {
        	background-color: white;
     		height:150px;
            margin-top: 10px;
        }
        .design-2
        {
        	background-color: white;
     		height:350px;
            margin-top:20px;
           /* margin-left: 300px;
            margin-right: 350px;*/

        }
        .design-3
        {
        	background-color: white;
     		height:520px;
            margin-top: 10px;
            margin-left: -2px;
            margin-right: 10px;

        }  
        .mrr
        {
         	margin-right: 0;
        }
        .de-pic
        {
        	margin-left: 5px;
        	margin-top: 0px;
        }
        .glif
        {
        	margin-right: 12px;
        	margin-top: 4px;
        }
       
        

           
     	
    </style>
</head>
<body>


	<div class="container-fluid ">
        <!-- <div class="hed"> -->
		<div class="row hed">
			<div class="col-md-4 col-md-offset-1 hed-style"> 
				<form class="form-horizontal" role="form"> 
			 	<div class="form-group "> 
			 	<input type="text" name="" class="form-control" placeholder="Search Facebook"> 
				<i class="glyphicon glyphicon-search form-control-feedback"></i>
				</div>
				</form>
			</div> 
			<div class="col-md-4 col-md-offset-3" style="margin-top: 8px; 
                                                         color: white;"> 
                <?php
                    foreach ($data as $value) {
	                # code...

					?>
					<img src="<?php echo $value['vchr_prof_pic']?>" width=50px>
				    <?php echo $value['vchr_first_name']; ?>
					<br/> 
					<?php
					}
					?>
            </div>

		</div>
		<!-- </div> -->



		<div class="row mrr" style="background-color: #e9ebee;
		                        height:550px;">
			<div class="col-md-2">
	
				<div class="row design">
					<?php
                    foreach ($data as $value) {
	                # code...

					?>
					<img src="<?php echo $value['vchr_prof_pic']?>" width=50px>
				    <?php echo $value['vchr_first_name']; ?>
					<br/> 
					<?php
					}
					?><br>
					<a href="#"> 
          			<div class="glyphicon glyphicon-pencil">EditProfile</div>
        			</a>
				    
				
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="row design-1">
					<div class="col-md-4">
						<a href="#"> 
          				<div class="glyphicon glyphicon-pencil">Updatestatus</div>
        				</a>
                    </div>
                    <div class="col-md-4">
                    	<a href="#">
                    	<div class="glyphicon glyphicon-picture">AddPhotos or videos</div>
                    	</a>
                    </div>
                    <div class="col-md-4">
                    	<a href="#">
                    	<div class="glyphicon glyphicon-list">write note</div>
                    	</a>
                    </div><br>
                    <hr>
                
                	<div class="row de-pic">
                		<?php
                    	foreach ($data as $value) {
	                	# code...

						?>
						<img src="<?php echo $value['vchr_prof_pic']?>" width=50px> what is on your mind?
				    	<br/> 
						<?php
						}
						?>
                	</div>
                </div>
				
				<div class="row design-2">
			
				</div>
			</div>
			
			
			<div class="col-md-4">
				<div class="row design-3">
						<form class="form-horizontal" role="form"> 
			 			<div class="form-group "> 
			 			<input type="text" name="" class="form-control" placeholder="Your adds" style="margin-left:13px;
			 		                                                                                   width:94%;">
			 			<i class="glyphicon glyphicon-chevron-down form-control-feedback glif"></i>
			 			</div>
			 			</form> 
				</div>
			</div>

		</div>
	</div>
</body>
</html>