<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="/style/style.css">
  <title>Register</title>
  <style>
    a:hover {
      color: green;
      font-weight: bold;
    }
  </style>
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
            <a class="nav-link font" href="/index.php">Home </a>
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
              Registration<span class="sr-only">(current)</span>
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
  <?php
  $host = 'localhost:3307';
  $user = 'root';
  $pass = 'jarvis';
  $dbname = 'users';
  $conn = mysqli_connect($host, $user, $pass, $dbname);
 // if (!$conn) {
   // die('Could not connect: ' . mysqli_connect_error());
 //}
// echo 'Connected successfully';
  //
  //$sql = 'CREATE Database users';  
  //if(mysqli_query( $conn,$sql)){  
  //echo "Database users created successfully.";  
  //}else{  
  ///echo "Sorry, database creation failed ".mysqli_connect_error($conn);  
  //}  


  //$sql = "create table registerdata(name VARCHAR(30) NOT NULL,affiliation VARCHAR(50),
//    country VARCHAR(30),city VARCHAR(30),state VARCHAR(30),pincode INT(30), mobileno VARCHAR(60),email VARCHAR(50) UNIQUE,
 //  transactionid VARCHAR(50),nameofbank VARCHAR(50), dateoftransfer VARCHAR(50), amountpaid INT(40) ,
  //accountnumber VARCHAR(50), titleofpaper VARCHAR(60),primary key (name))";
///
  //if(mysqli_query($conn, $sql)){  
    // echo "Table registerdata created successfully";  
 //  }else{  
  ///    echo "Could not create table: ". mysqli_error($conn);  
   //}  


  mysqli_close($conn);
  ?>


  <div class="container mt-5">
    <div class="card mb-5">
      <div class="card-header text-center">
        User Registration For Event
      </div>
      <div class="card-body  p-4">
        <form action="register_reply.php" method="post">
        <h5 class="text-success">1. Details of the Participant</h5>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="name" required="">
            <small id="emailHelp" class="form-text text-muted">FirstName MiddleName LastName </small>
          </div>

          <div class="form-group">
            <label for="exampleInputName">Affiliation</label>
            <input type="text" name="affiliation" class="form-control" id="affiliation" required="">
            <small id="emailHelp" class="form-text text-muted">CollegeName/UniversityName </small>
          </div>

          <div class="form-group">
            <label for="exampleInputName">Country</label>
            <input type="text" name="country" class="form-control" id="country" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputName">City</label>
            <input type="text" name="city" class="form-control" id="city" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputName">State</label>
            <input type="text" name="state" class="form-control" id="state" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputName">Pincode</label>
            <input type="number" name="pincode" class="form-control" id="pincode" required="">
          </div>


          <div class="form-group">
            <label for="exampleInputName">Mobile Number</label>
            <input type="number" name="mobileno" class="form-control" id="mobileno" required="">
            <small id="emailHelp" class="form-text text-muted">10 digit Whatsapp Number</small>
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <h5 class="text-success">2. Mode of Payment (Online)</h5>
          <div class="form-group">
            <label for="exampleInputName">Transaction Id</label>
            <input type="text" name="transactionid" class="form-control" id="transactionid" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputName">Name Of Bank</label>
            <input type="text" name="nameofbank" class="form-control" id="nameofbank" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputName">Date Of Transfer</label>
            <input type="text" name="dateoftransfer" class="form-control" id="dateoftransfer" required="">
            <small id="emailHelp" class="form-text text-muted">dd-mm-yyyy</small>
          </div>

          <div class="form-group">
            <label for="exampleInputName">Amount Paid</label>
            <input type="text" name="amountpaid" class="form-control" id="amountpaid" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputName">Account Number</label>
            <input type="text" name="accountnumber" class="form-control" id="accountnumber" required="">
          </div>

          <h5 class="text-success">3. Declaration:</h5>

          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">The abstract submitted under the title</small>
            <label for="exampleInputName">Title Of Paper</label>
            <input type="text" name="titleofpaper" class="form-control" id="titleofpaper" required="">
            <small id="emailHelp" class="form-text text-muted">is original and has not been submitted/published, elsewhere.</small>
          </div>
      
          <input type="submit" name="submit" class="btn btn-success ">
        </form>
      </div>
    </div>
  </div>


  <!--Inside Stuff End-->

  <!--Footer Strat-->
  <footer class=" bg-dark text-center">
    <p style="color: white;" class="pt-2 m-0 mt-2">Pimpri Chinchwad College of Engineering, Pune </p>
  </footer>
  <!--Footer End--->
  <!--scripts-->
  <script src="bootstrap4-input-clearer.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script>
  $(function() {
    
      $('input').clearer();
    });

</script>
</body>

</html>