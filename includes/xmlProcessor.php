<?php
function readXMLFiles()
{
    $xmlDirectory = 'xml/';
    $xmlFiles = scandir($xmlDirectory);
    $xmlData = [];
    foreach ($xmlFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'xml') {
            $xmlData[$file] = simplexml_load_file($xmlDirectory . $file);
        }
    }
    return $xmlData;
}
