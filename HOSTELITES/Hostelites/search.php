<!DOCTYPE html>
<html>
<head>

<title>Canteens</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,html
    {
      background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(Admin_home .jpg);
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height:100%;
    }
  

     .bgimg
    {
     
        padding-top: 1%;
        padding-bottom: 2%;
     background-repeat: no-repeat;
     opacity: 0.6;
            height:inherit;
            width:inherit;
            background-position: center;
            background-size:cover;
    }
     
    .container
    {
    margin:auto;
        
    }

body {
  font-family: Arial, Helvetica, sans-serif;
  
}
    .canteen{
        color:white;
        background-color: black;
        height: 120px;
        margin-left: -40px;
        margin-top: -63px;
        margin-right: -40px;
         
          }
    .canteen img{
        float: left;
        margin-left: 400px;
        margin-top: 25px;
        height: 80px;
        width: 80px;
        
    }
    .bms {
        margin-right: 400px;
        text-align: center;
        padding-top: 35px;
        font-family:Lucida Handwriting;
        font-size: 47px;
    }
.column {
  float: left;
  width: 25%;
margin-left: 50px;

  padding: 0 10px;
}

.row {
    margin-top: 80px;
   
    }

.row:after {
  content: "";
    margin-top: 50px;
    
  display: table;
  clear: both;
}


.card {
    text-align: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
    float: left;
    margin-left: 30px;
  text-align: center;
  background-color: black;
  
}


.flip-card { 
  background-color: transparent;
  width: 300px;
  height: 300px;
  
  perspective: 1000px;
    font-family: Bradley Hand ITC;
    color:white;
}
.flip-card-inner {
  position: relative;
  width: 300px;
  height: 250px;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
    background-color:white;
  color: black;
    font-family: Ink Free;
    font-size: 17px;
  transform: rotateY(180deg);
    margin-bottom: 10px;
    padding-bottom: 10px;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  font-size: 26px;
    margin-bottom: 10px;
  padding: 5px;
  width: 150px;
    height: 40px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    /* For mobile phones: */
[class*="col-"] {
  width: 100%;
}
.menu1
    {
        background-color: black;
        width:25%;
       margin-top: 5%;
        margin-left: 37%;
        color: white;
        font-family: Bradley Hand ITC;
        font-size: 25px;
    }
    .bar
    {
        font-family: "Amatic SC", sans-serif}
     .dropdown-content {
  display: none;
  position: absolute;
    
  background-color:white;
       margin-right: -40px;
 min-width= 300px;
    
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
    .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration:none;
  display: block;
}
   
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .fa fa-user fa-2x {background-color: #3e8e41;}
* {box-sizing: border-box;}


.topnav {
  overflow: hidden;
  opacity: 0.6;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: black;
  color: black;
}



.topnav a.active {
  background-color: black;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
  .container1 {
 background-color: #f2f2f2;
 padding: 5px 20px 15px 20px;
 border: 1px solid lightgrey;
 width: 63%;
 border-radius: 3px;
 margin-left: 19px;
 opacity: 0.6;
}
.checked {
  color: orange;
}
.rate
{
  margin-top:-20px;
  margin-left:300px;
}
input[type=text] {
 width: 100%;
 margin-bottom: 20px;
 padding: 12px;
 border: 1px solid #ccc;
 border-radius: 3px;
}
}
</style>
</head>
<body>
<div class="background">
<div class="container">
<div class="topnav">
  <a class="active" href="#home">Back</a>

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search for USN" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>

<div class="bgimg">
    

    <div class="card">
	
        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 1</b></font>
            
          <div class="flip-card-inner">
              <div class="flip-card-front">
        
                  <img src="dosa_without_watermark.jpg"  style="width:300px;height:250px;">
              </div>
              <div class="flip-card-back">
              <h2>VIDHYARTHI KHANA</h2> 
              <p><b>main canteen of the college</b></p> 
              <p><b>opposite to the new building</b></p>
              <a href="menu1_1.php">   <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
              </div>
          </div>
        </div>
      </div>

<div class="container1" style="margin-left:35%;margin-top:5%;background-color: #f2f2f2;padding: 30px 30px 30px 30px;border: 5px solid black;width:50%;height:40%;font-family:Ink Free;">
 <b> CANTEEN NAME:<b>  <input style="border-radius: 20px;width:40%;margin-left:65px;  letter-spacing: 1px;text-align: center;" type = "text" value = "VIDHYARTHI KHANNA"><br><br>
      
      MOBILE: <input style="border-radius: 20px;width:40%;margin-left:115px;  letter-spacing: 1px;text-align: center;" type = "text" value = "9980026114"><br> <br>
       RATINGS: 
       <div class="rate"style="margin-top:-20px;margin-left:230px;" >
       <span class="fa fa-star checked" style="color:orange;">
       </span><span class="fa fa-star checked" style="color:orange;">
       </span><span class="fa fa-star checked"style="color:orange;">
       </span><span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
       <br>
       </div>

</div>
</div>
</body>
</html>

