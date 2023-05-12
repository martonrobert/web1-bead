<?php

$ci = get_instance();
$navItems = $ci->nav->getNavigationItems();
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

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php if ($ci->nav->isUserLoggedIn()) : ?>
                        <a href="<?php echo config_item('base_url'); ?>/index.php/kijelentkezes" class="button primary medium">Kijelentkezes</a>
                    <?php else : ?>
                        <a href="<?php echo config_item('base_url'); ?>/index.php/bejelentkezes" class="button primary medium">Bejelentkezés</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>