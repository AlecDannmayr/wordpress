<h1>Test</h1>

<?php
function greeting($message)
{
    echo $message;
}
greeting("Hello");
echo " ";
greeting("Alec");
$food = ["yougurt", "seeds", "nuts"];

$count = 0;
while ($count < count($food)) {
    echo $food[$count];
    $count++;
}
//Constent veriable left is var name right is value
define("name", "luis");
echo name;
?>