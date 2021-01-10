<?php
//Add scripts
function tvd_add_scripts()
{
  //Add main css
  wp_enqueue_style('tvd-main-style', plugins_url(). '/teamviewer/css/tvd.css');
    
  //Add main scripts
  wp_enqueue_script('tvd-main-script', plugins_url(). '/teamviewer/js/tvd.js', null, null, true);
}

add_action('wp_enqueue_scripts', 'tvd_add_scripts');

add_action('wp_footer', 'add_team_viewer_button');

function add_team_viewer_button(){
  echo '
    <div class="tvd" id="tvd">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M28.6562 0H3.30628C2.42266 0.01138 1.57939 0.366878 0.960132 0.989066C0.340871 1.61125 -0.00421265 2.44973 3.88228e-05 3.32187V28.6781C-0.00417723 29.5534 0.34348 30.3947 0.966779 31.0174C1.59008 31.6401 2.43815 31.9935 3.32503 32H28.675C29.5619 31.9935 30.4099 31.6401 31.0332 31.0174C31.6565 30.3947 32.0042 29.5534 32 28.6781V3.32187C32.002 2.8869 31.9171 2.45579 31.7501 2.05325C31.5831 1.65072 31.3372 1.28467 31.0266 0.976079C30.716 0.66749 30.3467 0.422427 29.94 0.254933C29.5332 0.0874391 29.097 0.000806673 28.6562 0V0ZM15.9875 29.2313C12.4576 29.2044 9.08298 27.7957 6.60497 25.3147C4.12696 22.8338 2.7483 19.4835 2.77191 16C2.7483 12.5165 4.12696 9.16621 6.60497 6.68527C9.08298 4.20432 12.4576 2.79564 15.9875 2.76875C19.519 2.7932 22.8961 4.2008 25.3761 6.68202C27.8561 9.16323 29.2361 12.5149 29.2125 16C29.2361 19.4851 27.8561 22.8368 25.3761 25.318C22.8961 27.7992 19.519 29.2068 15.9875 29.2313Z"
          fill="url(#paint0_linear)" />
        <path
          d="M28.2569 16L19.085 11.7594L19.8219 14.4766H12.1594L12.8963 11.7594L3.72443 16.0031L12.9025 20.2438L12.1657 17.5266H19.8281L19.0913 20.2438L28.2569 16.0031"
          fill="url(#paint1_linear)" />
        <defs>
          <linearGradient id="paint0_linear" x1="15.9878" y1="32.0906" x2="15.9878" y2="-0.0101312"
            gradientUnits="userSpaceOnUse">
            <stop stop-color="#096FD2" />
            <stop offset="1" stop-color="#0E8EE9" />
          </linearGradient>
          <linearGradient id="paint1_linear" x1="12.9053" y1="20.2525" x2="12.9025" y2="11.7641"
            gradientUnits="userSpaceOnUse">
            <stop stop-color="#096FD2" />
            <stop offset="1" stop-color="#0E8EE9" />
          </linearGradient>
        </defs>
      </svg>
      <div class="tvd_body">
        <p class="tvd_title">Get Remote Support</p>
        <p class="tvd_sub_title">With Team Vieser</p>
      </div>
    </div>
';
}

