<?php 
$title = 'TASK 7.1';
include '/var/www/html/phpTasks/header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="/phpTasks/style.css">
<title>Exercise 7: CRUD APP</title>
</head>

<div class="article"> 
<?php
include 'db.php';
$sql = "SELECT * FROM studentsinfo";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
echo "<table class='table'>
        <thead>
            <tr>
                <th>ID&nbsp;</th>
                <th>First Name&nbsp;</th>
                <th>Last Name&nbsp;</th>
                <th>City&nbsp;</th>
                <th>Group ID</th>
            </tr>
        </thead>
        <tbody>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td><a href='updatesingle.php?id={$row['id']}'>{$row['id']}</a></td>
            <td>{$row['fname']}</td>
            <td>{$row['lname']}</td>
            <td>{$row['city']}</td>
            <td>{$row['groupid']}</td>
          </tr>";
}

echo "</tbody></table>";
} else {

echo "No results";
}

$conn->close();
?>
</div>



<?php include '/var/www/html/phpTasks/footer.php'; ?>