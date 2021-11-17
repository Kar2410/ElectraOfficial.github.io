<header>
<img src="<?php echo BASE_URL . '/elelogo.png' ?>">
    <a href="<?php echo BASE_URL . '/index' ?>" class="logo">
      <h1 class="logo-text" ><span>Electra </span>Society</h1>
    </a>
        

    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        
          <li><a href="<?php echo BASE_URL . '/index' ?>">Home</a></li>
          <!-- <li><a href="<?php echo BASE_URL . '/about' ?>">About</a></li> -->
          <li><a href="<?php echo BASE_URL . '/announcement' ?>">Announcement</a></li>  
            <li><a href="<?php echo BASE_URL . '/blog' ?>">Blog</a></li>
            <li><a href="<?php echo BASE_URL . '/Explore_NITS/index.html' ?>">Electra NITS</a></li>



      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
            

              <li><a href="<?php echo BASE_URL . '/admin/dashboard' ?>">Dashboard</a></li>
            <?php endif; ?>
           
                        <li><a href="<?php echo BASE_URL . '/resource' ?>" >Resources</a></li>
                         <li><a href="<?php echo BASE_URL . '/logout' ?>" class="logout">Logout</a></li>

          </ul>
        </li>
      <?php else: ?>
        <!-- <li><a href="<?php echo BASE_URL . '/register' ?>">Sign Up</a></li> -->
         <li><a href="<?php echo BASE_URL . '/login' ?>">Login</a></li>      

      <?php endif; ?>
    </ul>
</header>