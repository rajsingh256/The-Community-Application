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
      <h1>New Event</h1>
      <form action="insertEvent.php" method="post">
          <label for="orgName">Organization Name</label>
          <textarea name="orgName" id="orgName"></textarea>

          <label for="eventName">Event Name</label>
          <textarea name="eventName" id="eventName"></textarea>

          <label for="text1">Event Description</label>
          <textarea name="text1" id="text1"></textarea>

          <label for="text2">Address of Event</label>
          <textarea name="text2" id="text2"></textarea>

          <label for="text3">Description of Volunteer Work</label>
          <textarea name="text3" id="text3"></textarea>
          
          <label for="goaldate">Date</label>
          <input type="date" id="goaldate" name="goaldate" />

          <button type="submit">Submit Goal</button>
      </form>  
    </div>
  </body>
</html>
