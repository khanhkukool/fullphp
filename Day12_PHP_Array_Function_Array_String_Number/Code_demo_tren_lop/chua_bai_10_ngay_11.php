<style type="text/css">
    .black {
        background: #000;
    }
</style>
<table border="1" cellspacing="0" cellpadding="6">
    <?php for ($row = 1; $row <= 8; $row++): ?>
        <tr>
            <?php for ($col = 1; $col <= 8; $col++): ?>
                <?php
//            echo $row + $col;
                $class = ($row + $col) % 2 ? 'white' : 'black';
                ?>
                <td class="<?php echo $class?>">
<!--                    Data-->
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>