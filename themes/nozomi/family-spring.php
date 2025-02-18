<?php
/**
 * Template Name: Family Spring
 * Description: 固定ページテンプレート for 家族風呂
 */
get_header(); // ヘッダーを読み込み
?>

<main class="custom-page">
  <div class="fixed-container">
    <h1 class="fixed-page-title"><?php the_title(); ?></h1>
    <div class="content">
      <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content(); // 固定ページのコンテンツを表示
                endwhile;
            else :
                echo '<p>コンテンツがありません。</p>';
            endif;

            // ショートコードを埋め込む
            echo do_shortcode('[ea_bootstrap worker="1,3,4" location="1" service="1,2" width="100%" layout_cols="1"]');
            ?>
    </div>
  </div>
</main>


<?php get_footer(); // フッターを読み込み ?>
