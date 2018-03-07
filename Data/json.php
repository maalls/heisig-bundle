<?php

$fields = [
"id",
"frameNoV4",
"frameNoV6",
"keyword",
"kanji",
"strokeDiagram",
"hint",
"constituent",
"strokeCount",
"lessonNo",
"myStory",
"heisigStory",
"heisigComment",
"koohiiStory1",
"koohiiStory2",
"jouYou",
"jlpt",
"onYomi",
"kunYomi",
"words",
"readingExamples",
"Tags",
];


$fh = fopen(__dir__ . "/Heisig.txt", "r");

$heisig = [];

while($line = fgets($fh)) {

    $html = trim(trim($line), '"');
    
    $doc = new \DOMDocument("1.0", "utf-8");
    @$doc->loadHTML('<?xml encoding="UTF-8"><body>' . $html . '<body>');
    $doc->encoding = 'UTF-8';
    $xpath = new \DOMXPath($doc);

    $entry = [];

    $kanji = $nodes = $xpath->query("//p[@id='kanji']");
    $kanji = $kanji[0]->nodeValue;

    foreach($fields as $key => $field) {
        

        $nodes = $xpath->query("//p[@id='$field']");

        if(in_array($field, ["id", "keyword", "kanji"]) && (!isset($nodes[0]) || !$nodes[0]->nodeValue)) {

            throw new \Exception("No $field found for $kanji.");

        }

        $entry[$field] = $nodes[0]->nodeValue;

    }
    

    $heisig[] = $entry; 

}


echo json_encode($heisig) . PHP_EOL;
