<?php
    
$terjemahan = $_GET['terjemahan'];

function terjemahan($terjemahan) {
 
             switch ($terjemahan) {
                    case "Apa":
                        return("What");
                        break;

                    case "Bagaimana":
                        return("How");
                        break;

                    case "Di mana":
                        return("Where");
                        break;

                    case "Kapan":
                        return("When");
                        break;

                    case ("Mengapa || Kenapa"):
                        return("Why");
                        break;

                    case "Siapa":
                        return("Who");
                        break;   

                    default:
                        return("input yang Anda masukkan harus berupa kata tanya!");
                }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal kata tanya dalam bahasa inggris</title>

    <!--Bootstrap CSS-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Playfair+Display:ital@0;1&display=swap"
        rel="stylesheet">
    <style>
        main {
            margin-top: 18rem;
        }

        body {
            background-image: url("R.png");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            overflow-x: hidden;


        }

        h2 {
            color:white;
        }

        a {
            text-decoration: none;
            color: white;
            transition: all 2s;
        }

        a:hover {
            color: white;
            border-bottom: 2px solid white;
        }

        #start {
            background: #ec0e49;
            border: 2px solid #ec0e49;
            color: #f5f5f5;
            height: 52px;
            padding: 0 50px;
            font-weight: 600;
            border-radius: 4px;
            font-size: 30px;
            text-transform: uppercase;
            font-family: 'Playfair Display', serif;


        }

        .container {
            margin-top: 10rem
        }

        #terjemahan {
            margin-top: 10rem;
        }

        .card {
            background-color: transparent;
            border: none;
        }

        .card h3 {
            color: white;
            font-family: 'Playfair Display', serif;
        }

        #start:hover {
            cursor: pointer;
            background-color: #d1073d;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: purple;
            background-color: white;

        }

        img {
            width: 500px;
        }

        @media (max-width: 500px) {
            img {
                width: 100%;
            }
        }

        .deskripsi {
            font-family: 'Lora', serif;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Terjemahan dari <?php echo $terjemahan?> yaitu: </h1>
        <h2><?php echo terjemahan($terjemahan) ?></h2>
    </div>
</body>
</html>
