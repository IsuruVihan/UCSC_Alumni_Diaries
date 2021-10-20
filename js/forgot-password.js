const startingMinutes = 2;
let time = startingMinutes * 60;

const countdown = document.getElementById('timer');

const updateCountdown = () => {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    countdown.innerHTML = ` (${minutes}:${seconds})`;
    if (time > 0) {
        time--;
    }
}

setInterval(updateCountdown, 1000);