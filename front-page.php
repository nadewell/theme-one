<?php get_header(); ?>

<?php if( have_posts() ):
        while( have_posts() ): the_post(); 
?>  
        <section class="hero-section" style="background-image: url('');background-color:#9fe41e;">    
                <div class="container">
                        <div class="row align-items-center">
                        <div class="hero-content col-lg-6 col-md-6 col-sm-12 text-right-lg text-right-md text-center-sm">
                                <h1>Welcome to demo website!</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolorem autem debitis nam? Suscipit dolor incidunt saepe quos distinctio ab, reprehenderit dignissimos! Harum.</p>
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

        <section class="margin-top-30 margin-bottom-30">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 margin-auto text-center-lg text-center-md text-center-sm">
                                        <h2 class="margin-bottom-10">Looking for someone who can help you to create your brand?</h2>
                                        <p class="margin-bottom-20">Looking for someone who can help you to create your brand?</p>
                                        <a class="btn btn-fancy btn-fancy-primary" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact Now</a>
                                </div>
                        </div>
                </div>
        </section>   

        <section class="margin-top-50">
                <div class="container-fluid">
                        <div class="row equal-height">
                                <div class="col-lg-6 col-md-6 col-sm-12 scroll-image" style="background-image:url('https://blueprintdevelopers.in/wp-content/uploads/2019/05/seo.jpeg')">
                                        
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                        <hr class="separator separator-dark height-2 margin-right-auto">
                                        <h2>What we Provide</h2>
                                        <div class="row margin-top-20">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <hr class="separator separator-dark height-1 margin-right-auto">
                                                        <h4>Business Website</h4>
                                                        <p>We are experienced in creating creative and elegant websites for any kind of business following best SEO standards.</p>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <hr class="separator separator-dark height-1 margin-right-auto">
                                                        <h4>E-Commerce Website</h4>
                                                        <p>We are experienced in creating creative and elegant websites for any kind of business following best SEO standards.</p>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <hr class="separator separator-dark height-1 margin-right-auto">
                                                        <h4>Custom CMS</h4>
                                                        <p>We are experienced in creating creative and elegant websites for any kind of business following best SEO standards.</p>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <hr class="separator separator-dark height-1 margin-right-auto">
                                                        <h4>SEO & Digital Marketing</h4>
                                                        <p>We are experienced in creating creative and elegant websites for any kind of business following best SEO standards.</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>

        <section class="margin-top-100 our-client">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 margin-auto margin-bottom-50">   
                                        <div class="row justify-content-center">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <hr class="separator separator-primary height-2 margin-right-auto" >
                                                        <h2 class="text-left-lg text-left-md text-left-sm margin-bottom-0 color-primary">Our Clients</h2>    
                                                        <h4 class="text-left-lg text-left-md text-left-sm color-primary">worked for</h4> 
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12" id="client-slider">
                                                        <div class="client">
                                                               <img src="https://blueprintdevelopers.in/wp-content/uploads/2019/05/company-4.jpg" alt="client">
                                                        </div>
                                                        <div class="client">
                                                                <div class="card-body text-center-lg text-center-md text-center-sm">
                                                                        <img src="https://blueprintdevelopers.in/wp-content/uploads/2019/05/company-4.jpg" alt="client">
                                                                </div>
                                                        </div>
                                                        <div class="client">
                                                                <div class="card-body text-center-lg text-center-md text-center-sm">
                                                                        <img src="https://blueprintdevelopers.in/wp-content/uploads/2019/05/company-4.jpg" alt="client">
                                                                </div>
                                                        </div>
                                                        <div class="client">
                                                                <div class="card-body text-center-lg text-center-md text-center-sm">
                                                                        <img src="https://blueprintdevelopers.in/wp-content/uploads/2019/05/company-4.jpg" alt="client">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        
        <?php //the_content(); ?>
<?php
        endwhile;
    endif;
?>
<?php get_footer(); ?>