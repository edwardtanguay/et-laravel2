<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container py-3">
        <a href="/">Welcome</a> | <a href="/info">Info Page</a> | <a href="/about">About</a>
        <hr>
        <h1>About</h1>
        <p>{{ $message }}</p>
        <p>This current date and time is {{ date('Y-m-d H:i:s') }}</p>

        <h2>Indexes</h2>
        <ul>
            @for ($i = 0; $i < 5; $i++)
                <li>The index is {{ $i }}</li>
            @endfor
        </ul>

        <h2>Colors</h2>
        <ul>
            @foreach ($colors as $color)
                <li>{{ $color }}</li>
            @endforeach
        </ul>

        <h2>Links</h2>
        <ul>
            <li><a href="https://www.digitalocean.com/community/tutorials/simple-laravel-layouts-using-blade">Blade
                    layouts</a></li>
        </ul>

        <h2>VSCode Extensions</h2>
        <ul>
            <li>Laravel Blade formatter</li>
            <li>Laravel Blade Snippets</li>
            <li>laravel-blade (syntax highlighting)</li>
        </ul>
    </div>
</body>

</html>
