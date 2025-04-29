<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/welcome.css') }}>
    <link rel="stylesheet" href={{ asset('css/register.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Блоги</title>
</head>
<body>    
    <main style="margin-top: 48px">
    <div style="margin: auto;">
        <form action="/user/give-role" method="PUT">
            @csrf
            @method('PUT')
            <input type="text" name="role" placeholder="role: author, user or admin"/>
            <input type="text" name="user_id" placeholder="user id"/>
            <button type="submit" class="subtle-button">Give Role To User 5</button>
        </form>
        <form action="/user/" method="DELETE">
            @csrf
            <button type="submit" class="subtle-button">Delete User 5</button>
        </form>
    </div>
    </main>
</body>
</html>