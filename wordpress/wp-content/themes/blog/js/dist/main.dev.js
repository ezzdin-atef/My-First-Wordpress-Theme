"use strict";

var inputs = document.querySelectorAll('.comment-form input');
inputs.forEach(function (el) {
  el.classList.add('form-control');
});
document.getElementById('comment').classList.add('form-control');
document.querySelector('.comment-form .submit').classList.remove('form-control');
document.querySelector('.comment-form .submit').classList.add('btn');
document.querySelector('.comment-form .submit').classList.add('btn-primary');
document.querySelector('.comment-form .submit').classList.add('btn-primary');
document.getElementById('wp-comment-cookies-consent').classList.remove('form-control');
document.getElementById('wp-comment-cookies-consent').classList.add('form-check-input');
document.querySelector('#wp-comment-cookies-consent + label').classList.add('form-check-label');
document.querySelector('.comment-form-cookies-consent').classList.add('form-check');
//# sourceMappingURL=main.dev.js.map
