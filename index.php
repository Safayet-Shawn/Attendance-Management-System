<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


  <div class="jumbotron b">
    <div class="container">
    <h1 class="text-center">Student Attendance System</h1>      
    <p class="text-center mt-4">It's an online attendance taking system where you can create student,batch and take attendace according to batch and date. At the same time you would be able to find all the student of a batch and view their attendance of previous date.</p>
  </div>
   </div>
   <style>
    .b{
      background: #555;
      color: #fff;
    }
     hr{
      background: #4BAABE;
      content:"";
      clear: both;
      width: 120px;
      height:2px;
      margin:0px auto;
      margin-bottom: 40px;
     }
     .c{
      font-size: 14px;
      letter-spacing: 2px;
      margin: 10px;

     }
     .footer{
      background: #333;
      color: #fff;
     }
     .v{
      margin-bottom: 35px;
     }
   </style>
   <div class="container">

    <h2 class="text-center mt-5">Student and Batches</h2>
    <p class="text-center c">Inserting Batch & Student will help you to take attendance</p>
    <hr>
  <div class="row">
    
    <div class="col-md-6">
   <div class="card" style="width:400px">
    <img class="card-img-top" src="img/7.jpg" alt="Card image" style="width:100%;height: 200px;">
    <div class="card-body">
      <h4 class="card-title">Students</h4>
      <p class="card-text">In this Section You can insert your student to take attendance in Batch,But you have to create the batch first.You can also view all student togather ,even according to batch</p>
      <a href="add.php" class="btn btn-primary mr-5">Create Student</a>
      <a href="all.php" class="btn btn-success">View all Student</a>
    </div>
  </div>
  <br>
      </div>
    <div class="col-md-6 v">
   <div class="card" style="width:400px">
    <img class="card-img-top" src="img/b.jpg" alt="Card image" style="width:100%;height: 200px;">
    <div class="card-body">
      <h4 class="card-title">Batches</h4>
      <p class="card-text">Here you can create and view batch which help you to create student in a particuler batch even on finding student,taking and to view previous attendance data </p>
      <a href="add_batch.php" class="btn btn-primary mr-5">Create Batch</a>
      <a href="all_batch.php" class="btn btn-success">View all Batch</a>
    </div>
  </div>
  <br>
      </div>
      </div>
      

    <h2 class="text-center mt-5">Attendance</h2>
    <p class="text-center c">Free to take and view your previous attendance</p>
    <hr>
    <div class="row ">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
   <div class="col-md-6 ">
   <div class="card" style="width:400px">
    <img class="card-img-top" src="img/c.jpg" alt="Card image" style="width:100%;height: 200px;">
    <div class="card-body">
      <h4 class="card-title">Attendance According to Batch</h4>
      <p class="card-text">Here you can take and view attendance of different class and batch which you have created previously.Here you are free to find the attendace of any batch and any date </p>
      <a href="attendanceBybatch.php" class="btn btn-primary mr-5">Take Attendance </a>
      <a href="attendanceView.php" class="btn btn-success">View Attendance </a>
    </div>
  </div>
  <br>
      </div>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
  </div>
<div class="footer">
  <p class="text-center c p-4">All rights goes to @safayetshawn</p>
</div>


</body>
</html>