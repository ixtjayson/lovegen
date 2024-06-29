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
            overflow: hidden;
        }
        .heart {
            width: 100px;
            height: 100px;
            background: pink;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            animation: heartbeat 2s ease-in-out;
        }
        .heart:before,
        .heart:after {
            content: "";
            width: 100px;
            height: 100px;
            background: pink;
            position: absolute;
            border-radius: 50%;
        }
        .heart:before {
            top: -50px;
            left: 0;
        }
        .heart:after {
            top: 0;
            left: -50px;
        }
        @keyframes heartbeat {
            0% {
                transform: translate(-50%, -50%) rotate(45deg) scale(1);
            }
            25% {
                transform: translate(-50%, -50%) rotate(45deg) scale(1.2);
            }
            50% {
                transform: translate(-50%, -50%) rotate(45deg) scale(1.4);
            }
            75% {
                transform: translate(-50%, -50%) rotate(45deg) scale(1.2);
            }
            100% {
                transform: translate(-50%, -50%) rotate(45deg) scale(1);
                opacity: 0;
            }
        }
        .letter-container {
            display: none;
            opacity: 0;
            animation: fadeIn 3s forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="heart"></div>
    <div id="from" style="display:none;"></div>
    <div class="letter-container">
        <div id="letter"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const params = new URLSearchParams(window.location.search);
            const letterID = params.get('id');

            if (letterID) {
                const letterData = JSON.parse(localStorage.getItem(letterID));

                if (letterData) {
                    document.getElementById('from').textContent = `From ${letterData.username}`;
                    document.getElementById('letter').innerHTML = letterData.letter;

                    setTimeout(function() {
                        document.querySelector('.heart').style.display = 'none';
                        document.getElementById('from').style.display = 'block';
                        setTimeout(function() {
                            document.querySelector('.letter-container').style.display = 'block';
                        }, 1000);
                    }, 2000);
                } else {
                    document.getElementById('letter').textContent = 'Invalid letter link.';
                }
            } else {
                document.getElementById('letter').textContent = 'Invalid letter link.';
            }
        });
    </script>
</body>
</html>
