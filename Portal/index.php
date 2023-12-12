<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        height: 100vh;
        background-image: url("assets/images/bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;/
    }

    .container {
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;

    }
    .box_of_but{
        display:flex;
        background-color: #fdfeff47;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        padding: 2%;

    }
    </style>
</head>

<body>
    <div class="container">
        <div class="box_of_but">
            <form action="Student.php" method="get">
                <button type="submit" class="btn m-1 btn-outline-dark">Student</button>
            </form>
            <form action="sign_in.php" method="get">
                <button type="submit" class="btn m-1 btn-outline-dark">Faculty</button>
            </form>
        </div>
    </div>

</body>