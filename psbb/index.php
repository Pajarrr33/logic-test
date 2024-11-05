<?php
 
$families = (int)readline("Input the number of families :");
$member = readline("Input the number of members in the family (separated by space) :");

$members = array_map('intval', explode(' ', $member)); 
$bus = 0;

if ($families != count($members)) {
    echo "input must be equal with count of family";
    exit;
}

$total_members = 0;
foreach ($members as $member) {
    $total_members += $member;
}

if ($total_members % 4 != 0) {
    $bus = floor(($total_members / 4) + 1);
} else {
    $bus = $total_members / 4;
}

echo "Minimum bus required is : " . $bus;

?>