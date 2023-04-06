<!DOCTYPE html>
<html lang="en">

<!--Header-->
<head>
    <meta charset="UTF-8"> 
    <!--Making it compatible-->
    <meta http-equiv="X-UA-Compatible" content="IE-edge"> 
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--Title of the webpage-->
    <title>RISHTON ACADEMY PRIMARY SCHOOL</title>
    <link rel="stylesheet" href="style1.css">
    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font and icons used in the HTML link-->
    <script src="https://kit.fontawesome.com/e930d49b89.js" crossorigin="anonymous"></script>
</head>

<!--Body of the webpage-->
<body>
    
   <!--Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top" style="background-color: #0f0f0f;">
        <div class="container">
            <!--Putting the company logo in the navbar-->
            <a href="index.html"><img src="logo2.png" alt="" width="200" height="120"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i id="bar" class="fa-solid fa-bars" style="background-color: white;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Navigation list of the webpages-->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student.php">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="parents.php">Parents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teacher.php">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
  <!--Section 1 of the body-->
  <section id="home">
    <div class="container">
        <h5>Admissons Open</h5>
        <h1><span>Join Now</span> This Year</h1>
        <p>Welcome to Rishton Academy Primary School! We are a vibrant and dynamic community of learners, dedicated to providing a high-quality education to all of our students. 
            Our goal is to inspire a love of learning and to prepare our students for success in a rapidly changing world. We believe that every student is unique and has the potential to achieve great things, and we are committed to providing a supportive and inclusive environment where all students can thrive. 
            Thank you for visiting and we hope you find the information you need.
        </p>
        <!--Button to send the user to the featured section-->
        <a href="student.php"><button>Register Here</button></a>
    </div>
  </section>
  
  
  <!--Footer in the home page-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-12">
            <img src="logo2.png" width="220" height="100">
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-12">
            <h4 class="pb-2">Featured</h4>
            <ul class="text-uppercase">
                <li><a href="student.php">Students</a></li>
                <li><a href="teacher.php">Teachers</a></li>
                <li><a href="parents.php">Parents</a></li>
                <li><a href="class.php">Classes</a></li>
            </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-12">
            <h4 class="pb-2">Contact Us</h4>
            <div>
                <h6 class="text-uppercase">Address</h6>
                <p>79 ASH TREE ROAD, MANCHESTER UK</p>
            </div>
            <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>(+44) 7378988580</p>
            </div>
            <div>
                <h6 class="text-uppercase">Email</h6>
                <p>RishtonAcademy@GMAIL.COM</p>
            </div>
        </div>
    </div>
    <div class="copyright mt-5">
        <div class="row container mx-auto">
            <div class="col-lg-3 col-md-6 col-12 text-nowrap">
                <p>Rishton Academy Primary School ©️ 2023. All Rights Reserved</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
            </div>

        </div>
    </div>
  </footer>

  <!--Bootstrap links used to make the website responsive-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
        crossorigin="anonymous"></script>

</body>
</html>