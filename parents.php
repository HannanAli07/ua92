<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <!--Making it compatible-->
    <meta http-equiv="X-UA-Compatible" content="IE-edge"> 
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--Title of the webpage-->
    <title>Parents</title>
    <link rel="stylesheet" href="parents-style.css">
    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e930d49b89.js" crossorigin="anonymous"></script>
</head>

  
<body>
    
  <nav class="navbar navbar-expand-lg navbar-light py-1 fixed-top" style="background-color: #0f0f0f;">
    <div class="container">
      <!--Putting the company logo in the navbar-->
      <a href="index.php"><img src="Logo2.png" alt="" width="200" height="120"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i id="bar" class="fa-solid fa-bars" style="background-color: white;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--Navigation list of the webpages-->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Students</a>
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

  <div class="container-fluid mt-5 py-5">
    <?php
		  $connect = mysqli_connect("localhost", "root", "", "school");
      // Checking connection
      if ($connect === false) {
        die("Connection failed: ");
      }
		?>
    <!--This will display All the parents that have been added-->
    <h3>See All Parents</h3>
	  <table>
		  <tr>
				<th width="275px">First Name<br><hr></th>
				<th width="275px">Last Name<br><hr></th>
				<th width="275px">Home Address<br><hr></th>
				<th width="275px">Email Address<br><hr></th>
        <th width="275px">Phone Number<br><hr></th>
				<th width="275px">Parents ID<br><hr></th>
      </tr>
			
      <?php
        // This will dispaly the information for Parents //
        $sql = mysqli_query($connect, "SELECT First_Name, Last_name, Home_Address, Email_Address, Phone_Number, Parents_ID  FROM parents");
        while ($row = $sql->fetch_assoc()){
          echo "

            <th>{$row['First_Name']}</th>
            <th>{$row['Last_name']}</th>
            <th>{$row['Home_Address']}</th>
            <th>{$row['Email_Address']}</th>
            <th>{$row['Phone_Number']}</th>
            <th>{$row['Parents_ID']}</th>
            </tr>";
        }
      ?>
    </table>

    <br><br>  

    <hr>
    <!--Adding new parents information =-->
    <h3>Add a New Parent</h3>
	  <br>
		<form method="post" action="parents.php">
		
			<label>First Name:</label>
			  <input type="text" name="f_name">

      <label>Last Name:</label>
			  <input type="text" name="l_name">

      <label>Email Address:</label>
			  <input type="text" name="Parent_email">

      <br><br>
      
      <label>Home Address:</label>
			  <input type="text" name="Parent_address" maxlenght = "150" style="width: 500px; height: 100px;">

      <br><br>
      <label>Phone Number:</label>
			  <input type="text" name="Parent_phone">

      <label>Parents New ID:</label>
			  <input type="text" name="Parent_ID">
			<br><br>
      <br>
			<input type="submit" name="addparents" class="btn">
		
		</form>
    <br>
		<?php
      if (isset($_POST['addparents'])) {
        // Hold information typed from user input

        $Last_name = $_POST['l_name'];
        $First_name = $_POST['f_name'];
        $Parent_email = $_POST['Parent_email'];
        $Parent_address = $_POST['Parent_address'];
        $Parent_phonenumber = $_POST['Parent_phone'];
        $Parent_ID = $_POST['Parent_ID'];


			  // Insert Information into database //
			  $sql = "INSERT INTO parents (First_Name, Last_name, Home_Address, Email_Address, Phone_Number, Parents_ID) VALUES ('$First_name', '$Last_name', '$Parent_email', '$Parent_address', '$Parent_phonenumber','$Parent_ID')";
			  echo $sql;
        if (mysqli_query($connect, $sql)) {
			  echo "New record created successfully";
			  } else {
			    echo "Error adding record ";
			  }
		
        // Close database connection
        mysqli_close($connect);
      }
    ?>
    <hr>
    <!--Delete Students Information-->
    <h3>Delete Parents</h3>
    <br>
	
    <th>
    <form action="parents.php" method="POST">
      <label for="row_id">Enter Parents ID to delete:</label>
        <input type="text" name="row_id" id="row_id">
        <button type="submit" name="delete_parent" class="btn">Delete</button>
    </form>

    <?php
      // Check if form is submitted
      if (isset($_POST['delete_parent'])) {
   
        // Get row ID to delete
        $Row_ID = $_POST['row_id'];
   
        // Delete row from database
        $sql = "DELETE FROM parents WHERE Parents_ID = $Row_ID";
   
        if (mysqli_query($connect, $sql)) {
          echo "Parent or Guardian deleted successfully.";
        } else {
          echo "Error deleting row: " . mysqli_error($connect);
        }
        // Close database connection
        $connect->close();
      }
     
    ?>
  </div>
  
  <!--Footer in the home page-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-12">
            <img src="logo2.png" width="220" height="100">
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-12">
          <h4 class="pb-2">Featured</h4>
          <ul class="text-uppercase">
            <li><a href="shop.html">Students</a></li>
            <li><a href="shop.html">Teachers</a></li>
            <li><a href="shop.html">Parents</a></li>
            <li><a href="shop.html">Classes</a></li>
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
