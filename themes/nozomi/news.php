<?php
/*
 Template Name: お知らせ一覧
*/
get_header();
?>

<div class="new-header">
  <h1 class="new-title">お知らせ一覧</h1>
</div>
<main class="news-archive">
  <div class="container">

    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
        ?>
    <article class="news-item">
      <a href="<?php the_permalink(); ?>" class="news-link">
        <div class="news-thumbnail">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
          <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/access.png" alt="デフォルト画像">
          <?php endif; ?>
        </div>
        <div class="news-content">
          <time class="news-date"><?php echo get_the_date('Y.m.d'); ?></time>
          <h2 class="news-title"><?php the_title(); ?></h2>
        </div>
      </a>
    </article>
    <?php
            endwhile;

            // ページネーション
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $news_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;'
            ));
            echo '</div>';

            wp_reset_postdata();
        else :
        ?>
    <p>お知らせはまだありません。</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
