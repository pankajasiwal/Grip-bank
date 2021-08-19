<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("homepage.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;

  top: 50%;
  left: 50%;
  transform: translate(-50%, -60%);
  color: white;
}
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 12px;}

.block:hover {
  background-color:yellow;
  color: black;
}
.image{
float:right;
margin-bottom:450px;
}

.down{
  margin-top:110px;
}
.navbar1{
  float:right;
}
.navbar2{
  font-family:Courier New;
}
.apna{
  background-color:rgba(255,0,0,0.5);
  font-family:Courier New;
  padding:3px;

}
.contacts{
  margin-top:-20px;
  float:right;
}
.book{
  float:left;
  margin-left:30px;
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>SPARKS BANKING</b></a>
    </div>
    <div class="navbar1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">    <span class="glyphicon glyphicon-home"></span>
      <b>    Home</b>
</a></li> 
 <li class="active"><a href="history.php">     <span class="glyphicon glyphicon-sort"></span>
 <b> Tranfer History</b>
</a></li>

   
    </ul>
  </div>
</nav>

<div class="hero-image">
  <div class="hero-text">
  <div class=" apna">
  <center>
<h2><b>Welcome to the sprak Bank</b></h2>
  <h4><b>Customer satisfaction is our Satisfaction!!</b></h4><br><br>

  <button class="button button4 block"><b>about us</b></button>
 <a href="contact.php"> <button class="button button4 block"><b>Contact us</b></button>

</a></center>
</div>
  </div>
</div>

<div class="container line down">
  
  <div class="col-sm-6 line book">
    <center>
  <img src="book.jpg" alt="Italian Trulli" width=230px height=250px>
  <br>
  <a href="customer.php">
  <button class="button">customer list</button></center>
    </div></a>
    <div class="col-sm-6 line contacts">
      <center>
    <img src="contact.jpg" alt="Italian Trulli" width=250px height=250px>
    <br>
    <a href="forms.php">
    <button class="button">transfer money</button></a>
    </center>
    </div>

</div>

</body>
</html>
























</body>
</html>

