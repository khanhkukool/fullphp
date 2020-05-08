<?php
//chữa bài 1
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
function calculate($arr, $operator)
{
    $result = $arr[0];
    $string = '';
    switch ($operator) {
        case '+':
            $string = "Tổng các phần tử  = ";
            foreach ($arr as $key => $value) {
                $string .= "$value + ";
                if ($key == 0) {
                    continue;
                }
                $result += $value;
            }
            $string = substr($string, 0, -2);
            $string .= " = " . $result;
            break;
    }

    return $string;
}

echo calculate($arrs, '+');


////display();
//function display() {
//    return "abc";
//}
//
//echo "gọi hàm: " . display();

$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

//Chữa bài 6
$arrNew = array_combine($keys, $values);
echo "<pre>";
print_r($arrNew);
echo "</pre>";

//bài 14
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1',
    'giá trị 2'
];
$arrResult = [];
foreach($array1 as $key => $value) {
    $arrResult[$key][] = $array2[$key];
    $arrResult[$key][] = $array1[$key][0];
    $arrResult[$key][] = $array1[$key][1];
}

echo "<pre>";
print_r($arrResult);
echo "</pre>";


?>