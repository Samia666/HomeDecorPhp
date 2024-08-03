<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['file']['tmp_name'];
    if (file_exists($file)) {
        $data = file_get_contents($file);
        // Vulnerable deserialization
        $object = unserialize($data);
        echo '<pre>';
        print_r($object);
        echo '</pre>';
    } else {
        echo "File upload failed.";
    }
}
?>
