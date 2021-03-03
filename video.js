var hideStr = 'Hide', showStr = 'Show', hideClass = 'hide';
var buttons = document.querySelectorAll('video + button.close');
for(var b = 0; b < buttons.length; b++){
  var button = buttons[b];
  button.addEventListener('click', function(){
    var video = this.parentNode.childNodes[1];
    video.muted = !video.muted;
    video.classList.toggle (hideClass);
    if(this.textContent == hideStr) this.textContent = showStr;
    else this.textContent = hideStr;
  });
}