<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $videoFile = $_FILES["videoFile"]["tmp_name"];
    $audioFile = "output.mp3";
    
    $command = "ffmpeg -i " . $videoFile . " " . $audioFile;
    exec($command);
    
    echo "Het video bestand is geconverteerd naar audio. <a href='" . $audioFile . "'>Klik hier</a> om het audio bestand te downloaden.";
}
?>
