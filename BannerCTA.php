<?php
/*
Plugin Name: Banner CTA
Plugin URI:
Description: a banner who show an article of the shop and a call-to-action button
Author: Maxime Cadennes
Version: 1.0
Author URI:
*/

Function BannerCTA() {
  $html = '
<div class="banner">
  <p class="textbanner">
    Si vous êtes curieux ou intéressé par ce produit, retrouvez-le sans plus attendre sur la boutique.
  </p>
  <a href="https://maximecadennes.referentnumerique-insarouen.fr/produit/cirkus-absinthe-rouge/" target="_blank">
    <input type="button" value="Voir le produit">
  </input></a>
</div>

<style type="text/css">
  .banner {
    background-image: url(https://maximecadennes.referentnumerique-insarouen.fr/wp-content/uploads/2019/10/cropped-front-page1.jpg);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1rem;
    text-align: center;
  }
  .textbanner {
    font-size: 2rem;
    color: white;
    font-weight: 700;
  }
</style>
  ';

  return $html;
}

add_shortcode('Bannerarticle', 'BannerCTA');
