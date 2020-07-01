<?php


// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style >
        .EButtons{
            text-align: Right;
        }

        .title{
            text-align: Left;
        }

        * {
             box-sizing: border-box;
          }

        body{ font: 14px sans-serif; text-align: center; }

        header {
            background-color: #666;
            padding: 30px;
            font-size: 35px;
            color: white;
            }

        nav {
            float: left;
            width: 30%;
            height: 500px; /* only for demonstration, should be removed */
            background: #ccc;
            padding: 20px;
            }

        nav ul {
            list-style-type: none;
            padding: 0;
            }

        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #f1f1f1;
            height: 500px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {
            nav, article {
            width: 100%;
            height: auto;
        }
}

</style>
</head>
<body>

    <header>
        <div class="title">
            <h2>Reckon</h2>
        </div>
        <div class="EButtons">
            <table style="width:40%">
            <tr>
                
                <td><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></td>
                <td><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></td>
            </tr>
            </table>
        </div> 
    </header>

    <section>
      <nav>
        <ul>
            <li><a href="customerentry.php">Customer Entry</a></li>
            <li><a href="purchase.php">Purchase Entry</a></li>
            <li><a href="stockmanagement.php">Stock Managemen<a><li>
            <li><a href="Bill.php">Bill Generation</a></li>
            
        </ul>
       </nav> 

       <article>
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        </article>

        <footer>
            <p>A product of Mind's Eye</p>
        </footer>
        
</body>
</html>