<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php
        foreach($contacts as $result){
?>
            <tr>
                <td><?= $result['name']?></td>
                <td><?= $result['number'] ?></td>
                <form action="destroy/<?= $result['id']?>" method="post">
                    <td>
                        <a href="show/<?= $result['id'] ?>">Show</a> | <a href="edit/<?= $result['id'] ?>">Edit</a> | <input type="submit" name="delete" value="Delete"><input type="hidden" name="id" value="<?= $result['id']?>"/>
                    </td>
                </form>
            </tr>
<?php
        }
?>
        </tbody>
    </table>
    <a href="new">Add new contact</a>
</body>
</html>