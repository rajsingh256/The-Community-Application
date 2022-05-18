<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="goals.css" />
    <title>Event Tracker</title>
  </head>
  <body>
    <div id="container">
      <h1>Create Account</h1>
      <form action="insertUser.php" method="post">
          <label for="firstName">First Name</label>
          <textarea name="firstName" id="firstName"></textarea>

          <label for="lastName">Last Name </label>
          <textarea name="lastName" id="lastName"></textarea>

          <label for="email">Email</label>
          <textarea name="email" id="email"></textarea>

          <label for="password">Password</label>
          <textarea name="password" id="password"></textarea>

          <button type="submit">Submit Goal</button>
      </form>  
    </div>
  </body>
</html>
