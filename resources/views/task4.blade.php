<!DOCTYPE HTML>
<head>
    <title>Task 2</title>
    <meta charset="utf-8">
</head>
<body>
    <b>Объекты связанные с клиентом № {{ $client }}: </b><br>
    @foreach($deals as $deal)
        Объект № {{ $deal->Id }}<br>
    @endforeach
</body>
