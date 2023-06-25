<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
    /* body{
            background: black;
        } */

    .bg-1 {
        background: #0D4A31;
        width: 100%;
        height: 680px;

    }

    .bg-2 {
        background: #0D4A31;
        width: 100%;

    }

    .cover {
        font-family: Playfair Display;
        font-size: 50px;
        font-weight: 700;
        line-height: 63px;
        text-align: left;

    }

    p {
        color: #FFFFFF;
    }

    .background-img img {
        width: 421.67px;
        height: 632px;
    }

    .bg {
        background-color: aliceblue;
    }

    .second-section {
        color: #093624;
        font-family: Playfair Display;
        font-size: 32px;
        font-weight: bolder;
        text-align: left;
    }

    .underline {
        text-decoration: underline;
    }

    .heading1 {
        font-family: Playfair Display;
        font-size: 32px;
        font-weight: 700;
        color: #093624;
    }

    .bggg {
        background: linear-gradient(127.03deg, #1F8058 -35.24%, #0D4A31 75.51%);
        width: 505px;
        height: 418px;
    }

    .image-R {
        border-top-left-radius: 120px;
        border-bottom-right-radius: 120px;
    }

    .Card-Info {
        width: 325px;
        border: 0px;
        background: #FFFFFF;
        border-radius: 5px;
    }

    .shaw {
        background: #FFFFFF;
        box-shadow: 0px 15px 34px rgba(33, 37, 106, 0.1);
        border-radius: 5px;
    }

    .margin {
        margin-left: 30px;
        margin-right: 30px;
    }

    .b-Width {
        height: 250px;
        max-height: 250px;
        width: 350px;
        max-width: 400px;
        background: #FFFFFF;
        border-radius: 6px;
    }

    @media screen and (max-width: 820px) {
        .hide {
            display: none;
        }

        .cover {
            font-size: 40px;
        }

        .mar-red {
            margin-top: 0px;
        }
    }

    nav ul li a.active {
        text-decoration: underline;
        text-decoration-color: black;
        text-decoration-thickness: 3px;
    }


    #reduce-Btn-w:hover {
        background-color: black;
        color: #FFFFFF;
    }

    .hower:hover {
        background: blueviolet;
        transition: 2s;
        color: #FFFFFF;
    }

    .hower h2:hover {
        transition: 2s;
    }
    </style>
</head>

