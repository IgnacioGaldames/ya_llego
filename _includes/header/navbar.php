<header>
  <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $home_url; ?>">
    <img src="<?php echo $url; ?>/_img/iconos/logo_header.png" data-fallback="<?php echo $url; ?>/_img/logo_header.png" alt="<?php echo $title; ?>" class="logo">
    </a>
      <div class="collapse navbar-collapse justify-content-md-end" id="navbarTogglerDemo02">
        <ul class="navbar-nav  mt-2 mt-md-0">
        <?php if ($facebook) { ?>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/<?php echo $facebook ?>" target="_blank">
              <span class="fa-stack fa-lg">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
            </a>
          </li>         
        <?php } ?>
        <?php if ($twitter) { ?>
          <li class="nav-item">
            <a class="nav-link" href="https://www.twitter.com/<?php echo $twitter ?>" target="_blank">
              <span class="fa-stack fa-lg">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
            </a>
          </li>
        <?php } ?>
        <?php if ($linkedin) { ?>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/company/<?php echo $linkedin ?>" target="_blank">
              <span class="fa-stack fa-lg">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
            </a>
          </li>
        <?php } ?>
        <?php if ($instagram) { ?>
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/<?php echo $instagram ?>" target="_blank">
              <span class="fa-stack fa-lg">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
            </a>
          </li>
        <?php } ?>
       <?php if ($googleplus) { ?>
          <li class="nav-item">
            <a class="nav-link" href="https://plus.google.com/<?php echo $googleplus ?>" target="_blank">
              <span class="fa-stack fa-lg">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            </span>
            </a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
</header>