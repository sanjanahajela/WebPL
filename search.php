<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<!DOCTYPE html>

 <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <style>
      .table{; 
        -webkit-column-count: 3; /* Chrome, Safari, Opera */
        -moz-column-count: 3; /* Firefox */
        column-count: 3;
        -webkit-column-gap: 5000px; /* Chrome, Safari, Opera */
        -moz-column-gap: 5000px; /* Firefox */
        column-gap: 5000px;
      }
    
    </style>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> if you downloaded bootstrap to your computer -->

    <!-- required scripts for IE --> 

     <!-- classic use of the navbar again so that its consistnet going page to page -->
   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class= "navbar-brand"  href = 'home.php'> RateMyProfessor </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            
                                        
            <li class="nav-item"> 
              <a class="nav-link" href="http://localhost:4200">Contact</a>
            </li>
            <li class = 'nav-item'>
                <a class = 'nav-link' href ='login.html'>Login</a>
            </li>

            
            
          </ul>
        </div>  
      </nav>

  <style>
  .body{
    text-align: center;
    padding: 9px 10px 9px 32px;
  }
  
</style>
</div>
<h1 style= "text-align:center;">Search</h1>
<style>
.h1{
  text-align: center;
}
</style>
<div class= "search", style="position:absolute; left:50px; top:200px">
  <title>Enter Professor or University Name</title>
  <form action ='search.php' method= "get">
    <!-- Search form -->

    <div class="md-form mt-0">
      <input class="form-control" type="text" placeholder="Enter a Professor or University Name" aria-label="Search" name= "item" id= "search">
    
    </div>

    <br>
    <div class="center-on-small-only">
      <input class="btn btn-primary" onclick="validate()" value="Submit" type="submit">
    </div> 
    </form>

    <br>
    <br>


    <?php
    #when the user submits the info, since the action is to reload the page, it will read the PHP code, see that it is a 
    #get request, and isset aka the text with name item has a value that was subitted, so the s function will be called
    #which will get the item that was searched, log into the databaes, search every column for a corresponding word by 
    #looping through the database and returning those results
    function s (){
      $item = $_GET['item'];
      $host = 'localhost';
      $dbusername = 'ks4vp';
      $password = 'CSgods123';
      $dbname = 'professor';
      $usertable="professor";
      $conn = new mysqli($host, $dbusername, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $query = "SELECT * from professor where first_name = '$item' OR last_name = '$item' OR university = '$item'";
      $records = mysqli_query($conn,$query); #the query, want to see if the word you searched by is in any column
  
  
        echo '<table style="width:100%;", id="table">';
  
  
        echo "<tr>";
        echo"<th>Professor</th>"; #column name 
        echo "<th>University</th>"; #column name 
        echo"<tr>";
       
        while($p =mysqli_fetch_assoc($records)){
          $fn = $p['first_name'];
          $ln = $p['last_name'];
          echo "<tr>";
          echo "<td>".$p['first_name']. ' ' .$p['last_name']."</td>"; #echo the first and last name together 
          echo "<td>".$p['university']."</td>";
          echo "<td><a href=\"reviews.php?first_name=$fn&last_name=$ln" . "\">Rate!</a></td>"; #redirects to professor page 
          #passes on variables in the url like we learned in class such as first name and last name so they can be used in the 
          #reviews page 
          echo "</tr>";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
      if (isset($_GET['item'])){
        s();

        }
     

      }
      ?>
 
     
    </table>

    <script> 
      //this is an anonymous function
      validate = function () {
        var x = document.getElementById("search");
        
        if (x.value== "") { //if the user didnt enter anythign in to the search input 
          alert("Search must be filled out"); //they will get an alert that they have to enter a name to search for a university of professor
          return false;
  }
        else{
          document.getElementById("table").style.display="table"; //a table displaying corresponding results of the search 
          return false;
        
        }
        
}
</script>



  
  <style>
  .body{
    text-align: center;
  }
  .h1{
    float:center;
  }
  
  .search input[type=text]{
    
    width: 300%;
    height: 50px;
    size: 400px;
    font-size: 20pt;
  }
  </style>
</div>
</html>