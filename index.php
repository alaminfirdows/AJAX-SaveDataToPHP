<?php include 'database.php'; ?>
<!doctype html>
<html>

<head>
  <title>Page Title</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0">
</head>

<body>
  <form method="POST" action="">
    <input id="name" name="name" type="text"/>
    <!-- <button id="testButton">Button</button> -->
    <button type="submit" name="submit">Save</button>
  </form>

  <script src="js/jquery.js" type="text/javascript"></script>
  <script>
    $(function () {
      // When We cleck on #testButton
      $('#testButton').click(function (e) {

        e.preventDefault();
        var name = $("#name").val();

        $.ajax({
          type: 'post',
          url: 'new.php',
          data: { name: name },
          success: function (msg) {
            alert('Save data' + msg);
          }
        });

      });

    });
  </script>
<!--   <script>
    $(function () {
      // When We submit the form
      $('form').on('submit', function (e) {

        e.preventDefault();
        var name = $("#name").val();

        $.ajax({
          type: 'post',
          url: 'new.php',
          data: $('form').serialize(),
          success: function () {
            alert('form was submitted');
          }
        });

      });

    });
  </script> -->
</body>

</html>
