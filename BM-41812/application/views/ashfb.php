<!DOCTYPE html>
<html>
<head>
  <?php $this->load->helper('url'); ?>
	<title>ashi boot</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>">
    <style type="text/css">
 
		
                /*.container
               {
                 position: fixed;
                 width: 1500px;

               }

                .hed
                {
                  background-color:#3b5997;
                 height:100px;
                }




               
               .login
               {
               	 margin-top: 30px;
            
                 margin-left:15px;

                 

               }
*/ 

               .header-text
               {
               	color:white;
               	font-size:14px;
               	margin-top:2%;
               }
               
               .form-style
               {
               	border:1px solid #bdc7d8;
               	color:black;
               	width:100%;
               }
               
               
              

               
               .h3-text
               {
                color:black;
                font-size:16px;
                margin-top:0%;
               }











		</style>




</head>

<body>
					
        <div class="container-fluid ">
                            
                           <!-- <div class="hed">-->

						<div class="row" style="background-color:#3b5997">

								<div class="col-lg-offset-0 col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">

								    <img src="<?php echo base_url().'images/fb.jpg'?>">

								</div>

								<div class="col-lg-offset-2 col-lg-6 col-md-offset-2 col-md-6 hidden-sm hidden-xs ">

									<div class="row">

										<form role="form" method="post" action="<?php echo base_url().'index.php/signin/regUser'?>">
											<div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 header-text">
												  email or phone<br>
					                <input type="text" name="username" class="form-style">
				              </div> 	

				              <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 header-text">
				                  password<br>
				                  <input type="password" name="password" class="form-style"><br>
         		              <a href="#" class="">forgotten password?</a>
         		          </div>
         		          <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 header-text">
                          <p>
                          <button type="submit" class="btn btn-primary">login</button>
                          </p>
                      </div>
                    </form>
                  </div>
                </div>
            </div>

           <!--  <login form for small devices> -->
				                   
				          <div class="row"> 
				            	<div class=" col-xs-12 col-sm-12 visible-xs visible-sm hidden-md hidden-lg">
									    <div class="row">

										    <form role="form" method="post" action="">
											<div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 ">
												email or phone<br>
					              <input type="text" name="username" class="form-control">
				              </div> 	

				              <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6">
				                password<br>
				                <input type="password" name="password" class="form-control">
         		            <a href="#" class="">forgotten password?</a>
         		          </div>
         		          <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6"><br>
                        <p>
                        <button type="submitt" class="btn btn-primary" style="width=100%;">login</button>
                        </p>
                      </div>
                        </form>
                      </div>
                      </div>
                  </div>
        </div>          
  
   <!-- <for medium and large devices> -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 hidden-xs hidden-sm">
                    
                    <label><font color="blue" font size="4">facebook helps you connect people connect and share with the people<br>in your life </font></label>
                    </div>
                    <div class="col-lg-6 col-md-6 hidden-xs hidden-sm h3-text">
                    <h3>Create an Account</h3><h4>I'ts free and always will be</h4>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 hidden-xs hidden-sm">
                        <img src="<?php echo base_url().'images/facebook.png'?>">
                    </div>
                    <div class="col-lg-6 col-md-6 hidden-xs hidden-sm">
                        <input type="text" placeholder="first name" size="26">
      
                        <input type="text" placeholder="sur name" size="26"><br><br>
      
                        <input type="text" placeholder="mobile no or email adress" size="60"><br><br>
      
                        <input type="text" placeholder="re-enter mobile no or email adress" size="60"><br><br>
      
                        <input type="text" placeholder="new password" size="60"><br><br>

                              <select>

                              <option value="day" selected>Day</option>
                              <option value="monday">monday</option>
                              <option value="tuesday">tuesday</option>
                              <option value="wednesday">wednesday</option>
                              </select>

                              <select>
                              <option value="month" selected>Month</option>
                              <option value="january">january</option>
                              <option value="february">february</option>
                              <option value="march">march</option>
                              </select>

                              <select>
                              <option value="year">Year</option>
                              <option value="1991">1991</option>
                              <option value="1992">1992</option>
                              <option value="1993">1993</option>
                              </select>

                              <a href="#"><font size="2">Why do i need to provide my date of birth?</font></a><br><br>

                              <form name="login-form" method="GET" action="login.php">

                              <input type="radio" name="gender">male<input type="radio" name="gender">female</form><br>
                              <div><font size="2">By clicking create an account you agree to our <a>Terms</a> and that you have read our <a> Data Policy</a>including our <a>Cookie use.</a></font></div><br>


                             <button type="submitt" class="btn btn-success">create an account</button>

                        
                    </div>
                </div>

      <!-- <create account for small devices> -->

                <div class="row">
                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
                    <div class="row">
                    <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 ">
                    <p>
                       <input type="submit" name="login-btn" value="create an account" style="background-color:green;"><font size="5"><font color="white"></font></font>
                    </p>
                    </div>
                    </div>
                    </div>
                </div>


        </div>
      
				            

                                

</body>
</html>