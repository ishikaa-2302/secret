<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SECRETS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="read.css">

  </head>
  <body>
    <div class="container">
      <h1>Read Secrets</h1>
    </div>
    <div class="container">
      <p>Read what others have been venting. Know that you're not alone :)</p>
    </div>
    <div class="container" style="text-align:left; margin-top:2%;">
    <?php
    session_start();
    include("connection.php");
    $query = "select * from secrets";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    if($total !=0){
      while($result = mysqli_fetch_assoc($data)){
        echo "
            <section>
              <h1>".$result["subject"]."</h1>
              <p>Their secret: ".$result["body"]."</p>
              <h5>~By: ".$result["name"]."</h5>
              <p>Dated: ".$result["dated"]."</p>
              <br>
             </section><hr>
             ";
           }
         }

         else{
           echo "No secrets found";
         }
   ?>
 </div>






      <div class="container" style="padding-bottom:1%; margin-bottom:1%;">
        <a class="btn btn-warning" href="form.html">Go back to Homepage</a>
        <a class="btn btn-primary" href="write.php">Write more secrets</a>
        <a class="btn btn-success" href="https://github.com/ishikaa-2302" target="_blank">Connect with me</a>
      </div>
  </body>
</html>
