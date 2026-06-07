<?php
include "db.php";

$sql = "SELECT * FROM appointments ORDER BY id DESC";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['patient_name']; ?></td>
    <td><?php echo $row['doctor']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['appointment_date']; ?></td>

    
</tr>
<?php } ?>