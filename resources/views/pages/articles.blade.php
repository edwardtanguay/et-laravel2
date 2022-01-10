<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container py-3">
		@include('includes.navbar')
        <h1>Articles</h1>
        <ul>
            <li>Go to <a href="article/123">Article #123</a></li>
            <li>Go to <a href="article/234">Article #234 in English</a></li>
            <li>Go to <a href="article/234/german">Article #234 in German</a></li>
            <li>Go to <a href="toparticle">Top article</a> (redirect)</li>
        </ul>
    </div>
</body>

</html>
