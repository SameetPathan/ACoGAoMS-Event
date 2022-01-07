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
     
        h1 {
          
            text-align: center;
            color: white;
            font-size: 8em;
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
   
  </style>
  <title>Home</title>
</head>

<body style="font-family: Helvetica, sans-serif;">
  <!--Navbar Start-->
  <div>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!--   <img src="/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">-->
      <a class="navbar-brand" href="/index.php">EventName</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">

          <li class="nav-item active">
            <a class="nav-link font" href="/index.php">Home <span class="sr-only">(current)</span></a>
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
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./Images/home/bg2.jpg" class="d-block w-100" style="background-repeat:no-repeat;width:100%;height:500px;" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h1 style="font-size:40px;font-weight:800;" class="h">9 th International Conference and 25 th Annual Conference of Gwalior Academy of Mathematical Sciences ICGAMS-2K21</h1>
          <p style="font-size:20px;font-family: 'Courier New', monospace;">29th SEP – 1st SEP, 2022
Organized by

Pimpri Chinchwad Education Trust’s
Pimpri Chinchwad College of Engineering, Pune .</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Images/home/bg1.jpg" class="d-block w-100" style="background-repeat:no-repeat;width:100%;height:500px;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Images/home/bg2.jpg" class="d-block w-100" style="background-repeat:no-repeat;width:100%;height:500px;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <!--Slider End-->




  <!--Inside Stuff End-->

  <!--Footer Strat-->
  <div class="fixed-bottom bg-dark text-center">
    <p style="color: white;">Pimpri Chinchwad College of Engineering, Pune </p>
  </div>
  <!--Footer End--->
  <!--scripts-->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>