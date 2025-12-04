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
        I'm an aspiring software engineer with a passion for building meaningful, user-centered projects.<br><br>
        I enjoy working with technologies like HTML, CSS, and JavaScript, and I'm always learning and expanding my skills.
        When I'm not coding, I'm creating unique fashion pieces that merge art and fashion, blending creativity and craftsmanship into wearable expressions of beauty.
        <br><br>My goal is to create solutions — whether in tech or fashion — that inspire and leave a lasting impact.</p>

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
        "tools" => "HTML, CSS, Bootstrap",
        "live" => "",
        "code" => "https://github.com/annuoluwa/Reddit-Client.git"
    ],
    [
        "title" => "Jammming",
        "img" => "images/jammming.png",
        "desc" => "Jamming is a web app that lets users search Spotify, create playlists, and manage their favorite music seamlessly.",
        "tools" => "React, JavaScript, CSS",
        "live" => "",
        "code" => "https://github.com/annuoluwa/Jammming.git"
    ],
    [
        "title" => "Tresse",
        "img" => "images/tresse.png",
        "desc" => "Tresse is a web app for managing music playlists and exploring tracks seamlessly.",
        "tools" => "React, CSS, Node.js",
        "live" => "https://tresse.onrender.com",
        "code" => "https://github.com/annuoluwa/tresse.git"
    ]
];
?>


  <section id="project">
    <div class="projects">
      <h2>Projects</h2>

      <?php foreach ($projects as $p): ?>
        <div class="project-card">
          <h4><?php echo htmlspecialchars($p['title']); ?></h4>
          <img src="<?php echo htmlspecialchars($p['img']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?> screenshot">
          <p><?php echo nl2br(htmlspecialchars($p['desc'])); ?><br>
            <strong>Tools used:</strong> <?php echo htmlspecialchars($p['tools']); ?>
          </p>
          <p>
            <a href="<?php echo htmlspecialchars($p['live']); ?>" target="_blank" rel="noopener">Live Demo</a> |
            <a href="<?php echo htmlspecialchars($p['code']); ?>" target="_blank" rel="noopener">Source Code</a>
          </p>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

  <section id="skills">
    <div class="skill">
      <h3>Skills</h3>
      <div class="imgs">
        <img src="images/html.jpg" alt="html logo image">
        <img src="images/js.webp" alt="JavaScript logo">
        <img src="images/git.jpg" alt="git logo">
        <img src="images/github.png" alt="github logo">
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
