<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
        <div class="user">
            <a href='http://127.0.0.1:8000/user{{ $user->id }}'>
                {{ $user->id }}.{{ $user->name }}
            </a>
        </div>
    @endforeach
</body>
</html>
