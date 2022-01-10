<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container py-3">
        <a href="/">Welcome</a> | <a href="/info">Info Page</a> | <a href="/about">About</a>
        <hr>
        <h1>Info</h1>
        <p>This is the info page.</p>
        <p>Go back to the <a href="/">Welcome Page</a>.</p>
        <ul>
            <li>Go to <a href="articles/123">Article #123</a></li>
            <li>Go to <a href="articles/234">Article #234 in English</a></li>
            <li>Go to <a href="articles/234/german">Article #234 in German</a></li>
            <li>Go to <a href="toparticle">Top article</a> (redirect)</li>
        </ul>
    </div>
</body>

</html>
