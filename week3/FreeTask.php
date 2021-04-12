<!DOCTYPE html>
<html>

<head>
    <title>punleu | sum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>SUM OF TWO NUMBER</h1>
        <hr>
        <form method="post">
            <div class="form-group">
                Enter First Number:
                <input type="number" name="number1" class="form-control" /><br><br>
                Enter Second Number:
                <input type="number" name="number2" class="form-control" /><br><br>
                <button class="btn btn-dark" type="submit" name="submit" value="Add">sum</button>
                <hr>
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $sum =  $number1 + $number2;
            echo "The sum of [ $number1 ] with [ $number2 ] is: " . $sum;
        }
        ?>
    </div>
</body>

</html>