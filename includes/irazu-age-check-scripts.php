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
        <span class="irazu-agc__muted irazu-agc__uppercase">ALTERSPRÜFUNG</span>
        <h1 class="irazu-agc__heading">
        Sind Sie 18 Jahre alt, um diese Seite zu betreten?
        </h1>
        <span class="irazu-agc__muted irazu-agc__sm">Wir verkaufen unsere Produkte nur an Erwachsene.</span>
        <div class="irazu-agc__form">
          <div  class="irazu-agc__form_field">
             <input type="checkbox" name="age" id="age">
            <label for="age" class="irazu-agc__label">
            Ich stimme zu, über 18 Jahre alt zu sein, um die Seite zu betreten 
            </label>
          </div>
           <div  class="irazu-agc__form_field">
             <input type="checkbox" name="policy" id="policy">
            <label for="policy" class="irazu-agc__label">
            Ich erkläre mich mit der GDPR und der Cookie-Richtlinie einverstanden, um die Website zu betreten.
            </label>
          </div>
          <button id="irazu-agc-btn" disabled>
          Ja, ich bin
          </button>
        </div>
      </div>
    </div>
';
}
