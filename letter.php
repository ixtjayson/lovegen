<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Love Letter</title>
    <style>
        body {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            padding: 50px;
        }
        .letter-container {
            display: none;
            animation: fadeIn 3s forwards;
        }
        @keyframes fadeIn {
            to {
                display: block;
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="letter-container">
        <?php
        if (isset($_GET['letter']) && isset($_GET['name'])) {
            $letter = urldecode($_GET['letter']);
            $name = htmlspecialchars($_GET['name']);
            echo "<h2>From $name</h2>";
            echo "<div>$letter</div>";
        } else {
            echo "<p>Invalid letter link.</p>";
        }
        ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.querySelector('.letter-container').style.display = 'block';
            }, 1000);
        });
    </script>
</body>
</html>
