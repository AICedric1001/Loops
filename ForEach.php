<!DOCTYPE html>
<html>
<head>
    <title>Loop Examples</title>
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
        <h1>Foreach Loop</h1>
        <form method="POST">
            <label>Select fruits:</label>
            <input type="checkbox" name="fruits[]" value="Apple"> Apple
            <input type="checkbox" name="fruits[]" value="Banana"> Banana
            <input type="checkbox" name="fruits[]" value="Orange"> Orange
            <input type="checkbox" name="fruits[]" value="Blueberry"> Blueberry
            <input type="checkbox" name="fruits[]" value="Grapes"> Grapes
            <input type="checkbox" name="fruits[]" value="Lime"> Lime
            <input type="checkbox" name="fruits[]" value="Blackberry"> Blackberry
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fruits"])) {
            $selectedFruits = $_POST["fruits"];
            echo '<p class="result">Selected fruits:</p>';
            echo '<ul>';
            foreach ($selectedFruits as $fruit) {
                echo "<li>$fruit</li>";
            }
            echo '</ul>';
        } else {
            echo '<p class="result hidden">Selected fruits:</p>';
        }
        ?>
        <br>
        <a href="WhileLoop.php" style="text-decoration: none; color: #0066cc;">Next Page</a>
        <a href="ForLoop.php" style="text-decoration: none; color: #0066cc;">Previous Page</a>

    </div>
</body>
</html>
