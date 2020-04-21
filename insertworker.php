<html>
    <head>
    <meta charset="utf-8"></meta>
        <title>admin_login_page</title>
      <style>
body {
    margin:0;
    padding:25px;
    font-family:sans-serif;
    /*background-color:yellow;*/
    background-image: url("http://localhost:10080/dbmsproject/wall.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height:1200px;
    
}

.box{
    width:800px;
    height:1020px;
    padding:20px;
    padding-top: 240px;

    position:absolute ;
    top:0px;
    left:0;
    right:0;
    bottom:0px;
    margin:auto;
    
    background:rgba(255,255,255,0.5);
    text-align:center;

}
.bt{
  height:35px;
  width:250px;

}

</style>  
        
    </head>
    <body>
        


        </div><div><form class="box"  action="insworker.php"
        method="post" >
        <div class="header">
 <center><h1 style="font-family:garamond;font-size:50px;left:50%;">FastMotors<b style="color:#1e932d;">.com</b></h1>
 </center>
</div>
        <u><h2>WORKER INSERTION FORM</h2></u>
           <pre>
           <h2>

     worker name  &emsp; : <input type="text" name="wname" placeholder="worker_name" class="bt" required="">
        <br>
     worker id  &emsp;  :<input type="text" name="wid" placeholder="worker_id" class="bt" required="">
        <br>
     dob           :<input type="date" name="dob" placeholder="DD-MMM-YYYY" class="bt" required="">
        <br>
     address        :<input type="textarea" name="address" placeholder="address.." class="" required="" style="height:60px;width:300px;">

           Mobile number  :<input type="number" name="mobile" placeholder="mobile" class="bt" required="">    

              Salary  :<input type="number" name="salary" placeholder="enter salary" class="bt" required="">


                   Job position     :<input type="text" name="job" placeholder="enter job position.." class="bt" required="">                            

      Aadhar number  :<input type="number" name="aadhar" placeholder="aadhar" class="bt" required="">



       
        <b><input type="submit" name="submit" value="INSERT WORKER" class="bt"></b>
        <br />
</h2>
    </form>
        </pre>
</div>


    </body>
</html>

