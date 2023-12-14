<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jasonklemas1@gmail.com";
    $subject = "Question/Suggestion for CoreGears";
    $message = $_POST["question"];
    $headers = "From: webmaster@example.com";
    mail($to, $subject, $message, $headers);
    header("Location: thank_you.html");
    exit();
} else {
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secure Question Form</title>
</head>
<body>

<form action="submit_form.php" method="post">
  <label for="question">Enter your question:</label><br>
  <textarea id="question" name="question" rows="4" cols="50" required></textarea><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>