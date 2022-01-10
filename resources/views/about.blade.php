<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <a href="/">Welcome</a> | <a href="/info">Info Page</a> | <a href="/about">About</a>
    <hr>
    <h1>About</h1>
    <p>{{ $message }}</p>
    <p>This current date and time is {{ date('Y-m-d H:i:s') }}</p>

    <button>Test</button>
    <h2>Indexes</h2>
    @for ($i = 0; $i < 5; $i++)
        <div>The index is {{ $i }}</div>
    @endfor

    <h2>Colors</h2>
    @foreach ($colors as $color)
        <div>{{ $color }}</div>
    @endforeach

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

</body>

</html>
