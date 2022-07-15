
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

<!--form-->
<div class="d-flex flex-row justify-content-evenly reg-con">
  <form class="regform border border-warning my-5 rounded-end shadow-lg p-3 mb-5  rounded"method="POST">
    <div class="mb-3">
    <div class="mb-3">
      <label for="userid" class="form-label">User name</label>
      <input type="email" class="form-control" id="userid" aria-describedby="emailHelp" name="userid">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <div class="mb-3">
      <label for="passwordid" class="form-label">Password</label>
      <input type="password" class="form-control" id="passwordid" name="passwordid">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


</body>

</html>
