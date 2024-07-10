<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

     <!--Bootstrap css-->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand font-family-custom" href="#"><strong class="text-warning">Dash</strong>Board</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Main Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="index.php" onclick="confirmLogout()"><strong>Logout</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- js for confirmation to logout -->
<script>
    function confirmLogout() {
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "index.php";
        }
    }
</script>


<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!--slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="/exam_mrtllo/images/car1.jpg" alt="Los Angeles" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="/exam_mrtllo/images/car2.jpg" alt="Chicago" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="/exam_mrtllo/images/car3.jpg" alt="New York" class="d-block w-100">
  </div>
</div>

<!-- L and r controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
   

<!--Welcome Statement/Header-->
<header class="bg-dark text-white text-center py-5">
    <h1 class="display-4">Welcome to Call of Duty Skins</h1>
    <p class="lead">Explore a collection of unique and exciting skins for your favorite Call of Duty characters.</p>
</header>

    <!--Services Offer-->
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-danger">NEW TOP OPERATORS IN CODM</h2>
        <p class="text-center">Service Skin Offer</p>
    
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="/exam_mrtllo/images/1.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body card shadow">
                        <h5 class="card-title">MANTA RAY</h5>
                        <p class="card-text">Naomi Mizushima is a newbie with great talent and top scores. While her duty comes first, her love of the sea is a close second.</p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Add To  WishList</a>
                        <a href="#" class="btn btn-primary d-flex justify-content-center mt-3">Get Skins</a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="/exam_mrtllo/images/2.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body card shadow">
                        <h5 class="card-title">WICHT WARDEN</h5>
                        <p class="card-text">A ruthless commander in life, his outside now reflects the inside in death. The man Wicht Warden was is all too present as he seeks to wreak havoc on the living.</p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Add To  WishList</a>
                         <a href="#" class="btn btn-primary d-flex justify-content-center mt-3">Get Skins</a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="/exam_mrtllo/images/3.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">ARTERY</h5>
                        <p class="card-text">As a survivalist with a weakness to sunburns and a fondness for gothic cathedrals, Anna "Artery" Buckler is an elite German specialist.</p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Add To  WishList</a>
                         <a href="#" class="btn btn-primary d-flex justify-content-center mt-3">Get Skins</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="/exam_mrtllo/images/4.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body card shadow">
                        <h5 class="card-title">SERAPH TOMBSTONE</h5>
                        <p class="card-text">A formidable soldier who was raised by an officer of the 54 Immortals and climbed the ranks of the Singapore Quarantine Zone's ruling criminal combine.</p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Add To  WishList</a>
                         <a href="#" class="btn btn-primary d-flex justify-content-center mt-3">Get Skins</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="/exam_mrtllo/images/5.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body card shadow">
                        <h5 class="card-title">SCYLLA</h5>
                        <p class="card-text">Scylla has known and lived the term "boots on the ground" since her early training days in the jungles of Brazil. A tenacious comrade and vengeful enemy.</p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Add To  WishList</a>
                         <a href="#" class="btn btn-primary d-flex justify-content-center mt-3">Get Skins</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="/exam_mrtllo/images/6.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body card shadow">
                        <h5 class="card-title">GHOST</h5>
                        <p class="card-text">Lieutenant Simon "Ghost" Riley was a British special forces operator, and a prominent member of Task Force 141.</p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Add To  WishList</a>
                         <a href="#" class="btn btn-primary d-flex justify-content-center mt-3">Get Skins</a>
                    </div>
                </div>
            </div>

        </div>
    </div>      


    <!--Gallery-->
    <div class="container mt-5">
        <h2 class="text-center mb-4 display-3 text-warning">Top 3 Best Legendary Guns</h2>
        <p class="text-center">Choose your best guns now. This  is the time to show off your skills!</p>
    
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3">
                <div class="card shadow">
                    <img src="/exam_mrtllo/images/g1.jpg" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <p class="card-text">This guns have an unique and sound effect when you fire and kill the enemy.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4 mt-3">
                <div class="card shadow">
                    <img src="/exam_mrtllo/images/g2.jpg" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <p class="card-text">This guns have a body effect, A refined effect, and an upgraded weapon flare effect.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4 mt-3">
                <div class="card shadow">
                    <img src="/exam_mrtllo/images/g3.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <p class="card-text">This gun have an special animations and and a unique sound when you kill someone</p>
                    </div>
                </div>
            </div>
    </div>



        <!-- Customer Review Section -->
        <div class="container mt-5">
            <h2 class="text-center mb-4 mt-5">Customer Reviews</h2>
            
            <div class="row justify-content-center">
                <div class="col-md-4 mt-3">
                    <div class="card shadow text-center">
                        <img src="/exam_mrtllo/images/r1.jpg" class="card-img-top rounded-circle img-thumbnail mx-auto d-block w-50" alt="John Doe Image">
                        <div class="card-body">
                            <p class="card-text"><strong>ALBERT EINSTEIN</strong></p>
                            <p class="card-text">"Excellent product! I love the quality of the skins and the uniqueness."</p>
                            <img class="w-25 " src="/exam_mrtllo/images/star.jpg" alt="ratings">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-3">
                    <div class="card shadow text-center">
                        <img src="/exam_mrtllo/images/r2.jpg" class="card-img-top rounded-circle img-thumbnail mx-auto d-block w-50" alt="Jane Smith Image">
                        <div class="card-body">
                            <p class="card-text"><strong>RODRIGO DUTERTE</strong></p>
                            <p class="card-text">"Amazing service and quick delivery. Highly recommended."</p>
                            <img class="w-25" src="/exam_mrtllo/images/star.jpg" alt="ratings">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-3">
                    <div class="card shadow text-center">
                        <img src="/exam_mrtllo/images/r3.jpg" class="card-img-top rounded-circle img-thumbnail mx-auto d-block w-50" alt="Mike Johnson Image">
                        <div class="card-body">
                            <p class="card-text"><strong>FERDINAND JR. MARCOS</strong></p>
                            <p class="card-text">"The skins exceeded my expectations. Will purchase again!"</p>
                            <img class="w-25" src="/exam_mrtllo/images/star.jpg" alt="ratings">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> 
    
