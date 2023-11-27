
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reposición de Stock</title>
    <style>
        body {
            font-family: 'Lexend Mega', sans-serif; /* Tipografía Lexend Mega Bold */
            font-weight: bold;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Apilar elementos en columna */
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background-color: #A388EE; /* Color de fondo morado */
        }

        .title {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .subtitle{
            font-size: 30px;
            margin-bottom: 20px;
        }
        .product-info{
            width:30%;
            height:40%;
            background-color:white;
            padding: 2rem;
            border: 5px solid black;
            border-radius: 20px;
        }
        .imagen {
            width:auto;
            max-height: 80%;
            margin-bottom: 10px;
        }

        .content {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1 class="title">¡Hola {{ $usuario->nombre }}!</h1>
    <h2 class="subtitle">Se repuso el stock de uno de tus productos favoritos. Ahora está disponible en la tienda para que lo compres.</h2>
    <div class="product-info">
        <img class="imagen" src="{{  asset('storage' . $producto->url_imagen) }}" alt="{{ $producto->descripcion }}">
        <p> {{$producto->nombre}}</p>
    </div>
</body>
</html>