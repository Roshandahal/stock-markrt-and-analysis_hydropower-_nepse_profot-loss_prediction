<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

</head>
<!-- for making style of the navication  -->
<style>
.navication{
    background-color: black;
    color: white;
}
.nav-link{
    color: white;
    font-weight: bold;
    font-style: italic;
}
.nav-link:hover{
    color: yellow;
    font-weight: bold;
    font-style: italic;
}
/* for admin login  */
.adminlink{
    color: white;
    font-weight: bold;
    font-style: italic;
}
.adminlink:hover{
    color: red;
    font-weight: bold;
    font-style: italic;
}
</style>





<body>
    <nav class="navbar navbar-expand-lg navication">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: yellow; font-weight:bold;">Blog|website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About us</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link adminlink" href="{{ url('/admin/login') }}">Admin</a>
                    </li>
                    
                    
                </ul>
                
            </div>
        </div>
    </nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>

</html>
@yield('nav')