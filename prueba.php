<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo Épico</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            overflow:hidden;
            background: linear-gradient(-45deg, #0f0c29, #302b63, #24243e);
            background-size: 400% 400%;
            animation: fondo 10s ease infinite;
        }

        .card{
            text-align:center;
            color:white;
            padding:50px;
            border-radius:25px;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            box-shadow:0 10px 40px rgba(0,0,0,0.5);
        }

        h1{
            font-size:70px;
            text-shadow:0 0 20px rgba(255,255,255,0.8);
            opacity:0;
            transform:scale(0.3) rotate(-10deg);
            animation: entradaTitulo 2s ease forwards;
        }

        p{
            margin-top:15px;
            font-size:22px;
            opacity:0;
            animation: entradaTexto 2s ease forwards;
            animation-delay:1s;
        }

        @keyframes entradaTitulo{
            0%{
                opacity:0;
                transform:scale(0.3) rotate(-20deg);
                filter: blur(10px);
            }

            60%{
                transform:scale(1.2) rotate(5deg);
            }

            100%{
                opacity:1;
                transform:scale(1) rotate(0);
                filter: blur(0);
            }
        }

        @keyframes entradaTexto{
            from{
                opacity:0;
                transform:translateY(40px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        @keyframes fondo{
            0%{
                background-position:0% 50%;
            }

            50%{
                background-position:100% 50%;
            }

            100%{
                background-position:0% 50%;
            }
        }
    </style>
</head>
<body>

    <!-- Música -->
    <audio autoplay loop>
        <source src="musica.mp3" type="audio/mp3">
    </audio>

    <div class="card">

        <h1>
            <?php echo "el de abajo es gay"; ?>
        </h1>

        <p>Edward</p>

    </div>

</body>
</html>