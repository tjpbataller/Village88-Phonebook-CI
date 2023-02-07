<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <a href="/">Go Back</a> | <a href="../show/<?= $id ?>">Show</a>
    <h1>Edit Contact #<?= $id ?></h1>
    <form action="../update" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="contact">Contact Number</label>
        <input type="text" name="contact" id="contact">
        <input type="submit" value="Edit">
    </form>
</body>
</html>