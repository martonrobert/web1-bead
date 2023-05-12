<?php
load_view('partials/head_view');
load_view('partials/navigation_view');
?>
<div class="container-fluid">
<main>
  <h1>KecskemetMenhely - <small>Ahol a kutyák gazdira lelnek</small></h1>
  <hr />
  <div class="text-center">
    <img src="<?php echo config_item('base_url'); ?>/img/header.png" height="400" alt="bevezető kép"/>
  </div>

  <section style="margin: 16px 8px;">
    <p>
    <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
  </section>

  <div class="video text-center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/qx-nhRgV5Y0?autoplay=1&mute=1"></iframe>
  </div>

  <div class="video text-center">
      <video controls="controls" width="700" height="500" name="Video Name">
        <source src="img/video.mov">
      </video>
    </div>   

  <section class="articles">

  </section>
</main>
</div>
<?php
  load_view('partials/footer_view');
?>