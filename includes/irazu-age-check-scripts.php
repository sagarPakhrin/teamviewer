<?php
//Add scripts
function tvd_add_scripts()
{
    //Add main css
    wp_enqueue_style('tvd-main-style', plugins_url(). '/irazu-age-check/css/irazu-agc.css');
    
    //Add main scripts
    wp_enqueue_script('tvd-main-script', plugins_url(). '/irazu-age-check/js/irazu-agc.js', null, null, true);
}

add_action('wp_enqueue_scripts', 'tvd_add_scripts');

add_action('wp_footer', 'add_team_viewer_button');

function add_team_viewer_button()
{
    echo '
    <div class="irazu-agc__backdrop irazu-agc-hidden">
      <div class="irazu-agc__modal">
        <span class="irazu-agc__muted irazu-agc__uppercase">Age Check</span>
        <h1 class="irazu-agc__heading">
          Are you 18 years older to enter this site ?
        </h1>
        <span class="irazu-agc__muted irazu-agc__sm">We sell our products to the adults only.</span>
        <div class="irazu-agc__form">
          <div  class="irazu-agc__form_field">
             <input type="checkbox" name="age" id="age">
            <label for="age" class="irazu-agc__label">
              I agree to be above 18+ year old to enter the site 
            </label>
          </div>
           <div  class="irazu-agc__form_field">
             <input type="checkbox" name="policy" id="policy">
            <label for="policy" class="irazu-agc__label">
              I agree to be accept the GDPR & Cookie policy to enter the site
            </label>
          </div>
          <button id="irazu-agc-btn" disabled>
            YES , I AM 
          </button>
          <button class="irazu-agc-cancel-btn">
            Nope
          </button>
        </div>
      </div>
    </div>
';
}
