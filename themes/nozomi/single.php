<?php get_header(); ?>

<main class="news-main">
  <div class="new-header">
    <h1 class="new-title">お知らせ</h1>
  </div>
  <div class="news-page-container">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="news-post">
      <div class="news-post-meta">
        <span class="news-post-date"><?php echo get_the_date('Y.m.d'); ?></span>
      </div>
      <h2 class="news-post-title"><?php the_title(); ?></h2>
      <div class="news-post-content">
        <?php the_content(); ?>
        <!-- 抜粋を全文に変更 -->
      </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p class="no-posts">現在、お知らせはありません。</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
