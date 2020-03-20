// alert('videobg.jsを、読み込みました');

let video = document.querySelector('video');
window.addEventListener('scroll' , function() {
     let value = 1 +  window.scrollY / -600;
     video.style.opacity = value;
})