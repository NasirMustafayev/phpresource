<?php
include'head.php';

?>
<section id="ContactContent">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="contact_area">
        <h1>Əlaqə</h1>
        <p>Bütün təklif və iradlarınızı bizə bildirməkdən çəkinməyin.</p>
        <div class="contact_bottom">
          <div class="contact_us wow fadeInRightBig">
            <h3>Saytın yaradıcısı ilə əlaqə saxlayın</h3>
            <form action="phpmail/index.php" method="post" class="contact_form">
              <input class="form-control" type="text" required="" name="adsoyad" placeholder="Ad,Soyad(tələb olunur)">
              <input class="form-control" type="number" required="" name="telefon" placeholder="Telefon nömrəsi(tələb olunur)">
              <input class="form-control" type="email" required="" name="email" placeholder="E-mail(tələb olunur)">
              <input class="form-control" type="text" name="movzu" placeholder="Mövzu">
              <textarea class="form-control" cols="30" required="" name="mesaj" rows="10" placeholder="Məktub(tələb olunur)"></textarea>
              <input type="submit" name="contactform" value="Göndər">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
<?php

include'foot.php';
?>