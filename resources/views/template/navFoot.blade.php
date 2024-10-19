<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tasty Table</title>
    <link rel="shortcut icon" href="icons/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body data-bs-theme="dark">

    <nav class="navbar navbar-expand-lg">

        <div class="container fw-bold">
            <a href="/" class=""navbar-brand><img id="navbar-logo" src="icons/logo.jpeg" alt="Logo"></a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#NavbarIcon">
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="NavbarIcon">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item"><i class="bi bi-moon-fill nav-link mx-5"></i></li>
                    <li class="nav-item">
                        <div class="form-check form-switch nav-link">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked onclick="darkMoodFunction()">
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/cart"><i class="bi bi-cart-fill"></i></i> Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="/account"><i class="bi bi-person-circle"></i> Account</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="my-5">
        <footer class="text-center text-lg-start text-white bg-dark">
            <section class="d-flex justify-content-between p-4 container">
                <div class="me-5">
                    <span>Get connected with us on social networks</span>
                </div>
                <div>
                    <a href="" class="text-white me-4"><i class="bi bi-facebook"></i></a>
                    <a href="" class="text-white me-4"><i class="bi bi-instagram"></i></a>
                    <a href="" class="text-white me-4"><i class="bi bi-youtube"></i></a>
                    <a href="" class="text-white me-4"><i class="bi bi-twitter-x"></i></a>
                </div>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">The Tasty Table</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px background-color: #7c4dff; height: 2px"/>
                            <p style="text-align: justify;">Welcome to The Tasty Table, where culinary artistry meets exceptional service. Savor our carefully crafted dishes made with the freshest, locally sourced ingredients in an inviting atmosphere that feels like home. Join us for an unforgettable dining experience!</p>
                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px background-color: #7c4dff; height: 2px"/>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Top delicious food</a></p>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Recently added</a></p>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Special offers</a></p>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Other services</a></p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px background-color: #7c4dff; height: 2px"/>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Your Account</a></p>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Explore our menu</a></p>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">About us</a></p>
                            <p><a href="#!" class="text-white" style="text-decoration: none;">Help</a></p>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60pxn background-color: #7c4dff; height: 2px"/>
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info.thetastytable@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright: <a class="text-white" href="/">thetastytable.com</a>
            </div>
        </footer>
    </div>

    <script src="js/bootstrap.js"></script>
    <script>
        function darkMoodFunction() {
            var element = document.body;
            element.dataset.bsTheme = 
                element.dataset.bsTheme == "light" ? "dark" : "light";
        }
    </script>
</body>
</html>