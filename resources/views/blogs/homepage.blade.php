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

    <script src="https://kit.fontawesome.com/330a6c34ff.js" crossorigin="anonymous"></script>
    <title>Блоги</title>
</head>
<body>
    <x-nav-bar>
    </x-nav-bar>

    <main style="margin-top: 48px">
        <h1 style="text-shadow: 1px 4px 4px rgba(0, 0, 0, 0.5);">Newest Blogs From Around The Universe</h1>
        <x-search-bar></x-search-bar>
        <div class="card-container" style="margin-top: 24px">
            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog"></x-blog-card>
            @endforeach

        </div>
    </main>
</body>
</html>