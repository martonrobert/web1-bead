<?php

$ci = get_instance();
$navItems = $ci->nav->getNavigationItems();
$user = $ci->nav->getUser();
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header logo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text" href="/">KecskemetMenhely</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php foreach($navItems as $navItem): ?>
                    <li class=""><a href="<?php echo $navItem['href'] ?>"><?php echo $navItem['title']?></a></li>
                <?php endforeach; ?>
            </ul>

            <?php if ($ci->nav->isUserLoggedIn()) : ?>
                <p class="navbar-text navbar-right">Belépve mint <?php echo $user->nev ?> <a href="<?php echo config_item('base_url'); ?>/index.php/kijelentkezes" class="navbar-link">Kilépés  </a></p>
            <?php else : ?>
                <p class="navbar-text navbar-right"><a href="<?php echo config_item('base_url'); ?>/index.php/bejelentkezes" class="navbar-link">Belépés  </a></p>
            <?php endif; ?>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>