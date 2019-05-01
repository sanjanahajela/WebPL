<?php
    $item = $_GET['search'];
  $host = '192.168.64.2';
  $dbusername = 'sh9as';
  $password = 'CSgods123';
  $dbname = 'professor';
  $usertable="professor";
  $conn = new mysqli($host, $dbusername, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
      $query = "SELECT * from professor where first_name == '$item'";
      $records = mysqli_query($conn,$query);
    ?>


  <table style="width:100%; display:none;", id="table">


      <tr>
        <th>Professor</th>
        <th>University</th>
      <tr>
      <?php
      while($p =mysqli_fetch_assoc($records)){
        echo "<tr>";
        echo "<td>".$p['first_name']. ' ' .$p['last_name']."</td>";
        echo "<td>".$p['university']."</td>";
        echo "</tr>";
      }
    
      ?>
 
     
    </table>