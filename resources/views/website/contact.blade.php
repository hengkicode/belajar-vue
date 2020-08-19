<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/website.css">

   
</head>

<body>
    <div id="app">
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

        <contact-us-form></contact-us-form>
        <!-- <div class="container">
            <div class="row">
            </div>
            <form method="post" action="/contact-us/sendmessage" class="was-validated">


                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (isset($succesMessage))
                <div class="alert alert-success">
                    <p>{{ $succesMessage }}</p>
                </div>
                @endif


                @csrf

                <div class="form-group">
                    <label for="pwd">Name:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name">
                </div>

                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control" id="uname" placeholder="Enter Your Email" name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Message:</label>
                    <textarea class="form-control" name="message" placeholder="Enter your message"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> -->

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/website.js"></script>

</body>

</html>