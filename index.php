<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="wrapper"> 
        <section class="form signup">
            <header>Realtime Chat app</header>
            <form action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Ime</label>
                        <input type="text" name="ime" placeholder="Ime" required>
                    </div>
                    <div class="field input">
                        <label for="">Prezime</label>
                        <input type="text" name="prezime" placeholder="Prezime" required>
                    </div>
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="email" required>
                    </div>
                    <div class="field input">
                        <label for="">Sifra</label>
                        <input type="password" name="password" id="signupPassword" placeholder="Unesite vašu šifru" required>
                        <i class="fas fa-eye" id="toggleSignupPassword"></i>

                    </div>
                    <div class="field image">
                        <label for="">Profilna slika</label>
                        <input type="file" name="image" accept="image/x-png, image/gif, image/jpeg, image/jpg" required>
                    </div>

                    <div class="field button">
                        <input type="submit" name="submit" value="Nastavite na aplikaciju">
                    </div>
                </div>
            </form>

            <div class="link">Već ste se prijavili? <a href="login.php">Uloguj se</a></div>
        </section>
    </div>

    <script type="text/javascript" src="php/js/pass-show-hide.js"></script>
    <script type="text/javascript" src="php/signup.php"></script>
</body>
</html>
