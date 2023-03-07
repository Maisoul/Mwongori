<?php
  $mysqli = new mysqli ('localhost', 'root', 'davidmaiso', 'mwongori') or die(mysqli_error($mysqli));
  $result = $mysqli -> query("SELECT * FROM register");
  //pre_r($result);
  ?>
    <table id="customers" bgcolor="silver" style="margin-top: 50px; font-size: 25px; border-style: ridge;" border="5" >
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Surname</th>
          <th>Lastname</th>
          <th>StudentID</th>
          <th>Birthday</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Indoors</th>
          <th>Outdoors</th>
          <th>Science</th>
          <th>General</th>
          <th>Societies</th>
          <th>Comments</th>
        </tr>
      </th ead>
      <?php
      while ($row = $result ->fetch_assoc()): ?> 
        <tr>
          <td><?php echo $row['Firstname']; ?></td>
          <td><?php echo $row['Surname']; ?></td>
          <td><?php echo $row['Lastname']; ?></td>
          <td><?php echo $row['StudentID']; ?></td>
          <td><?php echo $row['Birthday']; ?></td>
          <td><?php echo $row['Gender']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Indoors']; ?></td>
          <td><?php echo $row['Outdoors']; ?></td>
          <td><?php echo $row['Science']; ?></td>
          <td><?php echo $row['General']; ?></td>
          <td><?php echo $row['Societies']; ?></td>
          <td><?php echo $row['Comments']; ?></td>
        </tr>
      <?php endwhile; ?>
      </table>