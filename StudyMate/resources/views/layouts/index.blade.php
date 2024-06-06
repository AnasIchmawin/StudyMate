<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Mate</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Study</span>Mate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#carouselExampCaptions">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">SE CONNECTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/Study_tips.png') }}" class="d-block w-100" alt="Logo">

                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <p><a href="#" class="btn btn-warning mt-3">learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/image.png') }}" class="d-block w-100" alt="Logo">

                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <p><a href="#" class="btn btn-warning mt-3">learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/image2.png') }}" class="d-block w-100" alt="Logo">

                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <p><a href="#" class="btn btn-warning mt-3">learn more</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <br><br><br>
    <section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 pd">
                    <div class="about-img">
                        <img src="{{ asset('img/Study_tips.png') }}" class="img-fluid" alt="Logo">

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>we provide the best qualite <br>services ever </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ab illo natus magnam.
                            Repudiandae hic voluptates, fugiat consequuntur corporis nobis laborum facere, labore iste
                            sunt, magni qui reprehenderit possimus Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Harum beatae facilis ut officiis unde ratione labore illum distinctio ipsam dolorum!
                        </p>
                        <a href="#" class="btn btn-warning">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit. Aspernatur, corporis?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-subtract"></i>
                            <h3 class="card-tiltle">Best Quality</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-subtract"></i>
                            <h3 class="card-tiltle">Best Quality</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-subtract"></i>
                            <h3 class="card-tiltle">Best Quality</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 pd">
                    <div class="about-img">
                        <img src="{{ asset('img/Study_tips.png') }}" class="img-fluid" alt="Logo">

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>we provide the best qualite <br>services ever </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ab illo natus magnam.
                            Repudiandae hic voluptates, fugiat consequuntur corporis nobis laborum facere, labore iste
                            sunt, magni qui reprehenderit possimus Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Harum beatae facilis ut officiis unde ratione labore illum distinctio ipsam dolorum!
                        </p>
                        <a href="#" class="btn btn-warning">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit. Aspernatur, corporis?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Affichage des trois éléments en haut -->
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="{{ asset('hna/ali.jpeg') }}" class="img-fluid rounded-circle w-50" alt="Logo">

                            <h3 class="card-title">Ali Harit</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="{{ asset('hna/mourad.jpeg') }}" class="img-fluid rounded-circle w-50" alt="Logo">

                            <h3 class="card-title">Mourad Imani</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="hna/anas.jpg" alt="team" class="img-fluid rounded-circle w-50">
                            <h3 class="card-title">Anas Ichmawin</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <!-- Affichage des deux éléments en bas avec la même largeur que les éléments en haut -->
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="{{ asset('hna/med-amine.jpg') }}" class="img-fluid rounded-circle w-50" alt="Logo">

                            <h3 class="card-title">Amine Fatih</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="{{ asset('hna/souhail.png') }}" class="img-fluid rounded-circle w-50" alt="Logo">
                            <h3 class="card-title">Souhail Mossalim</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eligendi
                                dignissimos enim libero nemo error eveniet laudantium animi. Dolore eius recusandae ut,
                                magnam dignissimos temporibus!</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit. Aspernatur, corporis?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="forum">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-warning">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">SERVICES</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">TEAM</a></li>
                    <li><a href="">CONTACT US</a></li>
                </ul>
            </div>

        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Designed by <span class="designer">StudyMate Team</span></p>
        </div>
    </footer>
    <br><br><br>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>