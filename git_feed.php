<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RSS Feed</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
	

function display_ct() {
var strcount
var x = new Date()
var x1=x.toISOString();
document.getElementById('ct').innerHTML = x1;
mytime=setTimeout('display_ct()',1000);
}


function calctime()
{	var t=setTimeout("calctime()",1000);
var p=Math.floor(t/120);
var s= t-p*120;

    document.getElementById('time').innerHTML="Time Spent:" +p+ " Minutes" + " : "+s/2 + " Seconds";
    console.log(t);

}
function start(){
	display_ct();
	calctime();
}

</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



</head>

<body>

 
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">RSS Feeds</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" >Home</a></li>
                <li><a href="rssfeed.html" target="_blank">Search more feeds</a></li>

               <li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
<div class="pull-right">
     <body onload="start()">
      <strong> <span id='ct' ></span></strong></br>
       <strong> <span id='time' ></span></strong>
</body>
</div>
   <!-- <body onload=display_ct();>
<span id='ct' ></span>
</body>-->
        <h1>RSS Feeds</h1>

       

 <!--<body onload=calctime();>
<span id='time'> Hello</span>
</body> -->




     
        <p><a href="rssfeed.html" target="_blank" class="btn btn-success btn-lg">Search more Feeds &raquo;</a></p>
    </div>
    <div class="row">
        <div class="col-sm-12">
        <?php
      // $url =$_POST['name'];
        $url = "https://github.com/raj-maurya.atom";
         echo   "<h4>Showing <a href='$url'> $url </a> feeds!</h4>";

            ?>

<hr>
<?php 

$html = " ";
//$url = "https://www.reddit.com/.rss";
//$url =$_POST['name'];
$xml = simplexml_load_file($url);
$uri = $xml->entry[0]->author->uri;
$stitle = $xml->title;
echo   "<h4>Showing <a href='$uri'> $stitle </a> feeds!</h4>";

for($i = 0; $i < 30; $i++){

//$author = $xml->entry[$i]->author->name;
	$links = $xml->entry[$i]->link;
	$id = $xml->entry[$i]->id;
	$title = $xml->entry[$i]->title;
	$content = $xml->entry[$i]->content;
	$html .= "<div><h3><a href='$links' >$title</a></h3><br>$content </br> <br> <h2>link= $links </h2> <hr>";
//echo "<p><div$i><a href='#' class='btn btn-success'>Learn More</a></p>";
}

 echo $html;  

?>

        </div>
       

    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <footer>
              <center> Created by <p><a href="mailto:rajkmaurya111@gmail.com"><strong><h5>Raj Kumar Maurya</h5></strong></p> 
                 <a href="https://github.com/raj-maurya/RSS-Feed-Reader" ><span class="fa fa-github"></span>See on GitHub</a></center> 
            </footer>
        </div>
    </div>
</div>
</body>
</html>                                		