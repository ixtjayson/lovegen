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
    <form id="letterForm">
        <input type="text" id="name" placeholder="Your Crush's Name" required>
        <input type="text" id="subject" placeholder="Subject" required>
        <textarea id="message" rows="10" placeholder="Type your message here..." required></textarea>
        <input type="text" id="username" placeholder="Your Name" required>
        <button type="submit">Generate Letter</button>
    </form>
    <div id="linkContainer" style="display:none;">
        <p>Your letter has been created! Share this link with your crush:</p>
        <a id="letterLink" href="#" target="_blank"></a>
    </div>
    <script>
        function generateID() {
            return 'letter-' + Math.random().toString(36).substr(2, 9);
        }

        document.getElementById('letterForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            const username = document.getElementById('username').value;

            const letter = `Hey ${name},<br><br>${message}<br><br>Your lover,<br>${username}`;
            const letterID = generateID();

            localStorage.setItem(letterID, JSON.stringify({ name, subject, message, username, letter }));

            const link = `letter.html?id=${letterID}`;

            document.getElementById('letterLink').href = link;
            document.getElementById('letterLink').textContent = link;
            document.getElementById('linkContainer').style.display = 'block';
        });
    </script>
</body>
</html>
