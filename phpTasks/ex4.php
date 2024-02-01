<?php 
$title = 'TASK 4';
include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercise 4: Control flow and loops</title>
</head>
<body> 
<div class="container">

    <div class="article"> 
    <h2>Task 4</h2>
    <h2>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting). </h2>
    <div class="bootstrap-form mt-3">
            <form method="post">

                <div class="mb-3">
                    <label for="nimi" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="nimi" name="nimi" required>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" required>
                </div>

                <button type="submit" class="btn btn-success btn-block">Check</button>
            </form>
        </div>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nimi = $_POST["nimi"];
            $age = intval($_POST["age"]); 

            $message = ($age >= 18) ? " You are eligible for voting $nimi!" : "Sorry, you are not eligible for voting $nimi.";

            echo "<p>$message</p>";
        }
        ?>
        <br>

    <h2>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not. </h2>

        <?php
        $currentMonth = date('F');

        if ($currentMonth === 'August') {
            echo "It's August, so it's still holiday.";
        } else {
            echo "Not August, this is $currentMonth so I don't have any holidays.";
        }
        ?>

    <br> 
    <br>

    <h2>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n).</h2>
    <table>
    <?php
        $n = 5;
    
        for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "<tr><td>$n x $i</td><td>= </td><td> $result</td></tr>";
        }

    ?>
    </table>
    <br>
    <h2>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. </h2>
    <?php
        $n = 10; 

        for ($i = 1; $i <= $n; $i++) {
            echo $i . "<br>";
        }
    ?>
    <br>
    <h2>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. </h2>
    <?php
        $catArray = array("Cat1", "Cat2", "Cat3", "Cat4", "Cat5");

        foreach ($catArray as $element) {
            echo $element . "<br>";
        }
    ?>
    </div>
</div>


</body>
<style>
    .bootstrap-form {
    max-width: 300px; 
    margin: auto;
    }
    body{
        background-color: #D9D9D9;
    }
    h2{
        font-family: 'Lato', 'sans-serif';
        font-size: 22.5px;
        font-weight: bold;
    }
</style>
<?php include 'footer.php'; ?>
</html>