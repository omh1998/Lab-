<?php

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
        <link rel="stylesheet" href="../css/signup.css">

    </head>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" > <!-- navbar taken from the bootstrap website https://getbootstrap.com/docs/4.0/components/navbar/ No plagiarism here-->
            
            <a class="navbar-brand" href="#">Steins;Gate</a><!-- anchor tags are similar to hyperlinks--> <!-- href is to the reference click i think-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item">
              <a class="nav-link" href="about.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <?php 
              if(isset($_SESSION['username'])){ ## maybe change it to uid
                echo'<li class="nav-item active">
                <a class="nav-link" href="includes/logout.php">Logout</a>
                </li>';
                }
              else{
                echo'<li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
                </li>';
                }
              ?>
                
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php">Sign in</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="signup.php">Sign up</a>
                    <div class="dropdown-divider"></div> <!-- things like deviders and -->
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://steins-gate.fandom.com/wiki/Steins;Gate_Wiki">Wiki page</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://giphy.com/gifs/stickbug-get-stick-bugged-stickbugged-IaWa1S6rMWzzt0Tt07">Don't click me</a>
                  </li>
                
              </ul>
              
            </div>
          </nav>
</header>