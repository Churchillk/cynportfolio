<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];

    if (!empty($comment)) {
        $to = 'your@email.com'; // Replace with your email address
        $subject = 'New Comment';
        $message = "You have received a new comment:\n\n" . $comment;
        $headers = 'From: webmaster@example.com'; // Replace with a valid sender email

        mail($to, $subject, $message, $headers);
        echo 'Email sent successfully.';
    } else {
        echo 'Comment field is empty.';
    }
} else {
    echo 'Invalid request.';
}
?>
