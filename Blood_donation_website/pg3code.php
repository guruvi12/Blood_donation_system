<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!Doctype html>
<html>
<head>
<title>Saves_Life</title>
<link rel="stylesheet" href="pg3.css">

</head>
<body>

<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

<div>

<div id="body1">
<img src="logo.png" id="logo">
<img src="logoname.jpeg" id="nlogo">
<div class="top"><h4 class="main head"><a href="about.php">About Us</a>  |   <a href="features.php">Features</a>  |   <a href="social.php">Follow Us</a>  |   <a href="eligiblity.php">Eligibility</a>  |   <a href="doctor.php">Staff Details</a></h4></div>
<div class="top"><h4 class="main head">Call us:90215-90215| Mail us: saveslife@gmail.com</h4></div>
</div>

<div id="body2">
<h1>WHAT ARE YOU LOOKING FOR?</h1>
<div class="row">
<div class="col">
</div>

<div class="card card2">
<h3><b>Donor Form<b></h3>
<p><b>To fill the form to donate the blood:<br> <a href="donor_bb.php"> click here</a></b></p></div>
<div class="card card3">
<h3><b>Patient Form<b></h3>
<p><b>If you are a patient in the need of blood, to fill the form:<br><a href="patient.php"> click here</a></b></p></div>

</div>
</div>
</div>

<a href="logout.php">Logout</a>

</body>
</html>
