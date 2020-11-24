<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cara dott.ssa del piano di sopra</h1>
    <h2>C'è un nuovo contatto per lei</h2>
    <p>I dati del contatto sono</p>

    <ul>
    <li>Nome: {{$contact['name']}}</li>
    <li>Email: {{$contact['email']}}</li>
    <li>Telefono: {{$contact['phone']}}</li>
    <li>Messaggio: {{$contact['description']}}</li>
        
    </ul>
</body>
</html>