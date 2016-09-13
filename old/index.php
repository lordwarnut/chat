<!doctype html>
<html>

<head>
    <meta charset="UTF-8">

    <title>HTML 5, CSS 3, jQuery Log-in & Registration</title>

    <!--- font --->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="custom.css">

    <!-- jQuery library -->
    <script src="jquery.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap.js"></script>

    <!--- set width --->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container">
        <div class="jumbotron page-header">
            <h1>PHP Login Session Example</h1>
        </div>

        <div>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#loginTab">Login</a></li>
                <li><a data-toggle="tab" href="#registerTab">Register</a></li>
            </ul>

            <div class="tab-content">
                <div id="loginTab" class="tab-pane fade in active">
                    <h3>Login</h3>
                    <div id="loginForm">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="email">Username:</label>
                                <input name="username" type="text" placeholder="shannon" class="form-control" id="Username">
                            </div>
                            <div class="form-group">
                                <label for="email">Password:</label>
                                <input type="password" placeholder="no" class="form-control" id="Password" name="password">
                            </div>
                            <input name="submit" class="btn btn-primary" type="submit" value=" Login ">
                            <span><?php //echo $error; ?></span>
                        </form>
                    </div>
                </div>
                <div id="registerTab" class="tab-pane fade">
                    <h3>Register</h3>
                    <div id="loginForm">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="email">Username:</label>
                                <input name="username" type="text" placeholder="shannon" class="form-control" id="Username">
                            </div>
                            <div class="form-group">
                                <label for="email">Password:</label>
                                <input type="password" placeholder="no" class="form-control" id="Password" name="password">
                            </div>
                            <input name="submit" class="btn btn-primary" type="submit" value=" Login ">
                            <span><?php //echo $error; ?></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!---<div id="loginForm">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="email">Username:</label>
                            <input name="username" type="text" placeholder="shannon" class="form-control" id="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Password:</label>
                            <input type="password" placeholder="no" class="form-control" id="Password" name="password">
                        </div>
                        <input name="submit" class="btn btn-primary" type="submit" value=" Login ">
                        <span><?php //echo $error; ?></span>
                    </form>
                </div>--->