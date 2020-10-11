<?php
require 'includes/header.php';
?>

<main>
<link rel="stylesheet" href="css/gallery.css">
    <h1> Gallery </h1>
    <div class="gallery-container">
        <?php
        include_once 'includes/dbhandler.php';
        $sql = "SELECT * FROM memes ORDER BY upload_date DESC";        
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo 'SQL Failure';
        }
        else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_assoc($result)){
               echo '<div class="card">
                <a href="#">
                    <img src="memes/'.$row["picpath"].'">
                    <h3>'.$row["title"].'</h3>
                    <p>'.$row["descript"].'</p>
                </a>

                </div>';

            }
        }

        
        ?>
    </div>
</main>