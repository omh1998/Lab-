<?php 
require 'includes/header.php';
?>

<style>
    .center-me {
        display: flex;
        justify-content: center;
        padding: 40px;
        text-align: "center";
    }
    #s3-display {
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
            document.querySelector("#s3-image").click();
        }
    
        function preview(e){
            if(e.files[0]){
                var reader = new FileReader();
    
                reader.onload = function(e){
                    document.querySelector('#s3-display').setAttribute('src',e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
    
            }
        }
    </script>
    
    <main>
    <div class="h-100 center-me text-center">
    <div class="my-auto">
        <form action="includes/s3-upload-helper.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <img src="uploads/anon.png" onclick="triggered();" id="s3-display">
                <label for="s3-image" id="uname-style">S3 Upload</label>
                <input type="file" name="s3-image" id="s3-image" onchange="preview(this)" class="form-control" style="display: none;">
            </div>
           
            <div class="form-group">
                <button type="submit" name="s3-submit" class="btn btn-outline-success btn-lg btn-block">upload</button>
            </div>
        </form>
    </div>
</div>
    </main>