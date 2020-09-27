<?php
require "includes/header.php"
?>

<main>
    <div class="bg-cover">

        <div class="h-100 container center-me">

            <div class="my-auto">
                <div class="signup-form"> 
                
                 <form action="includes/signup-helper.php" method="post">
                    <h2 style="color: white;">Register</h2>
                    <p class="hint-text" style="color: white;"> Create your account </p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="fname" placeholder="First name" required="required">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="lname" placeholder="Last name" required="required"> <!-- this nesting part is to get the first and last name simultaneously !-->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="uname" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="password" required="required">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" name="con-pwd" placeholder="confirm Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup-submit" class="btn btn-success btn-lg btn-block"> Register </button>
                    </div>
                 </form>
                 <div class="text-center" style="color: white;"> Already a member? <a href= "login.php">Sign in</a></div>
                 
             </div>
            </div>

        </div>

    </div>
</main>