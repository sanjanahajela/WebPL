<?php

              $item = $_GET['search'];
            
  
              $host = 'localhost';
              $dbusername = 'ks4vp';
              $password = 'CSgods123';
              $dbname = 'professor';
              $usertable="professor";
              $conn = new mysqli($host, $dbusername, $password, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }


     
              
              $query = "SELECT * from professor where first_name == 'David'"; 
              $records = mysqli_query($conn, $query);
      
              while($row = mysqli_fetch_assoc($records)){ 
                echo('here2');
                $FirstName  =$row['first_name']; 
                $LastName=$row['last_name']; 
                
                echo "<ul>\n"; 
                echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
                echo "</ul>"; 

      
      
      
            }



?>