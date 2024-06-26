<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
<svg viewBox="0 0 1000 400" >
<text id="mytext" x="50%" y="30%" text-anchor="middle" fill="none">Welcome <?php echo $_SESSION['name']; ?></text>
    <use xlink:href="#mytext" class="copy copy1"></use>
    <use xlink:href="#mytext" class="copy copy2"></use>
    <use xlink:href="#mytext" class="copy copy3"></use>
    <use xlink:href="#mytext" class="copy copy4"></use>
    <use xlink:href="#mytext" class="copy copy5"></use>
</svg>    
    
</div>
    <div>
    <body>
     <div class="right-link">
<a href="logout.php" class="btn6">Logout</a>
    </div>

<div class="change-pwd">
<a href="change-password.php" class="btn7">Change Password</a>
    </div>

    <table id="table">
    <tr>
    <td class="div1">
<img src="images/img1.png" style="width: 30%;"/>
    <p>Computer Science</p>
    <button class="btn btn1">explore</button>
    <br/><br/></td>
    <td class="div1"><img src="images/img2.png" style="width: 30%;"/>
    <p>Commerce&<br>Management Studies</p><button class="btn btn2">explore</button><br/><br/></td>
    <td class="div1"><img src="images/img3.png" style="width: 30%;"/>
    <p>English</p><button class="btn btn3">explore</button><br/><br/></td>
    <td class="div1"><img src="images/img4.png" style="width: 30%;"/>
    <p>Economics</p><button class="btn btn4">explore</button><br/><br/></td>
    <td class="div1"><img src="images/img5.png" style="width: 30%;"/>
    <p>Political Science&<br>Public Administration</p><button class="btn btn5">explore</button><br/><br/></td>
    </tr>    
    </table>
    </body>
    </div>
    <script>
    let btn6 = document.getElementById("btn6");
    let spans = document.getElementsByTagName("span");
        
    btn6.onclick = function(){
    for(span of spans){
    span.classList.add("anim");
    }
    setTimeout(function(){
        for(span of spans){
            span.classList.remove("anim");
        }
    },500)
    }
    
    </script>
</body>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }
    .container{
        width: 100%;
        height: 100vh;
        background-image:url(background.jpg);
        
    }
    svg{
        font-size: 80px;
    }
    .copy{
        fill:none;
        stroke: #fff;
        stroke-width: 3px;
        stroke-dasharray: 8% 30%;
        stroke-dashoffset: 0%;
        animation: textanimation 6s linear infinite;
    }
    @keyframes textanimation {
        100%{
            stroke-dashoffset: -35%;
        }
    }
    .copy1{
        stroke: #FBFE24;
        animation-delay: -1s;
    }
    .copy2{
        stroke: #8E44AD;
        animation-delay: -2s;
    }.copy3{
        stroke: #58D68D;
        animation-delay: -3s;
    }.copy4{
        stroke: #3498DB;
        animation-delay: -4s;
    }.copy5{
        stroke: #FE329B;
        animation-delay: -5s;
    }
@media(max-width: 700px){
        .container{
        width: 100%;
        height: 100vh;
        background-image:url(background.jpg);
        
    }
    svg{
        font-size: 150px;
        padding-top: 50px;
        padding-right: 10px;
    }
    }
    
/*------------table-------------*/
    
    #table{
        width: 100%;
        text-align: center;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px;
        padding: 100px 150px 20px 150px;
    }
    table td{
        padding: 20px;
    }
    
    .div1{
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 15px 2px teal;
        transition: 0.5s;
    }
    .div1:hover{
        transform:scale(1,0.9);
        box-shadow: 0px 0px 5px 5px teal;
    }
    .btn{
        padding: 5px 15px 5px 15px;
        border-radius: 20px 4px 20px  4px;
        border: none;
        color: white;
    } 
    .btn1{
        background-color: red;
    }
    .btn2{
        background-color: deeppink;
    }
    .btn3{
        background-color: green;
    }
    .btn4{
        background-color: blueviolet;
    }
    .btn5{
        background-color: darkturquoise;
    }
    p{
        padding-bottom: 15px;
        font-size: 15px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
    @media(max-width: 700px){
#table{
        width: 100%;
    display: flex;
        text-align: center;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
    flex-direction: column;
        padding: 140px 25px 250px 25px;
    }
    .div1{
        display: flex;
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 0px 0px teal;
        transition: 0.5s;
    }
        p{
            padding-right: 10px;
            font-size: 15px;
        }
      .btn1{
font-size: 10px;
        
    }
    .btn2{
font-size: 10px;
        
    }
    .btn3{
font-size: 10px;
        
    }
    .btn4{
font-size: 10px;
        
    }
    .btn5{
font-size: 10px;
        
    }
    }
