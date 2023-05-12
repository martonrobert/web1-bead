<?php
load_view('partials/head_view');
load_view('partials/navigation_view');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-5">
            <h3>Bejelentkezés</h3>
            <hr />
            <?php if ($login_success === false and $login_message !== '') : ?>
            <div class="alert alert-danger">
                <?php echo $login_message; ?>
            </div>
            <?php endif; ?>
            <form action="<?php echo config_item('base_url'); ?>/index.php/bejelentkezes" method="post">
                <input type="hidden" name="action" value="login" />
                <div class="form-group">
                    <label for="exampleInputEmail1">Email cím</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="username" placeholder="E-mail cím">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jelszó</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Jelszó">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-default">Bejelentkezés</button>
                </div>
                <div class="form-group text-center">
                    <a href="#" class="">Elfelejtette a jelszavát?</a>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-5 col-sm-offset-1">
            <h3>Regisztráció</h3>
            <hr />     
            <?php if ($signup_success === false and $signup_message !== '') : ?>
            <div class="alert alert-danger">
                <?php echo $signup_message; ?>
            </div>
            <?php endif; ?>
            <?php if ($signup_success === true and $signup_message !== '') : ?>
            <div class="alert alert-success">
                <?php echo $signup_message; ?>
            </div>
            <?php endif; ?>            
            <form action="<?php echo config_item('base_url'); ?>/index.php/bejelentkezes" method="post">
            <input type="hidden" name="action" value="signup" />
                <div class="form-group">
                    <label for="InputNev">Név</label>
                    <input type="text" class="form-control" id="InputNev" name="nev" placeholder="Név" value="<?php $signup_nev; ?>">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email cím</label>
                    <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="E-mail cím" value="<?php $signup_email; ?>">
                </div>                                
                <div class="form-group">
                    <label for="InputPhone">Telefonszám</label>
                    <input type="text" class="form-control" id="InputPhone" name="telefon" placeholder="Telefonszám" value="<?php $signup_telefon; ?>">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Jelszó</label>
                    <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Jelszó" value="<?php $signup_password; ?>">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-default">Regisztráció</button>
                </div>                
                
            </form>
        </div>

    </div>

    <!--div class="bottom-container">
        <div class="row">
            <div class="col">
                <a href="#" style="color:white" class="btn">Regisztráció</a>
            </div>
            <div class="col">
                <a href="#" style="color:white" class="btn">Elfelejtette a jelszavát?</a>
            </div>
        </div>
    </div-->

    <section class="articles"></section>

    <?php
    load_view('partials/footer_view');
    ?>    
    

</div>