 <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $sum = $num1 + $num2;

        echo "<h3>The sum is: $sum</h3>";
    }
    ?>