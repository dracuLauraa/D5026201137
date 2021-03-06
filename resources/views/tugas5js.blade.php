<!DOCTYPE html>
<html>

<head>
    <title>Game cacing</title>
    <style>
        body {
            background-color: #000000;
        }

        h1 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: white;
            text-align: center;
        }

        h3 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: white;
            text-align: center;
        }
        canvas{
        display: block;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <center>
        <h1>Gunakan tombol panah pada keyboardmu untuk memainkannya,</h1>
        <h3>Selamat bermain!</h3>
        <canvas id="worm" width="500" height="500"></canvas>
        <script>
            window.onload = function () {
                canv = document.getElementById("worm");

                ctx = canv.getContext("2d");
                const box = 32;

                document.addEventListener("keydown", keyPush);

                setInterval(game, 1000 / 15);
            }
            px = py = 10;
            gs = tc = 20;
            ax = ay = 15;
            xv = yv = 0;
            trail = [];
            tail = 5;
            function game() {
                px += xv;
                py += yv;
                if (px < 0) {
                    px = tc - 1;
                }
                if (px > tc - 1) {
                    px = 0;
                }
                if (py < 0) {
                    py = tc - 1;
                }
                if (py > tc - 1) {
                    py = 0;
                }

                ctx.fillStyle = "black";
                ctx.fillRect(0, 0, canv.width, canv.height);
                ctx.fillStyle = "red";
                for (var i = 0; i < trail.length; i++) {
                    ctx.fillRect(trail[i].x * gs, trail[i].y * gs, gs - 2, gs - 2);
                    if (trail[i].x == px && trail[i].y == py) {
                        tail = 5;
                    }
                }

                trail.push({ x: px, y: py });
                while (trail.length > tail) {
                    trail.shift();
                }
                if (ax == px && ay == py) {
                    tail++;
                    ax = Math.floor(Math.random() * tc);
                    ay = Math.floor(Math.random() * tc);
                }

                ctx.fillStyle = "yellow";
                ctx.fillRect(ax * gs, ay * gs, gs - 2, gs - 2);
            }
            function keyPush(evt) {
                switch (evt.keyCode) {
                    case 37:
                        xv = -1; yv = 0;
                        break;
                    case 38:
                        xv = 0; yv = -1;
                        break;
                    case 39:
                        xv = 1; yv = 0;
                        break;
                    case 40:
                        xv = 0; yv = 1;
                        break;
                }
            }
        </script>
    </center>
    <details>
        <summary style="color:white;">info</summary>
        <p style="color:white;">Game cacing merupakan game sederhana yang dimainkan dengan menekan tombol panah pada keyboard untuk mengatur pergerakan cacing.<br>
        Dalam permainan ini, cacing akan bertambah panjang ketika memakan makanannya.</p>
      </details>
</body>

</html>
