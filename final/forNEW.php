

 <form method="POST">
 <label for=name>NAME:</label>
 <input type="text" name=name required>
 <input type="submit" value="Submit">
 </form>

<?php
          if($_SERVER["REQUEST_METHOD"]="POST");
          $name=$_POST["name"];
          echo"$name";
          echo"<br>";
     
          $good= array("red","green","blue");
          echo "The Color are: $good[0]";

?>          
