<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tranfer money</title>
  <style>
    body{
      padding: 0;
      margin: 0;
      background-image: url(https://images.unsplash.com/photo-1507608158173-1dcec673a2e5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
      /* background-image: url(https://images.unsplash.com/photo-1532210317995-cc56d90177d9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80); */
      background-repeat: no-repeat;
      background-size: cover;
    }
    .outerbox{
      display: flex;
      justify-content: center;
      /* align-items: center; */
      padding-top: 80px;
      
    }
    .container{
      width: 50%;
      height: 550px;
      background-color: black;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0.8;
    }
    .box{
      width: 100%;
      height: 550px;
      /* background-color: aqua;      */
    }
    .content{
      display: flex;
      flex-wrap: wrap;
    }
    .img{
      width: 50%;
      height: 550px;
      background-color: rgb(12, 80, 80);
      background-image: url(./img/signin-form.jpg);
      background-size: cover;
      opacity: 0.5;
    }
    .form{
      width: 50%;
      height: 550px;
      /* background-color: rgb(216, 219, 51); */
      background-image: url(./img/signin-input.jpg);
      background-size: cover;
      opacity: 0.7;
    }
    .form-title{
      text-align: center;
      color: white;
      border-bottom: 2px solid rgb(241, 245, 241);
      padding-bottom: 8px;
    }
    form{
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .inputs{
      /* width: 60%;
      padding-top: 10px;
      margin-top: 10px; */
      width: 80%;
      height: auto;
      /* padding-top: 80px; */
      display: flex;
      flex-direction: column;
      /* background-color: green; */
      margin-top: 100px;
    }
    input{
      margin: 20px;
      padding: 10px 0 5px 10px;
      border: none;
      border-radius: 3px;
      /* box-shadow: 0px 0px 5px grey; */
    }
    button{
      background-color: rgb(176, 237, 255);
      color: rgb(7, 127, 167);
      padding: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 60%;
      /* opacity: 0.9; */
      margin-top: 10px;
      font-weight: bolder;
      font-size: 20px;
    }
    button:hover{
      transform: scale(1.08) translateY(0.1px);
    }
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
  <div class="outerbox">
    <div class="container">
      <div class="box">
        <div class="content">
          <div class="img"></div>
          <div class="form">
            <h2 class="form-title">Transfer center</h2>
            <form action="formplace.php" method="POST">
              <div class="inputs">
                <input type="text" name="sender" id="sender" placeholder="Sender" required>
                <input type="text" name="receiver" id="receiver" placeholder="Receiver" required>
                <input type="number" name="money_transfer" id="money_transfer" placeholder="Money Transfer" required>
              </div>
              <button type="submit">Transfer Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>