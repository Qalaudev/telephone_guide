<?php
$contacts = json_decode(file_get_contents('contacts.json'), true);

if ($contacts) {
    foreach ($contacts as $key => $contact) {
        echo '<p>' . $contact['name'] . ' - ' . $contact['phone'] . ' <form action="delete_contact.php" method="post"><input type="hidden" name="id" value="' . $key . '"><input type="submit" value="delete"></form></p>';
    }
} else {
    echo '<p>List guide contact</p>';
}
?>
