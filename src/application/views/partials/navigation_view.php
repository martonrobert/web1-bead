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
                <li class="active"><a href="/">Kezdőoldal <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Kutyáink</a></li>
                <li><a href="#">Kapcsolat</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo config_item('base_url'); ?>/index.php/bejelentkezes" class="button primary medium">Bejelentkezés</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>