<?php 

require_once( 'layouts/header.php' );

?>

    <section class="main-page-section">
        <div class="main-page-title">
            <h1>Contact</h1>
        </div>
    </section>
</div>
<section>
    <div class="main-contact-footer">
    <form id="contactForm" action="form.php" method="post">
        <label for="name">Name: (required)</label>
        <input type="text" required id="name" name="fullName" size="30" placeholder="Enter your name">

        <label for="email">Email: (will not be published)</label>
        <input type="email" required id="email" size="30" placeholder="Enter your Email">


        <label for="phone">Phone: (required)</label>
        <input type="tel" required id="phone" size="30" placeholder="Enter Phone Number">

        <label for="comments">Comments:</label>
        <textarea name="comments" id="comments" required cols="50" rows="8"></textarea>

        <input id="submit" type="submit" value="Submit">
    </form>
</div>
</section>

<?php 
require_once('layouts/footer.php');