/*-----------logout--------------*/
    .right-link{
    position: absolute;
    bottom: 100px;
    left: 670px;
    display: flex;
    align-items: center;
        }
    .btn6{
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        padding: 24px 70px;
        background: #ff1876;
        color: #fff;
        border-radius: 40px;
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
        transition: box-shadow 0.25s;
        z-index: 2;
    }
    .btn6:active{
        background: #d80972;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
    }
    .btn6 span{
        background: #ff1876;
        border: 1px solid #ff1876;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        position: absolute;
        z-index: -1;
        transform: scale(0);
    }
    .btn6 span:nth-child(1){
        top: -20%;
        left: -10%;
    }
    .btn6 span:nth-child(2){
        top: -100%;
        left: 0;
    }
    .btn6 span:nth-child(3){
        top: -50%;
        left: 10%;
        background: transparent;
    }
.btn6 span:nth-child(4){
        top: -66%;
        left: 20%;
    }
.btn6 span:nth-child(5){
        top: -80%;
        left: 20%;
    }
.btn6 span:nth-child(6){
        top: -70%;
        left: 42%;
    }
.btn6 span:nth-child(6){
        top: -70%;
        left: 42%;
    }
.btn6 span:nth-child(7){
        top: -80%;
        left: 60%;
    background: transparent;
    }
.btn6 span:nth-child(8){
        top: -50%;
        left: 70%;
    }
.btn6 span:nth-child(9){
        top: -100%;
        left: 80%;
    }
.btn6 span:nth-child(10){
        top: -70%;
        left: 90%;
    }
.btn6 span:nth-child(11){
        top: -80%;
        left: 100%;
    background: transparent;
    }
.btn6 span:nth-child(12){
        top: -50%;
        left: 110%;
    }
.btn6 span:nth-child(13){
        top: 40%;
        left: -20%;
    }
.btn6 span:nth-child(14){
        top: 60%;
        left: 120%;
background: transparent;
    }
.btn6 span:nth-child(15){
        top: 100%;
        left: -10%;
    }
.btn6 span:nth-child(16){
        top: 100%;
        left: 5%;
background: transparent;
    }
.btn6 span:nth-child(17){
        top: 120%;
        left: 10%;
    }
.btn6 span:nth-child(18){
        top: 103%;
        left: 20%;
    }
.btn6 span:nth-child(19){
        top: 105%;
        left: 33%;
background: transparent;
    }
.btn6 span:nth-child(20){
        top: 134%;
        left: 55%;
    }
.btn6 span:nth-child(21){
        top: 125%;
        left: 75%;
    }
.btn6 span:nth-child(22){
        top: 115%;
        left: 88%;
background: transparent;
    }
.btn6 span:nth-child(23){
        top: 110%;
        left: 100%;
    }
.btn6 span:nth-child(24){
        top: 120%;
        left: 120%;
    }
.anim{
animation: moving 0.5s linear reverse forwards;
    }
    @keyframes moving {
        0%{
            transform: scale(0);
        }
        10%{
            transform: scale(1);
        }
        100%{
            top: 50%;
            left: 50%;
        }
    }
    @media(max-width: 700px){
        .right-link{
    position: absolute;
    bottom: 60px;
    left: 110px;
    display: flex;
    align-items: center;
        }
        .btn6{
        display: inline-block;
        font-size: 18px;
        padding: 24px 70px;
        background: #ff1876;
        color: #fff;
        border-radius: 40px;
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
        transition: box-shadow 0.25s;
        z-index: 2;
    }
}


/*--------------change password----------*/

.change-pwd{
    position: absolute;
    bottom: 30px;
    left: 660px;
    display: flex;
    align-items: center;
        }
    .btn7{
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        padding: 14px 50px;
        background: green;
        color: #fff;
        border-radius: 40px;
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
        transition: box-shadow 0.25s;
        z-index: 2;
    }
    .btn7:active{
        background: #d80972;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
    }


</style>
</html>

<?php 
}else{
     header("Location: home.php");
     exit();
}
 ?>