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
/* Navigation Bar Styling */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #0b0c10;
    padding: 12px 40px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.nav-left {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid white;
}

.brand-text {
    color: #ffffff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 1px;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
}

.nav-links a {
    color: #ffffff;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #00d4ff;
}







.site-footer {
    background-color: #0b0c10;
    color: #ffffff;
    text-align: center;
    padding: 20px 0;
    position: relative;
    bottom: 0;
    width: 100%;
    z-index: 2;
    font-size: 14px;
    letter-spacing: 1px;
}

.footer-content {
    max-width: 1000px;
    margin: 0 auto;
}

</style>





<body>
    <nav class="navbar">
    <div class="nav-left">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        </a>
        <span class="brand-text">RK.Dessertation $$$</span>
    </div>
    <ul class="nav-links">
        <li><a  href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/blog') }}">News</a></li>
        <li><a href="#">Analysis</a></li>
        <li><a href="{{ url('/admin/login') }}">Admin</a></li>
    </ul>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>
@yield('nav')
<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; {{ date('Y') }} Sharemarket Prediction and Analysis. All rights reserved.</p>
    </div>
</footer>
