  <?php
  include('databaseconn.php');  
  //query get data
  echo "RECORD NO, DATE, TIME, SECONDS \n";
    $sql1 = "SELECT * FROM tblftpfiledata where tblAreaID = 0002 and slrDate = SUBDATE(CURDATE(),1);";
    $no = 1;
      $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
           while($row = mysqli_fetch_assoc($result1)) {
       
    
   /* echo '
    <tr>
      <td>'.$no.'</td>
      <td>'.$row['slrDate'].'</td>
      <td>'.$row['slrTime'].'</td>
      <td>'.$row['AvgSolRad'].'</td>
    </tr>
    ';*/
    echo $no.",".$row['slrDate'].",".$row['slrTime'].",".$row['AvgSunshine']."\n";
    $no++;
  }
}
/*
<table border="1">
    <tr>
      <th>NO.</th>
    <th>Date</th>
    <th>Time</th>
    <th>Solar Average</th>
  </tr>
</table>
*/
  ?>
