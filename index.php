<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php include "functions.php"; ?>

    <style>
        main {
            background-color: darkblue;
            height: 100vh;
        }

        h1 {
            color: grey;
        }

        h2 {
            color: white;
        }

        .form_container {
            background-color: white;
            border-radius: 5px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: space-around;
        }
    </style>

</head>

<body>

    <main>
        <div class="container">
            <h1 class="text-center">
                Strong Password Generator
            </h1>

            <h2 class="text-center">
                Genera una password sicura
            </h2>

            <h3></h3>

            <div class="form_container">
                <form class="text-center my-3">
                    <label for="passLength">Lunghezza password:</label>
                    <input type="number" name="passLength" id="passLength" value="<?php echo $_GET['passLength']; ?>">
                </form>

                <?php
                $passLength = $_GET['passLength'];

                function generaStringaRandom($passLength)
                {
                    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`!?$?%^&*()_-+={[}]:;@~#|\<,>.?/';
                    $stringaRandom = '';
                    for ($i = 0; $i < $passLength; $i++) {
                        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
                    }
                    return $stringaRandom;
                }

                echo "<h4 class='text-center'>La tua password generata è: </h4>";
                echo "<h3 class='text-center'>";
                echo generaStringaRandom($passLength);
                echo "</h3>";
                ?>
            </div>

        </div>
    </main>


</body>

</html>