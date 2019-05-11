<?php get_header(); ?>
<section class="hero-section" style="background-image: url('');background-color:#9fe41e;">    
    <div class="container">
        <div class="row align-items-center">
            <div class="hero-content col-lg-6 col-md-6 col-sm-12 text-right">
                    <h1>404</h1>
                    <p>I think what you're looking for is not found.</p>
                    <a class="btn btn-outline" href="">Get Started</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <form class="form" action="">
                    <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                            <label for="subject">Subject</label>
                            <input class="form-control" type="text" name="subject">
                    </div>
                    <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message"></textarea>
                    </div>
                    <button class="btn btn-outline" type="submit">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>