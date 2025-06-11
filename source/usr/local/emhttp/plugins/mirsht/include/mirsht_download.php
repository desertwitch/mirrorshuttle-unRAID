<?
$logFile = "/tmp/mirrorshuttle.json";
if(file_exists($logFile)) {
    header("Content-Disposition: attachment; filename=\"" . basename($logFile) . ".txt\"");
    header("Content-Type: application/octet-stream");
    header("Content-Length: " . filesize($logFile));
    header("Connection: close");
    readfile($logFile);
    exit;
} else {
    echo("There is no log file to download at: <code>/tmp/mirrorshuttle.json</code>");
}
?>
