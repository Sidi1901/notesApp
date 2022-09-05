
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
    <link href="public/reg.css" rel="stylesheet">

</head>

<body>

<div class="d-flex flex-row justify-content-evenly reg-con">
  <form class="regform border border-warning my-2 rounded-end shadow-lg p-3 mb-5  rounded" method="POST" action="signup.php">

    <div class="mb-1 mx-2">
      <label for="userid" class="form-label fw-bold">User ID</label>
      <input type="text" class="form-control" id="userid" name="userid">
    </div>
        
    <div class="mb-1 mx-2">
      <label for="passwordid" class="form-label fw-bold">Password</label>
      <input type="password" class="form-control" id="passwordid" name="passwordid">
    </div>

    <div class="mb-1 mx-2">
      <label for="password2id" class="form-label fw-bold">Confirm password</label>
      <input type="password" class="form-control" id="password2id" name="password2id">
      <small class="form-text text-muted">Make sure you enter the same password</small>
    </div>

    <div class="mx-auto" style="width:100px">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>

    <div class=" mx-auto my-2" style="width:200px">
        <h6>Already a user? <a href="signin.php">login here</a></h6>
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
