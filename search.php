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
        -webkit-column-gap: 500px; /* Chrome, Safari, Opera */
        -moz-column-gap: 500px; /* Firefox */
        column-gap: 500px;
      }
    
    </style>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> if you downloaded bootstrap to your computer -->

    <!-- required scripts for IE --> 

     <!-- classic use of the navbar again so that its consistnet going page to page -->
   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class= "navbar-brand"  href = 'home.html'> RateMyProfessor </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            
                                        
            <li class="nav-item"> 
              <a class="nav-link" href="contact.html">Contact</a>
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
  <form onsubmit= "return validate()" method= "GET" action = "search2.php">
    <!-- Search form -->

    <div class="md-form mt-0">
      <input class="form-control" type="text" placeholder="Enter a Professor or University Name" aria-label="Search" name= "search" id= "search">
    
    </div>

    <br>
    <div class="center-on-small-only">
      <input  type="submit" name="submit" value="Search"> 
       <!--  <a class="btn btn-primary" onclick="validate()">Submit</a> -->
     
    </div> 

    <br>
    <br>

    </form>



  <table style="width:100%; display:none;", id="table">


      <tr>
        <th>Professor</th>
        <th>University</th>
      <tr>
      <?php

    
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
