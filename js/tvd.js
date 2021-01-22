// var $ = jQuery.noConflict();
// $(document).ready(function() {
const isMobile = () => {
  if (
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPad/i) ||
    screen.width <= 699
  ) {
    return true;
  }
};

const toggleTvdModel = () => {
  const tvd_model = document.getElementById("tvd-model");
  const tvd_btn = document.getElementById("tvd");
  const mob = document.getElementById("mob");
  const pc = document.getElementById("pc");
  let hidden =
    tvd_model.style.display === "none" || tvd_model.style.display === "";
  if (hidden) {
    tvd_model.style.display = "flex";
    if (isMobile()) {
      mob.style.display = "flex";
    } else {
      pc.style.display = " flex";
    }
    tvd_btn.style.display = "none";
    document.body.style.overflow = "hidden";
  } else {
    tvd_model.style.display = "none";
    tvd_btn.style.display = "flex";
    document.body.style.overflow = "auto";
  }
};
const tvdBtn = document.getElementById("tvd");
const tvdClose = document.getElementById("tvd_model_close");
tvdBtn.addEventListener("click", () => toggleTvdModel());
tvdClose.addEventListener("click", () => toggleTvdModel());
// });
