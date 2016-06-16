<?php
      include('config.php');

      $sql="SELECT * FROM city where city_name='{$_POST['YourLocation']}' ";
      $result = mysql_query($sql);


      

      mysql_close($con);
   ?>