<nav class="navbar navbar-static-top">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a <?php echo ($page == 'home') ? 'class="active"' : ''; ?> class="nav-link"href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a <?php echo ($page == 'about') ? 'class="active"' : ''; ?> class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a <?php echo ($page == 'beers') ? 'class="active"' : ''; ?> class="nav-link" href="beers.php">Beers</a>
      </li>
      <li class="nav-item">
        <a  <?php echo ($page == 'contact') ? 'class="active"' : ''; ?> class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </nav>
  <nav class="navbar navbar-fixed-top icon-bar">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-beer" aria-hidden="true"></i></a></li>
    </ul>
  </nav>
