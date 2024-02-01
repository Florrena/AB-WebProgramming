<?php 
$title = 'YOUR INFO';
include 'header.php'; 
?>
<div class="article"> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = $_POST["nimi"];
        $Surname = $_POST["Surname"];
        echo "Hello $nimi $Surname, welcome to my site.";
    }
    ?>
</div>
<?php include 'footer.php'; ?>