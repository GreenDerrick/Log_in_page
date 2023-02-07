<!D0CTYPE html>
<html>
  <?php 
    require_once 'head.php';
?>
<body>
    <div class="container-fluid">
    </div>
<nav class="navbar navbar-expand-sm " style="" id='navbar'>
  <!-- Brand -->
    <div class="navbar-header">
        <ul class="nav navbar-nav">
            <li>
            <a class="navbar-brand" href="#">Logo</a>
            </li>
        </ul>
    </div>

  <!-- Links -->
  <ul class="navbar-nav navbar-right pull">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
    
    
<div class="container">
    
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6"></div>
        
    </div>
</div>
</body>
</html>