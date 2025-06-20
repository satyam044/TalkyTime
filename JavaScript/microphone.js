var microphone = document.querySelector(".fa-microphone"),
message = document.querySelector("#Message"),
recognition = new webkitSpeechRecognition();

var micToggle = false;

recognition.lang = window.navigator.language;
recognition.interimResults = true;

microphone.addEventListener("click", function(){
    if(!micToggle){
        recognition.start();
        microphone.style.background = "#1500ff";
        microphone.style.color = "#fff";
        micToggle = true;
    }else{
        microphone.style.background = "unset";
        microphone.style.color = "#1500ff";
        recognition.stop();
        micToggle = false;
    }
})

recognition.addEventListener('result', function(e){
    if (!micToggle) return;
    const result = e.results[e.results.length - 1][0].transcript;
    message.value += result;
})