<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="pos">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-5">
                    <div class="card border-0 shadow rounded-2">
                        <div class="card-body">
                            <h4 class="text-center py-3">Login POS</h4>
                            <form action="php/login.php" method="post">
                                <label class="form-label" for="name">Username</label>
                                <input class="form-control" type="text" name="name" id="name"><br>
                                <label class="form-label" for="pass">Password</label>
                                <input class="form-control" type="password" name="pass" id="pass"><br>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <button class="btn btn-primary mx-auto d-block w-100" name="login" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>