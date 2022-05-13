const inpfile = document.getElementById("upload-profile");
const previewImage =document.getElementById("picture");
const previewContainer = document.getElementById("preview-container");
const previewIcon = previewContainer.querySelector(".camera-icon");
inpfile.addEventListener("change",function () {
    const file = this.files[0];

    if (file) {
        
        const reader = new FileReader();
        reader.addEventListener("load",function () {
            
           previewIcon.style.display = "none";
            previewImage.setAttribute("src",this.result);
           
        });

        reader.readAsDataURL(file);
    }

});
