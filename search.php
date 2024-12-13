<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $filePath = 'files/data.txt';

    if (file_exists($filePath)) {
        $fileContent = file_get_contents($filePath);
        $lines = explode("\n", $fileContent);
        $results = '';

        foreach ($lines as $line) {
            if (stripos($line, $query) !== false) {
                $results .= "<div>$line</div>";
            }
        }

        echo $results ? $results : '<div>Nenhum resultado encontrado.</div>';
    } else {
        echo '<div>Arquivo não encontrado.</div>';
    }
}
?>