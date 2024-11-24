<h1>Lab 2</h1>
<h2>
        if you can hack this site do now hahaha
</h2>
<h2>
        <form>
                Enter your name : <input name="name"  type = "text" >
        </form>
</h2>

<?php

header ("X-XSS-Protection: 0");

if(isset($_GET['name'] ))
{
    $name = str_replace( '<script>', '', $_GET['name'] );

    echo "<pre>Hello " . $name. ", you will a professional one day.</pre>";
}

?> 
