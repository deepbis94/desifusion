<!--Navbar-->
<nav class="navbar navbar-expand-lg">

  <!-- Navbar brand -->
  <a class="navbar-brand ml-4" href="#" >
    <img src="../images/finallogo25.png" style="width: 80px;height:90px;"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto ml-5">
      <li class="nav-item home">
        <a class="nav-link" href="index.php">Home
        </a>
      </li>
      <li class="nav-item" id="menu">
        <a class="nav-link" href="menu.php">About</a>
      </li>
      <li class="nav-item gall">
        <a class="nav-link" href="gallery.php">order online</a>
      </li>

      <li class="nav-item oo">
        <a class="nav-link" href="createorder.php">Menu</a>
      </li>
      <li class="nav-item gall">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item gall">
        <a class="nav-link" href="gallery.php">contact</a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link" style="color:white" onclick="showSearch()">
          <i class="fas fa-search" style="color: white"></i>
        </a>
      </li>
      <li class="nav-item cart" id="cart">  
        <a class="nav-link" href="cart2.php">
          <i class="fas fa-shopping-basket" style="color: white;position: relative;margin-right: 11px"></i>

                        <?php
                            if (isset($_SESSION['cart'])){
                                $count = 0;
                                foreach($_SESSION['cart'] as $cart){
                                  $count = $count + (int)$cart['count'];
                                }
                                ?>
          <span class="badge badge-pill badge-primary" style="position: absolute;right:0;top: 0"><?php echo $count; ?></span></a>
                                <?php

                            }
                            else{ ?>
          <span class="badge badge-pill badge-primary" style="position: absolute;right:0;top: 0">0</span></a>  
                                    <?php
                             }
                            ?>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link">
          <i class="fas fa-user fc"></i>
        </a>
      </li>
    </ul>
  </div>
  <!-- Collapsible content -->

</nav>
