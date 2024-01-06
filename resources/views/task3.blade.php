<!DOCTYPE HTML>
<head>
    <title>Task 3</title>
    <meta charset="utf-8">
</head>
<body>
    @foreach($clients as $client)
        <b>Номер клиента:</b> {{ $client->Id }}<br>
        <b>Имя клиента:</b> {{ $client->Name }}<br>
        <b>Фамилия клиента:</b> {{$client->Surname}}<br>
        <b>Отчество клиента:</b> {{ $client->Patronymic }}<br>
        <b>Номер телефона клиента:</b> {{ $client->Phone }}<br>
        <b>Адресс клиента:</b> {{ $client->Adress }}<br><br><br>
    @endforeach
</body>
