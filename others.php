<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Others - ECT Staff</title>
  <?php include_once('links.php') ?>
</head>

<body>
  <?php include_once('header.php'); ?>

  <?php include_once('nav.php'); ?>

  <section class="home-section-1" id="home-section-1">
    <div class="container">
      <?php

      include_once('inc/config.php');

      $query = mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='other' ");


      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {

      ?>
          <div class="item">
            <p><?php echo $row['sal'] ?>. <?php echo $row['name'] ?></p>
            <p>Email: <?php echo $row['email'] ?></p>
            <p>Mobile: <?php echo $row['mobile'] ?></p>
            <p>whatsapp: <?php echo $row['whatsapp'] ?></p>
            <p><?php echo $row['intro'] ?></p>
          </div>
      <?php

        }
      } else {
        echo "Members not found.";
      }

      ?>
    </div>
  </section>

  <?php include_once('footer.php'); ?>

  <script>
    document.querySelector('.tag:nth-child(6)').classList.add('active')
  </script>
</body>
</body>

</html>
