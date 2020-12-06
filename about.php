<?php

include 'includes/connect.php';

$results = [];
$query = "SELECT * FROM portfolios";

$runQuery = $pdo->query($query);

while ($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
    $results[] = $row;
}

$portfolios = $results[0];

require_once('layouts/header.php');
?>

<section class="about-page-webdevelopment-section">
    <div class="main-page-container">
        <div class="about-page-development-image-wrapper">
            <img class="about-page-development-image" src="images/code.png" alt="code">
        </div>
        <div class="about-page-development-title-wrapper">
            <h1 class="about-page-developent-title">WEVELOPMENT</h1>
            <div class="about-page-development-content-wrapper">
                <p class="about-page-development-content">HTML</p>
                <p class="about-page-development-content">CSS</p>
                <p class="about-page-development-content">JS</p>
                <p class="about-page-development-content">SASS</p>
                <p class="about-page-development-content">SQL</p>
            </div>
        </div>
    </div>
</section>

<section class="about-page-design-title-section">
    <div class="skills-title">
        <h1 class="about-page-design-title">DESIGN</h1>
    </div>

    <div class="about-page-design-wrapper">
        <div class="about-page-design-section">
            <div class="skills-icon">
                <img class="icon" src="images/illustrator.png" alt="illustrator">
            </div>

            <div class="skills-icon">
                <img class="icon" src="images/photoshop.png" alt="photoshop">
            </div>

            <div class="skills-icon">
                <img class="icon" src="images/indesign.png" alt="indesign">
            </div>

            <div class="skills-icon">
                <img class="icon" src="images/lightroom.png" alt="lightroom">
            </div>
        </div>
        <div class="about-page-skils-images">
            <div class="about-page-design-image-wrapper">
                <img class="about-page-design-image" src="images/design.png" alt="design image">
            </div>
        </div>
    </div>
</section>


<section class="about-page-edit-section">
    <div class="main-page-container">
        <div class="about-page-edit-images-wrapper">
            <img class="about-page-edit-images" src="images/youtube.png" alt="youtube">
        </div>
        <div class="about-page-edit-title-wrapper">
            <h1 class="about-page-edit-title">EDIT</h1>
            <div class="skills-icon">
                <img class="icon" src="images/premier.png" alt="premier">
            </div>
            <div class="skills-icon">
                <img class="icon" src="images/after-effects.png" alt="after-effects">
            </div>

        </div>
    </div>

</section>

<section class="about-page-portfolio-title">
    <h4>PORTFOLIO</h4>
    <?php foreach ($portfolios as $portfolio) : ?>
    <div class="portfolio-image-first">
        <h3><?php echo $portfolio['portfolio_name']; ?></h3>
        <p><?php echo $portfolio['portfolio_intro']; ?></p>
        <img class="sportnet-image" src="<?php echo $portfolio['portfolio_img']; ?>"
            alt="<?php echo $portfolio['portfolio_name']; ?>">
    </div>
    <?php endforeach ;?>

</section>

<section class="beer-website">
    <div class="beer-website-image-section">
        <div class="beer-website-image-part">
            <img class="beer-website-image" src="images/beer-website.png" alt="beer website">
        </div>
    </div>

    <div class="beer-website-content">

        <div class="beer-website-section">
            <h2>Beer Website</h2>
            <p>I was redesign the two brand that to become a
                new brand to show in the market. The website
                have many function that can provide more
                special experience to user. It is also design the
                mobile version that can use phone to view the
                website as well.</p>
        </div>

        <div class="beer-website-section">
            <p>HTML, JavaScript, CSS, Cinema 4D, Photoshop</p>
        </div>

        <div class="beer-website-section">
            <p>Type:<br>Web development, web design, mobile design</p>
        </div>

        <div class="beer-website-section">
            <p>Date:<br>August 2020</p>
        </div>
</section>
 
    <div class="demo-reel">
        <video width="800" height="600" controls>
        <source src="videos/video.mp4" type="video/mp4">
    </div>

<?php
require_once('layouts/footer.php');