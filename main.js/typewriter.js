const navbar = document.getElementById('navbar');
    let scrolled = false;

      window.onscroll = function() {
      if(window.pageYOffset > 100) {
        navbar.classList.remove('top');  
        if(!scrolled) {
          navbar.style.transform = 'translateY(-70px)';
        }
        setTimeout(function() {
          navbar.style.transform = 'translateY(0)';
          scrolled = true;
        }, 200);
      } else{
        navbar.classList.add('top');
        scrolled = false;
      }
    }


  /*const TypeWriter = function(txtElement, words, wait = 1500) {
  this.txtElement = txtElement;
  this.words = words;
  this.txt = '';
  this.wordIndex = 0;
  this.wait = parseInt(wait, 10);
  this.type();
  this.isDeleting = false;
}

// Type Method
TypeWriter.prototype.type = function() {
  const current = this.wordIndex % this.words.length;
  const fullTxt = this.words[current];
  if(this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

  let typeSpeed = 200;

  if(this.isDeleting) {
    typeSpeed /=2;
  }

  if(!this.isDeleting && this.txt === fullTxt) {
    typeSpeed = this.wait;
    this.isDeleting = true;
  } else if(this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.wordIndex++;
    typeSpeed = 500;
  }



  setTimeout(() => this.type(), typeSpeed)
}

// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);

} */

const text = baffle(".data");
text.set({
     characters : '▓█/ █░░░> ▒<▒▓< <▓▓ ▒/▒▒▒ █░█▓ ██< █▓░█ ▒>██',
     speed: 100
});
text.start();
text.reveal(3000);





