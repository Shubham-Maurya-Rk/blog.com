<!DOCTYPE html>
<html>

<head>
    <title>Articles</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <?php require_once('layout/header.php');?>
    <div class="container mt-5 bg-primary text-white p-5">
        <form action="<?= base_url('Admin/validation') ?>" method="post">
            <h1>Login Form</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" value="<?= set_value('email')?>">
                    </div>
                    <div class="col-lg-6">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"  value="<?= set_value('password')?>">
                    </div>
                    <div class="col-lg-6">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-light">Submit</button>
            <button type="reset" class="btn btn-dark mx-3">Reset</button>
            <a href="<?= base_url('admin/register');?>">Sign Up?</a>
        </form>
    </div>
    <?php require_once('layout/footer.php');?>
</body>

</html>