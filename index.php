<?php

session_start();
require_once("connect_db.php");
require("includes/function/function.php");
$science_book = get_all_data('science_book');
$history_book = get_all_data('history_book');
$physics_book = get_all_data('physics_book');
$sports_book = get_all_data('sports_book');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online library</title>
    <link rel="icon" href="imgs/images.jpeg" type="image/gif">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div class="text-ieee">
            <h2>
                <span>I</span>
                <span>E</span>
                <span>E</span>
                <span>E</span>
            </h2>
        </div>
    </div>
    <!-- End loading -->

    <button class="btn  rounded-circle" id="btnUp" style="display: inline-block;">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </button>
    <!-- navbar -->
    <nav id="main-nav" class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand " href="#">online library <span class="text-danger">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item position-relative">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ms-lg-4 position-relative ">
                        <a class="nav-link  text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item ms-lg-4 position-relative">
                        <a class="nav-link  text-white" href="#offer">Services</a>
                    </li>
                    <li class="nav-item ms-lg-4 position-relative">
                        <a class="nav-link  text-white" href="#Portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item ms-lg-4 position-relative">
                        <a class="nav-link  text-white" href="#Team">Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End navbar -->

    <div class="containerr">
        <div class="bubbles">
            <span style="--i:11;"></span>
            <span style="--i:12; "></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14; "></span>
            <span style="--i:18;"></span>
            <span style="--i: 16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:13;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:13;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12; "></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14; "></span>
            <span style="--i:18;"></span>
            <span style="--i: 16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
        </div>
        <!-- home -->
        <header class="vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row gy-5 align-items-center justify-content-center">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="home-img">
                            <img src="./imgs/about-img.png" class="w-100 animated" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="home-con">
                            <div class="water position-relative">
                                <h1 class="position-absolute">website library</h1>
                                <h1>website library</h1>
                            </div>
                            <p class="mb-5">The library is designed for your brain, so be sure to visit it often</p>
                            <a href="./login.html">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- End home -->


    <!-- about -->
    <section id="about" class="about py-5 text-center">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12 wow fadeInLeftBig" style="visibility: visible; animation-name: fadeInLeftBig;">
                    <div class="about-con text-center">
                        <h2>Featured Collections</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random.</p>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6 ">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <h4 class="mb-3">Books about science</h4>
                                    <?php $active = true ?>
                                    <?php foreach($science_book as $book){ ?>
                                    <div class="carousel-item <?php echo ($active == true)?"active":"" ?>">
                                        <div class="about-book">
                                            <img src="<?= $book['image'];?>" class="w-100 d-block" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2" alt="">
                                            <div class="book-title">
                                                <span>$<?= $book['price'];?></span>
                                                <div class="star-icon mt-2">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <?php $active = false; }?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div id="carouselExample2" class="carousel slide">
                                <div class="carousel-inner">
                                    <h4 class="mb-3">Books about physics</h4>
                                    <?php $active = true ?>
                                    <?php foreach($physics_book as $book){ ?>
                                    <div class="carousel-item <?php echo ($active == true)?"active":"" ?>">
                                        <div class="about-book">
                                            <img src="<?php echo $book['image'];?>" class="w-100" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2" alt="">
                                            <div class="book-title">
                                                <span>$<?php echo $book['price'];?></span>
                                                <div class="star-icon mt-2">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php $active = false; } ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div id="carouselExample3" class="carousel slide">
                                <div class="carousel-inner">
                                    <h4 class="mb-3">Books about history</h4>
                                    <?php $active = true ?>
                                    <?php foreach($history_book as $book){ ?>
                                    <div class="carousel-item <?php echo ($active == true)?"active":"" ?>">
                                        <div class="about-book">
                                            <img src="<?php echo $book['image'];?>" class="w-100" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2" alt="">
                                            <div class="book-title">
                                                <span>$<?php echo $book['price'];?></span>
                                                <div class="star-icon mt-2">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php $active = false; }?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div id="carouselExample4" class="carousel slide">
                                <div class="carousel-inner">
                                    <h4 class="mb-3">Books about sports</h4>
                                    <?php $active = true ?>
                                    <?php foreach($sports_book as $book){ ?>
                                    <div class="carousel-item <?php echo ($active == true)?"active":"" ?>">
                                        <div class="about-book">
                                            <img src="<?php echo $book['image'];?>" class="w-100" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2" alt="">
                                            <div class="book-title">
                                                <span>$<?php echo $book['price'];?></span>
                                                <div class="star-icon mt-2">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php $active = false; }?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about -->

    
    <!-- Modal2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">About Book</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                   <p>Knowledge is the light that enters the midst of the darkness of minds to make them see what is around them as they are. When a person was ignorant and did not search for knowledge, he lived in darkness that affected him with disease and suffering, even in the simplest matters of life.</p>
                </div>
                <div class="modal-footer m-auto">
                    <button type="button" class="btn btn-primary"><a href="form.html" class="form-user">Buy Now</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
   
    <section id="offer" class="Offer py-5">
        <div class="container my-5">
            <div class="col-lg-8 m-auto wow fadeInLeftBig" style="visibility: visible; animation-name: fadeInLeftBig;">
                <div class="offer-info text-center">
                    <div class="hhh-hhh">
                        <div class="clap">
                            <div class="hover-effect"></div>
                            <div class="confetti-effect">
                                <div class="confetti-wrap">
                                    <div class="group group-1">
                                        <span class="circle"></span>
                                        <span class="triangle"></span>
                                    </div>
                                    <div class="group group-2">
                                        <span class="circle"></span>
                                        <span class="triangle"></span>
                                    </div>
                                    <div class="group group-3">
                                        <span class="circle"></span>
                                        <span class="triangle"></span>
                                    </div>
                                    <div class="group group-4">
                                        <span class="circle"></span>
                                        <span class="triangle"></span>
                                    </div>
                                    <div class="group group-5">
                                        <span class="circle"></span>
                                        <span class="triangle"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="clap-icon"><img src="./imgs/output-onlinegiftools.gif">

                            </div>
                        </div>
                    </div>
                    <h3 class="mb-3">Special Offers</h3>
                    <h2 class="mb-3">All books are 50% off now! Don't miss such a deal!</h2>
                    <p>You will learn how to animate shapes like circles, lines, and polygons. You'll also learn how to
                        animate CSS properties like color and size.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="Portfolio" class="py-1 dd text-white">
        <div class="container-fluid mt-5">
            <div class="main p-0 m-auto">
                <ul id="bk-list" class="bk-list clearfix ">
                    <li>
                        <div class="bk-book book-1 bk-bookdefault">
                            <div class="bk-front">
                                <div class="bk-cover-back"></div>
                                <div class="bk-cover">
                                    <h2>
                                        <span>Anthony Burghiss</span>
                                        <span>A Catwork Orange</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="bk-page">
                                <div class="bk-content bk-content-current">
                                    <img src="imgs/images.jpeg" alt="library">
                                    <p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; sw
                                        flounder cuchia round whitefish northern
                                    </p>
                                </div>
                                <div class="bk-content">
                                    <p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano
                                        dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough
                                        saury Blind shark California halibut; false trevally warty angler!</p>
                                </div>
                                <div class="bk-content">
                                    <p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock
                                        bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon.
                                        Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad
                                        hagfish
                                        zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand
                                        diver mullet swordfish limia ghost carp filefish.</p>
                                </div>
                                <!-- <nav>
                                    <span class="bk-page-prev">&lt;</span>
                                    <span class="bk-page-next">&gt;</span>
                                </nav> -->
                            </div>
                            <div class="bk-back">
                                <p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set
                                    out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for
                                    his teenage delinquency and the State tries to reform him - but at what cost?</p>
                            </div>
                            <div class="bk-right"></div>
                            <div class="bk-left">
                                <h2>
                                    <span>Anthony Burghiss</span>
                                    <span>A Catwork Orange</span>
                                </h2>
                            </div>
                            <div class="bk-top"></div>
                            <div class="bk-bottom"></div>
                        </div>
                        <div class="bk-info">
                            <button class="bk-bookback">Flip</button>
                            <button class="bk-bookview">View inside</button>
                            <h3>
                                <span>Anthony Burghiss</span>
                                <span>A Catwork Orange</span>
                            </h3>
                            <p>Social prophecy? Black comedy? Study of freewill? A Clockwork Orange is all of these. It
                                is also a dazzling experiment in language, as Burghiss creates a new language - 'meow',
                                the cat slang of a not-too-distant future.</p>
                        </div>
                    </li>
                    <li>
                        <div class="bk-book book-2 bk-bookdefault">
                            <div class="bk-front">
                                <div class="bk-cover-back"></div>
                                <div class="bk-cover">
                                    <h2>
                                        <span>The Ca</span>
                                        <span>Mario Purrz</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="bk-page">
                                <div class="bk-content">
                                    <img src="imgs/pngtree-book3.jpg" class="w-100" alt="img liprary">
                                    <p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano
                                        dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough warty
                                        angler!</p>
                                </div>
                                <div class="bk-content">
                                    <p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock
                                        bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon.
                                        Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad
                                        hagfish
                                        zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand
                                        diver mullet swordfish limia ghost carp filefish.</p>
                                </div>
                                <div class="bk-content bk-content-current">
                                    <p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish;
                                        swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker
                                        trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish
                                        dragon goby starry
                                        flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat
                                        shark Black pickerel. Pacific cod.</p>
                                </div>
                                <!-- <nav><span class="bk-page-prev">&lt;</span>
                                    <span class="bk-page-next">&gt;</span>
                                </nav> -->
                            </div>
                            <div class="bk-back">
                                <p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of
                                    American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat.
                                    The deadliest lord of the Cata Nostra. The Catfather.</p>
                            </div>
                            <div class="bk-right"></div>
                            <div class="bk-left">
                                <h2>
                                    <span>The Catfather</span>
                                    <span>by Mario Purrzo</span>
                                </h2>
                            </div>
                            <div class="bk-top"></div>
                            <div class="bk-bottom"></div>
                        </div>
                        <div class="bk-info">
                            <button class="bk-bookback">Flip</button>
                            <button class="bk-bookview">View inside</button>
                            <h3>
                                <span>Mario Purrzo</span>
                                <span>The Catfather</span>
                            </h3>
                            <p>A modern masterpiece,The Godfather is a searing portrayal of the 1940s criminal
                                underworld. It is also the intimate story of the Corleone family, at once drawn together
                                and ripped apart by its unique position at the core of the American Mafia. </p>
                        </div>
                    </li>
                    <li>
                        <div class="bk-book book-3 bk-bookdefault">
                            <div class="bk-front">
                                <div class="bk-cover-back"></div>
                                <div class="bk-cover">
                                    <h2>
                                        <span>J.C. Salinger</span>
                                        <span>The Catcher in the Rye</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="bk-page">
                                <div class="bk-content bk-content-current">
                                    <img src="imgs/booksrender01.jpg" class="w-100" alt="img liprary">
                                    <p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic
                                        cod threadsail poacher slender mola
                                        Betta blue catfish bottlenose electric ray sablefish.</p>
                                </div>
                                <div class="bk-content">
                                    <p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano
                                        dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger
                                        shovelnose catfish snubnose parasitic eel? Black bass soldierfish
                                        duckbill--Rattail Atlantic
                                        saury Blind shark California halibut; false trevally warty angler!</p>
                                </div>
                                <div class="bk-content">
                                    <p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock
                                        bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon.
                                        Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad
                                        hagfish
                                        zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand
                                        diver mullet swordfish limia ghost carp filefish.</p>
                                </div>
                                <!-- <nav><span class="bk-page-prev">&lt;</span>
                                    <span class="bk-page-next">&gt;</span>
                                </nav> -->
                            </div>
                            <div class="bk-back">
                                <img src="https://tympanus.net/Development/3DBookShowcase/images/3.png" alt="cat">
                                <p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his
                                    fourth school. Navigating his way through the challenges of growing up, Holden
                                    dissects the 'phony' aspects of society.</p>
                            </div>
                            <div class="bk-right"></div>
                            <div class="bk-left">
                                <h2>
                                    <span>J.C. Salinger</span>
                                    <span>The Catcher in the Rye</span>
                                </h2>
                            </div>
                            <div class="bk-top"></div>
                            <div class="bk-bottom"></div>
                        </div>
                        <div class="bk-info">
                            <button class="bk-bookback">Flip</button>
                            <button class="bk-bookview">View inside</button>
                            <h3>
                                <span>J.C. Salinger</span>
                                <span>The Catcher in the Rye</span>
                            </h3>
                            <p>Originally published for adults, this novel has since become popular with adolescent
                                readers for its themes of cat confusion, angst, alienation, and rebellion.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team section-bg py-5" id="Team">
        <div class="container">
            <div class="section-title text-center pb-4">
                <h2 class="mb-4">Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="member d-flex bg-white align-items-center border rounded shadow-sm p-4">
                        <div class="pic w-25">
                            <img src="./imgs/WhatsApp Image 2023-08-09 at 12.52.20 AM.jpeg" class="w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="member-info ps-4">
                            <h4 class="mb-1">Mustafa Ahmed</h4>
                            <span class="pb-2 d-block">web development</span>
                            <p class="pt-2">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social d-flex align-items-center justify-content-start">
                                <a href="https://www.facebook.com/sasa.cb11/" target="_blank"
                                    class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://github.com/Mustafa7h" target="_blank"
                                    class=" m-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-github"></i></a>
                                <a href="https://www.instagram.com/sasa.cb1/" target="_blank"
                                    class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/mustafa-ahmed-31079924a/" target="_blank"
                                    class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-invision"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="member d-flex bg-white align-items-center border rounded shadow-sm p-4">
                        <div class="pic w-25">
                            <img src="./imgs/WhatsApp Image 2023-08-09 at 12.48.25 AM.jpeg" class="w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="member-info ps-4">
                            <h4 class="mb-1">Ahmed Ebrahem</h4>
                            <span class="pb-2 d-block">web development</span>
                            <p class="pt-2">Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social d-flex align-items-center justify-content-start">
                                <a href="https://www.facebook.com/ahmed.hema.37266136?mibextid=ZbWKwL" target="_blank"
                                    class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://github.com/ahmedebrahem0" target="_blank"
                                    class=" m-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-github"></i></a>
                                <a href="https://www.instagram.com/ahmed_ebrahem9/" target="_blank"
                                    class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-instagram"></i></a>
                                <a href="https://linkedin.com/in/ahmed-ebrahem-421604235" target="_blank"
                                    class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-invision"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="member d-flex bg-white align-items-center border rounded shadow-sm p-4">
                        <div class="pic w-25">
                            <img src="./imgs/WhatsApp Image 2023-08-10 at 2.47.17 AM.jpeg" class="w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="member-info ps-4">
                            <h4 class="mb-1">Rahma Ahmed Essa</h4>
                            <span class="pb-2 d-block">web development</span>
                            <p class="pt-2">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social d-flex align-items-center justify-content-start">
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class=" m-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-github"></i></a>
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-invision"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="member d-flex bg-white align-items-center border rounded shadow-sm p-4">
                        <div class="pic w-25">
                            <img src="./imgs/WhatsApp Image 2023-08-10 at 2.47.22 AM.jpeg" class="w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="member-info ps-4">
                            <h4 class="mb-1">Aya Yousry</h4>
                            <span class="pb-2 d-block">web development</span>
                            <p class="pt-2">Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social d-flex align-items-center justify-content-start">
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class=" m-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-github"></i></a>
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-invision"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto me-auto">
                    <div class="member d-flex bg-white align-items-center border rounded shadow-sm p-4">
                        <div class="pic w-25">
                            <img src="./imgs/WhatsApp Image 2023-08-10 at 2.47.23 AM.jpeg" class="w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="member-info ps-4">
                            <h4 class="mb-1">Manar Wageh</h4>
                            <span class="pb-2 d-block">web development</span>
                            <p class="pt-2">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social d-flex align-items-center justify-content-start">
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class=" m-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-github"></i></a>
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="mx-1 d-flex align-items-center justify-content-center">
                                    <i class="fa-brands fa-invision"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-between gy-4">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="footer-logo mb-4">
                        <div class="booooook ">
                            <div class="book">
                                <div class="page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="single-footer-caption mb-5">
                        <div class="footer-tittle">
                            <h4 class="mb-4">Quick Links</h4>
                            <ul class="p-0">
                                <li><a href="#about">About</a></li>
                                <li><a href="#offer">Servies</a></li>
                                <li><a href="#Portfolio">Portfolio</a></li>
                                <li><a href="#Team">Team</a></li>
                                <li><a href="form.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 support">
                    <div class="single-footer-caption">
                        <div class="footer-tittle">
                            <h4 class="mb-4">Support</h4>
                            <ul class="p-0">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#"> Sitemap</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Report a bugb</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="mb-4">Core Features</h4>
                            <ul class="p-0">
                                <li><a href="#">Email Marketing</a></li>
                                <li><a href="#"> Offline SEO</a></li>
                                <li><a href="#">Social Media Marketing</a></li>
                                <li><a href="#">Lead Generation</a></li>
                                <li><a href="#"> 24/7 Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="fo-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-social d-flex align-items-center justify-content-center">
                            <a href="#" class="d-flex align-items-center justify-content-center me-1"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center me-1"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center me-1"><i
                                    class="fas fa-globe"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center me-1"><i
                                    class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- End Footer -->



    <script src="./Js/jquery-3.6.3.min.js"></script>
    <script src="./Js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="./Js/main.js"></script>
</body>

</html>