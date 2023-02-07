<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new contact</title>
</head>
<body>
    <a href="/">Go back</a>
    <h1>Add new contact</h1>
    <form action="create" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="contact">Contact Number:</label>
        <input type="text" name="contact" id="contact">
        <input type="submit" value="Add">
    </form>
</body>
</html>