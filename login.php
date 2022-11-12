<?php
// cas formulaire non vide
if (isset($_POST['username']) && isset($_POST['password'])) {

    // utilisateur connu
    if ($_POST['username'] === 'aze' && $_POST['password'] === 'aze') {
        $_SESSION['username'] = $_POST['username'];
        header('Location: /home/utilisateur');
        http_response_code(302);
    } else {
        header('Location: /login');
        http_response_code(302);
    }

}
