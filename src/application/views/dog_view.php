<?php
load_view('partials/head_view');
load_view('partials/navigation_view');
//print_r($dog);
$kepId = 1;
?>

<div class="dog-info text-left">
      <section class="dog-name">
        <div class="dog-name__info">
          <h1><?php echo $dog['nev'] ?></h1>
        </div>
        <div class="dog-name__cta"><a class="button">Kérdezzen bátran!</a></div>
      </section>
      <section class="dog-gallery">

        <?php foreach($pictures as $pic) : ?>
        <input class="dog-gallery__input" id="gallery-image-<?php echo $kepId; ?>" type="radio" value="1" name="dog-image" <?php echo ($kepId == 2 ? 'checked="checked"' : '' ) ?>"/>
        <label for="gallery-image-<?php echo $kepId; ?>"><img src="<?php echo $pic['url'] ?>" alt="<?php echo $pic['cim'] ?>"/></label>
        <?php $kepId++; ?>
        <?php endforeach; ?>
        
        <div class="dog-gallery__images">
            <?php foreach($pictures as $pic) : ?>
            <img src="<?php echo $pic['url'] ?>" alt="<?php echo $pic['cim'] ?>"/>
            <?php endforeach; ?>
        </div>
      </section>
      <section class="dog-manythings">
        <div class="dog-manythings__stats">
          <p>Súlya:  </p>
          <h5> <?php echo $dog['suly'] ?>kg</h5>
        </div>
        <div class="dog-manythings__stats">
          <p>Fajtája: </p>
          <h5><?php echo $dog['fajta'] ?></h5>
        </div>
        <div class="dog-manythings__stats">
          <p>Neme: </p>
          <h5><?php echo $dog['nem'] ?></h5>
        </div>
        <div class="dog-manythings__stats">
          <p>Mérete: </p>
          <h5><?php echo $dog['meret'] ?></h5>
        </div>
        <div class="dog-manythings__stats">
          <p>Színe: </p>
          <h5><?php echo $dog['szin'] ?></h5>
        </div>
        <div class="dog-manythings__stats">
          <p>Szőre hossza: </p>
          <h5><?php echo $dog['szorzet'] ?></h5>
        </div>
        <div class="dog-manythings__more">
          <h3>Bővebb információ: </h3>
          <p> <strong>Bekerülés dátuma: </strong><?php echo $dog['bekerules_datuma'] ?></p>
          <p> <strong>Chip: </strong><?php echo ($dog['chipelt'] == 1 ? 'Van' : 'Nincs') ?></p>
          <p> <strong>Tulajdonságai: </strong><?php echo $dog['leiras'] ?></p>
        </div><a href="https://goo.gl/maps/dvBwT41xr2j9RuZB9" target="_blank" class="dog-manythings__location" data-tooltip="Mutasd a térképen" >
          <div class="dog-manythings__location__info">
            <h5>Itt fogták be Tappancsot: </h5>
            <p><i  class="icon-location-pin" ></i><?php echo $dog['cim'] ?></p>
          </div>
          <div class="dog-manythings__location__icon"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/567707/icon-googlemap.png" alt="Location Icon"/></div></a>
      </section>
      <section class="dog-ask-about"><a class="button" href="<?php echo config_item('base_url'); ?>/index.php/kapcsolat?dog=<?php echo $dog['id'] ?>">Kérdezzen bátran!</a></section>
    </div>
    <section class="articles">
        <h3>További elérhető kutyáink</h3>
            <div class="see-more-dogs__wrapper">
                <?php foreach($dogs as $dog): ?>
                <div class="media-card media-card-imgonly">
                    <div class="media-card__image">
                        <img src="<?php echo $dog['kep_url'] ?>" alt="<?php echo $dog['nev'] ?>"/>
                    </div>
                    <div class="media-card__info">
                        <h3><?php echo $dog['nev'] ?></h3>
                    </div>
                    <div class="media-card__cta"><a href="kutya?id=<?php echo $dog['id'] ?>" class="button">Bővebb információ</a></div>
                </div>
                <?php endforeach; ?>
            </div>    
        </section>
<?php
  load_view('partials/footer_view');
?>