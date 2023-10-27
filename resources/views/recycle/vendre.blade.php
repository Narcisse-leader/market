<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>RecycleShop</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ route('recycle.vendre') }}">RecycleShop<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('recycle.user') }}">Accueil</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('recycle.shop') }}">Boutique</a></li>
                    {{-- <li><a class="nav-link" href="{{ route('recycle.about') }}">A propos</a></li> --}}
                    {{-- <li><a class="nav-link" href="{{ route('recycle.services') }}">Services</a></li> --}}
                    <!-- <li><a class="nav-link" href="blog.html>Blog</a></li> -->
						<li><a class="nav-link" href="{{ route('recycle.contact') }}">Contact</a></li>
     </ul>

     <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
      <li><a class="nav-link" href=""><img src="images/user.svg"></a></li>
      <li><a class="nav-link" href="{{ route('recycle.cart') }}"><img src="images/cart.svg"></a></li>
     </ul>
    </div>
   </div>

  </nav>
  <!-- End Header/Navigation -->

                    <!-- Start Hero Section -->
                    <div class="hero">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-5 mx-auto text-center">
                                    <div class="intro-excerpt">
                                        <h1>Vendez vos produits chez nous</h1>
                                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac
                                            aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                                        {{-- <p><a href="" class="btn btn-secondary me-2">Login</a><a href="#"
                                                class="btn btn-white-outline">Register</a></p> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-lg-7">
                                    <div class="hero-img-wrap">
                                        <img src="images/couch.png" class="img-fluid">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Section -->


                    <!-- Start Contact Form -->
                    <!-- Start Contact Form -->
                    <div class="untree_co-section">
                        <div class="container">

                            <div class="block">
                                <div class="row justify-content-center">

                                    <form>
                                        <div class="row mb-4">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="text-black" for="fname">Nom du produit</label>
                                                    <input type="text" class="form-control" id="fname" name = "name_produit">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="text-black" for="lname">Prix</label>
                                                    <input type="text" class="form-control" id="lname" name = "prix" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="text-black" for="product-image">Image du Produit :</label>
                                            <input type="file" id="product-image" name="product-image"
                                                class="form-control" accept="image/required">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="text-black" for="message">Description</label>
                                            <textarea name="description" class="form-control" id="message" cols="30" rows="5"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary-hover-outline">Vendre le
                                                produit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Contact Form -->


                    <!-- End Contact Form -->



                    <!-- Start Footer Section -->
                    <footer class="footer-section">
                        <div class="container relative">

                            {{-- <div class="sofa-img">
                                <img src="images/sofa.png" alt="Image" class="img-fluid">
                            </div> --}}

                            <div class="row g-5 mb-5">
                                <div class="col-lg-4">
                                    <div class="mb-4 footer-logo-wrap"><a href="#"
                                            class="footer-logo">RecycleShop<span>.</span></a></div>
                                    <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
                                        quis nisl
                                        dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet
                                        dolor
                                        tempor tristique. Pellentesque habitant</p>

                                    <ul class="list-unstyled custom-social">
                                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-8">
                                    <div class="row links-wrap">
                                        <div class="col-6 col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Contact us</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Support</a></li>
                                                <li><a href="#">Knowledge base</a></li>
                                                <li><a href="#">Live chat</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Jobs</a></li>
                                                <li><a href="#">Our team</a></li>
                                                <li><a href="#">Leadership</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Nordic Chair</a></li>
                                                <li><a href="#">Kruzo Aero</a></li>
                                                <li><a href="#">Ergonomic Chair</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="border-top copyright">
                                <div class="row pt-4">
                                    <div class="col-lg-6">
                                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script>. © 2023 Tous droits reservés par.
                                            &mdash;Recycleshop
                                            &mdash;
                                        </p>
                                    </div>

                                    <div class="col-lg-6 text-center text-lg-end">
                                        <ul class="list-unstyled d-inline-flex ms-auto">
                                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </footer>
                    <!-- End Footer Section -->


                    <script src="js/bootstrap.bundle.min.js"></script>
                    <script src="js/tiny-slider.js"></script>
                    <script src="js/custom.js"></script>
</body>

</html>