add_action('wp_footer', 'add_team_viewer_model');
function add_team_viewer_model(){
  echo '
    <div class="tvd-model" id="tvd-model">
      <div class="tvd-model-container">
        <div class="tvd_model_header">
          <div class="left_header">
            <p class="tvd_model_title">Get Support Remotely</p>
            <p class="tvd_model_subtitle">
              Get support remotely by allowing easy acess of allowing your device that can be control through support side
            </p>
          </div>
          <div class="right_header">
            <img src="'.plugins_url().'/teamviewer/img/TeamViewer_logo.png" alt="Team Viewer" / class="TeamViewer_logo">
          </div>
          <!-- .close -->
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
            id="tvd_model_close">
            <path d="M2 2L14 14M2 14L14 2L2 14Z" stroke="#BDBDBD" stroke-width="4" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
          <!-- /.close -->
        </div>
        <!-- .tvd_model_body -->
        <div class="tvd_model_body">
          <!-- .tvd_apple -->
          <div class="tvd_apple tvd_os">

            <img src="'.plugins_url().'/teamviewer/img/apple.png" alt="">
            <p class="os_type">
              TeamViewerQs For Mac
            </p>
            <!-- .tvd_download -->
            <a href="https://download.teamviewer.com/download/TeamViewer.dmg" class="tvd_download">
              Download

              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 17.5C3 17.2348 3.10536 16.9804 3.29289 16.7929C3.48043 16.6054 3.73478 16.5 4 16.5H16C16.2652 16.5 16.5196 16.6054 16.7071 16.7929C16.8946 16.9804 17 17.2348 17 17.5C17 17.7652 16.8946 18.0196 16.7071 18.2071C16.5196 18.3946 16.2652 18.5 16 18.5H4C3.73478 18.5 3.48043 18.3946 3.29289 18.2071C3.10536 18.0196 3 17.7652 3 17.5ZM6.293 9.793C6.48053 9.60553 6.73484 9.50021 7 9.50021C7.26516 9.50021 7.51947 9.60553 7.707 9.793L9 11.086V3.5C9 3.23478 9.10536 2.98043 9.29289 2.79289C9.48043 2.60536 9.73478 2.5 10 2.5C10.2652 2.5 10.5196 2.60536 10.7071 2.79289C10.8946 2.98043 11 3.23478 11 3.5V11.086L12.293 9.793C12.3852 9.69749 12.4956 9.62131 12.6176 9.5689C12.7396 9.51649 12.8708 9.4889 13.0036 9.48775C13.1364 9.4866 13.2681 9.5119 13.391 9.56218C13.5139 9.61246 13.6255 9.68671 13.7194 9.78061C13.8133 9.8745 13.8875 9.98615 13.9378 10.109C13.9881 10.2319 14.0134 10.3636 14.0123 10.4964C14.0111 10.6292 13.9835 10.7604 13.9311 10.8824C13.8787 11.0044 13.8025 11.1148 13.707 11.207L10.707 14.207C10.5195 14.3945 10.2652 14.4998 10 14.4998C9.73484 14.4998 9.48053 14.3945 9.293 14.207L6.293 11.207C6.10553 11.0195 6.00021 10.7652 6.00021 10.5C6.00021 10.2348 6.10553 9.98053 6.293 9.793Z"
                  fill="#004B8E" />
              </svg>

            </a>
            <!-- /.tvd_download -->
          </div>
          <!-- /.tvd_apple -->

          <!-- .tvd_windows -->
          <div class="tvd_windows tvd_os">
            <img src="'.plugins_url().'/teamviewer/img/windows.png" alt="">
            <p class="os_type">
              TeamViewerQs For Windows
            </p>
            <a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe" class="tvd_download">
              Download
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 17.5C3 17.2348 3.10536 16.9804 3.29289 16.7929C3.48043 16.6054 3.73478 16.5 4 16.5H16C16.2652 16.5 16.5196 16.6054 16.7071 16.7929C16.8946 16.9804 17 17.2348 17 17.5C17 17.7652 16.8946 18.0196 16.7071 18.2071C16.5196 18.3946 16.2652 18.5 16 18.5H4C3.73478 18.5 3.48043 18.3946 3.29289 18.2071C3.10536 18.0196 3 17.7652 3 17.5ZM6.293 9.793C6.48053 9.60553 6.73484 9.50021 7 9.50021C7.26516 9.50021 7.51947 9.60553 7.707 9.793L9 11.086V3.5C9 3.23478 9.10536 2.98043 9.29289 2.79289C9.48043 2.60536 9.73478 2.5 10 2.5C10.2652 2.5 10.5196 2.60536 10.7071 2.79289C10.8946 2.98043 11 3.23478 11 3.5V11.086L12.293 9.793C12.3852 9.69749 12.4956 9.62131 12.6176 9.5689C12.7396 9.51649 12.8708 9.4889 13.0036 9.48775C13.1364 9.4866 13.2681 9.5119 13.391 9.56218C13.5139 9.61246 13.6255 9.68671 13.7194 9.78061C13.8133 9.8745 13.8875 9.98615 13.9378 10.109C13.9881 10.2319 14.0134 10.3636 14.0123 10.4964C14.0111 10.6292 13.9835 10.7604 13.9311 10.8824C13.8787 11.0044 13.8025 11.1148 13.707 11.207L10.707 14.207C10.5195 14.3945 10.2652 14.4998 10 14.4998C9.73484 14.4998 9.48053 14.3945 9.293 14.207L6.293 11.207C6.10553 11.0195 6.00021 10.7652 6.00021 10.5C6.00021 10.2348 6.10553 9.98053 6.293 9.793Z"
                  fill="#004B8E" />
              </svg>
            </a>
          </div>
          <!-- /.tvd_windows -->
        </div>
        <!-- /.tvd_model_body -->
      </div>
    </div>
';
}
