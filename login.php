
<?php
require 'includes/header.php'
?>

<main>
<link rel="stylesheet" href="css/about.css">
        <div class="bg-cover">

            <div class = "container" style="padding: 50px;" >
                <div id="slides" class="carousel slide col-md-8 offset-md-2" data-ride="carousel"  style="margin-top: 10px; margin-bottom: 10px;" > <!-- this is to indicate that this is a carousel-->
                    <ol class="carousel-indicators">
                      <li data-target="#slides" data-slide-to="0" class="active"></li> <!-- this is the activation and where most of the "magic" is-->
                      <li data-target="#slides" data-slide-to="1"></li> <!-- from my understanding, this is the initiation for each slide, and their number indication-->
                      <li data-target="#slides" data-slide-to="2"></li>
                      <li data-target="#slides" data-slide-to="3"></li>
                      <li data-target="#slides" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block mx-auto " src="images/slide1.jpg" alt="First slide"> <!-- the content of each slide with the source of the image to use as well-->
                      </div>
                      <div class="carousel-item">
                        <img class="d-block mx-auto " src="images/slide2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block mx-auto " src="images/slide3.jpg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block mx-auto " src="images/slide4.jpg" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block mx-auto " src="images/slide5.jpg" alt="Fifth slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev" style="background-color:grey;"> <!-- The a tag is used as a button here. used a lot in Nav bars-->
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slides" role="button" data-slide="next" style="background-color:grey;">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

            <div class="h-40 center-me">
                <!-- Pretty cool sample for a sign in page that is take from https://getbootstrap.com/docs/4.0/examples/sign-in/ -->
                <div class="my-auto">
                    <form class="form-signin" action="includes/login-helper.php" method="post" style="background:transparent;"> <!-- Transparent color, neat-->
                      <img class="mb-4" src="images/Signin.jpg" alt="" width="15" height="15">
                        <h1 class="h3 mb-3 font-weight-normal; " style="color: white;">Please sign in</h1> <!-- added a style color tag to make the text more visible.-->

                        <label for="inputEmail" class="sr-only">Username or Email Address</label>

                        <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Email / Username" required autofocus>

                        <label for="inputPassword" class="sr-only">Password</label> <!-- sr = screen reader accesability feature-->

                        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>

                        <div class="checkbox mb-3" style="margin: 0px; color: white;">

                          <label>
                            <input type="checkbox" value="remember-me" > Remember me <!-- for some reason the color doesnt wanna change here :/ SOLVED: we fix that from the origin div, nice-->
                           </label>

                        </div>

                        <button class="btn btn-lg btn-primary btn-block;" name="login-submit" type="submit" style="color: black; background-color: white;">Sign in</button>
                        <li class="nav-item">
                          <a class="nav-link" href="about.php" style="color: white;"> Back </a>
                          <div class="text-center" style="color: white;"> Not a member? <a href= "signup.php">Sign up</a></div>
                        </li>
                        <p class="mt-5 mb-3 text-muted">&copy; 2047-2048</p> <!-- the & sign before copy is to indicate special characters such as the copyright sign-->

                    </form>
                </div>

            </div>
        </div>
  </main>
