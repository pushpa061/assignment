<html>
<head>
  <title>Reach us</title>
  <style>
  #bank__body .container {
    text-align: left;
    max-width: 120rem;
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
    display: inline-block;
  }
  .content {
    position: relative;
    width: 100%;
}

.content_title {
    bottom: 0;
    opacity: 1;
  }
  .content_bar {
    font-family: "Circular";
    font-style: normal;
    font-weight: 700;
    color: #000;
      transition-duration: 0.7s;
    transition-delay: 0.3s;
    font-size: 14rem;
    position: absolute;
    left: 0;
    transform: translateY(36%);
  }
  .info{
    color: #000;

}

ul{
    padding: 0;
    list-style: none;
    font-size:20px;
        background: #000000;
}
ul li{
    display: inline-block;
    position: relative;
    line-height: 21px;
    text-align: left;
}
ul li a{
    display: block;
    padding: 8px 25px;
    color: #ffffff;
    text-decoration: none;
}
ul li a:hover{
    color: #fff;
    background:blue;
}
.footer {
   background-color: #f1f1f1;
  padding: 10px;
}

  </style>
</head>
<body>
  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = $phoneErr = "";
  $name = $email = $organization = $comment = $sector = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }



    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>


  <nav>

          <ul>
         <li style="color:white;width:300px;padding-left:100px;"> SAIFPARTNERS</li>

           <li><a href="portfolio.php">PORTFOLIO</a></li>


        <li><a href="team.php">TEAM</a></li>

        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="news.php">NEWS</a></li>
      <li><a href="reachus.php">REACH US</a></li>
<img src="img/white.jpg"  style="height:80%; width:100%">

    </ul>

  </nav>


  <section class="content">

      <div class="container">
        <h1 class="content_bar content_title ">Reach us</h1>
      </div>
    </section>
<section class="info">
  <p style="font-size:40px;">...</p>
  <p style="font-size:30px;">Have a question or proposal in mind?</p>
  <p style="font-size:30px;">Get in touch with us.</p>
</section>
<hr>
<p>Find Us</p>
<a href="https://www.google.co.in/maps/place/SAIF+Partners/@28.451333,77.0958278,17z/data=!3m1!4b1!4m5!3m4!1s0x390d19775327fa3f:0x1d76bb8b778bb88f!8m2!3d28.451333!4d77.0980165">   <img src="img/map.png " align="left" height="500px" width="600px"></a>
<h2  >Send us a message</h2>
<form method="post" action="t.php">
<p>Select Sector</p>
<select name="sector">
    <option>Select Sector</option>
    <option>Consumer</option>
    <option>Education</option>
     <option>Finance</option>
     <option>Healthcare</option>
    <option>Industrials</option>
    <option>Internet</option>
     <option>IT Services</option>
    <option>Logistics</option>
    <option>Mobile</option>
  </select>
  <br>
  <p >Name</p>
  		 <input  type="text" name="name"  >
       <br>
   <p >Email</p>
    <input  type="text" name="email"  >
    <br>
     <p >Organisation</p>
    <input  type="text" name="organisation" >
    <br>
      <p >What's on your mind</p>
      <textarea name="comment" rows="5" cols="40"></textarea>
      <br><br>
      <input type="submit" name="submit" value="submit">
</form>
<p style="font-size:25px;">Address</p>
<p style="font-size:25px;">SAIF Partners, Indiqube, Leela Galleria, Sixth Floor, No. 23/4, 6th Cross, 60ft Road, Kodihalli, Old Airport Road, Ward No. 88 (Old No. 74), Bengaluru 560008</p>
<div class="footer">
<table style="font-size:25px;">
  <col width="400">

  <col width="430">

  <tr>
    <td><button onclick="pushbtn(this)" style=background-color:black;color:white;border-radius:2px;font-size:30;border-color:black>Discover</button>  </td>
    <td><button onclick="pushbtn(this)" style=background-color:black;color:white;border-radius:2px;font-size:30;border-color:black>Contact Information </button></td>
  </tr>

  <tr>
    <td><a href="portfolio.php">PORTFOLIO</a></td>

    <td>
+91 124 4965500</td>
  </tr>
  <tr>
    <td><a href="team.php">TEAM</a></td>
    <td>  www.saifpartners.in</td>
  </tr
  <tr>
    <td><a href="about.php">ABOUT US</a></td>
    <td> info@saifpartners.com</td>
  </tr>
  <tr>
    <td><a href="news.php">NEWS</a></td>

  </tr>
  <tr>
    <td><a href="reachus.php">REACH US</a></td>

  </tr>
  <table>
</div>
</footer>

</body>
</html>
