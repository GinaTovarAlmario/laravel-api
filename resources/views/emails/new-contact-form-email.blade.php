<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail prova</title>
</head>
<body>
    <h1>
        ALOHA!
    </h1>
    <p>Hai ricevuto un nuovo messaggio!📩📩📩📩</p>
    <p>name:
        {{$lead->name}}
    </p>
    <p>email:
        {{$lead->email}}
    </p>
    <p>message:
        {{$lead->message}}
    </p>
</body>
</html>
