<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $contacts = json_decode(file_get_contents('contacts.json'), true);

    if (isset($contacts[$id])) {
        unset($contacts[$id]);
        file_put_contents('contacts.json', json_encode(array_values($contacts)));
    }

    header('Location: index.php');
    exit;
}
?>
