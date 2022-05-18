<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="goals.css" />
    <title>Organization Registry</title>
  </head>
  <body>
    <div id="container">
      <h1>Register Organization</h1>
      <form action="insertOrg.php" method="post">
          <label for="orgName">Organization Name</label>
          <textarea name="orgName" id="orgName"></textarea>

          <label for="bio">Bio</label>
          <textarea name="bio" id="bio"></textarea>

          <label for="email">Email</label>
          <textarea name="email" id="email"></textarea>

          <label for="address">HQ Address</label>
          <textarea name="address" id="address"></textarea>

          <label for="phoneNumber">Phone Number</label>
          <textarea name="phoneNumber" id="phoneNumber"></textarea>

          <button type="submit">Submit</button>
      </form>  
    </div>
  </body>
</html>
