<!DOCTYPE HTML>
<head>
    <title>Task 2</title>
    <meta charset="utf-8">
</head>
<body>
    <b>Объекты связанные с объектом № {{ $object }}: </b><br>
    @foreach($deals as $deal)
        Клиент № {{ $deal->ClientID }}<br>
    @endforeach
</body>
