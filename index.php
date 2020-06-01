<html>
    <head>
        <title>
            Simple Php Login Form
        </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row justify-content-center ">
            <div class="col-md-6 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Simple Login System</div>
                    <div class="panel-body">
                        <?php
                            if (isset($_GET['error'])) {
                            ?>
                            <div class="alert alert-danger">An error Occured while processing. Please Try again</div>
                            <?php
                            }
                        ?>
                        <?php
                            if (isset($_GET['success'])) {
                            ?>
                            <div class="alert alert-success">Registration was Successful</div>
                            <?php
                            }
                        ?>
                        <form action="process/engine.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                                <label class="form-check-label" for="exampleRadios2">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="other">
                                <label class="form-check-label" for="exampleRadios3">
                                    Other
                                </label>
                            </div>
                            <button type="submit" name="register" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>