<?php
/**
 * Comment dạng docs, kiểm tra xem number có phải số nguyên tố hay không
 * @param $number integer Số cần kiểm tra
 * @return bool
 */
function isPrime($number)
{
    if ($number == 1) {
        return FALSE;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return FALSE;
        }
    }
    return TRUE;
}


?>

<style type="text/css">
    .blue {
        background: blue;
        color: #fff;
    }
</style>
<table border="1" cellspacing="0" cellpadding="6">
    <tr>
        <?php for ($i = 1; $i <= 100; $i++):
            //check is prime at the moment of variable i
            $isPrime = isPrime($i);
            $class = '';
            if ($isPrime) {
                $class = 'blue';
            }
            ?>
            <td class="<?php echo $class?>">
                <?php echo $i; ?>
            </td>
            <?php if($i % 10 == 0): ?>
                <tr></tr>
            <?php endif; ?>
        <?php endfor; ?>
    </tr>
</table>
