<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../variables.scss">
</head>

<body>
    <nav class="navbar navbar-expand-lg pt-0">
        <div class="container-fluid bg-primary">
            <a class="navbar-brand text-light" href="#">Discovering Bootstrap 5.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu rounded-1">
                            <li><a class="dropdown-item" href="#">Photos</a></li>
                            <li><a class="dropdown-item" href="#">Articles</a></li>
                            <li><a class="dropdown-item" href="#">Projects</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="title text-center">Journey into Bootstrap classes</h1>
    <main>
        <div class="container">
            <div class="row mt-5 g-3">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="Assets/Images/Rowing_girl_lake.webp" class="card-img-top" alt="Femme navigant sur un lac">
                        <div class="card-body shadow p-3">
                            <h5 class="card-title">Visit Components lake</h5>
                            <p class="card-text d-none d-md-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="Assets/Images/Cascade_rock.jpg" class="card-img-top" alt="Cascade">
                            <div class="card-body shadow p-3">
                            <h5 class="card-title">Facing Cascade Style Sheet</h5>
                            <p class="card-text d-none d-md-block">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="Assets/Images/Méandre.jpg" class="card-img-top" alt="Méandre d'un fleuve">
                            <div class="card-body shadow p-3">
                            <h5 class="card-title">Contemplate From Inputs river</h5>
                            <p class="card-text d-none d-md-block">Make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="Assets/Images/Shoes_countryside.jpg" class="card-img-top" alt="Sneakers sur fond de nature">
                            <div class="card-body shadow p-3">
                            <h5 class="card-title">Enjoy Responsive Layout island</h5>
                            <p class="card-text d-none d-md-block">Build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
<footer class="footer text-center sticky-bottom mt-5">
    <section class="d-flex justify-content-center justify-content-lg p-5 border-bottom bg-light">
        <!-- Left -->
        <div class="section justify-content-center">
            <h5 class="card-title fs-4">The CSS Frameworks are very useful</h5>
            <p class="card-text fs-6">Learning them comes with practice</p>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <!-- Copyright -->
    <div class="text-center text-light p-1 bg-primary">
        © 2022 Wilders | images
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">@picsum</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</html>