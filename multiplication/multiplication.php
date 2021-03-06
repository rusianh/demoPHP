<!-- 
QUESTION:

provide PHP code with 2-3 loops + if..elseif...else + simple calculation
*to generate a multiplication table*
your result should look the same as multiplication_end.png

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    <?php
        for($i=0; $i<13; $i++){
            if($i==0){
                echo "<tr>";
                for($j=0;$j<13; $j++){
                    if($j==0){
                        echo "<th></th>";
                    } else {
                        echo "<th>". $j ."</th>";
                    }
                } echo "</tr>";
            } else {
                echo "<tr>";
                for ($j = 0; $j <13; $j++){
                    if ($j==0) {
                        echo "<th>". $i ."</th>";
                    } else {
                        echo "<td>". $i*$j ."</td>";
                    }
                }
            } echo "</tr>";
        }
    ?>
</table>
</body>
</html>