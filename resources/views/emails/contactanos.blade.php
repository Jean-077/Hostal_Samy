<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:blue;
        }
    </style>
</head>
<body>
    <h1>Correo Electrónico</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quaerat inventore reprehenderit illum voluptatibus facere? Eaque consequatur ea nemo dignissimos nulla sit a veritatis sapiente, tempore nobis illo quam tenetur.</p>

    <p><strong>Nombre:</strong> {{$contacto['name']}}</p>
    <p><strong>Correo:</strong> {{$contacto['correo']}}</p>
    <p><strong>Mensaje:</strong> {{$contacto['mensaje']}}</p>
</body>
</html>