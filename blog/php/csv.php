<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pays</title>
</head>
<body>
    <form action="">
        <select name="pays" id="pays">
        <?php
        $file = __DIR__ . '/sql-pays.csv';

        if (!file_exists($file)) {
            die("<option value=''>Erreur : Le fichier n'existe pas.</option>");
        }

        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                foreach ($data as $field) {
                    echo "<option value='" . htmlspecialchars($field) . "'>" . htmlspecialchars($field) . "</option>\n";
                }
            }
            fclose($handle);
        } else {
            echo "<option value=''>Erreur : Impossible d'ouvrir le fichier.</option>";
        }
        ?>
        </select>
    </form>
</body>
</html>
