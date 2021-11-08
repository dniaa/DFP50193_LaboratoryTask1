<?php

$Dessert=[
    'Cupcake'=>[
        'Chocolate Cupcake',
        'Red Velvet Cupcake',
        'Vanila Cupcake',
        'Rainbow Cupcake'
    ],

    'Ice Cream'=>[
        'Vanila Ice Cream',
        'Strawberry Ice Cream',
        'Chocolate Mint Ice Cream',
        'Oreo Ice Cream'
    ],

    'Drinks'=>[
        'Ice Lemon Tea',
        'Ice Green Tea',
        'Ice Orange Juice',
        'Ice Apple Juice'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABORATORY TASK 1</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <table>
        <?php
            foreach ($Dessert as $MyDessert => $Value) {
            echo "<tr> <th>$MyDessert</th>";

            foreach ($Value as $List) {
            echo "<td>$List</td>";
            }
        }
        echo "</tr>"
        ?>
    </table>
</html>