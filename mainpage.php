<!--DEFAULT CODE FROM BOOTSRAP WEBSITE-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Notes List:</title>

    <!-- Bootstrap  Section-->
      
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
  </head>
  <body>
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
                    <li class="active"><a href=#>User Profile</a></li>
                    <li class="active"><a href=#>Contact Us</a></li>
                    <li class="active"><a href=#>Who are we</a></li>
                    <li class="active"><a href=#>My Notes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href=#>Logged in as <b>username</b></a></li>
                    <li class="active"><a href="#" data-toggle="modal">Sign Out</a></li>
                </ul>
                
            </div>
        </div>
      </nav>
      
      <!--Sign up button-->
      
      <div class="jumbotron" id="myContainer" >
          <button type="button" class="btn btn-lg gold signup" style="padding-left: calc(100vw-100%);" data-target="#signupModal" data-toggle="modal">Sign Up</button>
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
      
      <form method="post" id="signupform">
          <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                     &times;
                    </button>
                    <h4 id="myModalLabel">
                        Sign up for free here:
                    </h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                            <label for="email" class ="sr-only">Email Address:</label>
                            <input class="form-control" type="text" name="Email Address" id="email"placeholder="Email Address" maxlength="100">
                      </div>
                      <div class="form-group">
                            <label for="username" class ="sr-only">Username:</label>
                            <input class="form-control" type="username" name="Username" id="username" placeholder="Username" maxlength="100">
                      </div>
                      <div class="form-group">
                            <label for="password" class ="sr-only">Password:</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="100">
                      </div>
                      <div class="form-group">
                            <label for="confirm" class ="sr-only">Confirm:</label>
                            <input class="form-control" type="confirm" name="confirm" id="confirm" placeholder="Confirm Password" maxlength="100">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <input class="btn btn-lng submitGold" name="signup" type="submit" value="Register">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Return
                      </button>
                      
                  </div>
                </div>
              </div>
          </div>
      
      </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>