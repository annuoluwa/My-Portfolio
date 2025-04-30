window.onload = function(){
    setTimeout(function(){
        document.getElementById("greeting").style.display = "none";}, 10000)
    };


    

    //contact

    const getInTouch = document.getElementById("contact");
    

    let email = "leezabethyomi@gmail.com";
    let index = 0;

getInTouch.textContent = "";

    function typeEmail(){

if( index < email.length){
 getInTouch.textContent+= email.charAt(index);
index++;
setTimeout(typeEmail, 100)
        }
    }




    //linkedin
    const linked = document.getElementById("linkedIn");

let linkedInText = "LinkedIn: Elizabeth Osunsanwo";
let linkedInURL = "https://www.linkedin.com/in/elizabeth-oluwafunmilayo";
let index1 = 0;


linked.textContent ="";
function typeLinkedIn() {
  if (index1 < linkedInText.length) {
    linked.textContent += linkedInText.charAt(index1);
    index1++;
    setTimeout(typeLinkedIn, 100);
  } else {
    // After typing, replace with clickable link
    setTimeout(() => {
      linked.innerHTML = `
        <h3>LinkedIn: 
          <a href="${linkedInURL}" target="_blank">
            Elizabeth Osunsanwo
          </a>
        </h3>`;
    }, 1000); // Delay to show typed version for a second
  }
}

window.onload = function () {
    typeEmail()
  typeLinkedIn();
};

//mobile nav

const menu = document.getElementById("mobileToggle");
const nav = document.getElementById("mobile");

menu.addEventListener('click', function(){
    nav.classList.toggle("show");
});

