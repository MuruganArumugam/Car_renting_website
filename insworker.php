<html>
<style>
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

<body>
<?php
 
$a=$_POST['wname'];
$b=$_POST['wid'];
$c=$_POST['dob'];
$e=$_POST['address'];

$f=$_POST['mobile'];
$g=$_POST['aadhar'];
$h=$_POST['salary'];
$i=$_POST['job'];
//$con=oci_connect('userame','password','oracle_sid');

$conn=oci_connect("system","Madurai123","localhost/orcl.13.23.184");
$d = oci_parse($conn, "begin :ret :=FINDAGE(to_date('$c','yyyy-mm-dd')); end;");
oci_bind_by_name($d, ':ret', $r, 32);
oci_execute($d);


if($conn)
{
    //echo "Connection succeded";
    $dbins="insert into worker(wname,wid,dob,age,address,mnumber,aadhar,salary,job)
    values( '$a','$b',to_date('$c','yyyy-mm-dd'),'$r','$e','$f','$g','$h','$i')";
    $result1=oci_parse($conn,$dbins);
    if(oci_execute($result1))
    {
        echo "new row is created";
        ?>
            <br><br><br><br>
  <a href="worker.php" class="button">BACK</a>

        <?php
    }
    else
    {
        echo "user already exists";
        echo "<script>alert('USER ALREADY EXISTS!')</script>";
        echo "<script>location.href='worker.php'</script>";
        echo "s";
    }
}

    ?>
</body>
    </html>

