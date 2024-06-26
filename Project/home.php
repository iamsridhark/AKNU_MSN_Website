 <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Adikavi Nannaya University MSN Campus Kakinada</title>         <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;700;900&family=Lora:wght@400;500;700&family=Outfit:wght@100;200;300;400;600;700&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
<body>
    <section class="sub-header1">
        <nav>
        <a href="index.html"><img src="images/logo.png"></a>
            <div class="menu-bar" id="MenuBar">
                <i class="fa fa-times" onclick="hideMenu()"></i> <!-- this is for close icon in phone view -->
            <ul>
                <li><a href="index.php">HOME</a></li>
                 <li><a href="home.php">LOGIN</a></li>
                 <li><a href="contact.html">CONTACT</a></li>
                 <li><a href="about.html">ABOUT</a></li>
                <div class="dropdown">
            <li onclick="myFunction()" class="dropbtn">STUDENT</li>
            <div id="myDropdown" class="dropdown-content">
                 <a href="academic.php">ACADEMIC CALENDAR</a>
                 <a href="syllabus.php">SYLLABUS</a>
                 <a href="examinations.php">EXAMINATIONS</a>
                 <a href="">RESULTS</a>
                </div>        
                </div>
            </ul>
         </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
     </nav>

      
    
<!-----login------>
        <section>
    <div class="loginbox">
        <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="login.php" method="post">
            
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            
        <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <a href="signup.php">Don't have an account?</a>
        </form>
        </div>  
        </section>
    
<!------------Footer------------>
        <div class="footer1">
        <h4>About Us</h4>
            <p>The Adikavi Nannaya University MSN Campus, (Erstwhile Andhra University MSN Campus) Kakinada lies on the East coast in the East Godavari District, Andhra Pradesh, India.<br> The campus has been carefully nurtured in academic and service activities since its establishment in November 1977. </p>
            <div class="icons2">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i>   
            
            </div>
        </div> 
  

        
 <!----Javascript for toggle menu---->        
        
 
<script>
     
    var MenuBar = document.getElementById("MenuBar");
    function showMenu(){
        MenuBar.style.right = "0";
    }
     function hideMenu(){
              MenuBar.style.right = "-200px";
     }
     
    </script>
    


  <!------------Drop-Down-Menu-------->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>      

          </section>
    </body>
    <style>
    *{
    margin: 0; 
    padding: 0;
    font-family: 'Barlow', sans-serif;
font-family: 'Lora', serif;
font-family: 'Outfit', sans-serif;
font-family: 'Rubik', sans-serif;
}
.header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/banner.png);
    background-position: center;
    background-size: cover;
    position: relative;
}

nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
    
}
nav img{
    width: 150px;
    
}
.menu-bar{
    flex: 1;
    text-align: right;
}
.menu-bar ul li{  
    /* It is for menu */
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.menu-bar ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

/*-for menu line color-*/

.menu-bar ul li::after{
    padding: 0px;
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.menu-bar ul li:hover::after{
   width: 100%;
}

.text-box{
  width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;   
}
.text-box h1{
 font-size: 62px;
}
.text-box h2{
    font-size: 52px;
}
.text-box p{
    margin: 10px 0 40px;
    font-size: 16px;
    color: #fff;
}



nav .fa{
    display: none;
}



.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
border: 1px solid #f44336;
background: #f44336;
transition: 1s;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content a::after{
     
        content: '';
        width: 0;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        transition: 0.5s;
    }
    
    .dropdown-content a:hover::after{
        width: 100%;
    }

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: left;
}

.dropbtn {
    color: white;
    padding: 16px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    border: none;
    background: none;
}


.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
    
.show {display: block;}
    

@media (max-width: 700px){
    .text-box h1{
        font-size: 20px;
    }
    .text-box h2{
        font-size: 16px;
    }
    .menu-bar ul li{
        display: block;
    }
    .menu-bar{
        position: fixed;
        background: #f44336; 
        height: 100vh;
        width: 200px;
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
   } 
    
    
    
    
    .dropdown-content a {
        text-align: left;
  color: white;
  text-decoration: none;
  display: block;
        font-size: 15px;
}

/*-It is for close icon in mobile view-*/

    nav .fa{
display: block;
    color: #fff;
    margin: 10px;
    font-size: 22px;
    cursor: pointer;
        
    }
    
    .menu-bar ul{
        padding: 30px;   
/* space between menus in mobile view */
    }
}

/*------ login -----*/

        
.sub-header1{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/login.png);
    background-position: center;
    background-size: cover;
    position: relative;
}
.loginbox{
    width: 350px;
    height: 400px;
    background: ;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    background: #1ABC9C;
    border-radius: 10px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 20px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: white;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
    background: #566573;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: ;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer; 
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 14px;
    line-height: 20px;
    color: yellow;
}
.loginbox a:hover
{
    color: #7D10FF;
}


        
/*-----------Footer for login-----------*/
.footer1{
    width: 100%;
    text-align: center;
    padding-top: 350px;
}
.footer1 h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
    color: white;
}
.footer1 p{
    color: white;
}
.icons2 .fa{
    color: #f44336;
    margin: 0 13px;
    cursor: pointer;
    padding: 18px 0;
    
}

@media (max-width: 700px){
    .footer1{
    padding-top: 430px;
}
}
        
    </style>
    
        </html>

