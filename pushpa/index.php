
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
var timerid = 0;
var images = new Array(	"img/imae1.jpg",
			"img/imae2.jpg",
			"img/imae4.jpg",
			"img/imae5.jpg",
      "img/imae6.jpg",
			"img/imae7.jpg",
			"img/imae8.jpg"
    );
var countimages = 0;
function startTime()
{
	if(timerid)
	{
		timerid = 0;
	}
	var tDate = new Date();

	if(countimages == images.length)
	{
		countimages = 0;
	}
	if(tDate.getSeconds() % 5 == 0)
	{
		document.getElementById("img1").src = images[countimages];
	}
	countimages++;

	timerid = setTimeout("startTime()", 1000);
}
</script>
<style>
body {
  margin: 0;
}
#img1
{
   width:100%;
   height:100%;
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

</style>

</head>

<body onload="startTime();">
  <nav>

  				<ul>
         <li style="color:white;width:300px;padding-left:100px;"> SAIFPARTNERS</li>
                 <li><a href="portfolio.php">PORTFOLIO</a></li>


        <li><a href="team.php">TEAM</a></li>

        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="#">NEWS</a></li>
      <li><a href="reachus.php">REACH US</a></li>
      <img id="img1" src="img/imae4.jpg" / >

    </ul>

  </nav>





</body>
</html>
