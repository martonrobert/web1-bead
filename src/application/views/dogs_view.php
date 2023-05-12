<?php
load_view('partials/head_view');
load_view('partials/navigation_view');
//print_r($dogs);
?>
<div class="container-fluid">
    <main>
        <h1>Örökbefogadható kutyáink - <small>Ahol a kutyák gazdira lelnek</small></h1>
        <hr />

        <section style="margin: 16px 8px;">
            <p>
                <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </section>

        <section class="articles">
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
    </main>
</div>
<?php
  load_view('partials/footer_view');
?>