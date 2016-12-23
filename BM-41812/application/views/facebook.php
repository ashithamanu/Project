<!DOCTYPE html>
<html>
<head>
  <title>my bootstrapfb page</title>
    <!-- <link rel="stylesheet" type="text/css" href="C:/Users/ashitha/Documents/bootstrap-3.3.7-dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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





               /*@media (max-width:780px) {
                  .main {
                    display: none;
                  }
               }
*/




      </style>




</head>

<body>
          <div class="container-fluid ">
                            
                           <!-- <div class="hed">-->

              <div class="row" style="background-color:#3b5997">

                <div class="col-lg-offset-0 col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">


                  <img src="C:/Users/ashitha/Desktop/fb.jpg">

                </div>

                <div class="col-lg-offset-2 col-lg-6 col-md-offset-2 col-md-6  hidden-xs">
                  <div class="row">

                    <form role="form" method="post" action="">
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
                                              <button type="submitt" class="btn btn-primary">login</button>
                                              </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

           <!--  <login form for small devices> -->
                           
                    <div class="row"> 
                      <div class=" col-xs-12 col-sm-12 visible-xs visible-sm hidden-lg hidden-md">
                  <div class="row">

                    <form role="form" method="post" action="">
                      <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6">
                        email or phone<br>
                                    <input type="text" name="username" class="form-control">
                                    </div>  

                                    <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6">
                                        password<br>
                                        <input type="password" name="password" class="form-control"><br>
                                           <a href="#" class="">forgotten password?</a>
                                      </div>
                                      <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6">
                                              <p>
                                              <button type="submitt" class="btn btn-primary" style="width=100%;">login</button>
                                              </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                    </div>
      
                    

                                

</body>
</html>
                            