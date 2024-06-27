<?php
include 'print.php';
include 'input.php';
include 'bubble_sort.php';
?>

<!DOCTYPE html>
<html>

<body>
    <center>
        <h1>Bubble Sort</h1>
        <h2>Gib zu sortierende Daten ein:</h2>
        <form name="form" action="" method="post">
            <input type="text" name="input" id="input" value="">
        </form>
        <br>
        <?php $numberList = getInput($_POST['input']); ?>
        <?php $sorted = bubbleSort($numberList); ?>
        <strong>
            <?php printData($sorted); ?>
        </strong>
    </center>
</body>

</html>
