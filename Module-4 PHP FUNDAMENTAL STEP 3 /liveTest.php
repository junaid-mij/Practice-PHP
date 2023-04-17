<?php
echo PHP_EOL;

function longestWord($str)
{
    $str = preg_replace('/[^\w\s]/', '', $str);
    $words = explode(' ', $str);

    $longest_word = '';

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
    }
    return $longest_word;
}

$str = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);

echo PHP_EOL;
?>
