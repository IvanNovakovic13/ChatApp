document.addEventListener("DOMContentLoaded", function() {
    // Za signup stranicu
    const passFieldSignup = document.querySelector(".form.signup input[type='password']");
    const toggleIconSignup = document.querySelector(".form.signup i#toggleSignupPassword");

    toggleIconSignup.addEventListener("click", function() {
        if (passFieldSignup.type === "password") {
            passFieldSignup.type = "text";
            toggleIconSignup.classList.remove("fa-eye");
            toggleIconSignup.classList.add("fa-eye-slash");
        } else {
            passFieldSignup.type = "password";
            toggleIconSignup.classList.remove("fa-eye-slash");
            toggleIconSignup.classList.add("fa-eye");
        }
    });

    // Za login stranicu
    const toggleIconLogin = document.querySelector(".form.login i#toggleLoginPassword");

    if (toggleIconLogin) {
        toggleIconLogin.addEventListener("click", function() {
            const passFieldLogin = document.querySelector(".form.login input[type='password']");
            
            if (passFieldLogin) {
                if (passFieldLogin.type === "password") {
                    passFieldLogin.type = "text";
                    toggleIconLogin.classList.remove("fa-eye");
                    toggleIconLogin.classList.add("fa-eye-slash");
                } else {
                    passFieldLogin.type = "password";
                    toggleIconLogin.classList.remove("fa-eye-slash");
                    toggleIconLogin.classList.add("fa-eye");
                }
            }
        });
    }
});

