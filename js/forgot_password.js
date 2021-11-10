const startingMinutes = 2;
let time = startingMinutes * 60;

setInterval(updateCountdown, 1000);

// const updateCountdown = () =>{
//     let minutes = Math.floor(time/60);
//     let seconds = time % 60;

//     seconds = seconds < 10 ? '0'+ seconds : seconds;

//     countdownElement.innerHTML =  `${minutes}  : ${seconds}`;
//     time--;
// }
function updateCountdown() {
    const countdownElement = document.getElementById('timer');
    let minutes = Math.floor(time / 60);
    let seconds = time % 60;

    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    time < 0 ? countdownElement.innerHTML = 'OTP Expired' : countdownElement.innerHTML = `${minutes}  : ${seconds}`;
    time--;
}