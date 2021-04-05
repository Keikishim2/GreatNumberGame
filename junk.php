<?php 
    session_start();

    if(empty($_SESSION["rand"]))
    {
        $rand = rand(1,100);
        $_SESSION["rand"] = $rand;
    }
    if(empty($_SESSION["og"]))
    {
        $value = "Submit";
        $pop = "hint";
    }
    else if($_SESSION["og"] === "finished")
    {
        $value = "Play Again!";
        $pop = "congratulations";
        $_SESSION["reset"]="reset";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Great Number Game</title>

        <link rel="stylesheet" href="junk.css">
    </head>
    <body>
        <h1>Welcome to the Great Number Game!</h1>
        <p>I am thinking of a number between 1 and 100</p>
        <p>Take a guess!</p>

    <?php if(!empty($_SESSION["message"])){ ?>
        <div class="<?= $pop ?>">
            <h1><?= $_SESSION["message"] ?></h1>
        </div>
    <?php } ?>

        <form action="junkie.php" method="post">
            <input type="text" name="number">
            <input type="submit" value='<?= $value ?>'>
        </form>
    </body>
</html>