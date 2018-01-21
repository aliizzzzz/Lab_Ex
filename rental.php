<?php
// db_connection.php

    // connect to database
    define("DB_SERVER", "localhost")      ;
    define("DB_USER", "root")        ;
    define("DB_PASS", "adminalizz")       ;
    define("DB_NAME", "sakila")    ;

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    // test connection
    if(mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>
<?php require_once("includes/functions.php"); ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <title>&num;1 Movies</title>
</head>

<body>
    <header>
        <h1><a href="index.html">&num;1 Movies</a></h1>
    </header>
    <div id="navigation">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="rental.php">DVD RENTAL</a></li>
            <li><a href="return.html">DVD RETURN</a></li>
        </ul>
    </div>
    <div id="main">
        <div id="content">
            <h2>RENT A DVD</h2>
            <table>
                <tr id="heading">
                    <th>Genre</th>
                    <th>Total number of available films</th>
                </tr>
                <?php print_genre_table(); ?>
            </table>
        </div>
        <div id="background">
        </div>
    </div>
</body>

</html>

<?php
    // close db connection
    if(isset($connection)){
    mysqli_close($connection);
    }
?>
