'use strict';

const postTweet = document.querySelector('.post__tweet');
const showTab = document.querySelector('.post__show');
const display = function () {
    showTab.style.display = "flex";
}

postTweet.addEventListener('focus', display);

// const open__popup = function () {
//     popup.classList.remove('popup__hidden');
// }
// const close__popup = function () {
//     popup.classList.add('popup__hidden');
// }
// const tweet_btn = document.getElementById('tweet-btn');
// const popup = document.querySelector('.popup');
// const popup__close = document.querySelector('.popup__box');

// tweet_btn.addEventListener('click', open__popup);
// popup__close.addEventListener('click', close__popup);