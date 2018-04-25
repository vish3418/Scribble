<!--DEFAULT CODE FROM BOOTSRAP WEBSITE-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scribble</title>

    <!-- Bootstrap  Section-->
      
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
  </head>
  <body id="whoare">
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <a class="navbar-brand">Scribble</a>
                <button type="button" class="navbar-toggle" data-target="#navbar-Collapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="navbar-collapse collapse" id="navbar-Collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="active"><a href="contactus.php">Contact Us</a></li>
                    <li class="active"><a href="whoarewe.php">Who are we</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>
                
            </div>
        </div>
      </nav>
      
      <!--Bharat Pic-->
      
      
      <!--About Me-->
      <div class="pictures" id="description">
          
          <h1><img src="Bharat.jpg" height="150" width="150" alt="Bharat Bodapati"> &ensp; <img src="sid.jpg" height="150" width="150" alt="Siddharth Dhar"> &ensp; <img src="vish.jpg" height="150" width="150" alt="Vishva Pandya"></h1>
          
          
          <p><b><font color="white">Bharat Bodapati, Siddharth Dhar, and Vishva Pandya are Sophomore Computer Science majors at Purdue University. They all would like to pursue the Machine Learning and Software Engineering tracks and would like to one day start their own technical company.</font></b></p>
          
      </div>
    
      
<!--      BOTTOM PANEL-->
      
      <div class="footer">
          <div class="container" style="padding-left: calc(100vw-100%);">
            <p>
                <font color="white"> Made by Bharat Bodapati, Siddharth Dhar, Vishva Pandya
                </font>
            </p>
          </div>
      </div>
      
<!--   Login Form -->
      
      <form method="post" id="loginForm">
          <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                     &times;
                    </button>
                    <h4 id="myModalLabel">
                        Login:
                    </h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                            <label for="loginemail" class ="sr-only">Email Address:</label>
                            <input class="form-control" type="text" name="Email Address" id="loginemail" placeholder="Email Address/Username" maxlength="100">
                      </div>
                      <div class="form-group">
                            <label for="loginpassword" class ="sr-only">Password:</label>
                            <input class="form-control" type="password" name="password" id="loginpass" placeholder="Password" maxlength="100">
                      </div>
                      <div class="checkbox">
                            <label>
                                <input type="checkbox" name="rememberme" id="rememberme">
                                Remember me
                            </label>
                          <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotModal" data-toggle="modal">Forgot Password?</a>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <input class="btn btn-lng submitGold" name="login" type="submit" value="Go">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Return
                      </button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">
                        Register
                      </button>
                      
                  </div>
                </div>
              </div>
          </div>
      
      </form>
      
      
<!-- Forgot Password Form -->
      
      <form method="post" id="forgotform">
          <div class="modal" id="forgotModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                     &times;
                    </button>
                    <h4 id="myModalLabel">
                        Enter your email address:
                    </h4>
                    <h6 id="myModalLabel2">
                        You will recieve an email within 5 minutes. 
                    </h6>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                            <label for="forgotemail" class ="sr-only">Email Address:</label>
                            <input class="form-control" type="text" name="forgotemail" id="forgotemail" placeholder="Email Address" maxlength="100">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <input class="btn btn-lng submitGold" name="login" type="submit" value="Go">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Return
                      </button>
                      
                  </div>
                </div>
              </div>
          </div>
      
      </form>
      
<!--  Signup Form -->  
      
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>