<h1>Lab 4</h1>
<h2>
        if you can hack this site do now hahaha
</h2>
<h4>
        <form>
		<h3>whatever you are looking for, find it now.</h3>
                search : <input name='search'  type = 'search' >
        </form>
	</h4>

<?php

if(isset($_GET['search'])){
$search =  $_GET['search'];
$search = htmlspecialchars($search); 
echo "<pre><h5>look it is here <a href = 'lab4.php'  value='$search' >$search</a></h5>";
}

?>
