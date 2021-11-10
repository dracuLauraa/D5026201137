<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal 5W1H</title>

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
            height: 200vh;
            overflow-x: hidden;


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
    <div class="container-fluid">
        <main class="text-center">
            <h1>Kata tanya dalam Bahasa Inggris</h1>
          
        </main>
    </div>

    <div class="container my-5">
        <div class="deskripsi row justify-content-center">
            <div class=" col-lg-6 mt-5">
                <h1> Mengenal kata tanya dalam Bahasa Inggris (5W+1H) </h1>

                <p>Kata tanya adalah kata yang dipakai dalam kalimat tanya untuk menanyakan sesuatu,<br>
                 baik itu orang/benda, perbuatan/tindakan, keadaan/situasi, dan lain sebagainya</p>

                

                <p class="mt-3" >Berikut merupakan contoh penggunaan kata tanya 5W1H:<br> selamat belajar!
                </p>
                <a href="https://dosenbahasa.com/contoh-kalimat-tanya-menggunakan-5w-1h#:~:text=Dalam%20kaidah%20jurnalistik%2C%20enam%20dari%20jenis-jenis%20kata%20tanya,dijadikan%20sebagai%20sebuah%20rumus%20yang%20baku%2C%20yaitu%205W%2B1H."
                    target="_blank" rel="nofollow" title="5W1H">Klik di sini !!!</a>
            </div>
        </div>


        <div id="terjemahan" class="row text-center justify-content-center ">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body ">
                        <form action="translated.php" method="get">
                            <label class="form-label">
                                <h3>Ketikkan kata tanya</h3>
                            </label>
                            <input type="text" name="terjemahan" class="form-control" placeholder="your word">
                            <button id="start" type="submit" class="mt-3 btn btn-primary btn-lg">Start</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <br><br>

</body>

</html>