<?php
  $mysqli = new mysqli ('localhost', 'root', 'davidmaiso', 'mwongori') or die(mysqli_error($mysqli));
  $result = $mysqli -> query("SELECT * FROM fees");
  //pre_r($result);
  ?>
    <table id="customers" bgcolor="silver" style="margin-left: 0px; margin-top: 50px; padding: 100px; font-size: 30px; border-style: ridge;" border="5" >
      <thead>
        <tr>
          <th>Studentname</th>
          <th>StudentID</th>
          <th>Phone No.</th>
          <th>Email</th>
          <th>Tuition</th>
          <th>Library</th>
          <th>Activity</th>
          <th>Caution</th>
          <th>Expenses</th>
          <th>Total </th>
        </tr>
      </th ead>
      <?php
      while ($row = $result ->fetch_assoc()): ?> 
        <tr>
          <td><?php echo $row['Studentname']; ?></td>
          <td><?php echo $row['StudentID']; ?></td>
          <td><?php echo $row['telNo']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Tuitionfee']; ?></td>
          <td><?php echo $row['Library']; ?></td>
          <td><?php echo $row['Activity']; ?></td>
          <td><?php echo $row['Cautionmoney']; ?></td>
          <td><?php echo $row['Otherexpenses']; ?></td>
          <td><?php echo $row['Total']; ?></td>
        </tr>
      <?php endwhile; ?>
      </table>
    
 