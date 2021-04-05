<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab task </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">

</head>

<body>
  <div class="header">
    <div class="container"></div>
    <div class="navbar">
      <div class="logo">
      
        <img src="images/logo.png" alt="loading" width="150px" />
        <?php
				session_start();
				if(isset($_SESSION['user']))
        {
          
				  include 'database.php';
          $ID= $_SESSION["ID"];
          $sql=mysqli_query($conn,"SELECT * FROM customer where ID='$ID' ");
          $row  = mysqli_fetch_array($sql);
          // echo "<h1> $row['user'] </h1>" ;
          echo "<h1>";
          echo "welcome ";
          echo $row['user'];
          echo " :) ";
          echo "</h1>"; 
        }
        else
        {
          echo "<h1>";
          echo "welcome ";
          echo " :) ";
          echo "</h1>"; 
        }
        // echo $row['user'];
         ?>
      </div>

      <nav>
        <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#category">category</a></li>
          <li><a href="contact.xml">Contact</a></li>
          <li><a href="xml/user.xml">xml</a></li>
          <!-- <li><a href="registration_form.html">register_from</a></li> -->
          <li><a href="register.php">register_new</a></li>
          <li><a href="login.php">login</a></li>
          <?php
          // session_start();
          if(isset($_SESSION['user']))
          {
            echo "<li>" ;
            echo "<a href='logout.php'> ";
            echo "logout";
            echo "</a>";
            echo "</li>";
          }
          ?>
        </ul>
      </nav>
      <img src="images/cart.png" alt="cart" width="30px" height="30px" />

    </div>
    <div class="row">
      <div class="col-2">
        <h1> Welcome to Retail Management <br>Web page </h1>
        <p>
          Retail Management is the process which helps the customers to procure the desired merchandise
          form the retail stores for their personal use. It includes all the steps required to bring the
          customers into the store and fulfill their buying needs.<br>
          Retail management makes shopping a pleasurable experience and ensures the customers leave the
          store with a smile. In simpler words, retail management helps customers shop without any
          difficulty.
        </p>
        <a href="" class="btn">Explore now &#8594;</a>
      </div>
      <div class="col-2">
        <img src="images/image4.png" alt="loading" width=100% height=100%>
      </div>
    </div>
  </div>
  </div>


  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="images/category-1.jfif" alt="" />
        </div>
        <div class="col-3">
          <img src="images/category-2.jpg" alt="" />
        </div>
        <div class="col-3">
          <img src="images/category-3.png" alt="" />
        </div>

      </div>
    </div>
  </div>
  <!-- featured products -->
  <div class="small-container">
    <h2> featured products using frames</h2>
    <div class="row">
      <div class="col-4">
        <img src="images/product-1" alt="">
      </div>
    </div>
  </div>
  <div class="frame">
    <h3> about retail mangement</h3>
      <iframe src="https://accountlearning.com/retail-store-meaning-types-of-retail-stores/" 
      width="45%" height="400" style="margin: auto;" >
      </iframe>
      <iframe src="product.html"
      width="45%" height="400"  style="float : right;">
      </iframe>
  </div>
  <img src="images/RMS_1.JPG" alt="loading" width=100% height=700 style="border:5px solid black">

  <div class="bgDesign">
    <h1 class="CustomerList"> <u> Customer List </u> </h1>
    <table style="width:50%" , width="1px solid black">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>date</th>
        <th>Amount</th>
      </tr>
      <tr>
        <td>pankaj</td>
        <td>maran</td>
        <td>22</td>
        <td>03/02/2021</td>
        <td>500</td>

      </tr>
      <tr>
        <td>harsh</td>
        <td>bhabar</td>
        <td>22</td>
        <td>04/02/2021</td>
        <td>1000</td>

      </tr>
      <tr>
        <td>amit</td>
        <td>gupta</td>
        <td>22</td>
        <td>05/02/2021</td>
        <td>900</td>

      </tr>
      <tr>
        <td>vishes</td>
        <td>kumar</td>
        <td>22</td>
        <td>05/02/2021</td>
        <td>900</td>
      </tr>
    </table>
    <h2>Itmes available</h2>
    <ul class="a">
      <li>fruits </li>
      <li>vegeis</li>
      <li>groceries</li>
    </ul>
    <h2>services</h2>
    <ul>
      <li>Inventroy management </li>
      <li>CRM</li>
      <li>Reporting and anslysis</li>
    </ul>
    <br>
    <p> To know more about <abbr title="Retail management system"> RMS </abbr> system please
      <a href="https://zedaxis.com/zed-insights/what-is-retail-management-system/"> click here </a>
    </p>
  </div>
</body>

</html>