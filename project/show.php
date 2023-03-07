 <!DOCTYPE html>
<html>
<head>
  <title>DATA</title>
  <link rel="stylesheet" type="text/css" href="log.css">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav>
    <div class="topnav" id="myTopnav">
    <ul>
      <li><a class="active" href="show.php">REGD.STDT.</a></li>
      <li><a href="head.php">HOME</a></li>
         </ul>

        <div class="log">
          <img src="std.jpg" width="250" height="103">
    </div>
    <div class="hore-text">
      <h1>MWONGORI HIGH SCHOOL</h1>      
    </div>
  </div>  
    </nav>
<body style="padding-top: 110px">
  <div class="hero-text">
        <legend>
          <tittle>
    <button style="background-color: black"><font style="font-size: 40px" color="yellow"><a href="crud.php">ADD</a></font></button>
</tittle>
</legend>
</div>
<?php require_once 'process.php'; ?> 
  <?php
  if (isset($_SESSION['message'])): 
    $_SESSION['msg_type'];
?>
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
  <?php endif ?>
  <?php
  $mysqli = new mysqli ('localhost', 'root', 'davidmaiso', 'mwongori') or die(mysqli_error($mysqli));
  $result = $mysqli -> query("SELECT * FROM user");
  //pre_r($result);
  ?>
    <table id="customers" bgcolor="gray" style="margin-left: 100px; margin-top: 50px">
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th colspan="2">Action</th>
        </tr>
      </th ead>
      <?php
      while ($row = $result ->fetch_assoc()): ?> 
        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td>
            <a href="crud.php?edit=<?php echo $row['id']; ?>" class="btn" >EDIT</a>
            <a href="process.php?delete= <?php echo $row['id']; ?>" class="btn">DELETE</a>
          </td>
        </tr>
      <?php endwhile; ?>
      </table>
    
  <?php
  function pre_r($array) {
    echo '</pre>';
    print_r($array);
    echo '</pre>';
  }
  ?>
  