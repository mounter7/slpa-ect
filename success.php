<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trainees - ECT Staff</title>
    <?php include_once('links.php') ?>
  </head>

  <body>
    <?php include_once('header.php'); ?>

    <section>
      <div class="container">
        <img src="./svg/success.svg" alt="" />
        <h2>Your info has been added successfully.</h2>
        <a href="index.php" class="btn btn-0">Go to Home Page</a>
      </div>
    </section>

    <?php include_once('footer.php'); ?>
  </body>
</html>

<style>
  img {
    width: 100px;
  }
  section {
    padding: 1rem 0;
  }
  section .container {
    background: #fff;
    max-width: 600px;
    border: 1px solid var(--item-border-color);
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 1rem;
    align-items: center;
    text-align: center;
  }
</style>
