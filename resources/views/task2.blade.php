<!DOCTYPE HTML>
<head>
    <title>Task 2</title>
    <meta charset="utf-8">
</head>
<body>
    <b>Дела связанные с объектом № {{ $object }}: </b><br>
    @foreach($deals as $deal)
        Дело № {{ $deal->Id }}<br>
    @endforeach
</body>
