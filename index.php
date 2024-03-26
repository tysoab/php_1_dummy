<?php
session_start();
//  print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/dad8ebce2d.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />

    <title>registration page || php</title>
  </head>
  <body>
    <?php include(__DIR__ . '/header.php'); ?>

    <main>
      <section class="hero">
        <div class="text-overlay">
          <h2>THE FUTURE IS TECH... BREADTH IT NOW!</h2>
        </div>

        <img src="https://www.analyticsinsight.net/wp-content/uploads/2021/03/Tech-Skills.jpg" alt="techhub">
        <div class="pre-btn">
          <button>
            <i class="fa-solid fa-chevron-left"></i>
          </button>
        </div>

        <div class="next-btn">
          <button>
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </section>

      <section class="tech-talk">
        <h2>Discover Tech-Talk Tips in Three (3) Ways!</h2>

        <div class="talk-1">
          <div class="talk-img">
            <img src="https://www.tech-talk.com/wp-content/uploads/2023/09/newsletter-and-video.png" alt="techhub">
          </div>
          <div class="talk-det">
            <h4>1. NEWSLETTER & VIDEO</h4>
            <h5>Surprising You with New Ideas Each Week</h5>
            <p>
              Fresh articles and videos emailed weekly (52 times a year) introducing new ways to use technology and communicate with others.
            </p>
          </div>
        </div>
        <div class="talk-2">
          <div class="talk-img">
            <img src="https://www.tech-talk.com/wp-content/uploads/2023/09/mobile-app.png" alt="techhub">
          </div>
          <div class="talk-det">
            <h4>2. MOBILE APP</h4>
            <h5>Quick and Easy Access to Solve Popular Problems</h5>
            <p>
              What’s more fun than having easy access to the best technology and communication tips?
            </p>
          </div>
        </div>
        <div class="talk-3">
          <div class="talk-img">
            <img src="https://www.tech-talk.com/wp-content/uploads/2023/09/online-learning.png" alt="techhub">
          </div>
          <div class="talk-det">
            <h4>2. MEMBERSHIP DATABASE</h4>
            <h5>Up-To-Date and Relevant Topics for Success</h5>
            <p>
              User-friendly and easy-to-understand library of technology and communication articles, videos, and webinars. Fresh content added each week so it’s current, relevant and useful.
            </p>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
