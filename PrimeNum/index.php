<?php
function isPrime($num) {
    if ($num < 2) {
        return false;
    }

    for($i = 2; $i <= (sqrt ( $num )); $i ++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

print ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrime( $i )) {
        echo ($i . ", ");
    }
}
?>