<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات من الفورم مع تعقيمها
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // الايميل اللي هيستقبل الرسائل
    $to = "sarausama80@gmail.com";

    // تجهيز الرسالة
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // الهيدرز
    $headers = "From: $name <$email>";

    // ارسال الايميل
    if(mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent. Thank you!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sorry, your message could not be sent. Please try again later.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
