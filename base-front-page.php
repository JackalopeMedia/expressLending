<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <section id="above-the-fold">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-8">
          <h1>Lorem Ipsum Dolar</h1>
          <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla congue sem consequat, gravida lorem eu, bibendum ipsum. 
          Etiam commodo sem id tortor scelerisque, sed iaculis risus ultrices.</p>
          <button class="btn btn-default btn-lg">Call to Action</button>
        </div>
        <div class="col-sm-4">
          <h3>Get Started Now!</h3>
          <form class="lead-form">
            <ul class="list-inline">
              <li>1</li>
              <li>2</li>
              <li>3</li>
            </ul>
            <p>
              <input type="text" name="name" placeholder="your name"></input>
            </p>
            <p>
              <input type="text" name="phone" placeholder="your phone number"></input>
            </p>
            <p>
              <input type="text" name="email" placeholder="your email"></input>
            </p>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>

  <hr>

  <section id="thirds">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-4">
          <h3>Section 1</h3>
          <p>This is an example of section #1. Here, there
            will be info relating to this section, whatever that
            section is going to say.</p>
          <button class="btn btn-default">Click Me</button>
        </div>
        <div class="col-sm-4">
          <h3>Section 2</h3>
          <p>This is an example of section #2. Here, there
            will be info relating to this section, whatever that
            section is going to say.</p>
          <button class="btn btn-default">Click Me</button>
        </div>
        <div class="col-sm-4">
          <h3>Section 3</h3>
          <p>This is an example of section #3. Here, there
            will be info relating to this section, whatever that
            section is going to say.</p>
          <button class="btn btn-default">Click Me</button>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
