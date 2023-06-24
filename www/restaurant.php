<?php
$_SESSION['username'] = 'haroon';
echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Website</title>

    <!------------------------------------------------>
    <!-- !WARNING! Do not change order of ref tags. -->
    <!------------------------------------------------>

    <!-- Bootstrap v6 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- Bootstrap v6 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script>

    <!-- JQuery v3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- Font Awesome v6.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.ne t/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@600&family=Dancing+Script:wght@700&family=Lato&family=Manrope:wght@800&family=Raleway&family=Roboto+Condensed:wght@700&family=Roboto:wght@700;900&family=Signika:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anuphan:wght@500&family=Heebo&family=Josefin+Sans:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo&family=Inter:wght@400;700;800&family=Roboto:wght@700&display=swap');
    </style>
</head>



<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-block" href="#">
                <img src="../res/images/logo.png" alt="Logo" width="64" height="48">
                <span class="px-2 text-danger"><b>Foodies</b></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Restaurants<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="fooditems.php">Food Items</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trending</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 row gx-1">
                    <li class="col p-1 container-fluid d-flex">
                        <a href="sign_up.php" style="width:6rem;" class="col btn btn-outline-danger m-1">Sign Up</a>
                    </li>
                    <li class="col p-1 container-fluid d-flex">
                        <a href="sign_in.php" style="width:6rem;" class="col btn btn-outline-dark m-1">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron section -->
    <section class="j5 jumbotron text-center">
        <div class="container-fluid p-4">
            <h1 class="jumbotron-heading p-4">The best and fastest food delivery experience</h1>
            <p class="lead p-1"><b>Feeling Starvy?</b></p>
            <div class="p-2">
                <a href="#" class="btn btn-warning my-2 mx-1">Order now</a>
                <a href="#" class="btn btn-outline-dark my-2 mx-1">Learn more</a>
            </div>
        </div>
    </section>

    <!-- Restaurant Section -->

    <div class="parent container-fluid section mt-5">
        <h1 class="text-center">We offer the best Restaurants countrywide.</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
                <div class="card ms-5 mt-5" style="width: 18rem;">
                    <img src="../res/images/restpic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant 1</h5>
                        <p class="card-text">"Savor an unforgettable culinary journey with our restaurant's delectable
                            creations and inviting ambiance."</p>
                        <a data-bs-target="#Menu" data-bs-toggle="modal" href="#" class="btn btn-primary">Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Menu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Menu</h1>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link" onclick="Selected()"
                                aria-current="page">Cuisines</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link" onclick="Selected()">Burger</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link" onclick="Selected()">Pizza</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link" onclick="Selected()">Discounted Deals</a>
                        </li>
                    </ul>
                    <div class="c1 container-fluid"></div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <script>

        function CardMaking() {
            var cardContainer = document.createElement("div");
            cardContainer.className = "card";

            var row = document.createElement("div");
            row.className = "row g-0";

            var colImage = document.createElement("div");
            colImage.className = "col-md-4";

            var cardImage = document.createElement("img");
            cardImage.src = "your-image.jpg";
            cardImage.className = "card-img";
            cardImage.alt = "Image";

            colImage.appendChild(cardImage);

            var colBody = document.createElement("div");
            colBody.className = "col-md-8";

            var cardBody = document.createElement("div");
            cardBody.className = "card-body d-flex flex-column align-items-end";

            var cardTitle = document.createElement("h5");
            cardTitle.className = "card-title upside-down-text";
            cardTitle.innerText = "Upside Down Title";

            var cardDescription = document.createElement("p");
            cardDescription.className = "card-text upside-down-text";
            cardDescription.innerText = "Upside Down Description";

            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardDescription);

            colBody.appendChild(cardBody);

            row.appendChild(colImage);
            row.appendChild(colBody);
            cardContainer.appendChild(row);
            return cardContainer;
        }

        function Selected() {
            var d1 = document.getElementsByClassName("c1");
            d1[0].innerHTML = " ";
            for (let i = 1; i <= 10; i++) {
                d1[0].appendChild(CardMaking());
            }

        }
        // function Restaurant() {
        //     var c1 = document.createElement('div');                  //Setting up structure of a bootstrap card
        //     var c2 = document.createElement('img');
        //     var c3 = document.createElement('div');
        //     var c4 = document.createElement('h5');
        //     var c5 = document.createElement('p');
        //     var c6 = document.createElement('a');
        //     var c4 = document.createElement('h5');

        //     c1.classList.add("card", "col-3","ms-5","mt-5");
        //     c1.style.width = "20rem";
        //     c1.style.height = "18rem";

        //     c2.classList.add("card-img-top")
        //     c2.setAttribute('src', ' ');
        //     c2.setAttribute('alt', ' ');

        //     c3.classList.add("card-body");

        //     c4.classList.add("card-title");

        //     c5.classList.add("card-text");

        //     c6.classList.add("btn", "btn-primary")

        //     c3.appendChild(c4);
        //     c3.appendChild(c5);
        //     c3.appendChild(c6);

        //     c1.append(c2);
        //     c1.append(c3);
        //     return c1;

        // }

        // var n_R = 28;
        // //number of restaurant to be shown on restaurant page

        // var rest_rows = n_R / 4         //no of rows that would be formed
        // //mumber of restaurants should be in multiple of 4!!!!

        // //one row will consist of 4 restaurants

        // for (let i = 1; i <= rest_rows; i++) {
        //     var n1 = document.createElement('div');
        //     n1.classList.add('row');
        //     var m2 = document.getElementsByClassName("parent");
        //     m2[0].appendChild(n1);
        //     for (let i = 1; i <= 4; i++) {
        //         n1.appendChild(Restaurant());
        //     }

        // }
    </script>
</body>

</html>