<?php require('partials/header.php'); ?>

    <table class="GroceriesTable">
        <tr>
            <th class="left" scope="col">Product</th>
            <th class="left" scope="col">Prijs</th>
            <th class="left" scope="col">Aantal</th>
            <th class="right" scope="col">Subtotaal</th>
        </tr>
        <?php
            $sum = 0;
            foreach ($groceries as $grocery) {
                echo "<tr>";
                echo "<td class='left' scope='row'>" . $grocery->name . "</td>";
                echo "<td class='productPrice'>" . $grocery->price. "</td>";
                echo "<td class='right'>" . $grocery->number . "</td>";
                echo "<td class='right'>" . $grocery->price * $grocery->number . "</td>";
                echo "</tr>";
                $sum += $grocery->price * $grocery->number;
            }
        ?>
        <tr>
            <td class="left" colspan="3">Totaal</td>
            <?= "<td type='number' class='right'> $sum </td>"?>            
        </tr>
    </table>

<?php require('partials/footer.php'); ?>