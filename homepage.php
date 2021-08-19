 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banking System | Home </title>

  <style>
    *{
      margin: 0;
      padding: 0;
    }
    .navbar{
      width: 100%;
      height: 65px;
      /* background-color: antiquewhite; */
      position: fixed;
    }

    .logo{
      width: 190px;
      height: 54px;
      /* background-color: aqua; */
      /* padding: 1px 0 0 10px; */
      position: absolute;
      left: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Andada Pro', serif;
      font-size: 40px;
      color: grey;
      border-bottom: 2px solid grey;
      /* text-shadow: 0px  0px 04px #0ea4a4; */
    }

    .nav-list{
      width: 50%;
      height: 64px;
      position: absolute;
      left: 700px;
      display: flex;
      align-items: center;
      /* background-color: blue; */
      justify-content: space-evenly;
    }

    .nav-item{
      width: 100%;
      height: 50px;
      list-style: none;
      font-size: 22px;
      font-weight: bolder;
      margin: 15px;
      /* background-color: brown; */
      padding-top: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    a:hover{
      /* color: rgba(0, 0, 255, 0.562); */
      transform: scale(1.02) translateY(-2px);
    }
    a{
      text-decoration: none;
      color: grey;
    }

    .pic{
      background-image: url(home.jpg);
      width: 100%;
      height: 800px;
      background-size: cover;
    }

    .welcome{
      position: absolute;
      top: 30%;
      left: 2%;
      /* background-color: wheat; */
      width: 50%;
      height: 100px;
    }
    .text{
      position: fixed;
      color: #f82a4d94;
      font-size: 40px;
    }
    .sign-btn{
      position: fixed;
      top: 40%;
      left: 8%;
      width: 150px;
      height: 45px;
      text-align: center;
      font-size: 25px;
      font-family: cursive;
      font-weight: bolder;
      background-color: rgba(255, 192, 203, 0.541);
      border: none;
      border-radius: 10px;
    }
    .btn{
      color: rgb(185, 34, 84);
    }
    .sign-btn:hover{
      transform: scale(1.05) translateY(-2px);
    }
    
  </style>


</head>
<body>
  <div class="container">
    <div class="pic"> 
        <nav class="navbar">
          <h1 class="logo">Grip Bank</h1>
          <ul class="nav-list">
            <li class="nav-item"><a href="history.php">Account History </a> </li>
            <li class="nav-item"><a href="sign.php">Transfer Money</a></li>
            <li class="nav-item"><a href="customer.php">Account Holder</a></li>
            <li class="nav-item"><a href="#">Contact Us</a></li>
          </ul>
      </nav>
      <div class="welcome">
        <h2 class="text">Welcome to our Bank</h2>
      </div>
      <p><button class="sign-btn" type="submit"><a class="btn" target="_blank" href="./signIn.html">Sign Up</a></button></p>
    </div>
   
  </div>
</body>
</html>











