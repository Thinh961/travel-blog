function previewImage(input, targetId) {
    const img = document.getElementById(targetId);
    const file = input.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        img.src = e.target.result;
    }

    reader.readAsDataURL(file);
}