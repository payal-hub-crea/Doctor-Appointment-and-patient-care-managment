<?php
include "db.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['blood_group']}</td>

        <td>
            <button onclick='deletePatient({$row['id']})'>
                Delete
            </button>
        </td>
    </tr>
    ";
}
?>