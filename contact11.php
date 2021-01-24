<?php
if(isset($_REQUEST['submit'])){
    if(($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['message'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Field</div>';
    }
    else{
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $phone = $_REQUEST['phone'];
      $message = $_REQUEST['message'];
        
        $mailTo = "shroff9876@gmail.com";
        $headers = "from: ". $email;
        $txt = "You have received an email from". $name.".\n\n".$message;
        mail($mailTo, $phone, $txt, $headers);
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Sent Successfully</div>';
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Contact us</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="contact11.css">
    </head>
    <body>
        <!------loder------->
         <div class="lod">
        <img src="../img/lod.gif" alt="loding">
             <h3>Loading...</h3>
        </div>
        
         <!-----start-heade-and-menu---->
       <nav>
           <div class="logo"><img src="../img/LOGOO2%20copy.jpg"></div>
           <div class="openmenu"><i class="fas fa-bars"></i></div>
           <ul class="mainmenu">
               <li><a class="active" href="../front.php">home</a></li>
                <li><a href="../solution/service.php">solution</a></li>
               <li><a href="#">contact</a>
                <!-- sub-menu------------>
                    <div class="sub-menu-2">
                           <ul>
                               <li>
                                   <a href="#"><img src="../img/l3.png" width="50px" height="50px align:center"><p>Contact Us</p></a></li>
                               <li><a href="../contact/contact11.php">
                                   <img src="../img/l7.png" width="50px" height="50px">
                                   <p>Contact Detail</p></a></li>
                           </ul>
                      </div>
                <!---------end sub-menu------------------------>
               </li>
               <li><a href="#">about us</a></li>
               <div class="closemenu"><i class="fa fa-times"></i></div>
           </ul>
        </nav>
        <!----end-header------>
<!--------contact body---->
        <form class="contactform" action="" method="post">
            <h1>Contact Us</h1>
            <lable>Name</lable>
            <input type="text" name="name" placeholder="Enter Your Fullname">
            <lable>Email</lable>
            <input type="text" name="email" placeholder="Enter Your Email Address">
            <lable>Phone Number</lable>
            <input type="text" name="phone" placeholder="Enter Your Contact Number">
            <lable>Message</lable>
            <textarea name="message" placeholder="Enter Your Query"></textarea>
            <button class="submitbutton" name="submit">Send Message</button>
        </form>
        <!----------end-contact------------>
        
        <!-- FOOTER START -->
  
   <!-- The content of your page would go here. -->
        <div class="shadow">
		<footer class="footer-distributed">

			<div class="footer-left">
          <img src="../img/LOGOO2%20copy.jpg">
				
				<p class="footer-links">
					<a href="../front.php">Home</a>
					|
					<a href="../solution/service.php">Service</a>
					|
					<a href="#">About</a>
					|
					<a href="../plist/product1.php">Product</a>
				</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>IIMT University,
						 Meerut. Mawana Road</span>
						O poket, Utter Perdesh - 50001</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>+91 7543024993</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">pawanpks7543@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
            <br> <br>
            <div class="copy">
            <p>Copyright <i class="fa fa-copyright"></i> 2021 Star Technologies(India)Pvt.Ltd.All Rights Reserved||Contact No:******
            </p>
            </div>
		</footer>
    </div>
    <!---end-footer---->
        <script src="header.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" class="gif"></script>
        <script>
    setTimeout(function(){
        $('.lod').fadeToggle();  
    },1000);
            </script>
    </body>
</html>
