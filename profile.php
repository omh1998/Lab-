<?php 
require 'includes/header.php'
?>

<main>
      
<?php 
if(isset($_SESSION['username'])){ ## maybe change it to uid
    include 'html/profile.html'; ## adding an html page into this pfp page
}
else{
    header("Location: ../login.php"); ## throwing the user into the loging page if they weren't supposed to be in the profile page. 
    exit();
}
?>
      
</main>