<?php
    require 'connections/api.php'
?>

<nav class="navbar navbar-expand-lg mb-20">
  <div class="container d-flex justify-content-center">
    <div class='row'>
        <h1 class="d-flex justify-content-center title">CLASSEMENT FOOTBALL</h1>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
          <ul class="navbar-nav mb-3 mt-4">
            <li class="nav-item">
              <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'english') ? 'bg-btn-active text-white' : 'bg-btn-inactive text-white'; ?>" href="index.php?league=english">English League</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'france') ? 'bg-btn-active text-white' : 'bg-btn-inactive text-white'; ?>" href="index.php?league=france">France League</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'german') ? 'bg-btn-active text-white' : 'bg-btn-inactive text-white'; ?>" href="index.php?league=german">German League</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'indonesia') ? 'bg-btn-active text-white' : 'bg-btn-inactive text-white'; ?>" href="index.php?league=indonesia">Indonesia League</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'italy') ? 'bg-btn-active text-white' : 'bg-btn-inactive text-white'; ?>" href="index.php?league=italy">Italy League</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'spain') ? 'bg-btn-active text-white' : 'bg-btn-inactive text-white'; ?>" href="index.php?league=spain">Spain League</a>
            </li>
          </ul>
        </div>
    </div>
  </div>
</nav>


<?php
    if(isset($_GET['league'])) {
        $league = $_GET['league'];

        if($league === 'english') {
            include 'LigaInggris.php';
        } elseif ($league === 'france') {
            include 'LigaPrancis.php';
        } elseif ($league === 'german') {
            include 'LigaJerman.php';
        } elseif ($league === 'france') {
            include 'LigaPrancis.php';
        } elseif ($league === 'indonesia') {
            include 'LigaIndonesia.php';
        } elseif ($league === 'italy') {
            include 'LigaItalia.php';
        } elseif ($league === 'spain') {
            include 'LigaSpanyol.php';
        }
    } else {
      include 'LigaInggris.php'; 
    }
?>