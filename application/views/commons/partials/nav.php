<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?php echo site_url('visitor/create'); ?>">
        Traverse
      </a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
    <li class="has-dropdown">
        <a href="#">About</a>
        <ul class="dropdown">
          <li><a href="<?php echo site_url('main/tour'); ?>">Tour</a></li>
          <li><a href="<?php echo site_url('main/pricing'); ?>">Pricing</a></li>
          <li><a href="<?php echo site_url('main/contact'); ?>">Contact</a></li>
        </ul>
      </li>
      
      <li class="active has-dropdown">
        <a href="#">Account</a>
        <ul class="dropdown">
          <?php 
              if(isLoggedIn())
             {
              echo '<li><a href="' . site_url('organization') . '">Organizations</a></li>';
              echo '<li><a href="' . site_url('visitor') . '">Visitors</a></li>';
              echo '<li><a href="' . site_url('main/analytics') . '">Analytics</a></li>';
              echo '<li><a href="' . site_url('user/update/' . $this->session->userdata('user')->id) . '">Profile</a></li>';
              echo '<li><a href="' . site_url('auth/logout') . '">Logout</a></li>';
             }
             else
             {
              echo '<li><a href="' . site_url('auth/login') . '">Login</a></li>';
              echo '<li><a href="' .  site_url('auth/register') . '">Register</a></li>';
             }
          ?>
        </ul>
      </li>
       <?php 
         if(isLoggedIn())
         {
       ?>
      <li class="has-dropdown">
        <a href="#">Options</a>
        <ul class="dropdown">
          <li><a href="#">Excel</a></li>
          <li><a href="#">CSV</a></li>
          <li><a href="#">Print</a></li>
        </ul>
      </li>
      <?php } ?>
    </ul>

  </section>
</nav>