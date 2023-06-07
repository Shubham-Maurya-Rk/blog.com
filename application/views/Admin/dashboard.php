<!DOCTYPE html>
<html>

<head>
    <title>Admin Welcome</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <?php require_once("layout/header.php"); ?>
    <div class="container">
        <h1>
            <?php echo $_SESSION['email']; ?> Login successful
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($articlesList)):?>
                <?php foreach ($articlesList as $article):?>
                <tr>
                    <th scope="row"><?php echo $article->title;?></th>
                    <td><?php echo $article->body;?></td>
                    <td><a href="" class="btn btn-primary">Edit</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php endforeach;?>
                <?php else:?>
                    <tr>
                        <th scope="row" colspan="4">No articles available...</th>
                    </tr>

                <?php endif;?>
            </tbody>
        </table>
    </div>
    <?php require_once("layout/footer.php"); ?>
</body>

</html>