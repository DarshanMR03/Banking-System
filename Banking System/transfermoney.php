<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
   
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      body{
          background-image: url(back2.png);
          background-size: cover;
      }
      .container{
          background-color: #fff;
          border-bottom-left-radius: 30px;
          border-bottom-right-radius: 30px;
          border-top-left-radius: 30px;
          border-top-right-radius: 30px;
          position:relative;
          top:100px;
        
      }
      .nav {
    width: 100%;
    z-index: 2;
}

.nav ul {
    position: absolute;
    padding-left: 900px;
}

.nav ul li {
    list-style-type: none;
    display: inline-block;
    padding-left: 30px;
    padding-top: 20px;
    font-size: 20px;
}

.nav ul li a {
    color: #fff;
}
h5 {
position:absolute;
    color: grey;
  padding-left: 270px;
    font-size: 15px;
    padding-top: 20px;
}
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<div class="nav">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="allusers.php">Users</a></li>
    <li><a href="transfermoney.php">Transfer Money</a></li>
    <li><a href="transactionhistory.php">Transfer History</a></li>
   
  </ul>
</div>
<!-- <div class="total"></div> -->
<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['uid'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['uid'] ;?>"> <button type="button" class="btn">Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    <h5>Made by Darshan MR,Nitte Meenakshi Institute of Technology(2021)</h5>
                    </div>
                </div>
            </div> 
         </div>
                