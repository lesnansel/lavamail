
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background: linear-gradient(135deg, #ffffff, #00FFFF, #FF69B4, #008080, #FDF5E6); /* Updated gradient colors */
            overflow: hidden;
        }

        form {
            background: rgba(255, 255, 255, 0.8); 
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px); 
            width: 100%;
            max-width: 350px;
            animation: fadeIn 1.5s ease-in-out; 
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 1rem;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            background-color: rgba(255, 255, 255, 1);
            box-shadow: 0 0 5px rgba(0, 150, 255, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #00FFFF; /* Cyan color for button */
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #FF69B4; /* Pink color on hover */
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        button:active {
            transform: translateY(0);
        }

        .footer {
            margin-top: 1rem;
            text-align: center;
            font-size: 14px;
            color: #555;
        }

        a {
            color: #00FFFF; /* Cyan for links */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #FF69B4; /* Pink on hover for links */
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
            form {
                padding: 1.5rem;
            }

            input, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="/log">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
        <div class="footer">
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </div>
    </form>
</body>
</html>

