<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>

    {{-- Boostrap CSS --}}
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

    {{-- My CSS --}}
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Randi Afif</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Projects</a>
                    <a class="nav-link" href="#">Contact Me</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Jumbotron --}}
    <section class="jumbotron">
        <img src="img/me.jpg" width="200" alt="">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p>
    </section>
    {{-- End Jumbotron --}}

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
