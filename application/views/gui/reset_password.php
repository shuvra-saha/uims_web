<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body style="background-color: lightblue">
<div class="form-gap" style="padding-top: 70px;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Reset Forgot Password</h2>

                        <div class="panel-body">

                            <form id="register-form" role="form" autocomplete="off" class="form" method="get" action="<?php base_url(); ?>changeForgotPassword">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-wrench color-blue"></i></span>
                                        <input id="email" name="email" placeholder="Enter New Password" class="form-control" value="<?php echo $_REQUEST['email']?>" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-wrench color-blue"></i></span>
                                        <input id="password" name="password" placeholder="Enter New Password" class="form-control"  type="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-wrench color-blue"></i></span>
                                        <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control"  type="password" required>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $_REQUEST['code'];?>" name="code" >

                                <div class="form-group">
                                    <input name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>