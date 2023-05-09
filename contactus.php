<?php
//get data from form 
$sent = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "18099@arsd.du.ac.in";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    $sent = true;
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
/* Import Google font - Poppins */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}
body {
  min-height: 100vh;
  background: rgb(130, 106, 251);
}
#my-container{
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
textarea{
    columns: 50;
}
textarea{
    height: 8em;
    width: 41em;
}
/*Responsive*/
@media screen and (max-width: 750px) {
  .form .column {
    flex-wrap: wrap;
  }
  textarea{
    height: 5em;
    width: 15em;
}
}
    </style>
  </head>
  <body>
    <!-- NavBar Code Starts -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="logo">
            <img src="../IMG/FETRONIX.jpg" height="55" alt="logo" />
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><b>Contact Us</b></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
      <!-- NavBar Code Ends -->
      <?php
      // if($sent){
      echo '<div class="alert alert-success" role="alert">
      Mail sent Sucessfully!
    </div>';
      //}
      ?>
      <div id="my-container">
        <section class="container">
          <header>Registration Form</header>
          <form action="contactus.php" method="post" class="form">
            <div class="input-box">
              <label>Full Name</label>
              <input type="text" name="name" placeholder="Enter full name" required />
            </div>
            <div class="input-box">
              <label>Email Address</label>
              <input type="text" name="email" placeholder="Enter email address" required />
            </div>
            <div class="input-box">
              <label>Your message</label>
              <textarea id="issue" name="msg" style="padding:0 15px;" placeholder="Enter your message here..." required></textarea>
            </div>
            <button>Submit</button>
          </form>
        </section>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>