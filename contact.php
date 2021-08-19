<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 25px;
  border: none;
  cursor: pointer;
  fontfont-size:10px;
}
input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .navbar1{
  float:right;
}
.navbar2{
  font-family:Courier New;
}
}
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>




<div class="container">
  <div style="text-align:center">
    <h2><b>Contact Us</b></h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="contac.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname"><b>FULL NAME</b></label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname"><b>ACCOUNT NUMBER</b></label>
        <input type="text" id="lname" name="lastname" placeholder="Enter account Number">
        <label for="fname"><b>CONTACT NO.</b></label>
        <input type="text" id="fname" name="firstname" placeholder="contact number">

        <label for="country"><b>PROMBLEM RELATED </b></label>
        <select id="problem" name="problem">
          <option value=""></option>
          <option value="Tranfering money">transfering money</option>
          <option value="Money">Money not credited</option>
          <option value="other">other</option>

        </select>
        <label for="subject"><b>Elaborate your problem here</b></label>
        <textarea id="subject" name="subject" placeholder="Write here.." style="height:170px"></textarea>
       <a href="homepage.php"> <input type="submit" value="Submit"></a>
   
      </form>
    </div>
  </div>
</div>

</body>
</html>