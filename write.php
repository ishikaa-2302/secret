<?php
  session_start();
  include("connection.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $name = $_POST['name'];
      $subject= $_POST['subject'];
      $body=$_POST['body'];
      $dated=$_POST['dated'];
      $query= "insert into secrets (name,subject,body,dated) values('$name','$subject','$body','$dated')";
        mysqli_query($con,$query);
        header("Location: read.php");
        die;
      }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SECRETS</title>
    <link rel="stylesheet" href="read.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  // Self-executing function
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms,function(form){
          form.addEventListener('submit', function(event){
              if (form.checkValidity() === false){
                  event.preventDefault();
                  event.stopPropagation();
              }
              form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  </head>
  <body>
    <div class="container">
      <h1>Write your secret</h1>
    </div>
    <div class="container">
      <p>Got a lot in mind? Need a place to vent your feelings? Write them away. Trust me, it helps.</p>
      <p>Don't worry. Your name or any personal details will be exposed.</p>
      <p>In fact, you will remain anonymous. Now, you can start venting :)</p>
    </div>

    <form class="needs-validation container" method="post" novalidate>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="name">Nickname/Anonymous Name :</label>
        <div class="col-sm-4">
          <input name="name" type="name" class="form-control" id="name" placeholder="First Name" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="subject">Subject :</label>
        <div class="col-sm-4">
          <input name="subject" type="subject" class="form-control" id="subject" placeholder="Topic or anything you want this to remember it by" required>
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="body">Your secret :</label>
        <div class="col-sm-4">
          <textarea name="body" type="body" class="form-control" id="body" placeholder="Write your secret" required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dated">Date :</label>
        <div class="col-sm-4">
          <input name="dated" type="date" class="form-control" id="dated" placeholder="Date this secret" required>
        </div>
      </div>

      <div class="form-group row">
              <div class="col-sm-9 offset-sm-3">
                  <button type="submit" name="btn" class="btn btn-success">Submit</button>
                  <!--<input type="submit" class="btn btn-success" value="Submit">-->
              </div>
          </div>
    </form>
    <div class="container" style="padding-bottom:1%; margin-bottom:1%;">
      <a class="btn btn-warning" href="form.html">Go back to Homepage</a>
      <a class="btn btn-primary" href="read.php">Read secrets</a>
      <a class="btn btn-success" href="https://github.com/ishikaa-2302" target="_blank">Connect with me</a>
    </div>
  </body>
</html>
