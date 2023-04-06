<!DOCTYPE html>
<html lang="en"><!--Making the webpage in English-->
<head>
    <meta charset="UTF-8">
    <!--Making it comaptible-->
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--Giving a title-->
    <title>Contact Us</title>
    <!--Linking the style sheet-->
    <link rel="stylesheet" href="contact-us-style.css">
    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font and icons used in this webpage-->
    <script src="https://kit.fontawesome.com/e930d49b89.js" crossorigin="anonymous"></script>
</head>
<!--Body section-->
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Welcome to our school's contact page! We value communication and believe that it is essential to building a strong community between our school, 
                students, parents, and community members. We encourage you to reach out to us with any questions or concerns you may have.
                Our dedicated staff is here to provide you with the information you need and to help in any way they can.On this page, you will find our contact information, 
                including our address, phone number, and email address. You can also fill out the contact form provided, and we will respond to your message as soon as possible. 
                We look forward to hearing from you and thank you for your interest in our school. </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <!--Address section-->
                <div class="box">
                    <div class="icon"><ion-icon name="location-outline"></ion-icon></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>79 ASH TREE ROAD, <br>MANCHESTER,<br>UNITED KINGDOM <br>M8 5SA</p>
                    </div>
                </div>
                <!--Phone section-->
                <div class="box">
                    <div class="icon"><ion-icon name="call-outline"></ion-icon></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>(+44) 7378988580</p>
                    </div>
                </div>
                <!--Emial Section-->
                <div class="box">
                    <div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>RISHTONACADEMY@GMAIL.COM</p>
                    </div>
                </div>
                <h2 class="txt">Connect with us</h2>
                <!--Icons used for the social networks-->
                <ul class="icons">
                    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                </ul>
            </div>
            <!--Form to contact the company-->
            <div class="contactForm">
                <form action="connect.php" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="FirstName" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="Message"></textarea>
                        <span>Type your message......</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
                
            </div>
        </div>
    </section>

    <!--Icons used links-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Bootsrap Links-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
        crossorigin="anonymous"></script>
</body>
</html>