<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Number Guessing Game</h1>

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
        <label for="guess">Your Guess: </label>
        <input type="number" name="guess" id="guess" min="<?php echo $min; ?>" max="<?php echo $max; ?>" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
