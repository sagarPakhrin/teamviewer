const getCookie = (name) => {
  var nameEQ = name + '=';
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
};

const irazuSubmitBtn = document.getElementById('irazu-agc-btn');
const irazuAgcModal = document.querySelector('.irazu-agc__backdrop');

const openModal = () => {
  irazuAgcModal.classList.add('irazu-agc-show');
  document.body.classList.add('irazu-remove-scroll');
};
const closeModal = () => {
  irazuAgcModal.classList.remove('irazu-agc-show');
  document.body.classList.remove('irazu-remove-scroll');
};

if (!getCookie('age_verified')) {
  openModal();
}

irazuSubmitBtn.addEventListener('click', (e) => {
  document.cookie = 'age_verified=true;path=/';
  closeModal();
});

const inputs = document.querySelectorAll('.irazu-agc__form input');
inputs.forEach((input) => {
  input.addEventListener('click', () => {
    irazuSubmitBtn.disabled = !(
      document.querySelectorAll('.irazu-agc__form input:checked').length === 2
    );
  });
});
