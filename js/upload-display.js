function triggered(){
    document.querySelector("#gallery-image").click();
}

function preview(e){
    if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            document.querySelector('#gallery-display').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);

    }
}