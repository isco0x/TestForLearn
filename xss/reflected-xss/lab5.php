<?php

if(isset($_GET['link'])){
$link =  $_GET['link'];
$link = htmlspecialchars($link); 
}
?>

<h1>Lab 5</h1>
<h2>
        if you can hack this site do now hahaha
</h2>
<h4>
        <form>
                <h3>search about domain like this "google.com".</h3>
                Enter your domin : <input name="link"  type = "text" >
        </form>
	<?php 
	echo $link;
	echo "<pre><h5>that is  <a href ='$link'  value='$link' >link</a></h5>"
 ?>
        </h4>


<p>Hint: in some cases you can bybasses htmlspeialchars function, so look if you can do that.</p>
 
