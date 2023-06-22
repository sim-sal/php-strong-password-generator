<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        main {
            background-color: darkblue;
            height: 100vh;
        }

        h1 {
            color: black;
            font-size: 50px;
            text-shadow: 3px 3px lightgrey;
        }

        h2 {
            color: white;
            text-shadow: 1px 1px black;
        }

        .password_container {
            background-color: white;
            padding: 5px;
            border-radius: 10px;
            max-width: max-content;
            margin: auto;
        }
    </style>

    <?php
    session_start();
    $_randomPassword = $_SESSION['randomPassword'];
    ?>
</head>

<body>

    <main>
        <div class="container">
            <h2 class="text-center">
                La tua password generata è:
            </h2>

            <div class="password_container">
                <?php
                echo "<h1 class='text-center'>";
                echo $_randomPassword;
                echo "</h1>";
                ?>
            </div>

        </div>
    </main>


</body>

</html>