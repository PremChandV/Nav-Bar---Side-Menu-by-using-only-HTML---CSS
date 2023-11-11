<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Side Menu & Nav Bar</title>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Company <span>Name</span></h3>
    </div>
    <div class="right_area">
      <a href="#" class="logout_btn">Logout</a>
    </div>
  </header>
  <!--header area end-->
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <img src="images/dpp.jpg" class="profile_image" alt="">
      <h4>Employee Name</h4>
      <p>Technology Head</p>
    </center>
    <a href="dashboard.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
    <a href="list-members.php"><i class="fas fa-users"></i><span>List of Members</span></a>
    <a href="#"><i class="fas fa-list-ol"></i><span>List of Documents</span></a>
    <a href="#"><i class="fas fa-file-signature"></i><span>Assign to members</span></a>
    <a href="#"><i class="fas fa-solid fa-file-lines"></i><span>View Review Points</span></a>
    <a href="#"><i class="fas fa-duotone fa-chart-simple"></i><span>Report Generation</span></a>
  </div>
  <!--sidebar end-->
</body>

</html>