<h1>Lab 3</h1>
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

// Is there any input?
if( isset($_GET['name'])) {
    $name = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET[ 'name' ] );
    echo "<pre>Hello,". $name. " this is how progress happens.</pre>";
}

?> 
