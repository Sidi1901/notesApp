
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

</head>

<body>
<form>
  <div class="mb-3">
  <div class="mb-3">
    <label for="userid" class="form-label">User name</label>
    <input type="email" class="form-control" id="userid" aria-describedby="emailHelp" name="userid">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <label for="emailid" class="form-label">Email address</label>
    <input type="email" class="form-control" id="emailid" aria-describedby="emailHelp" name="emailid">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="passwordid" class="form-label">Password</label>
    <input type="password" class="form-control" id="passwordid" name="passwordid">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

</html>
