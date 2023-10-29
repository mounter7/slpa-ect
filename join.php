<?php

include_once('inc/config.php');

if (isset($_POST['submit'])) {
  $sal = mysqli_real_escape_string($conn, $_POST['sal']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);
  $intro = mysqli_real_escape_string($conn, $_POST['intro']);

  $query = mysqli_query($conn, "INSERT INTO slpa_ect_staff (sal, name, position, email, mobile, whatsapp, intro) VALUES ('{$sal}', '{$name}', '{$position}', '{$email}', '{$mobile}', '{$whatsapp}', '{$intro}')");

  if ($query) {
    header('Location: success');
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join - ECT Staff</title>
  <script src="./functions.js?v=1" defer></script>
  <?php include_once('links.php') ?>
  <style>
    
  </style>
</head>

<body>
  <?php include_once('header.php'); ?>

  <section class="add-section-0" id="add-section-0">
    <div class="container">
      <form action="join" method="post">
        <div class="tags tags-0">
          <input id="mr" type="radio" name="sal" value="Mr" required />
          <label class="tag" for="mr">Mr</label>
          <input id="miss" type="radio" name="sal" value="Miss" required />
          <label class="tag" for="miss">Miss</label>
        </div>

        <div class="item">
          <label for="name">Name</label>
          <input type="text" placeholder="Ravindu" required name="name" />
        </div>

        <p style="text-align: center; margin-bottom: 0.5rem">I'm</p>
        <div class="tags tags-1">

          <input required id="engineer" type="radio" name="position" value="engineer" />
          <label class="tag" for="engineer">An Engineer</label>

          <input required id="to" type="radio" name="position" value="to" />
          <label class="tag" for="to">A Technical Officer</label>

          <input required id="trainee" type="radio" name="position" value="trainee" />
          <label class="tag" for="trainee">A Trainee</label>

          <input required id="driver" type="radio" name="position" value="driver" />
          <label class="tag" for="driver">A Driver</label>

          <input required id="admin" type="radio" name="position" value="admin" />
          <label class="tag" for="admin">An Admin</label>

          <input required id="other" type="radio" name="position" value="other" />
          <label class="tag" for="other">Other</label>
        </div>

        <div class="item">
          <label for="email">Email (Optional)</label>
          <input type="text" placeholder="info@gdoop.us" name="email" />
        </div>

        <div class="item">
          <label for="mobile">Mobile</label>
          <input type="text" placeholder="07XXXXXXXX" required name="mobile" />
        </div>

        <div class="item">
          <label for="whatsapp">Whatsapp (Optional)</label>
          <input type="text" placeholder="07XXXXXXXX" name="whatsapp" />
        </div>

        <div class="item">
          <label for="whatsapp">Briefly Introduce yourself (Optional)</label>
          <textarea name="intro" id="" cols="30" rows="4" placeholder="I'm a Trainee. HND Civil Engineering. From Tangalle."></textarea>
        </div>

        <button type="submit" class="btn btn-0" name="submit">
          Add My info
        </button>
      </form>
    </div>
  </section>

  <?php include_once('footer.php'); ?>

  <script></script>
</body>

</html>