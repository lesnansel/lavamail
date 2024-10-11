
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #FFC3A0, #FFAFBD); /* New gradient colors */
            overflow: hidden;
        }

        form {
            background: rgba(255, 255, 255, 0.85);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 600px; /* Made the form wider for the new layout */
            animation: fadeInUp 1s ease-out;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.8rem;
            font-size: 2rem;
            font-weight: 500;
            color: #333;
            grid-column: span 2; /* Full width for the title */
        }

        input, textarea {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 175, 189, 0.5); /* Soft pink focus shadow */
        }

        input[type="file"] {
            padding: 0;
        }

        textarea {
            height: 160px;
            resize: none;
            grid-column: span 2; /* Full width for the message */
        }

        button {
            padding: 14px;
            border: none;
            border-radius: 8px;
            background-color: #FF6B6B; /* Coral button */
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            grid-column: span 2; /* Full width for the submit button */
        }

        button:hover {
            background-color: #FFC3A0; /* Soft peach on hover */
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        button:active {
            transform: scale(1);
        }

        .links {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 14px;
            color: #555;
            grid-column: span 2; /* Full width for links */
        }

        .links a {
            color: #FF6B6B; /* Coral for links */
            text-decoration: none;
            font-weight: 500;
            margin: 0 8px;
            transition: color 0.3s ease;
        }

        .links a:hover {
            color: #FFC3A0; /* Soft peach on hover */
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            form {
                padding: 2rem;
                grid-template-columns: 1fr; /* Single column layout for small screens */
            }

            input, textarea, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="email" enctype="multipart/form-data">
        <h2>Send Email</h2>
        <input type="email" name="email" placeholder="Recipient Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <input type="text" name="sender" placeholder="Sender" required>
        <input type="file" name="attachment" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Send Email</button>
        <div class="links">
            <p><a href="/register">Register</a> | <a href="/login">Login</a></p>
        </div>
    </form>
</body>
</html>


