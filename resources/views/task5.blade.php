<!DOCTYPE HTML>
<head>
    <title>Task 2</title>
    <meta charset="utf-8">
</head>
<body>
    @foreach($deals as $deal)
        <b>Номер дела:</b> {{ $deal->Id }}<br>
        <b>Номер объекта:</b> {{ $deal->ObjectID }}<br>
        <b>Номер пользователя:</b> {{ $deal->ClientID }}<br>
        <b>Номер статуса:</b> {{ $deal->StatusID }}<br><br><br>
    @endforeach
</body>
