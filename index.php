<?php
require_once('includes/xmlProcessor.php');

$xmlData = readXMLFiles();

// Start HTML output
echo "<!DOCTYPE html>
<html>
<head>
    <title>PHP XML Application</title>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
</head>
<body class='body'>";

echo "<div class='data-container'>"; // Add a div for the looped data

foreach ( $xmlData as $filename => $data ) {
    echo "<div class='data-item'>"; // Add a div for each item
    echo "<h1 class='font'>{$data->element1}</h1>
          <p class='font-smol'>{$data->name}</p>";
    echo "</div>"; // Close the div for each item
}

echo "</div>"; // Close the div for the looped data

// End HTML output
echo "</body>
</html>";
?>