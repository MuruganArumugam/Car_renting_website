<!DOCTYPE html>
<html>
<head>

<title>registration</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>


body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    background-size:cover;
}


* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("car2.jpg");
height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}



body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text],input[type=password], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: ;
    padding: 20px;
}


/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
    width: 50%;
}


.bt {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width:100%;
    opacity: 0.9;
}

.bt:hover {
    opacity: 1;
    width:100%;
}

</style>
</head>
<body>

   <?php
$a=$_POST['carid'];
$b=$_POST['brandname'];
$c=$_POST['scap'];
$d=$_POST['ppd'];
$e=$_POST['mname'];
$f=$_POST['ftype'];
$g=$_POST['avai'];


$conn=oci_connect("system","Madurai123","localhost/orcl.13.23.184");
if($conn)
{
        //echo "Connection succeded";
    $dbins="insert into car values( '$a','$b','$c','$d','$e','$f','$g')";
    $result1=oci_parse($conn,$dbins);
    if(oci_execute($result1))
    {
        echo "new row is created";
    }
    else
    {
        echo "error-not inserted";
    }

    ?>


    <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><h1>REGISTERED SUCCESSFULLY</h1></strong>
    </div>

    <center><a class="btn btn-secondary btn-secondary display-4" href="apanel.php">Back</a></center>

</div>
</div>
</div>
</div>


    <?php
}
else
{   ?>
    <center><h1><font color="white"><b>REGISTRATION FAILED</b></font></h1></center>
    <a class="btn btn-secondary btn-secondary display-4" href="usereg.html">Retry</a>
<?php
}
?>
 </body>
</html>