<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>

  <?php get_template_part('includes/header-navi'); ?>

  <!-- Page Header-->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="site-heading">
            <h1><?php bloginfo('name'); ?></h1>
            <h2>deployチェック</2>
              <span class="subheading"><?php bloginfo('description'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">

        <?php if (have_posts()) : ?>
          <!-- Post preview-->
          <?php while (have_posts()) : the_post(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
              </a>
              <p class="post-meta">
                Posted by
                <?php the_author(); ?>
                &nbsp;<?php the_time(get_option('date_format')); ?>
              </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
          <?php endwhile; ?>

          <!-- Pager-->
          <div class="d-flex justify-content-between mb-4">
            <?php
            $prev_link = get_previous_posts_link('&larr; 新しい記事へ');
            if ($prev_link) {
              $prev_link = str_replace('<a', '<a class="btn btn-primary text-uppercase"', $prev_link);
              echo $prev_link;
            }
            ?>
            <?php
            $next_link = get_next_posts_link('古い記事へ &rarr;');
            if ($next_link) {
              $next_link = str_replace('<a', '<a class="btn btn-primary text-uppercase"', $next_link);
              echo $next_link;
            }
            ?>
          </div>

        <?php else : ?>
          <p>記事は見つかりませんでした</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php get_template_part('includes/footer') ?>

  <?php get_footer(); ?>
</body>

</html>