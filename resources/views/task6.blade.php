<!DOCTYPE HTML>
<head>
    <title>Task 2</title>
    <meta charset="utf-8">
</head>
<body>
    @foreach($deals as $deal)
        <b>Объекты и клиенты связанные с сделкой № {{ $deal->Id }}: </b><br>
        Клинет №: {{ $deal->ClientID }}<br>
        Объект №: {{ $deal->ObjectID }}<br><br><br>
    @endforeach
</body>
