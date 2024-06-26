<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Adikavi Nannaya University MSN Campus Kakinada</title>         <link rel="stylesheet" href="academic-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;700;900&family=Lora:wght@400;500;700&family=Outfit:wght@100;200;300;400;600;700&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    
<!-----syllabus------>
    <div class="syllabus">
    <div class="right-link">
    <a href="index.php">Home</a>
    </div>
    <div class="wrapper">
    <h6 class="category-sub-title">Syllabus</h6>
    
    <div class="syllabus-container">
    
    <div class="category">
    
    <img src="images/cs.jpg" alt="">
    <div class="category-body">
       <a href="cs.php"><h2>Computer Science</h2></a>
    </div>
    </div>
    
    <div class="category">
    
    <img src="images/mba.jpg" alt="">
    <div class="category-body">
     <a href="mba.php"><h2>Commerce & <br>Management Studies</h2></a>
        </div>
    </div>

<div class="category">
    
    <img src="images/eng.jpg" alt="">
    <div class="category-body">
        <a href="english.php"><h2>English</h2></a>
        </div>
    </div>

<div class="category">
    
    <img src="images/ec.jpg" alt="">
    <div class="category-body">
        <a href="economics.php"><h2>Economics</h2></a>
        </div>
    </div>

<div class="category">
    
    <img src="images/ps.jpg" alt="">
    <div class="category-body">
        <a href="political_science.php"><h2>Political Science & <br> Public Administration</h2></a>
        </div>
    </div>
    
<!------------Footer------------>
        <div class="syllabus-footer">
        <h4>About Us</h4>
            <p>The Adikavi Nannaya University MSN Campus, (Erstwhile Andhra University MSN Campus) Kakinada lies on the East coast in the East Godavari District, Andhra Pradesh, India.<br> The campus has been carefully nurtured in academic and service activities since its establishment in November 1977. </p>
            <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i>   
            
            </div>
        </div> 

           
        </div>
        </div>
    </div>
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
    
        .syllabus{
/*background-color: #eee;*/
min-height: 100vh;
    width: 100%;
    background-image:url(images/backgroundsy.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
}
        
        
        .category-body a{
            text-decoration: none;
            color: white;
        }
    
.right-link{
    position: absolute;
    top: 140px;
    right: 100px;
    display: flex;
    align-items: center;
        }
.right-link a{
    text-decoration: none;
    color: #fff;
    background: red;
    padding: 15px 40px;
    border-radius: 30px;
    
}

    @media(max-width: 700px){
            .right-link{
    position: absolute;
    top: 50px;
    right: 50px;
    display: flex;
    align-items: center;
        }
.right-link a{
    text-decoration: none;
    color: #fff;
    background: red;
    padding: 15px 40px;
    border-radius: 30px;
    
}
        }

/* --- Images Alignment---*/

.syllabus .wrapper{
width: 100%;
margin:auto;
display: flex;
justify-content: center;
align-items: center;
gap:20px;
    flex-direction:column; 
/*- Correct Arrangement of courses- */
    padding:60px 0
}

/*-Side by Side Arrangement-*/

.syllabus .wrapper .syllabus-container{
    display: flex;
    gap:20px;                
    /*-Gap between boxes-*/
    flex-wrap:wrap;     
    /*-courses arrangement for view-*/
    justify-content:center;
    align-items:center;
}

/*-font size for course we offer-*/

.category-sub-title{
    padding-top: 80px;
    font-size: 40px;
    padding-bottom: 80px;
    text-align: center;
    color: mediumvioletred;
}

.syllabus .wrapper .syllabus-container .category{
width:250px;              
/*Side By Side and Circle Arrangements*/
height:250px;             
position:relative;
overflow:hidden;     
/* -- Slides correct arrangement -- */
border-radius:10%;          
/* ---Circle or box---*/
transition:.25s ease-out;    
/* -- Animation Effect -- */
}

.syllabus .wrapper .syllabus-container .category:hover{
    cursor:pointer;
}

/* --- course for zoom animation -- */

.syllabus .wrapper .syllabus-container .category:hover img{
    transform:scale(1,1.1);
    transition:.25s ease-in;
}


/* ---- color for courses ---- */


.syllabus .wrapper .syllabus-container .category::before{
    content:'';
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#33333357;
    position:absolute;
    z-index:1;
}

/* ---- Images Arrangements ---- */

.syllabus .wrapper .syllabus-container .category img{
    height:100%;
width:100%;
object-fit:cover;
    position:relative;
    
}

/* -- Text inside courses and size - */

.syllabus .wrapper .syllabus-container .category .category-body{
position:absolute;
text-align:center;
color:#fff;
z-index:2;
height:100%;
width:100%;
top:0;
bottom:0;
left:0;
right:0;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;

}

.syllabus .wrapper .syllabus-container .category .category-body h2{
    font-size:18px;
    text-align: center;
    padding: 5px;
}
        
        
/*--------syllabus-footer--------*/
        
.syllabus-footer{
    width: 100%;
    text-align: center;
    padding-top: 1px;
}
.syllabus-footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
    color: black;
    text-align: center;
}
.syllabus-footer p{
    color: #555;
    text-align: center;
}
.icons .fa{
    color: #f44336;
    margin: 0 13px;
    cursor: pointer;
    padding: 18px 0;
    justify-content: center;
    
}


    </style>
    
        </html>


        
                

