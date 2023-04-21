var videoPlayer = document.getElementById('videoPlayer');
var playButton = document.getElementById('playButton');

playButton.addEventListener('click', function() {
    if (videoPlayer.paused) {
        videoPlayer.play();
    } else {
        videoPlayer.pause();
    }
});

videoPlayer.addEventListener('ended', function() {
    videoPlayer.currentTime = 0;
    videoPlayer.play();
});
