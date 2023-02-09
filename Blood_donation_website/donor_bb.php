<?php 

error_reporting(0);

$server = "localhost";
$user = "root";
$pass = "";
$database = "project";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

if (isset($_POST['submit'])) {
	$dname = $_POST['dname'];
	$did = md5($_POST['did']);
    $bloodgroup = $_POST['bloodgroup'];
    $d_phoneno = $_POST['d_phoneno'];
    $bb_address = $_POST['bb_address'];
    $bbname = $_POST['bbname'];
    $bb_phoneno = $_POST['bb_phoneno'];
    
		$sql = "SELECT * FROM  donor_blood_bank WHERE dname='$dname'  ";

	    $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
        $sql = "INSERT INTO donor_blood_bank (dname, did, bloodgroup, d_phoneno, bb_address, bbname, bb_phoneno)
                VALUES ('$dname', '$did', '$bloodgroup', '$d_phoneno', '$bb_address', '$bbname', '$bb_phoneno')";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {          
            echo "<script>alert('Wow! Your Details have been uploded successfully.')</script>";
            $dname = "";
            $did="";
            $bloodgroup = "";
            $d_phoneno="";
            $bb_address="";
            $bbname="";
            $bb_phoneno="";
        }else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
	}else {
        echo "<script>alert('Woops! Donor Record Already Exists.')</script>";
    }
}

?>


<html>
<head>
<title>Blood Bank and Donor Data</title>
</head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title> Form</title>
    <body BGCOLOR="#70DB93">
    <h2>ॐ सर्वे भवन्तु सुखिनः।
         सर्वे सन्तु निरामयाः।</h2>

        <image src="blood donate.jpg" width="110" height="110" align="right">
        <image src="logo.png" width="110" height="110" align="left">
    <style>
        {
            box-sizing: border-box;
        }
        .container{
            background-color:#ff7f50;
            border-radius: 5px;
        }
        nav{
            border: 2px solid black;
            text-align: center;
            font-size: 25px;
            background-color: #e2725b;
            border-radius: 4px;
            padding: 1px;
        }
        h2{
        font-size:20px;
        text-align:center;
        margin-top:-10px;
       }
        body{
            font-family: Serif, Monospace, Tahoma, cursive;
            font-size: 4px;
            /* display: flex; */

            margin: 6%;
        }
        .details{
            display: flex;
            overflow: scroll;
            justify-content: center;
            align-items: flex-start;
            align-items: center;
            background-color: #FFFFFF;
            border: 1px solid black;
        }
        .form-group{
            padding: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],textarea{
            padding: 5px;
            background-color: white;
            border: 1px solid black;
            
            width: 40%;
            cursor: pointer;
        }
        fieldset{
            background-color: yellow;
            border-radius: 10px solid yellow;

        }
        input[type="radio"]{
            cursor: pointer;
        }
        input[type="submit"]{
            padding: 5px;
            cursor: pointer;
            color: pink;
            border: 2px solid black;
            width: 100%;
            font-size: 15px;
            border-radius: 5px;
            margin-top: 10px;
            background-color: red;
        }
       
    </style>
</head>
<body>
     <nav> 
          <h1>DONOR AND BLOOD BANK FORM</h1>
     </nav>      
        <hr>
<body>
<div style="margin-left:100px; margin-top:20px;">
        <image src="blood.jpg" width="570" height="540" align="right"; ></div>
<form action="" method="POST">
<table>

<tr>
<td>
Donor Name:
</td>
<td>
<br>
<input type = "Donor Name" placeholder ="Donor Name" name = "dname"  value="<?php echo $dname; ?>" required>
<br><br>
</td>
</tr>

<tr>
<td>
Donor Id:
</td>
<td>
<br>
<input type = "Donor id" placeholder ="Donor ID" name= "did" value="<?php echo $did; ?>"  required>
<br><br>
</td>
</tr>

<tr>
<td>
Donor blood group:
</td>
<td>
<br>
<select name="bloodgroup" value="<?php echo $bloodgroup; ?>">
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select> 
<br>
</td>
</tr>

<tr>
<td>
Donor Phone no:
</td>
<td>
<br><br>
<input type = "D_Phone" placeholder ="+91" name="d_phoneno" value="<?php echo $d_phoneno; ?>"  required><br>
<br>
</td>
</tr>

<tr>
<td>
Blood Bank Address:
</td>
<td>
<br>
<input type = "BB_Address" placeholder ="Address" name = "bb_address"  value="<?php echo $bb_address; ?>" required>
<br><br>
</td>
</tr>

<tr>
<td>
Blood Bank Name:
</td>
<td>
    <br>
<input type = "BB_Name" placeholder ="Blood Bank Name" name = "bbname"  value="<?php echo $bbname; ?>" required>
<br><br>
</td>
</tr>

<tr>
<td>
Blood Bank Phone no:
</td>
<td>
<br>
<input type = "BB_Phone" placeholder ="********" name="bb_phoneno" value="<?php echo $bb_phoneno; ?>"  required><br>
<br>
</td>
</tr>

<tr>
<td><br>
<button name="reset">Reset</button>
</td>
<td><br>
<button name="submit">Submit</button>
</td>
</tr>

<tr>
<td>
<p class="login-register-text">Click here to check available Donors : <a href="result.php">Click Here</a>.</p>
</td>
</tr>

</table>
</form>
</body>
</html>