<html>
<head>
  <title>PORTFOLIO</title>
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
.tabcst {
    overflow: hidden;
}
.button {
  background-color:#000000;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  border-radius:25px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {

  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  border-radius:25px;
  background-color: #8f9691;
  padding-right: 25px;

}

.footer {
   background-color: #f1f1f1;
  padding: 10px;
}
.button:hover span:after {
  opacity: 1;
  right: 0;
  display: block;
}

  </style>
</head>
<body>
  <nav>

          <ul>
         <li style="color:white;width:300px;padding-left:100px;"> SAIFPARTNERS</li>

           <li><a href="portfolio.php">PORTFOLIO</a></li>


        <li><a href="team.php">TEAM</a></li>

        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="news.php">NEWS</a></li>
      <li><a href="reachus.php">REACH US</a></li>
    <img src="img/prt.jpg"  style="height:90%; width:100%">

    </ul>

  </nav>


  <section class="content">

      <div class="container">
        <h1 class="content_bar content_title ">Portfolio</h1>
      </div>
    </section>
<section class="info">
  <p style="font-size:40px;">...</p>
  <p style="font-size:30px;">We partner with game changing companies
to help realize their vision.</p>
<div class="tabcst" style="border-bottom: 2px solid #000; padding-bottom:3%;">

<a href="private.php"  target="iframe_a"> <button class="button" onclick="my()"><span>Private companies </span></button></a>
<a href="public.php"  target="iframe_a">  <button class="button" onclick="myname()" ><span>Public companies</span></button></a>
      </div>
      <hr>
       <div id="id1" >
      <iframe height="100%" width="100%"  name="iframe_a" style="border:none;"></iframe>

       </div>
</section>
<script>
    function my()
        {
            document.getElementById("id1").target="iframe_a";

        }
    function myname()
        {
        document.getElementById("id1").target="iframe_b";
        }
    </script>
    <hr>
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
<hr>
</body>
</html>
