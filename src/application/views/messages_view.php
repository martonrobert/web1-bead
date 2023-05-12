<?php
load_view('partials/head_view');
load_view('partials/navigation_view');
?>
<div class="container-fluid">
<main>
  <h1>Üzenetek - <small>Ahol a kutyák gazdira lelnek</small></h1>
  <hr />


  <section class="articles">
    <div class="row">
        <div class="col-xs-8 col-md-offset-2">
    <?php foreach($messages as $msg) : ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $msg['kuldve'] ?> <small><?php echo $msg['felhasznalo_nev'] ?></small></h3>
            </div>
            <div class="panel-body">
            <?php echo $msg['uzenet'] ?>
            </div>
        </div>

    <?php endforeach; ?>
        </div>
    </div>
  </section>
</main>
</div>
<?php
  load_view('partials/footer_view');
?>