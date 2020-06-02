<?php
require '_config.php';

$dir = realpath(WRITE_FILE_FOLDER);
$filePath = $dir.DIRECTORY_SEPARATOR.time().".txt" ;
$handler = fopen($filePath, "w") or die("Unable to open file!");
$txt = "John Doe\n";
if( fwrite($handler, $txt) === false ) {
    echo "Problem writing files" ;
} else {
    echo "File ".$filePath." written" ;
}
fclose($handler);