<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>
    <h1>Contact Form</h1>
    <form action="send.php" method="post">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="msg" placeholder="Your Message"></textarea>
        <button type="submit" name="submit">Send</button>
    </form>
</body>

</html>
