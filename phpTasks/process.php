<?php 
$title = 'YOUR INFO';
include 'header.php'; 
?>
<div class="article"> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = $_POST["nimi"];
        $Surname = $_POST["Surname"];
        echo "<h2>Hello $nimi $Surname, You are welcome to my site.</h2>";
    }
    ?>
</div>
<?php include 'footer.php'; ?>