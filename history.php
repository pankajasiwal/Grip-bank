<?php
   include ("connection.php");
   $query = "SELECT * FROM transfer";
  $result = $conn->query($query);
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Transfer History</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <style>
      .table__title{
    text-align: center;
    width: 100%;
}
td {
    background-color: #E4F5D4;
    border: 1px solid black;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight: lighter;
}

.const__table {
    margin-left: auto;
    margin-right: auto;
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
.lamp{
    margin-top:20px;
    padding: 5px;
}
body{
    background: url(brown-white.jpg);
 
}

.navbar1{
  float:right;
}
.navbar2{
  font-family:Courier New;
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
    .pad{
      padding-top:50px;
    }
    
      </style>
<body>
<nav class="navbar">
          <h1 class="logo">Grip Bank</h1>
          <ul class="nav-list">
            <li class="nav-item"><a href="history.php">Account History </a> </li>
            <li class="nav-item"><a href="sign.php">Transfer Money</a></li>
            <li class="nav-item"><a href="customer.php">Account Holder</a></li>
            <li class="nav-item"><a href="#">Contact Us</a></li>
          </ul>
      </nav>
<div class="pad">
<section class="table" id="table">
                <div class="table__container ">
                    <h1 class="table__title ">Transfer History</h1>
                    <table class="const__table">
                        <tr>
                          <th>ID</th>
                            <th>Sender</th>
                            <th>Reciver</th>
                            <th>Money Transferd</th>
                            <th>Date and Time</th>
                            

                         
                        </tr>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                                <td><?php echo $rows['ID'];?></td>
                                <td><?php echo $rows['Sender'];?></td>
                                <td><?php echo $rows['Reciver'];?></td>
                                <td><?php echo $rows['Money'];?></td>
                                <td><?php echo $rows['Date_and_time'];?></td>

                            </tr>
                        <?php
                            }
                        ?>
                    </table>
             
                </div>
              
            </section>
       </div>    

</body>
</html>