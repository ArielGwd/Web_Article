<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Article</title>
    <link rel="stylesheet" href="{{ asset('web-content/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>
<body>
    <div class="header">
       <div class="container">
            <div class="header-content">
                <h2>Website Article</h2>
                
                <ul class="header-navigation">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">contact</a></li>
                </ul>
            </div>
       </div>
    </div>

    <div class="content">
        <div class="container">
           @yield('content')
        </div>
    </div>
</body>
</html>