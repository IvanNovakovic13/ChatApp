<?php
include_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conn) {
        // Provera da li su svi potrebni inputi poslati
        if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email']) && isset($_POST['password'])) {
            $ime = mysqli_real_escape_string($conn, $_POST['ime']);
            $prezime = mysqli_real_escape_string($conn, $_POST['prezime']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $sifra = mysqli_real_escape_string($conn, $_POST['password']); // Promenjeno ime polja za lozinku

            // Provera da li su svi inputi neprazni
            if (!empty($ime) && !empty($prezime) && !empty($email) && !empty($sifra)) {
                // Provera validnosti email adrese
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Provera da li email već postoji u bazi
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
                    if (mysqli_num_rows($sql) > 0) {
                        echo "$email - Ova email adresa već postoji!";
                    } else {
                        if (isset($_FILES['slika'])) { // Promenjeno ime polja za sliku
                            $img_name = $_FILES['slika']['name'];
                            $img_type = $_FILES['slika']['type'];
                            $tmp_name = $_FILES['slika']['tmp_name'];

                            $img_explode = explode('.', $img_name);
                            $img_ext = end($img_explode);

                            $extensions = ["jpeg", "png", "jpg"];

                            if (in_array($img_ext, $extensions)) {
                                $type = ["image/jpeg", "image/jpg", "image/png"];

                                if (in_array($img_type, $type)) {
                                    $time = time();
                                    $new_image_name = $time . $img_name;

                                    if (move_uploaded_file($tmp_name, "images/" . $new_image_name)) {
                                        $ran_id = rand(time(), 10000000);
                                        $status = "Online";
                                        $encrypted_pass = md5($sifra);

                                        $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, ime, prezime, email, sifra, slika, status) VALUES ('$ran_id', '$ime', '$prezime', '$email', '$encrypted_pass', '$new_image_name', '$status')");

                                        if ($insert_query) {
                                            echo "success"; // Slanje poruke o uspehu
                                        } else {
                                            echo "Došlo je do greške prilikom upisa u bazu.";
                                        }
                                    } else {
                                        echo "Došlo je do greške prilikom upload-a slike.";
                                    }
                                } else {
                                    echo "Molimo vas da upload-ujete sliku u jednom od formata: jpeg, jpg ili png";
                                }
                            } else {
                                echo "Molimo vas da upload-ujete sliku u jednom od formata: jpeg, jpg ili png";
                            }
                        }
                    }
                } else {
                    echo "Unesena email adresa nije validna!";
                }
            } else {
                echo "Svi inputi su obavezni!";
            }
        } else {
            echo "Nisu poslati svi potrebni inputi.";
        }
    } else {
        echo "Konekcija sa bazom nije uspostavljena: " . mysqli_connect_error();
    }
}
?>
