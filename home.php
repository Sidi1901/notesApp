<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="public/style.css" rel="stylesheet">
    <link href="public/home.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="height: 40px">
        <a class="navbar-brand" > <img src="assets/logo.png"  style="height: 36px; width:36px"></a>
            <div class="container-fluid">
                <a class="navbar-brand">Notes</a>
            </div>
        </div>
    </nav>

    <div class="home-con d-flex flex-column justify-content-center">
        <div class="test-con align-self-center my-5">
            <h1><a style="color:white; text-decoration:none;" href="" class="typewrite" data-period="2000" data-type='[ "Are you tired of rembering tasks?", "Start now", "Task manager"]'><span class="wrap"></span></a></h1>
        </div>
        <div class=" btn-con d-flex align-self-center my-5">
            <button type="button" class="btn button-63 btn-outline-primary btn-lg mx-3 flex-fill" role="button">Personal</button>
            <button type="button" class="btn button-63 btn-outline-primary btn-lg mx-3 flex-fill" role="button">Team</button>
        </div>

        <div class=" align-self-center my-5">
            <h5 style="color:white;">New user? <a href="#">click here</a></h5>
        </div>
    </div>

</body>
<script src="public/home.js"></script>
</html>