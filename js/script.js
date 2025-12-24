// Hide greeting banner after 10 seconds
$(function(){
    const greeting = $("#greeting");
    if (greeting.length) {
        setTimeout(() => {
            greeting.hide();
        }, 10000); // 10 seconds
    }

});

const projects = [
   
    {
        "title": "Reddit-Client",
        "img": "images/redditClient.png",
        "desc": "A simple React-based client for browsing Reddit posts by subreddit, with search and pagination support.",
        "tools": " Redux / Redux Toolkit, React, JavaScript (ES6+), CSS, Reddit API, Fetch API, Git & GitHub, Create React App",
        "live": "https://redditexplore.netlify.app/",
        "code": "https://github.com/annuoluwa/Reddit-Client.git"
    },
    {
        "title": "Jammming",
        "img": "images/jammming.png",
        "desc": "Jamming is a web app that lets users search Spotify, create playlists, and manage their favorite music seamlessly.",
        "tools": "React, JavaScript, CSS, Redux & Redux Toolkit, JavaScript (ES6+), Spotify Web API, OAuth 2.0 Authorization Code Flow with PKCE, Fetch API, Git & GitHub, Create React App",
        "live": "https://jammm2music.netlify.app/",
        "code": "https://github.com/annuoluwa/Jammming.git"
    },
    {
        "title": "Tresse",
        "img": "images/tresse.png",
        "desc": "Tresse is a web app for managing music playlists and exploring tracks seamlessly.",
        "tools": "React, CSS, Node.js & Express, PostgreSql, REST API / Fetch API, Git & GitHub, OAuth 2.0 Authorization Code Flow with PKCE, ",
        "live": "https://tresse.onrender.com",
        "code": "https://github.com/annuoluwa/tresse.git"
    },
     {
        "title": "Predict Website",
        "img": "images/predict.png",
        "desc": "A simple codcademy project showcasing an interactive website using my JavaScript skills.",
        "tools": "HTML, CSS, JavaScript",
        "live": "https://annuoluwa.github.io/predict/",
        "code": "https://github.com/annuoluwa/predict"
    },
    {
        "title": "NaturEssence",
        "img": "images/naturessence.png",
        "desc": "A Code First Girls final project showcasing front-end skills, responsive design and a hero section.",
        "tools": "HTML, CSS, Bootstrap",
        "live": "https://naturessence.netlify.app/",
        "code": "https://github.com/annuoluwa/session-7/"
    }
];
 

// Function to create project cards

function createProjectCards(object) {
  $('#projectContainer').empty();
  object.forEach(obj => {
    $('#projectContainer').append(
    `<div class="col-12 col-md-6">
      <div class = "project-card">
      <h3> ${obj.title}</h3>
      <img src="${obj.img}" alt="${obj.title} image"/>
      <p>${obj.desc}</p>
      <p class="tools-used"><strong>Tools Used:</strong> ${obj.tools}</p>
      <div class="buttons">
      <a href="${obj.live}" target="_blank">Live Demo</a>
      <a href="${obj.code}" target = "_blank">Source Code</a>
      </div>
      </div>
      </div>`);
  });
 
}

// initial render
$(function() {
createProjectCards(projects);
})


function showPage(pageId) {
  $('.page').hide();
  $(`#${pageId}`).show();
  window.scrollTo(0, 0);

  
  if (pageId === 'home-section' || pageId === 'skills-section') {
    $('#skills-section').show();
  }else {
    $('#skills-section').hide();
  }

  
}

//nav link click handler
$(function() {
  $('.page').hide();
  showPage('home-section');

$('#nav-home').on('click', e => { e.preventDefault(); showPage('home-section');});
$('#nav-profile').on('click', e => { e.preventDefault(); showPage('profile-section');});
$('#nav-projects').on('click', e => { e.preventDefault(); showPage('projects-section');});
$('#nav-contact').on('click', e => { e.preventDefault(); showPage('contact-section');});
$('#nav-skills').on('click', e => { e.preventDefault(); showPage('skills-section');});
  

createProjectCards(projects);
});


