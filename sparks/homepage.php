
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&Cinzel">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
     body {
         background-color: #DFCDBB;
         background-position: absolute;
         background-repeat: no-repeat;
         background-size: cover;
         margin: 0;
         padding: 0;
        }
        .header{
                width: 100%;
                z-index: 100;
                position: fixed;
                background-color: rgba(0,0,0,.2);
            }

            .header ul{
                text-align: center;
            }

            .header ul li{
                list-style: none;
                display: inline-block;
            }

            .header ul li a{
                display: block;
                text-decoration: none;
                text-transform: uppercase;
                color: #fff;
                font-size: 20px;
                font-family: 'Raleway', sans-serif;
                letter-spacing: 2px;
                font-weight: 600;
                padding: 25px;
                transition: all ease 0.5s;
            }

            .header ul li a:hover{
                background-color: #211b4385;

            }

.parallax {
  /* The image used */
  background-image: url("https://images.unsplash.com/photo-1586021280718-53fbadcb65a7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8ZmluYW5jZXxlbnwwfDB8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
#wrap {
        width: 80%;
        color: rgb(14, 14, 14);
        margin: auto;
        overflow: hidden;
        padding-top: 0px;
        font-family: 'Raleway', sans-serif;
        font-size: 20px;
        text-align: justify;
        padding-left: 80px;
        padding-right: 80px;
        padding-bottom: 80px;
        border: #fff;
        }
        * {
       box-sizing: border-box;
        }

/* Create two equal columns that floats next to each other */
.column {
  float: right;
  width: 50%;
  padding: 10px;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h1{
    text-align: center;
    color: black;
    font-weight: bold;
    font-family: 'Raleway', sans-serif;
    font-size: 40px;
}
.fa {
  background-color: #6E2C00;
  color: #DFCDBB;
  font-size: 30px;
}

.fa:hover {
    opacity: 0.7;
}
.im{
  border: 5px solid #6E2C00;
}
.im:hover{
  opacity: 0.5;
}
    </style>
    <title>Basic Banking System</title>

</head>
<body>
    <div class="header">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="transfermoney.php">Transfer Money</a></li>
            <li><a href="transactionhistory.php">Transaction History</a></li>
        </ul>
    </div>
    <div class="section">
   
</div>
<div class="parallax">
</div>
<br><br>
<h1> WELCOME TO THE BANKING SYSTEM</h1>
<br><br>
<div class="row"><center>
  <div class="column">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
                  <div class="column">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  
            </div>
         </center>
         <br><br><br><br>
         <center>
          <p style="font-family: raleway">Designed by Jenise James</p>
          <p style="font-family: raleway">The Sparks Foundation</p>
         </center>
         <br>

</body>
</html>