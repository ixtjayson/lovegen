<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Love Letter</title>
    <style>
        body {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            font-family: Arial, sans-serif;
            text-align: center;
            color: #fff;
            padding: 50px;
        }
        form {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background: #ff7e5f;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Create a Beautiful Love Letter</h1>
    <form action="generate.php" method="POST">
        <input type="text" name="name" placeholder="Your Crush's Name" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="10" placeholder="Type your message here..." required></textarea>
        <input type="text" name="username" placeholder="Your Name" required>
        <button type="submit">Generate Letter</button>
    </form>
</body>
</html>
