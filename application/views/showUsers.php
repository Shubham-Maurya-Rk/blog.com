<!DOCTYPE html>
<html>
    <head>
        <title>Userlist</title>
    </head>
    <body>
        <h1>UserList by CI3</h1>
        <table border="1">
            <tr>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <?php foreach($Users as $user): ?>
                <tr>
                    <td>
                        <?php echo $user['name'];?>
                    </td>
                    <td>
                        <?php echo $user['email'];?>
                    </td>
                </tr>
            <?php endforeach; ?>    
        </table>
    </body>
</html>