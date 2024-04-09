<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telephone guide</title>
</head>
<body>
    <h1>Telephone guide</h1>

    <h2>Add Contact</h2>
    <form action="add_contact.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="phone">Telephone Number:</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        <input type="submit" value="add">
    </form>

    <h2>list contact</h2>
    <?php include 'list_contacts.php'; ?>
</body>
</html>
