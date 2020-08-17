<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Untiled Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Links -->
        <ul class="navbar-nav">

            @foreach ($pages as $page)

                <li class="nav-item">
                    <a class="nav-link" href="/page/{{ $page->id }}">{{ $page->name }}</a>
                </li>
            @endforeach

            <li class="nav-item">
                <a class="nav-link" href="/contact-us">Contact US</a>
            </li>

    </nav>

    <div>
        {{ $pageDetail->description }}
        
    </div>

</body>

</html>
