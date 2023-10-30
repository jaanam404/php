<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        input[type="number"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px 0;
        }

        button {
            background-color: #007BFF;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fancy Number Guessing Game</h1>
        <?php
        $min = 1;
        $max = 100;
        $targetNumber = rand($min, $max);

        if (isset($_POST['guess'])) {
            $userGuess = (int)$_POST['guess'];
            
            if ($userGuess == $targetNumber) {
                echo "<p>Congratulations! You guessed the correct number: $targetNumber</p>";
            } elseif ($userGuess < $targetNumber) {
                echo "<p>Try a higher number.</p>";
            } else {
                echo "<p>Try a lower number.</p>";
            }
        }
        ?>
        <p>Try to guess the number between <?php echo $min; ?> and <?php echo $max; ?>.</p>
        <form method="post">
            <input type="number" name="guess" min="<?php echo $min; ?>" max="<?php echo $max; ?>" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
