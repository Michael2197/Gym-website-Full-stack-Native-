<?php

session_start();
ob_start();
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Static/css/Gym.css?v=2">

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
            </div>
        </div>
    </header>
    <main>
        <div class="newmember">
            <div class="newmember1">
                <img class="nm1" src="Static/imgs/IMG_4226.JPG"></div>
                <div class="newmember2">
                    <h1> Welcome Fighter</h1>
                </div>
                <form class="newmember3" method="POST">
                <?php

                  if(isset($_POST['btn'])){
                  $name=htmlspecialchars($_POST['name']);
                  $email=htmlspecialchars($_POST['email']);
                  $pass=htmlspecialchars($_POST['pass']);
                  $DATA = "INSERT INTO `users`(`name`,`password`,`email`) VALUES('$name','$pass','$email')";
                  $select ="SELECT * from `users` WHERE `email` = '$email' and `name`='$name'";
                  $conselect=mysqli_query($connect,$select);
                  $emailerror="";
                  if(mysqli_num_rows($conselect) > 0){
                    
                  $emailerror="*Email Already exist*";
                  
                    }else{
                         $done= mysqli_query($connect,$DATA);
                         header('location:Gym.php');
                        }

                  }
                ?>
                <?php
                if(isset($_POST['btn3'])){
                    header('location:Gym.php');
                }?>
               
                 

                   <input class="inputa" type="text" name="name" placeholder=" name..." />
                    <br>
                    <br>
                    <br>
                    <input type="text" class="email" name="email" placeholder="Enter Your Email.... " />
                    <?php
                      if(!empty($emailerror)){?>
                        <p><?php echo "<font color='white'>".$emailerror."</font>"; ?> </p>

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
                    <button type="submit" class="bba" name="btn">Submit</button>
                  
                    <button type="submit" class="bba1" name="btn3">Back</button>

                
                </form>
           

                
                



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
    
</body>
</html>