<body onload="myFunction1()">
    <div class="container-fluid  bg-1 ">
        <!-- have to change font-size  and ect  -->
        <div class="container-fluid mt-5">
            <nav class="navbar navbar-expand-lg fixed-top " style="background: #0D4A31">
                <div class="container-fluid mt-3" style="padding-left: 50px; padding-right: 50px;">
                    <a class="navbar-brand" href="#" style="color: #FFFFFF;"><strong>INSURENCE</strong></a>
                    <button class="navbar-toggler bg-light" data-bs-target="#navbarSupportedContent"
                        data-bs-toggle="collapse" type="button" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#section1" aria-current="page"
                                    style="color: #FFFFFF;"><strong>Home</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section2"
                                    style="color: #FFFFFF;"><strong>Service</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section3" style="color: #FFFFFF;"><strong>Insurnce
                                        Service</strong> </a>
                            </li>
                        </ul>
                        <div>
                            <button class="btn btn-primary" type="button">Sign In</button>
                        </div>
                    </div>
                </div>
            </nav>
            <section id="section1">
                <div class="container-fluid ">
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md- 8-12 mt-4">
                            <div class="col-10">
                                <div class="cover">
                                    <p>Are You Covered? Home, Life, & Auto Insurance</p>
                                </div>
                                <div>
                                    <p>Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec,
                                        egestas non nisi. Donec rutrum congue leo eget malesuada. </p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 col-6 ">
                                    <button class="btn" id="reduce-Btn-w" type="button"
                                        style="background-color:#F8C140; height: 60px; width: 150px;">Get
                                        Started</button>
                                </div>
                                <div class="col-md-4 col-6 d-flex ">
                                    <button class="btn" type="button" style="color: #FFFFFF;">Watch the video</button>
                                </div>
                            </div>

                            <!-- responsive check -->
                            <div class="row mt-5 mar-red">
                                <div class="col-md-3 col-4">
                                    <div class="bg">
                                        <img src="./Images/head/image 215.png" alt="#" width="120px" height="40px">
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="bg">
                                        <img src="./Images/head/image 212.png" alt="#" width="120px" height="40px">
                                    </div>
                                </div>
                                <div class="col-md-3 col-4 ">
                                    <div class="bg">
                                        <img src="./Images/head/image 214.png" alt="#" width="100px" height="40px">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- responsive check -->
                        <div class="col-6 background-img mt-5 hide">
                            <img src="./Images/head/pexels-photo-6625908-removebg 1.png" alt>
                        </div>
                        <div class="hide">
                            <div class="border text-center bg-light"
                                style="height: 70px; width: 70px; padding-top: 10px; border-radius: 50%; position: absolute; top:10%; left: 70%;">
                                <img src="./Images/head/icons8-green_earth 1.png" alt=" #" width="49px" height="49px">
                            </div>

                            <div class="border text-center bg-light"
                                style="height: 70px; width: 70px; padding-top: 10px; border-radius: 50%; position: absolute; top:35%; left: 45%;">
                                <img src="./Images/head/icons8-lock 1.png" alt="#" width="49px" height="49px">
                            </div>

                            <div class="border text-center bg-light"
                                style="height: 70px; width: 70px; padding-top: 10px; border-radius: 50%; position: absolute; top:45%; left: 85%;">
                                <img src="./Images/head/icons8-star 2.png" alt="#" width="49px" height="49px">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <section id="section2">

        <div class="container mt-5">
            <div class="mt-5 second-section">
                <h1><strong> Individual & Umbrella Policies </strong></h1>
            </div>

            <div class="row">
                <div class="col-md-4 col-12 mt-5 d-flex align-items-center justify-content-center">
                    <div class="card Card-Info" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="/Images/Second_Section/image 219.png"
                            alt="Card image cap" height="293px" width="325px">
                        <div class="card-body">
                            <h5 class="card-title heading1">Life Insurance</h5>
                            <p class="card-text" style="color: #4F4F4F;">Donec rutrum congue leo eget malesuada.
                                Curabitur non nulla sit amet nisl tempus convallis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mt-5 d-flex align-items-center justify-content-center">
                    <div class="card Card-Info shaw" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="/Images/Second_Section/image 205.png"
                            alt="Card image cap" height="293px" width="325px">
                        <div class="card-body">
                            <h5 class="card-title heading1">Home Insurance</h5>
                            <p class="card-text" style="color: #4F4F4F;">Donec rutrum congue leo eget malesuada.
                                Curabitur non nulla sit amet nisl tempus convallis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mt-5 d-flex align-items-center justify-content-center">
                    <div class="card Card-Info shaw" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="/Images/Second_Section/image 205.png"
                            alt="Card image cap" height="293px" width="325px">
                        <div class="card-body">
                            <h5 class="card-title heading1">Home Insurance</h5>
                            <p class="card-text" style="color: #4F4F4F;">Donec rutrum congue leo eget malesuada.
                                Curabitur non nulla sit amet nisl tempus convallis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="myDIV">
                <div class="row">
                    <div class="col-md-4 col-12 mt-5 d-flex align-items-center justify-content-center">
                        <div class="card Card-Info" style="width: 18rem;">
                            <img class="card-img-top img-fluid" src="./Images/Second_Section/image 219.png"
                                alt="Card image cap" height="293px" width="325px">
                            <div class="card-body">
                                <h5 class="card-title heading1">Life Insurance</h5>
                                <p class="card-text" style="color: #4F4F4F;">Donec rutrum congue leo eget malesuada.
                                    Curabitur non nulla sit amet nisl tempus convallis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-5 d-flex align-items-center justify-content-center">
                        <div class="card Card-Info shaw" style="width: 18rem;">
                            <img class="card-img-top img-fluid" src="./Images/Second_Section/image 205.png"
                                alt="Card image cap" height="293px" width="325px">
                            <div class="card-body">
                                <h5 class="card-title heading1">Home Insurance</h5>
                                <p class="card-text" style="color: #4F4F4F;">Donec rutrum congue leo eget malesuada.
                                    Curabitur non nulla sit amet nisl tempus convallis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-5 d-flex align-items-center justify-content-center">
                        <div class="card Card-Info shaw" style="width: 18rem;">
                            <img class="card-img-top img-fluid" src="./Images/Second_Section/image 205.png"
                                alt="Card image cap" height="293px" width="325px">
                            <div class="card-body">
                                <h5 class="card-title heading1">Home Insurance</h5>
                                <p class="card-text" style="color: #4F4F4F;">Donec rutrum congue leo eget malesuada.
                                    Curabitur non nulla sit amet nisl tempus convallis.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="mt-5 text-center ">
                <button class="btn btn-primary border rounded-0" type="button" style="width: 200px;"
                    onclick="myFunction()"> Browse All Policies </button>
            </div>

        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 col-12 heading1 ">
                    <div class="col-md-7 col-12">
                        <h1>
                            <strong>Experienced Agents You Can Trust</strong>
                        </h1>
                    </div>
                    <div class="col-md-8 col-12">
                        <p style="color: #4F4F4F; font-size: 16px;">Proin eget tortor risus. Praesent sapien massa,
                            convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada.
                            Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.</p>
                    </div>
                </div>

                <div class="col-lg-5  col-md-5 col-12 bggg rounded-4">
                    <div class="row ">
                        <div class="col-6 d-flex flex-column align-items-center justify-content-center hower"
                            style=" border: #ADB2FF solid; border-top: 0px; border-bottom: 0px; border-left: 0px;height: 200px;">
                            18
                            <p>Policies</p>
                        </div>
                        <div class="col-6 d-flex flex-column align-items-center justify-content-center hower"
                            style="border: #ADB2FF solid; border-top: 0px; border-left: 0px; border-right: 0px;">
                            9
                            <p>Agents</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 d-flex flex-column align-items-center justify-content-center hower"
                            style="border: #ADB2FF solid; border-right: 0px; border-left: 0px; border-bottom: 0px; height: 219px; margin-top:-2px">
                            10
                            <p> YEARS IN BUSINESS</p>
                        </div>
                        <div class="col-6 d-flex flex-column align-items-center justify-content-center hower"
                            style="padding-top: 20px; border: #ADB2FF solid; border-top: 0px; border-bottom: 0px; border-right: 0px; margin-left: -2px;">
                            <h2 style="font-size: 24px; font-weight: 700; color: #093624; font-weight: 700;">Free
                                Consultation</h2>
                            <p style="font-size: 14px; text-align: center;">Proin eget tortor risus. Praesent sapien
                                massa, convallis.</p>
                            <button class="btn" type="button"
                                style="background: #F8C140; width: 80px; font-size: 12px;"> Chat Now</button>

                        </div>
                    </div>
                </div>

            </div>


            <div class="row mt-5">
                <div class="col-md-6 col-12 d-flex align-items-center justify-content-center">
                    <img class="image-R" src="./Images/3rd_Section/image 208.png" alt width="300px" height="350px">
                </div>
                <div class="col-md-6 col-12 heading1 d-flex flex-column justify-content-center align-items-start">
                    <div class="col-md-9 col-12 mt-2">
                        <h1><b>We Got You Covered. Don’t Get Caught Off Guard</b></h1>

                    </div>
                    <div class="row">
                        <div class="col-md-10 col-12">
                            <p style="color: #4F4F4F; font-size: 16px;">Proin eget tortor risus. Praesent sapien massa,
                                convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada.
                                Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="container mt-3">
            <div class="text-center">
                <h1 class="heading1">Our Customers</h1>
            </div>
            <div class="row d-flex align-items-center justify-content-center mt-5">
                <div class="col-md-4 col-12  ">
                    <p style="color: #4F4F4F; font-size: 16px; text-align: center;">
                        “Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                        velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id
                        dui posuere.”
                    </p>
                </div>
                <div class="col-md-4 col-12 ">
                    <p style="color: #4F4F4F; font-size: 16px;  text-align: center;">
                        “Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                        velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id
                        dui posuere.”
                    </p>
                </div>
                <div class="col-md-4 col-12">
                    <p style="color: #4F4F4F; font-size: 16px;  text-align: center;">
                        “Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                        velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id
                        dui posuere.”
                    </p>
                </div>

            </div>
        </div>

    </section>

    <section id="section3">

        <div class="container-fluid bg-2 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 mt-5">
                        <div class="col-md-6 col-12 mt-5">
                            <h1 class="heading1" style="color: white;">Contact Us</h1>
                        </div>
                        <div class="col-md-6  mt-4">
                            <p style="color: white; font-size: 16px;  text-align:left;">Proin eget tortor risus.
                                Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum
                                congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo
                                eget malesuada.</p>
                        </div>

                        <div class=" col-md-6  d-flex flex-column justify-content-center border b-Width">

                            <div class="col d-flex">
                                <div class="col-3 d-flex align-items-center justify-content-evenly">
                                    <div class="border rounded-5 text-center"
                                        style="height: 50px; width: 50px; padding-top: 10px; background: linear-gradient(132.41deg, #1F8058 15.91%, #0D4A31 88.35%);">
                                        <i class="fa fa-car fa-lg" style="color: #FFFFFF;"></i>
                                    </div>
                                </div>
                                <div class="col-2 mt-3">
                                    Email
                                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"
                                        style="text-decoration: none; color: black;">inte_ger@yahoo.com</a>
                                </div>
                            </div>

                            <div class="col d-flex">
                                <div class="col-3 d-flex align-items-center justify-content-evenly">
                                    <div class="border rounded-5 text-center"
                                        style="height: 50px; width: 50px; padding-top: 10px; background: linear-gradient(132.41deg, #1F8058 15.91%, #0D4A31 88.35%);">
                                        <i class="fa fa-car fa-lg" style="color: #FFFFFF;"></i>

                                    </div>
                                </div>
                                <div class="col-2 mt-3 ">
                                    Email
                                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"
                                        style="text-decoration: none; color: black;">inte_ger@yahoo.com</a>
                                </div>

                            </div>

                            <div class="col d-flex">
                                <div class="col-3 d-flex align-items-center justify-content-evenly">
                                    <div class="border rounded-5 text-center"
                                        style="height: 50px; width: 50px; padding-top: 10px; background: linear-gradient(132.41deg, #1F8058 15.91%, #0D4A31 88.35%);">
                                        <i class="fa fa-car fa-lg" style="color: #FFFFFF;"></i>

                                    </div>
                                </div>
                                <div class="col-2 mt-3 ">
                                    Email
                                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"
                                        style="text-decoration: none; color: black;">inte_ger@yahoo.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12 mt-4 bg-light " style="border-radius: 10px;">
                        <form class="d-flex align-items-center justify-content-center" actio>
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <label class="form-label"></label>
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>

                                <div class="col-12">
                                    <label class="form-label"></label>
                                    <input class="form-control" type="email" placeholder="Email">
                                </div>

                                <div class="col-12">
                                    <label class="form-label"></label>
                                    <input class="form-control" type="tel" placeholder="Phone Number">
                                </div>

                                <div class="col-12 mt-4">
                                    <textarea class="form-control" id="floatingTextarea2"
                                        placeholder="Leave a comment here" style="height:100px"></textarea>
                                </div>

                                <div class="mt-4 d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll("nav ul li a");

        function updateActiveLink() {
            const currentSection = getCurrentSection();
            navLinks.forEach(function(link) {
                link.classList.remove("active");
            });
            const activeLink = document.querySelector(`nav ul li a[href="#${currentSection.id}"]`);
            activeLink.classList.add("active");
        }

        function getCurrentSection() {
            let currentSection = sections[0];
            sections.forEach(function(section) {
                const sectionTop = section.offsetTop - 50;
                if (window.scrollY >= sectionTop) {
                    currentSection = section;
                }
            });
            return currentSection;
        }

        updateActiveLink();
        window.addEventListener("scroll", updateActiveLink);
    });


    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myFunction1() {
        document.getElementById("myDIV").style.display = "none";
    }
    </script>


</body>

</html>