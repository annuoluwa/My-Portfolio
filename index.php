<?php include 'header.php'; ?>

  <div class="container">
    <div id="greeting">
      Welcome to my portfolio. Please click on projects to evaluate my skills
    </div>
  </div>

  <section>
    <div id="about">
      <h2>About Me</h2>
      <div class="about-me">
        <p>Hi, I'm Elizabeth <br>
        I’m a full-stack software engineer passionate about building practical, user-friendly web applications.<br><br>
        I enjoy turning ideas into functional products and constantly learning new technologies to solve real-world problems.
        <br><br>Experienced with React, Node.js, Express, and PostgreSQL, I’m ready to contribute to impactful software projects.</p>

        <img src="images/Elizabeth.jpg" class="Elizabeth" alt="Elizabeth">
      </div>
    </div>
  </section>

  <?php
  // Projects array
  $projects = [
    [
        "title" => "Predict Website",
        "img" => "images/predict.png",
        "desc" => "A simple codcademy project showcasing an interactive website using my JavaScript skills.",
        "tools" => "HTML, CSS, JavaScript",
        "live" => "https://annuoluwa.github.io/predict/",
        "code" => "https://github.com/annuoluwa/predict"
    ],
    [
        "title" => "NaturEssence",
        "img" => "images/naturessence.png",
        "desc" => "A Code First Girls final project showcasing front-end skills, responsive design and a hero section.",
        "tools" => "HTML, CSS, Bootstrap",
        "live" => "https://annuoluwa.github.io/session-7/",
        "code" => "https://github.com/annuoluwa/session-7/"
    ],
    [
        "title" => "Reddit-Client",
        "img" => "images/redditClient.png",
        "desc" => "A simple React-based client for browsing Reddit posts by subreddit, with search and pagination support.",
        "tools" => " Redux / Redux Toolkit, React, JavaScript (ES6+), CSS, Reddit API, Fetch API, Git & GitHub, Create React App",
        "live" => "https://redditexplore.netlify.app/",
        "code" => "https://github.com/annuoluwa/Reddit-Client.git"
    ],
    [
        "title" => "Jammming",
        "img" => "images/jammming.png",
        "desc" => "Jamming is a web app that lets users search Spotify, create playlists, and manage their favorite music seamlessly.",
        "tools" => "React, JavaScript, CSS, Redux & Redux Toolkit, JavaScript (ES6+), Spotify Web API, OAuth 2.0 Authorization Code Flow with PKCE, Fetch API, Git & GitHub, Create React App",
        "live" => "https://jammm2music.netlify.app/",
        "code" => "https://github.com/annuoluwa/Jammming.git"
    ],
    [
        "title" => "Tresse",
        "img" => "images/tresse.png",
        "desc" => "Tresse is a web app for managing music playlists and exploring tracks seamlessly.",
        "tools" => "React, CSS, Node.js & Express, PostgreSql, REST API / Fetch API, Git & GitHub, OAuth 2.0 Authorization Code Flow with PKCE, ",
        "live" => "https://tresse.onrender.com",
        "code" => "https://github.com/annuoluwa/tresse.git"
    ]
];
  ?>
<section id="project">
  <div class="projects">
    <h2>Projects</h2>

    <div class="projects-grid">
      <?php foreach ($projects as $p): ?>
        <div class="project-card">
          
          <img src="<?php echo htmlspecialchars($p['img']); ?>" 
               alt="<?php echo htmlspecialchars($p['title']); ?> screenshot">

          <div class="project-info">
            <h4><?php echo htmlspecialchars($p['title']); ?></h4>

            <p><?php echo nl2br(htmlspecialchars($p['desc'])); ?></p>

            <p><strong>Tools:</strong> 
              <?php echo htmlspecialchars($p['tools']); ?>
            </p>

            <div class="buttons">
              <a href="<?php echo htmlspecialchars($p['live']); ?>" target="_blank">Live Demo</a>
              <a href="<?php echo htmlspecialchars($p['code']); ?>" target="_blank">Source Code</a>
            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


  <section id="skills">
    <div class="skill">
      <h3>Skills</h3>
      <div class="imgs">
        <img src="images/html.jpg" alt="html logo image">
        <img src="images/css.jpg" alt="css logo">
        <img src="images/js.webp" alt="JavaScript logo">
        <img src="images/git.jpg" alt="git logo">
        <img src="images/github.png" alt="github logo">
        <img src="images/php.jpg" alt="php logo">
        <img src="images/python.png" alt="python logo">
        <img src="images/java.png" alt="java logo">
        <img src="images/csharp.jpg" alt="c# logo">
      
        <img src="images/jquery.jpg" alt="jquery logo">
        <img src="images/bootstrap.png" alt="bootstrap logo">
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
