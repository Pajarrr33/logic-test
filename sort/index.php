<?php

$words = strtolower(readline("Input one line of words (S) :"));
$vowels = ['a', 'e', 'i', 'o', 'u'];

$vowel_character = [];
$consonant_character = [] ;

foreach (str_split($words) as $word) {
    if ($word == ' ') {
        continue;
    }
    if (in_array($word, $vowels)) {
        array_push($vowel_character, $word);
    } else {
        array_push($consonant_character, $word);
    }
}

$vowel_result = '';
$consonant_result = '';

foreach (array_count_values($vowel_character) as $key => $value) {
    $vowel_result .= str_repeat($key, $value);
}

foreach (array_count_values($consonant_character) as $key => $value) {
    $consonant_result .= str_repeat($key, $value);
}

echo "Vowel Characters : " . $vowel_result . "\n";
echo "Consonant Characters : " . $consonant_result . "\n";
?>