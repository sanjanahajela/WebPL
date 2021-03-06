<!DOCTYPE html>
<!-- // Kajal Sheth(ks4vp) and Sanjana Hajela(sh9as)
-->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="reviews.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
  <style>
  .star-rating{
  font-size: 0;
}
.star-rating__wrap{
  display: inline-block;
  font-size: 1rem;
}
.star-rating__wrap:after{
  content: "";
  display: table;
  clear: both;
}
.star-rating__ico{
  float: right;
  padding-left: 2px;
  cursor: pointer;
  color: #FFB300;
}
.star-rating__ico:last-child{
  padding-left: 0;
}
.star-rating__input{
  display: none;
}
.star-rating__ico:hover:before,
.star-rating__ico:hover ~ .star-rating__ico:before,
.star-rating__input:checked ~ .star-rating__ico:before
{
  content: "\f005";
}
  </style>


<title>Review A Professor</title>



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
         <li class = 'nav-item'>
            <a class = 'nav-link' href ='login.html'>Login</a>
          </li>

         
         
       </ul>
     </div>  
   </nav>
    
    
    <h1>Rate A Professor</h1>
   


  <div class = 'row'> 
     <!-- This page will show an example of what a Professor's rating page would look like -->
 <!-- the div class is col-mod-6 because in bootstrap the page is like 12 inches so if you want to split the screen in half you do div of 6 and 6 -->
      <div class = 'col-md-6'>

      


          
          <div class = 'crop'>
             <!-- image of the professor will be displayed -->
              <img src="Profile_Pic.jpg" class="profile-pic" alt="Cinque Terre">


          </div>
          
          
        
        
      </div>


      <div class = 'col-md-6'>

            <form onsubmit= "return validate()" action= "reviews.php" method= "post">
               <!-- after form is submitted you are redirected back to homepage to continue searching/voting -->
            
                <div class = 'rating'>
                    <div class="star-rating">
                        <div class="star-rating__wrap">
                          <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                          <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                          <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                          <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                          <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                          <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                          <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                          <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                          <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                          <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                        </div>
                      </div>

                </div>
                <!-- rating stars -->
                <div class="form-group">
                  <label for="course">Select Course</label>
                  <select class="form-control" id="course" name = "course">
                    <option value="selectcard">--- Please select ---</option>
                    <option value = 'course1'>CS 1110: Introduction To Programming </option>
                    <option value = 'course2'>CS 3230: Algorithms</option>
                    <option value = 'course3'>CS 4640: Web Applications</option>
                  </select>
                  <!-- user selects which course they took with the professor -->
                </div>
                <div class="form-group">
                  <label for="credits">Credit of Course</label>
                  <select multiple class="form-control" id="credits" name = "credits">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <!-- user selects how many credits the class was  -->
                <div class="form-group">
                  <label for="feedback_word">Feedback</label>
                  <textarea class="form-control" id="feedback_word" rows="3"></textarea>
                </div>
                <!-- user provides extensive feedback about professor and class -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="PostPreference">
                    <label class="form-check-label" for="PostPreference">Post as Anonymous</label>
                  </div>
                  <!-- user has the ability to post anonymously so the review doesn't show his or her name -->

                  <br>
                  <button type="submit" class="btn btn-primary" onclick= "validate()">Submit</button>
              </form>
      </div>

      


      <script type="text/javascript">
      //this function is both arrow and annnymous 
        validate =() => {
          var course = document.getElementById('course');
          var feedback_word = document.getElementById('feedback_word');
          var selectedVal = course.options;
          var index = course.selectedIndex; 
           
          if (feedback_word.value.length == 0 || index == 0) //checks if the user didnt enter any feedback or didn't select a course they took with him then 
         {
          alert("All Fields Are Not Complete!"); //error message that all the fields aren't filled out
          return false;
         }
        }

        //this is to display star rating
        //https://webdesign.tutsplus.com/tutorials/a-simple-javascript-technique-for-filling-star-ratings--cms-29450 used this reseource
        function start() {
    var allStars = document.getElementsByClassName("fa-star");
    for(var i = 0; i < allStars.length; i++) {
        var star = allStars[i];
        star.onclick = function() {
            if(this.getAttribute("class") == "far fa-star") {
                this.setAttribute("class", "fas fa-star");
            }
            else
               this.setAttribute("class", "far fa-star");
        };
        
    }
}


start();

        

        </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="main_styles.css" />
<?php

$host = 'localhost';
$dbusername = 'sh9as';
$password = 'CSgods123';
$dbname = 'professor';




// Create connection
$conn = new mysqli($host, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {     
    
    $last_name = $_POST['last_name'];
    $course = $_POST['course'];
    $credit = $_POST['credits'];
    $sql = "INSERT INTO ratings(last_name, course, credits)
            VALUES ('$last_name', '$course', '$credits'";
            if ($conn->query($sql) === TRUE) {
                header('location: http://192.168.64.2/WebPL/reviews.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
          }
    ?> 
</body>

</html>