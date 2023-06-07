<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <?php require_once('layout/header.php'); ?>
    <div class="container">
        <h1>Register Form</h1>
        <form method="post" action="send_email">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Firstname..." name="firstname" value="<?= set_value('firstname');?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-danger">
                            <?php echo form_error('firstname');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Lastname..." name="lastname" value="<?= set_value('lastname');?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-danger">
                            <?php echo form_error('lastname');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username*</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username..."  name="username" value="<?= set_value('username');?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-danger">
                            <?php echo form_error('username');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address*</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email..."  name="email" value="<?= set_value('email');?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-danger">
                            <?php echo form_error('email');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password*</label>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password..."  name="password" value="<?= set_value('password');?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-danger">
                            <?php echo form_error('password');?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-white border border-dark">Reset</button>
        </form>
    </div>
    <?php require_once('layout/footer.php'); ?>
</body>

</html>