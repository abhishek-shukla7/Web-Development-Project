<?php
function createSlug($text) {
    
    $text = strtolower($text);

   
    $text = preg_replace('/[^a-z0-9\s]/', '', $text);

   
    $text = preg_replace('/\s+/', ' ', $text);

   
    $text = str_replace(' ', '-', trim($text));

    return $text;
}


$title = "You are Working on a Blog! Article URL Example.";
echo createSlug($title);
?>
