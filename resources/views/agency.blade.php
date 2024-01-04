<!DOCTYPE HTML>
<head>
    <title>Task 1</title>
    <meta charset="utf-8">
</head>
<body>
    @foreach($objects as $object)
    <b>Номер объекта:</b> {{ $object->Id }}<br>
    <b>Ссылка на картинку: </b> {{ $object->Picture }}<br>
    <b>Имя объекта: </b> {{ $object->Name }}<br>
    <b>Описание объекта: </b> {{ $object->Description }}<br>
    <b>Цена объекта: </b> {{ $object->Price }}<br>
    <b>Телефон: </b> {{ $object->Phone }}<br>
    <b>Адресс объекта:</b> {{ $object->Adress }}<br>
    <b>Жилое пространство:</b> {{ $object->LivingSpace }}<br>
    <b>Общее пространство:</b> {{ $object->TotalArea }}<br>
    <b>Кол-во этажей:</b> {{ $object->CountFloors }}<br>
    <b>Этаж(Если есть):</b> {{ $object->Floor }}<br><br><br>
    @endforeach
</body>
