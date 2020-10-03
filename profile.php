<?php 
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>

<?php 
if(isset($_SESSION['uid'])){ ## maybe change it to uid. I did. include 'html/profile.html'; ## adding an html page into this pfp page

$prof_user = $_SESSION['username'];
$sqlpro = "SELECT * FROM profile WHERE uname='$prof_user';";

$res = mysqli_query($conn, $sqlpro);
$row = mysqli_fetch_array($res);
$photo = $row['picpath'];

?>
<style>
    .center-me {
        display: flex;
        justify-content: center;
        padding: 40px;
        text-align: "center";
    }
    #prof-display {
        display: block;
        
        width: 150px;
        margin: 10px auto;
        border-radius: 50%;
    }
    
    #uname-style {
        font-size: 20px;
        font-family: "Lucida Console", Courier, monospace;
        font-weight: bold;
    }
    
    </style>
    
    <script>
        function triggered(){
            document.querySelector("#prof-image").click();
        }
    
        function preview(e){ 
            if(e.files[0]){
                var reader = new FileReader();
    
                reader.onload = function(e){
                    document.querySelector('#prof-display').setAttribute('src',e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
    
            }
        }
    </script>

<div class="h-100 center-me text-center">
    <div class="my-auto">
        <form action="includes/upload-helper.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <img src="<?php echo $photo;?>" onclick="triggered();" id="prof-display">
                <label for="prof-image" id="uname-style"><?php echo $prof_user;?></label>
                <input type="file" name="prof-image" id="prof-image" onchange="preview(this)" class="form-control" style="display: none;">
            </div>
            <div class="form-group">
                <textarea name="bio" id="bio" cols="30" rows="10" placeholder="bio..." style="text-align: center;"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="prof-submit" class="btn btn-outline-success btn-lg btn-block">upload</button>
            </div>
        </form>
    </div>
</div>


  


      
<?php 
} 
else{
    header("Location: ../login.php"); ## throwing the user into the loging page if they weren't supposed to be in the profile page. 
    exit();
}
?>
      
</main>