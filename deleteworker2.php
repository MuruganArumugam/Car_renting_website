<!DOCTYPE html>
<html>
<head>


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
    background-image: url("car7.jpg");
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


/* Set a style for the submit button */


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
.button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 10px 24px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }

</style>
</head>
<body>
    <?php
     session_start();
if(isset($_SESSION['uname']))
{
$a = $_POST['carid'];

$conn=oci_connect("system","Madurai123","localhost/orcl.13.23.184");
if($conn)
{  
    $dbupdate="DELETE from worker WHERE wid=$a ";
    $result = oci_parse($conn,$dbupdate);
    if($result)
    {
        echo "Deleted";
    }
    oci_execute($result);
    ?>
    <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <center><strong><h1>DELETED SUCCESSFULLY</h1></strong></center>
    </div>
    <?php
}
}
?>
<br><br><br><br><br><br><br><br>
 <center><a href="worker.php" class="button">BACK</a></center>
<br><br><br><br>
</body>
</html>