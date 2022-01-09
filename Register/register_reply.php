<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="/style/style.css">
<style>
    .header {
  
  text-align: center;
  background: #1abc9c;
  color: white;
}

    h1 {

      text-align: center;
      color: #006600;
      font-weight: bold;
      transition: 0.5s;
      font-family: 'Courier New', monospace;
    }

    h1:hover {
      text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc,
        0 3px 0 #ccc, 0 4px 0 #ccc,
        0 5px 0 #ccc, 0 6px 0 #ccc,
        0 7px 0 #ccc, 0 8px 0 #ccc,
        0 9px 0 #ccc, 0 10px 0 #ccc,
        0 11px 0 #ccc, 0 12px 0 #ccc,
        0 20px 30px rgba(0, 0, 0, 0.5);
    }
    a:hover{
    color: green;
    font-weight: bold;
  }
  
  </style>
  <title>Home</title>
</head>

<body style="font-family: Helvetica, sans-serif;">
  <!--Navbar Start-->
  <div>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!--   <img src="/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">-->
      <a class="navbar-brand" href="/index.php">EventName</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">

          <li class="nav-item active">
            <a class="nav-link font"  href="/index.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="/About/Conference.php">Conference</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/About/Gwalior.php">Gwalior</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/About/Pccoe.php">Pccoe</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/About/Pune.php">Pune</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Scope.php">Scope</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Paper_Submission.php">Paper Submission</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Registration
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="/Register/ModeOfPayment.php">Mode of Payment</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/Register/Register.php">Register</a></li>
              <li>

            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="/CommitteMembers.php">Committee Members</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/PastEvents.php">Past Events</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Downloads.php">Downloads</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Contact/Contact.php">Contact Us</a>
          </li>

        </ul>

        <a href="/Register/Register.php"> <button class="btn btn-outline-success " type="submit">Register</button></a>

      </div>
    </nav>

  </div>
  <!--Navbar End-->

  <!--Inside Stuff start-->


  <!--Slider Start-->
  
  <center>
        <?php
  
        $host = 'localhost:3307';
        $user = 'root';
        $pass = 'jarvis';
        $dbname = 'users';
        $conn = mysqli_connect($host, $user, $pass, $dbname);
       //// if (!$conn) {
         //   die('Could not connect: ' . mysqli_connect_error());
         //}
         //   echo 'Connected successfully';
 
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $affiliation = $_REQUEST['affiliation'];
        $country =  $_REQUEST['country'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $pincode = $_REQUEST['pincode'];
        $mobileno = $_REQUEST['mobileno'];
        $email = $_REQUEST['email'];
        $transactionid = $_REQUEST['transactionid'];
        $nameofbank = $_REQUEST['nameofbank'];
        $dateoftransfer = $_REQUEST['dateoftransfer'];
        $amountpaid = $_REQUEST['amountpaid'];
        $accountnumber = $_REQUEST['accountnumber'];
        $titleofpaper = $_REQUEST['titleofpaper'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registerdata  VALUES ('$name','$affiliation', 
            '$country','$city','$state','$pincode',
            '$mobileno','$email','$transactionid','$nameofbank',
            '$dateoftransfer','$amountpaid','$accountnumber','$titleofpaper'
            )";
          
        if(mysqli_query($conn, $sql)){
            echo "<div class='alert alert-success' role='alert'>
            Registration Successfull ! We will Notify you by Email after Verification.
          </div><a href='../index.php'> <button class='btn btn-info' type='submit'>Back to Home Page</button></a>
          "; 
  
           
        } else{
            echo "<div class='alert alert-danger' role='alert'>
            Error while Registration Please Try Again or Contact Us Later
          </div>";
          $err= strtok(mysqli_error($conn), " ");
          if($err=="Duplicate"){
            echo "<div class='alert alert-danger' role='alert'>
            Email or Phone Number Already Registered for Any query Contact Us
          </div>  <a href='./Register.php'> <button class='btn btn-danger' type='submit'>Return to Register</button></a>";
          }

        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>



  <!--Slider End-->




  <!--Inside Stuff End-->

  <!--Footer Strat-->
  <div class="fixed-bottom bg-dark text-center">
    <p style="color: white;" class="p-1">Pimpri Chinchwad College of Engineering, Pune </p>
  </div>
  <!--Footer End--->
  <!--scripts-->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>