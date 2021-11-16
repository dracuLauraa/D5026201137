<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <center>
    <div class="container">
      <br>
      <h1>To do List</h1>
      <input type="text" class="txtb" placeholder="Add a task">
      <div class="notcomp">
        <h3>On Going</h3>
      </div>

      <div class="comp">
        <h3>Done</h3>
      </div>
    </div>


    <script type="text/javascript">
      $(".txtb").on("keyup", function (e) {
        if (e.keyCode == 13 && $(".txtb").val() != "") {
          var task = $("<div class='task'></div>").text($(".txtb").val());
          var del = $("<i class='fas fa-trash-alt'></i>").click(function () {
            var p = $(this).parent();
            p.fadeOut(function () {
              p.remove();
            });
          });

          var check = $("<i class='fas fa-check'></i>").click(function () {
            var p = $(this).parent();
            p.fadeOut(function () {
              $(".comp").append(p);
              p.fadeIn();
            });
            $(this).remove();
          });

          task.append(del, check);
          $(".notcomp").append(task);
          $(".txtb").val("");
        }
      });
    </script>
  </center>
</body>

</html>
