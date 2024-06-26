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
<section class="cp">
<div class="changebox">
        <img src="cp.jpg" class="avatar">
        <h1>Change Password</h1>
        <form action="change-p.php" method="post">
            
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) {
           ?> <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            
        <p>Old Password</p>
            <input type="password" name="op" placeholder="Old Password">
            
         <p>New Password</p>
            <input type="password" name="np" placeholder="New Password">


         <p>Confirm New Password</p>
            <input type="password" name="c_np" placeholder="Confirm New Password">

         <input type="submit" name="" value="Change">
            <a href="loginpage.php">HOME</a><br>
            
        </form>
        </div>  
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


.cp{
	    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/banner.png);
    background-position: center;
    background-size: cover;
    position: relative;
}

.changebox{
    width: 350px;
    height: 470px;
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

.changebox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: white;
}

.changebox input{
    width: 100%;
    margin-bottom: 20px;
    background: #566573;
}

.changebox input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.changebox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: ;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
}
.changebox input[type="submit"]:hover
{
    cursor: pointer; 
    background: #ffc107;
    color: #000;
}
.changebox a{
    text-decoration: none;
    font-size: 14px;
    line-height: 20px;
    color: yellow;
}
.changebox a:hover
{
    color: #7D10FF;
}


.error {
text-align: center;
   background: hsl(0, 100%, 50%);
   color: white;
   padding: 5px;
   width: 100%;
   border-radius: 5px;
   margin: 10px auto;
    
}

.success {
   background: #a832a2;
   color: white;
   padding: 5px;
   width: 100%;
   border-radius: 5px;
   margin: 20px auto;
    text-align: center;
}




</style>	
</html>
<?php 
}else{
     header("Location: home.php");
     exit();
}
 ?>