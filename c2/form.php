

<?php $img = $_GET['cod']; 

echo '<img src="/$img/"/>' ?>


<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "cod" name="cod" id="cod" />
         <input type = "submit" />
      </form>
      
   </body>
</html>