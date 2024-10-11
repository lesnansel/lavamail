

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #00C9FF, #92FE9D, #FFB6C1, #D4FC79, #FFDDC1); /* New gradient colors */
            overflow: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .header {
            width: 100%;
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h2 {
            font-weight: bold;
            color: #333;
        }

        .form-group {
            width: 100%;
            margin-bottom: 1rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            background-color: #fff;
            border-color: #00C9FF; /* Light blue border on focus */
            box-shadow: 0 0 5px rgba(0, 201, 255, 0.5);
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #92FE9D; /* Mint green for button */
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .form-group button:hover {
            background-color: #FFB6C1; /* Light pink on hover */
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group button:active {
            transform: translateY(0);
        }

        .footer {
            margin-top: 1rem;
            text-align: center;
            font-size: 14px;
            color: #555;
        }

        .footer a {
            color: #00C9FF; /* Light blue for links */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #FFB6C1; /* Light pink on hover */
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
            }

            .form-group input, .form-group button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="POST" action="register/submit">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div class="footer">
            <p>Already have an account? <a href="/login">Login here</a></p>
            <a href="/email">Send Email Here</a>
        </div>
    </div>
</body>
</html>



