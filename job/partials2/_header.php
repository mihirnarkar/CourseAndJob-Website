<?php
session_start();


echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="/halkat">Train->Job</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/halkat">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/halkat/about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/halkat/contact.php">Contact Us</a>
      </li>
    </ul>';

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      </form>
      <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle mx-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        profile
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">'.$_SESSION['email'].'</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="jobapplication.php">My application</a></li>
        <li><a class="dropdown-item" href="myresume.php">My Resume</a></li>
      </ul>
    </div>
    <a href="partials2/_logout.php" class="btn btn-outline-success ml-2">Logout</a>';
    }
    
    else{
      echo '<form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>';

    }


  echo '</div>
</div>
</nav>';

// <div class="mx-2">
//         <button class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
//         <button class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>
//     </div>';


// <button class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>

include 'partials2/_loginModal.php';
// include 'partials2/_signupModal.php';
// include 'partials2/_signupHandle.php';



// signup form:- 
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> You account has created,login now.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Sorry!</strong> email already in use OR password dont match.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}



// contact form:-
if(isset($_GET['contactsuccess']) && $_GET['contactsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Your details!</strong> has recorded.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if(isset($_GET['jobapplysuccess']) && $_GET['jobapplysuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Your application has submitted!</strong> Track it in application status
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}





?>