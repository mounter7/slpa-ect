<section class="sidebar" id="sidebar">
  <div class="container">
    <div class="item">
      <a href="index.php" class="logo"><span>ECT</span> Staff</a>
      <img class="close-btn" src="./svg/close.svg" alt="" />
    </div>
    <div class="item">
      <a href="index.php">Home</a>
      <a href="join">Join</a>
      <div class="break-line"></div>
      <a href="engineers">Engineers</a>
      <a href="to">Technical officers</a>
      <a href="trainees">Trainees</a>
      <a href="admin">Admin</a>
      <a href="drivers">Drivers</a>
      <a href="others">Others</a>
      <div class="break-line"></div>
      <a href="#">Contact</a>
      <a href="#">About</a>
    </div>
    <div class="item">
      <p>Created by Ravindu Madhushankha</p>
      <p>
        SLPA ECT Staff |
        <?php echo date('Y') ?>
      </p>
    </div>
  </div>
</section>

<style>
  .sidebar {
    width: 300px;
    background: #fff !important;
    overflow-y: auto;
    height: 100%;
    position: fixed;
    z-index: 4;
    border: 1px solid var(--item-border-color);
    left: -100%;
    top: 0;
    transition: 300ms;
    border-radius: 0 16px 16px 0;
  }
  .sidebar.active {
    left: 0;
  }
  .sidebar .container {
    padding: 1rem;
  }
  .sidebar .container .item:nth-child(1) {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    top: -4px;
  }
  .sidebar .container .item:nth-child(2) {
    margin-top: 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }
  .sidebar .container .item:nth-child(2) a {
    color: var(--font-color-01) !important;
    font-size: 1em;
    padding: 0.5rem;
  }
  .sidebar .container .item:nth-child(3) {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 1rem;
  }
  .sidebar .container .item p {
    text-align: center;
    color: #969696 !important;
    font-size: 0.8em;
  }
  .close-btn {
    cursor: pointer;
  }
  .break-line {
    background: #ccc;
    height: 1px;
    width: 100%;
  }
</style>
