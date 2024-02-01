<?php 
$title = 'TASK 3';
include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercise 3: Variable, Strings & Operators</title>
</head>
<body>
<div class="container">

    <div class="article"> 
        <h2>Task 3</h2>
        <h2>3.2 Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h2>
        
        <div class="bootstrap-form mt-3">
            <form action="process.php" method="post">

                <div class="mb-3">
                    <label for="nimi" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="nimi" name="nimi" required>
                </div>

                <div class="mb-3">
                    <label for="Surname" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="Surname" name="Surname" required>
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
        <br>
        <h2> 3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h2>
        <table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
      <th scope="row">1</th>
      <td>Anna</td>
      <td>Barcikowska</td>
      <td>@outlook</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">2</th>
      <td>Matti</td>
      <td>Thornton</td>
      <td>@gmail</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">3</th>
      <td>Floczka</td>
      <td>Yori</td>
      <td>@discord</td>
    </tr>
  </tbody>
</table>
<br>

<h2>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string. </h2>
<?php
$str1 = "Hello";
$str2 = "World";

$joinedString = $str1 . ' ' . $str2;

echo "Joined String: $joinedString <br>";

$length = strlen($joinedString);
echo "Length of the String: $length";
?>
<br> 
<br> 
<h2>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h2>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "The sum of $num1, $num2, and $num3 is: $sum";
?>
<br>
<br>
<h2>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER).</h2>
<?php

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    echo "You are using: $user_agent";
?>
</div>
</div>
</body>

<!-- styles for bootstrap so its not destroying the look of the page :( -->
<style>
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