<!--Message/comment Box-->
    <div class="container">
        <label for="message" class="form-label fs-6 d-flex justify-content-center mt-5"><strong>COMMENT</strong></label>
        <textarea class="form-control form-control-sm mb-3 mt-2 shadow" name="message" rows="5"></textarea>
    
        <button class="btn btn-info d-block mx-auto shadow" type="submit">Send Comment</button>
    </div>
    
    
    
    
    <!--header/Statement-->
    <div class="container mt-5 border-bottom pb-3">
        <h1 class="display-4 text-center">Unlock Your Favorite Skins in CODM</h1>
        <p class="lead text-center mt-3">Join the excitement of Call of Duty Mobile. Get the best guns and operators you want by filling out the form below.</p>
    </div>
    
    
    <!--Contact Information-->
        <div class="row">
            <div class="col-md-6 mt-3">
                
                    <h3 class="text-center">Contact Information</h3>
    
                    <div class="mb-3 text-center">
                        <label for="email" class="form-label"><strong>EMAIL</strong></label>
                        <p class="form-control-static">Johnmarkmoratillo@gmail.com</p>
                    </div>
    
                    <div class="mb-3 text-center">
                        <label for="contact" class="form-label"><strong>CONTACT NUMBER</strong></label>
                        <p class="form-control-static">09745678542</p>
                    </div>
    
                    <div class="mb-3 text-center">
                        <label for="location" class="form-label"><strong>LOCATION</strong></label>
                        <p class="form-control-static">Bayanan, Pola Oriental Mindoro</p>
                    </div>
            </div>

    <!--Form-->
            <div class="col-md-6 mt-3">
                <form action="register.html" method="get">
                    <h3 class="text-center col-sm-8 mx-auto"><strong>REGISTER</strong></h3>
            
                    <div class="mb-3 col-sm-8 mx-auto">
                        <label for="fullname" class="form-label"><strong>Full Name</strong></label>
                        <input class="form-control form-control-sm" type="text" name="fullname" placeholder="John Mark Moratillo"> 
                    </div>
                    
                    <div class="mb-3 col-sm-8 mx-auto">
                        <label for="email" class="form-label"><strong>Email</strong></label>
                        <input class="form-control form-control-sm" type="email" name="email" placeholder="mrtllo@example.com">
                    </div>
                    
                    <div class="mb-3 col-sm-8 mx-auto">
                        <button class="btn btn-success form-control" type="submit">Register</button>
                    </div>
                </form>
            </div>                    
            
        </div>
    
                            
    <!--footer-->
    <footer class="text-bg-dark footer mt-auto py-3 text-center mt-5">
        <div class="container">
            <span>Design and Developed By: <strong>John Mark P. Moratillo</strong></span>
            <p class="text-warning">&copy; 2024. All Rights Reserved</p>
        </div>
    </footer>
    
                
</body>
      <!--Bootstrap js-->
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>


</html>