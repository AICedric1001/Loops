<!DOCTYPE html>
<html>
<head>
    <title>For Loop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #b3d9ff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            color: #333;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        h1 {
            text-align: center;
            color: #0066cc;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #0066cc;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            background-color: #cce0ff;
            color: #333;
            border-radius: 5px;
        }

        input[type="text"]::placeholder {
            color: #99a3ac;
        }

        input[type="submit"] {
            background-color: #0066cc;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0055b3;
            transform: scale(1.05);
        }

        .result {
            font-weight: bold;
            color: #009900;
            animation: slideIn 1s ease-in;
        }

        .result.hidden {
            display: none;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>For Loop</h1>
        <form method="POST">
            <label for="age">Enter your Number for the Loop:</label>
            <input type="text" name="Num" id="Num" placeholder="Input Number Here" inputmode="numeric" pattern="[0-9]*">
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = isset($_POST["Num"]) ? intval($_POST["Num"]) : 0;
            echo '<p class="result">Here are the Numbers:</p>';
            $i = 0;
            for ($i = 1; $i <= $num; $i++) {
                echo "<br>$i";
            }   
        } else {
            echo '<p class="result hidden">Here are the Numbers:</p>';
        }
        ?>
        <br>
        <a href="ForEach.php" style="text-decoration: none; color: #0066cc;">Next Page</a>
    </div>
</body>
</html>
