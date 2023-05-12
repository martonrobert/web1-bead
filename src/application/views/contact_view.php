<?php
load_view('partials/head_view');
load_view('partials/navigation_view');

$ci = get_instance();
$user = $ci->nav->getUser();

?>
<div class="container-fluid">
<main>
  <h1>KecskemetMenhely - <small>Ahol a kutyák gazdira lelnek</small></h1>
  <hr />
  <div class="row">

    <div class="col-xs-12 col-md-8 col-md-offset-2">
    <div style="text-align:center">
          <h2>Üzenj Nekünk</h2>
          <p>Miben segíthetünk?</p>
        </div>
        <?php if (isset($status) ) : ?>
            <div class="alert alert-dismissible <?php echo ($status == 'success' ? 'alert-success' : 'alert-danger') ?>">
                <p><?php echo $message ?></p>
            </div>
        <?php endif; ?>
        <div class="row">
          <div class="column">
            <img src="https://images.pexels.com/photos/4206711/pexels-photo-4206711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
          </div>
          <div class="column">
            <form action="<?php echo config_item('base_url'); ?>/index.php/kapcsolat" method="post">
                <input type="hidden" name="uid" value="<?php echo ($user ? $user->id : 1) ?>" />
                <input type="hidden" name="kutya" value="<?php echo (isset($dog) ? $dog : 1); ?>" />
                <div class="form-group">
                    <label for="name">Név</label>
                    <input type="text" class="form-control" id="name" name="nev" placeholder="Név" value="<?php echo ($user ? $user->nev : '') ?>" <?php echo ($user ? 'disabled=""' : '') ?>>
                </div>
                <div class="form-group">
                    <label for="email">Email cím</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail cím" value="<?php echo ($user ? $user->email : '') ?>" <?php echo ($user ? 'disabled=""' : '') ?>>
                </div>
                <div class="form-group">
                    <label for="message">Üzenet</label>
                    <textarea class="form-control" id="message" name="uzenet" placeholder="Üzenj valamit.." rows="10"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-default">Küldés</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</main>
</div>
<?php
  load_view('partials/footer_view');
?>