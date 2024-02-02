function copyText(){
    console.log("yes");
    navigator.clipboard.writeText("burrross_1995");
    document.getElementById("disc_button").innerHTML = "Copied!";
    setTimeout(()=>{document.getElementById("disc_button").innerHTML="Discord"}, 3500);
  }