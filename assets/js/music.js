var audio, playbtn, mutebtn, seek_bar;
function initAudioPlayer(){
	audio = new Audio();
	audio.src = "assets/bgmusic.mp3";
	audio.loop = true;
    audio.play();
    audio.volume = 0.3;
	// Set object references
	playbtn = document.getElementById("playpausebtn");
	mutebtn = document.getElementById("mutebtn");
	// Add Event Handling
	playbtn.addEventListener("click",playPause);
    mutebtn.addEventListener("click", mute);
    playbtn.style.background = "url(https://image.flaticon.com/icons/svg/148/148744.svg) no-repeat";
	// Functions
	function playPause(){
		if(audio.paused){
            audio.volume = 0.3;
		    audio.play();
		    playbtn.style.background = "url(https://image.flaticon.com/icons/svg/189/189889.svg) no-repeat";
	    } else {
		    audio.pause();
		    playbtn.style.background = "url(https://image.flaticon.com/icons/svg/148/148744.svg) no-repeat";
	    }
	}
	function mute(){
		if(audio.muted){
		    audio.muted = false;
		    mutebtn.style.background = "url(https://image.flaticon.com/icons/svg/204/204287.svg) no-repeat";
	    } else {
		    audio.muted = true;
		    mutebtn.style.background = "url(https://image.flaticon.com/icons/svg/148/148757.svg) no-repeat";
	    }
	}
}
window.addEventListener("load", initAudioPlayer);