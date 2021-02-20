<!DOCTYPE html>
<html lang="en">
<head>
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
        </style>
    </head>
    <body>
    	
    <div class="header">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="transfermoney.php">Transfer Money</a></li>
            <li><a href="transactionhistory.php">Transaction History</a></li>
        </ul>
    </div>
    </body>
    </html>