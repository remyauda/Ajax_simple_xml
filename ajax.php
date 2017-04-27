<?php
header('Content-Type: xml');//obligatoire si on veut manipuler du xml dans php

$doc = new DOMDocument();
// nous voulons un joli affichage
$doc->formatOutput = true;

$root = $doc->createElement('book');
$root = $doc->appendChild($root);

$title = $doc->createElement('title');
$title = $root->appendChild($title);

$text = $doc->createTextNode('Ceci est le titre');
$text = $title->appendChild($text);

echo "Recuperation de tout le document :\n";
echo $doc->saveXML() . "\n";

echo "Recuperation du titre, uniquement :\n";
echo $doc->saveXML($title);

?>

