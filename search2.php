<?php

              $item = $_GET['search'];
            echo($item);
  
              $host = 'localhost';
              $dbusername = 'ks4vp';
              $password = 'CSgods123';
              $dbname = 'professor';
              $usertable="professor";
              $conn = new mysqli($host, $dbusername, $password, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              else{
                echo("it worked");
              }
              $item = $_POST['search'];
              
      
              $query = "SELECT * from professor where first_name == '$item'"; 
              $records = mysqli_query($conn,$query);
      
              while($row=mysql_fetch_array($result)){ 
                $FirstName  =$row['first_name']; 
                $LastName=$row['last_name']; 
                
                echo "<ul>\n"; 
                echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
                echo "</ul>"; 

      
      
      
            }



?>