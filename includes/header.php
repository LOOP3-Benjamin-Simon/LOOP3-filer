<!DOCTYPE html>
<html lang="en">
<!-- This example is based on the Bootstrap Starter Template available at https://getbootstrap.com/docs/5.1/examples/starter-template/ . 
It has been modified -->

<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LOOP3">
    <meta name="description" content="PHP include() og brugen af Bootstrap 5 framework">
    <title>PHP include() med Bootstrap 5 for header</title>
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- Under linkes til udvalgt Google font -->
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="styles/header.styles.css" type="text/css">

    <!-- Her bruges det Boostrap bundle som er fra linket i toppen, dette gør at man kan bruge dropdown menuen-->
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <a class="navbar-brand" href="#">Web
            Technologies</a>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Examples</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lesson 7</a></li>
                            <li><a class="dropdown-item" href="#">Lesson 8</a></li>
                            <li><a class="dropdown-item" href="#">Lesson 9</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    