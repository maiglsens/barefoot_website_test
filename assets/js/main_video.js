var video_m = document.getElementById('myVideo_m');
var playButton_m = document.getElementById('playButton_calc_promo_m');

playButton_m.addEventListener('click', function() {
    if (video_m.paused) {
        video_m.play();
        playButton_m.style.display = 'none';
    } else {
        video_m.pause();
        playButton_m.style.display = 'block';
    }
});

video_m.addEventListener('play', function() {
    playButton_m.style.display = 'none';
});

video_m.addEventListener('ended', function() {
    playButton_m.style.display = 'block';
});