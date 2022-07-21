
<?php 
  include("db/reg.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="public/style.css" rel="stylesheet">
    <link href="public/reg.css" rel="stylesheet">

</head>

<body>

<div class="d-flex flex-row justify-content-evenly reg-con">
  <form class="regform border border-warning my-5 rounded-end shadow-lg p-3 mb-5  rounded" method="POST">
    <div class="mb-3">
    <div class="mb-3">

    <div class="mb-3 mx-2">
      <label for="userid" class="form-label fw-bold">User name</label>
      <input type="text" class="form-control" id="userid" name="userid">
    </div>

    <div class="mb-3 mx-2">
      <label for="emailid" class="form-label fw-bold">Email</label>
      <input type="email" class="form-control" id="emailid" aria-describedby="emailHelp" name="emailid">
      <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
    </div>
        
    <div class="mb-3 mx-2">
      <label for="passwordid" class="form-label fw-bold">Password</label>
      <input type="password" class="form-control" id="passwordid" name="passwordid">
    </div>

    <div class="mb-3 mx-2">
      <label for="password2id" class="form-label fw-bold">Confirm password</label>
      <input type="password" class="form-control" id="password2id" name="password2id">
      <small class="form-text text-muted">Make sure you enter the same password</small>
    </div>

    <div class="mx-auto" style="width:100px">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
</div>

</body>

<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</html>
