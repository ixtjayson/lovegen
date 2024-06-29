<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));
    $username = htmlspecialchars($_POST['username']);
    
    $letter = "Hey $name,<br><br>$message<br><br>Your lover,<br>$username";
    $encoded_letter = urlencode($letter);
    
    $link = "letter.php?letter=$encoded_letter&name=$username";
    echo "<p>Your letter has been created! Share this link with your crush:</p>";
    echo "<a href='$link'>$link</a>";
}
?>
