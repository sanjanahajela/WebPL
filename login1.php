<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<?php 
  session_start(); 
  $host = 'localhost';
  $dbusername = 'ks4vp';
  $password = 'CSgods123';
  $dbname = 'professor';


  // Create connection
  $conn = new mysqli($host, $dbusername, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Rate My Professor</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
  <style>
    
    
    label { display: block; }
    .feedback { font-style: italic; color: red; } /* Red font so its a sreious tone when the user enters a username that isn't long enough */
    h1{
        text-align: center; /* title should always be centered  */
    }
    body{
        background-image: url(books.jpg); /* background image from files */
        
    }
    form{
        text-align: center; /* login form is centered, first thing the user sees */
        
    }
    .row{
        text-align: center;
    }
    button:hover { 
      opacity: 0.8;
    }
  </style>
</head>



<body>
        <!-- classic use of the navbar again so that its consistnet going page to page -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class= "navbar-brand"  href = 'home.html'> RateMyProfessor </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 
                 <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
                   <ul class="navbar-nav">
                     <li class= "nav-item">
                       <a class= "nav-link" href= "http://localhost/WebPL/search.php">Search</a>
                                                
                     <li class="nav-item"> 
                       <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                     
         
                     
                     
                   </ul>
                 </div>  
               </nav>

    <div class = 'container'>
            <h1>Login</h1>
            
            <form action="login1.php" method = 'post'>  
                    <label>Username: </label> 
                    <input type="text" id="username" name = "username" autofocus required /> <!-- of course the username is required. autofocus so as soon as the page loads you are already ready to enter in your username -->
                    <div id="user-msg" class="feedback"></div> 
                    <br/>
                    <label>Password: </label> 
                    <input type="password" id="pwd" name= "password" required /> <!-- password is required too-->
                    <div id="pwd-msg" class="feedback"></div> 
                    <div class = 'row'>
                            <div class = 'col-md-6'>
                                    <p><a href="forgotpassword.html">Forgot Password?</a></p> <!-- redirect link in case you forget password  -->
                                    
                                </div>
            
                                <div class = 'col-md-6'>
                                        <p><a href="createaccount.html">Create Account!</a></p> <!-- redirect link in case you haven't made an account on the webstie yet -->
                                </div>

                    </div>
                    
                    <br/>
                    <input type="submit" value="Submit" ><!-- submitting the form -->
                  </form>

    </div>

<script>

   function checkUsername() { //checks if the username is 8 characters or not
      var msg = document.getElementById("user-msg");      
      if (this.value.length < 8 && this.value.length > 0)     	  
         msg.textContent = "Username must be minimum 8 characters"; //error message displayed if the user enters a username less than 8 characters
      else
         msg.textContent = "";
   }
   var user = document.getElementById("username");
   user.addEventListener('blur', checkUsername, false); //calls the function when you blur away from username input field
  
   
  </script>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {     
    $username=$_POST['username'];
    $password=$_POST['password'];
    setcookie('login_user', $username, time() + 3600); 
    $_SESSION['user']=true; 
    $query = "SELECT * FROM login WHERE username= '$username' AND password= '$password'";
    $statement = mysqli_query($conn, $query);
     if ($statement->num_rows != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
</body>
</html>