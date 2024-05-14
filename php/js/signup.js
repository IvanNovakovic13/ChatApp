document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".signup-form");
    const submitBtn = form.querySelector("[type='submit']"); 
    const errorText = document.querySelector(".error-text");

    submitBtn.addEventListener("click", function(event) {
        event.preventDefault(); 

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "signup.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.responseText;

                    if (data === "success") {
                        window.location.href = "users.php";
                    } else {
                        errorText.style.display = "block";
                        errorText.textContent = data;
                    }
                }
            }
        };

        let formData = new FormData(form);
        let encodedFormData = new URLSearchParams(formData).toString();

        xhr.send(encodedFormData);
    });
});
