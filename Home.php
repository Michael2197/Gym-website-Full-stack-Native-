<?php

session_start();
ob_start();
include('db.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Static/css/Gym.css?v=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <video autoplay muted loop id="video">
        <source src="Static/imgs/25DC441C-69E2-4E42-8A8E-9D480EC0D161.MOV" type="video/mp4">
    </video>
    <header>
        <div class="navbar">
            <div class="content">
                <div class="con">HOME</div>
                <div class="con" id="st">Popeye's Market</div>
                <div class="con">BOOKING</div>
                <div class="con" id="tr">PRIVATE TRAINER</div>
                <div class="con">CONTACT US</div>
                <div class="con" id="logout">LOG OUT</div>
            </div>
        </div>
    </header>
    <div class="trainers" id="ptr">
        <div class="trainers1">
            <h1>POPEYE'S WORIORS<hr></h1>
        </div>
        <div class="trainers2">
            <div class="trainers2a">
            <img class="trainers21" src="Static/imgs/340278776_755573152692061_528044676639955552_n.jpg">

            </div>
            <div class="trainers2b">
                <p>Coach : Abdel aziz</p>
                <p>Age : 29</p>
                <p>Id : 13</p>
                <p>Number : 01*********</p>
            </div>
        </div>
        <div class="trainers3">
            <div class="trainers3a">
            <img class="trainers31" src="Static/imgs/340287676_1239235006724610_8548600160544412397_n.jpg">

            </div>
            <div class="trainers3b">
                <p>Coach : Mahmoud El-Araby</p>
                <p>Age : 26</p>
                <p>Id : 15</p>
                <p>Number : 01*********</p>
            </div>
        </div>
        <div class="trainers4">
            <div class="trainers4a">
            <img class="trainers41" src="Static/imgs/340510098_1333361463907477_8237273296152708367_n.jpg">

            </div>
            <div class="trainers4b">
                <p>Coach : Ahmed Mazher</p>
                <p>Age : 27</p>
                <p>Id : 17</p>
                <p>Number : 01*********</p>
            </div>
        </div>
        <div class="trainers5">
            <div class="trainers5a">
            <img class="trainers51" src="Static/imgs/340655865_1154103368596264_5526952140470126590_n.jpg">

            </div>
            <div class="trainers5b">
                <p>Coach : Adam Mohamed</p>
                <p>Age : 22</p>
                <p>Id : 22</p>
                <p>Number : 01*********</p>
            </div>
        </div>
    </div>

    <div class="Products" id="prd">
        <div class="Products1">
            <h1>POPEYE'S STORE<hr></h1>
        </div>
        <div class="Products2">
            <div class="Products2a">
            <img class="Products21" src="Static/imgs/image_512 (1).jfif">

            </div>
            <div class="Products2b">
                <p>Product : Whey Protin</p>
                <p>Company : Muscle Add</p>
                <p>Title : Muscle Add Whey Add-60Serv.-2100G-Strawberry Milkshake</p>
                <p>Price : LE 2,150.00</p>
            </div>
        </div>
        <div class="Products3">
            <div class="Products3a">
            <img class="Products31" src="Static/imgs/image_512 (2).jfif">

            </div>
            <div class="Products3b">
                <p>Product : Whey Protein</p>
                <p>Company : Organic Nation</p>
                <p>Title : Organic Nation 100% Whey Protein-30Serv.-1020g-Chocolate</p>
                <p>Price : LE 1,150.00</p>
            </div>
        </div>
        <div class="Products4">
            <div class="Products4a">
            <img class="Products41" src="Static/imgs/image_512 (3).jfif">

            </div>
            <div class="Products4b">
                <p>Product : Protein Powder</p>
                <p>Company : Max Muscle Elite</p>
                <p>Title : Max Muscle 360 Protein Powder Reda Ragab Signature-30Serv.-1170G.-Chocolate</p>
                <p>Price : LE 990.00</p>
            </div>
        </div>
        <div class="Products5">
            <div class="Products5a">
            <img class="Products51" src="Static/imgs/image_512.jfif">

            </div>
            <div class="Products5b">
                <p>Product : Whey Protein</p>
                <p>Company : Muscle Add</p>
                <p>Title : Muscle Add Whey Add-133Serv.-4.5kg.- Chocolate Gourmet</p>
                <p>Price : LE 3,750.00</p>
            </div>
        </div>
    </div>





    <main>
         <div class="a" id="a">
            <img class="a1" src="Static/imgs/IMG_4226.JPG">
         </div>
         <div class="user" id="u">
         <?php
            echo " Welcome "  .   $_SESSION['name'];
        ?> 
         </div>
         <div class="y">
            <ul>
                <h1>Member Plan</h1>
                <hr>
                <br>
                  <li>Day1 : 3 Chest + 2 Triceps</li>
                  <br>
                  <li>Day2 : 3 Back + 2 Biceps</li>
                  <br>
                  <li>Day3 : 6 Shoulders</li>
                  <br>
                  <li>Day4 : 6 Arm </li>
                  <br>
                  <li>Day5 : 6 Leg </li>
                  <br>
                  <li>Day6 : Free </li>

            </ul>

         </div>
         <div class="z">
            <div class="z1">
               <div class="z12">
                   <h1>HERE LEGENDS ARE MADE</h1>
               </div> 
            </div>

            <div class="z2">
                <img class="z2a" src="Static/imgs/IMG_E4230.JPG">
            </div> 
            
    </main>

    <footer>
        <div class="f">
            <div class="f1">
                <form class="f1a">
                    <input type="search" class="srh" placeholder="Search For Nearby Gym " aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" id="btn">Submit</button>
                </form>
                <div class="f1b">
                    <h1> BUILD YOUR LEGACY </h1>
                </div>
            </div>
            <div class="f2">
                <div class="f2a">
                    <div class="f2a1">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    
                </div>
                <div class="f2b">
                    <lu>
                        <h2>HOME</h2>
                        <li>PopeyesGym.com</li>
                         <li>Shop Gear</li>
                    </lu>
                </div>
                <div class="f2c">
                    <lu>
                        <h2>GET STARTED</h2>
                        <li>Join a Gym Near You</li>
                         <li>Get a Free Gym Pass</li>
                         <li>Find a Local Gym Near You</li>
                         <li>Member Center</li> 

                    </lu>
                </div>
                <div class="f2d">
                    <lu>
                        <h2>COMPANY</h2>
                        <li>Own a Gold's Gym Franchise</li>
                         <li>Careers</li>
                         <li>Press Room</li>
                         <li>Diversity, Equity & Inclusion</li> 
                    </lu>
                </div>
                <div class="f2e">
                    <lu>
                        <h2>POLICY</h2>
                        <li>Terms & Conditions</li>
                         <li>Privacy Policy</li>
                    </lu>
                </div>

            </div>
            
            <div class="f3">
                <h1>© 2022 by Popeye's Gym Egypt. Proudly created by Michael Milad</h1>
            </div>

        </div>





    </footer>


    
    <script src="static/js/jquery-3.6.4.min.js"></script>
    <script src="static/js/Gym.js?v=2"></script>
</body>
</html>