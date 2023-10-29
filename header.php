<?php include_once('loading.php'); ?>
<?php include_once('sidebar.php'); ?>

<header>
  <div class="container">
    <div class="item">
      <img class="menu-btn" src="./svg/menu.svg">
      <a href="index.php" class="logo"><span>ECT</span> Staff</a>
    </div>
    <a href="join" style="font-size: 1em" class="btn btn-0">Join</a>
  </div>
</header>

<style>
  /* header */
  header {
    background: #fff;
    border: 1px solid var(--item-border-color);
    border-radius: 0 0 16px 16px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    left: 0;
    z-index: 3;
  }

  header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem;
  }

  header .container .item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .logo {
    font-weight: 600;
    color: #000000;
    font-size: 1.3em;
  }

  .logo span {
    color: var(--primary-color);
  }
  .menu-btn {
    cursor: pointer;
  }
</style>