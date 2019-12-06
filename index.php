<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Girls Guide to Finance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<!-- Static navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand bg-pad bdbc" href="#">Girl's Guide to Finance</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#budget">Budget</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#loans">Loans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#investing">Invest</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
            </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
    </div>
</nav>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('img/minoritywomen.jpg')">
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/budget.jpg')">
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/loan.jpg')">
            </div>
            <!-- Slide Four - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/investing.jpg')">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</header>
<body>
    <main>
        <section class="about" id="about">
            <div class="py-5">
                <div class="container-fluid">
                    <div class="row align-items-lg-center">
                        <div class="col-12 col-md-6 text-center text-md-left" data-aos="fade-right">
                            <div class="section-heading">
                                <h4>Discover</h4>
                                <h1 class="display-4">Our Story</h1>
                            </div>
                            <p class="lead">Girls Guide to Finance is a website built to improve young women’s financial literacy. Our goal is to provide access to various financial topics and lay the foundation for women’s financial futures.
                            </p>
                            <a class="btn mt-4 mb-5 mb-md-0" href="register.php">Sign Up</a>
                        </div>
                        <div class="col-12 col-md-6" data-aos="fade-left">
                            <img class="img-fluid" src="img/focused.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <section class="budget" id="budget">
            <div class="container">
                <div class="section-heading text-center">
                    <h1>Budget</h1>
                </div>
                <div class="row pt-5 m-auto">
                    <div class="col-md-12 col-lg-12 pb-3">
                        <div class="card-deck">
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/budget1.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/money-bag.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Budget</h4>
                                        <p class="card-text">What Is a Budget?</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.nerdwallet.com/blog/finance/what-is-a-budget/" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/budget2.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/money-bag.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Budget</h4>
                                        <p class="card-text">Successful Budget.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.payoff.com/life/money/5-simple-steps-to-create-a-successful-budget" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/budget3.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" target="_blank" src="icons/money-bag.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Budget</h4>
                                        <p class="card-text">Excel tips.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.youtube.com/watch?v=ZthlSLYc5UQ#action=share" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <section class="loans" id="loans">
            <div class="container">
                <div class="section-heading text-center">
                    <h1>Loans</h1>
                </div>
                <div class="row pt-5 m-auto">
                    <div class="col-md-12 col-lg-12 pb-3">
                        <div class="card-deck">
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/loans1.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/loan.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Loans</h4>
                                        <p class="card-text">Loans 101.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.fastweb.com/financial-aid/articles/loans-101-the-basics-of-borrowing" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/loans2.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/loan.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Loans</h4>
                                        <p class="card-text">Mortgage Loans.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.investopedia.com/articles/basics/11/3-s-simple-investing.asp" target="_blank"class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/loans3.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/loan.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Loans</h4>
                                        <p class="card-text">Auto Loans.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.youtube.com/watch?v=ZthlSLYc5UQ#action=share" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <section class="investing" id="investing">
            <div class="container">
                <div class="section-heading text-center">
                    <h1>Invest</h1>
                </div>
                <div class="row pt-5 m-auto">
                    <div class="col-md-12 col-lg-12 pb-3">
                        <div class="card-deck">
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/investing1.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/invest.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Invest</h4>
                                        <p class="card-text">For Beginners.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.investopedia.com/articles/basics/11/3-s-simple-investing.asp" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/investing2.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/invest.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Invest</h4>
                                        <p class="card-text">Cryptocurrency.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.investopedia.com/terms/c/cryptocurrency.asp" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-3">
                                <div class="card card-custom bg-white border-white border-0">
                                    <div class="card-custom-img" style="background-image: url('img/investing3.jpg')"></div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="icons/invest.svg" alt="Money Bag" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h4 class="card-title">Invest</h4>
                                        <p class="card-text">Stock Investing.</p>
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <a href="https://www.investopedia.com/articles/basics/06/invest1000.asp" target="_blank" class="btn mt-4 mb-5 mb-md-0">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://kit.fontawesome.com/97b30038e7.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/scripts.js" type="text/javascript"></script>
</body>
<hr />
<footer id="sticky-footer" class="py-4">
   <div class="container text-center">
     <p>Copyright &copy; Girls Guide to Finance 2019</p>
   </div>
 </footer>
</html>
