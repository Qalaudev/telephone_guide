<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $contacts = json_decode(file_get_contents('contacts.json'), true);

    $newContact = array('name' => $name, 'phone' => $phone);
    $contacts[] = $newContact;

    file_put_contents('contacts.json', json_encode($contacts));

    header('Location: index.php');
    exit;
}
?>
