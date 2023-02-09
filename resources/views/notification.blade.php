<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>JavaScript confirmation box</title>
    <script>
      // The function below will start the confirmation dialog
      function confirmAction() {
        let confirmAction = confirm("Are you sure to execute this action?");
        if (confirmAction) {
            
          alert("Action successfully executed");
        } else {
          alert("Action canceled");
        }
      }
      function confirmAction1() {
      window.console.error("You made a mistake");
      }
    </script>
  </head>
  <body>
    <h1>Call the confirmation box</h1>
    <button onclick="confirmAction1()">Delete</button>
  </body>
</html>