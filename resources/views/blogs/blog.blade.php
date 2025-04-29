<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/welcome.css') }}>
    <link rel="stylesheet" href={{ asset('css/blog-card.css') }}>
    <link rel="stylesheet" href={{ asset('css/search-bar.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Блоги</title>
</head>
<body>
    <x-nav-bar>
    </x-nav-bar>
    
    <main style="margin-top: 48px">
        <h1 style="text-shadow: 1px 4px 4px rgba(0, 0, 0, 0.5);">{{ $blog->title }}</h1>
        <h2 style="color: #d4caca"><i>by {{ $author->name }}</i></h2>
        <div class="blog-container" style="margin-top: 24px">
            {{ $blog->content }}
        </div>
    </main>
</body>
</html>