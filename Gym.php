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
    <link rel="stylesheet" href="Static/css/Gym.css?v=1">
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
                <div class="con">Popeye's Market</div>
                <div class="con">BOOKING</div>
                <div class="con">LOCATION</div>
                <div class="con">CONTACT US</div>
                <div class="con" id="log">LOG IN
                </div>
            </div>
        </div>
    </header>
    <div class="log" id="login">
        <div class="log1">
            <img class="log1a" src="Static/imgs/IMG_4226.JPG">
         </div>
         <div class="log2"><h1>JOIN US</h1></div>
        
        <form class="log3" method="POST">
            <?php
            if(isset($_POST['btn'])){
                $email=htmlspecialchars($_POST['email']);
                $pass=htmlspecialchars($_POST['pass']);
                $select1 ="SELECT * from `users` WHERE `email` = '$email' and `password`='$pass'";
                $conselect1=mysqli_query($connect,$select1);
                $hh = mysqli_fetch_assoc($conselect1);
                      $emailerror="";
                      $passerror="";

                      
                      
                      if(mysqli_num_rows($conselect1) == 1){
                          if($hh["email"]=="admin@gmail.com"){
                            header('location:Admin.php');
                         }else{
                          $_SESSION['name']=$hh['name'];
      
                          $_SESSION['email']=$hh['email'];
      
                          header('location:Home.php');}
      
                        
                      }else{$emailerror="*Email You Intered Not Found*";
                        $passerror="*please Inter Correct Password*";
                    }
                      }
            
            ?>

            <?php
            if(isset($_POST['btn1'])){
                header('location:sign.php');}

            
            ?>
            <input type="text" class="email" name="email" placeholder="Enter Your Email.... " />
            <?php
            if(!empty($emailerror)){?>
             <p><?php echo $emailerror; ?> </p>

               <?php }else{
              
                  }
                  ?>
            <br/>
            <br/>
            <br/>

            <input type="text" class="pass" name="pass" placeholder="Password.... " />
            <?php
            if(!empty($passerror)){?>
             <p><?php echo $passerror; ?> </p>

               <?php }else{
              
                  }
                  ?>
            <br/>
            <br/>
            <br/>

            <button type="submit" class="btn1" name="btn">Submit</button>
            <button type="submit" class="btn1" name="btn1">sign in</button>

        </form>
        
    </div>
    <main>


         <div class="a" id="a">
            <img class="a1" src="Static/imgs/IMG_4226.JPG">
         </div>
         <div class="b">

            <div class="b1">
                <img class="b1a" src="Static/imgs/IMG_E4228.JPG">
            </div>
            <div class="b2">
                <img class="b2a" src="Static/imgs/IMG_E4231.JPG">
            </div>
         </div>
         <div class="c">
            <h1>HERE LEGENDS ARE MADE</h1>
        </div>
         <div class="d">
            <div class="d1">
                <img class="d1a" src="Static/imgs/IMG_E4229.JPG">
            </div>
            <div class="d2">
                <img class="d2a" src="Static/imgs/IMG_E4230.JPG">
            </div>
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
    <script src="static/js/Gym.js?v=1"></script>
</body>
</html>