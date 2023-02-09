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
	$pname = $_POST['pname'];
	$pid = md5($_POST['pid']);
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $bloodgroup = $_POST['bloodgroup'];
    $bloodtype = $_POST['bloodtype'];
    $disease = $_POST['disease'];

		$sql = "SELECT * FROM patient WHERE email='$email' ";

	    $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
        $sql = "INSERT INTO patient (pname, pid, email, phoneno, bloodgroup, bloodtype, disease)
                VALUES ('$pname', '$pid', '$email', '$phoneno', '$bloodgroup', '$bloodtype', '$disease')";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {          
            echo "<script>alert('Wow! Patient Registration Completed.')</script>";
            $pname = "";
            $pid="";
            $email = "";
            $phoneno="";
            $bloodgroup="";
            $bloodtype="";
            $disease="";
            header("Location: result.php");
        }else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
	}else {
        echo "<script>alert('Woops! Patient Record Already Exists.')</script>";
    }
}

?>


<html>
<head>
<title>Data Of Patient</title>
</head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title> Patient Form</title>
    <body BGCOLOR="#00BFFF">
    <h3>ॐ सर्वे भवन्तु सुखिनः।
         सर्वे सन्तु निरामयाः।</h3>
    
    <image src="blood donate.jpg" width="110" height="110" align="right">
    <image src="logo.png" width="110" height="110" align="left">

    <style>
        {
            box-sizing: border-box;
        }
        .container{
            background-color:#FFFF00;
            border-radius: 5px;
        }
        nav{
            border: 2px solid black;
            text-align: center;
            font-size: 25px;
            background-color: #bd0000;
            border-radius: 4px;
            padding: 1px;
        }
        h3{
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
          <h1>PATIENT FORM</h1>
     </nav>      
        <hr>
<body>
<div style="margin-left:100px; margin-top:20px;">
        <image src="doct.jpg" width="600" height="550" align="right"; ></div>  
<form action="" method="POST">
<table>

<tr>
<td>
Patient Name:
</td>
<td>
<br>
<input type = "Patient Name" placeholder ="Patient Name" name = "pname"  value="<?php echo $pname; ?>" required>
<br><br>
</td>
</tr>

<tr>
<td>
Patient Id:
</td>
<td><br> 
<input type = "Patient id" placeholder ="Patient ID" name= "pid" value="<?php echo $pid; ?>"  required>
<br><br></td>
</tr>

<tr>
<td>
Email:
</td>
<td><br>
<input type = "Patient Email" placeholder ="Email" name="email" value="<?php echo $email; ?>" required><br>
<br></td>
</tr>

<tr>
<td>
Phone no:
</td>
<td><br>
<input type = "Phone" placeholder ="+91" name="phoneno" value="<?php echo $phoneno; ?>"  required><br>
<br></td>
</tr>

tr>
<td>
Patient blood group:
</td>
<td><br>
<select name="bloodgroup" value="<?php echo $bloodgroup; ?>">
<option value="A">A</option>
<option value="B">B</option>
<option value="AB">AB</option>
<option value="O">O</option>
</select> 
<br><br>
</td>
</tr>

<tr>
<td>
Blood Group Type:
</td>
<td><br>
<select name="bloodtype" value="<?php echo $bloodtype; ?>">
<option value="Positive">Positive</option>
<option value="Negative">Negative</option>
</select><br><br>
</td>
</tr>

<tr>
<td>
Patient Disease:
</td>
<td><br>
<input type = "Disease" placeholder ="" name="disease" value="<?php echo $disease; ?>"  required><br>
<br></td>
</tr>

<tr>
<td><br>
<button name="submit">Submit</button>
</td>
<td><br>
<button name="reset">Reset</button>
</td>
</tr>

<tr>
<td>
<p class="login-register-text">Check for the availibilty : <a href="result.php">Click Here</a>.</p>
</td>
</tr>

</table>
</form>
</body>
</html>