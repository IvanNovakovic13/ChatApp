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
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label for="">Email adresa</label>
                    <input type="text" name="email" placeholder="Unesite vašu email adresu" required>
                </div>

                <div class="field input">
                    <label for="">Šifra</label>
                    <div class="password-container">
                        <input type="password" name="password" id="loginPassword" placeholder="Unesite vašu šifru" required>
                        <i class="fas fa-eye" id="toggleLoginPassword"></i>
                    </div>
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="Nastavite na Chat">
                </div>
            </form>
            <div class="link">Još uvek se niste prijavili? <a href="index.php">Prijavite se sada</a></div>
        </section>
    </div>

    <script type="text/javascript" src="php/js/pass-show-hide.js"></script>
</body>
</html>
