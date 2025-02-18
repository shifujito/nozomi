<?php
/*
Template Name: Home Page
*/
get_header();
?>

<main>
  <!-- ======== Hero Video Section ======== -->
  <div class="video-background">
    <video autoplay muted loop playsinline>
      <source src="<?php echo esc_url( get_template_directory_uri() . '/videos/toppage.mp4' ); ?>" type="video/mp4"
        codec="avc1.42E01E, mp4a.40.2">
      Your browser does not support the video tag.
    </video>
    <div class="overlay-text">
      <h1>のぞみ温泉</h1>
      <h2>濃厚な湯で、温まる極上のひととき</h2>
    </div>
  </div>

  <!-- ======== Charm Section ======== -->
  <section class="charm">
    <div class="section-title">
      <h3 class="charm-title">のぞみ温泉の魅力</h3>
      <hr class="divider">
      <h3 class="charm-subtitle">CHARM POINT</h3>
    </div>

    <!-- === CHARM 1 === -->
    <div class="background-wrapper background-wrapper1">
      <div class="charm-feature">
        <div class="charm-feature-content">
          <h3 class="charm-feature-title">1 絶景が見える露天風呂</h3>
          <ul class="charm-feature-list">
            <li>のぞみ温泉の露天風呂からは、阿字ヶ浦の海を一望できます。</li>
            <li>水平線の風景は、心を癒す特別なひとときを提供します。</li>
          </ul>
        </div>
      </div>
    </div>
    </div>

    <!-- === CHARM 2 === -->
    <div class="background-wrapper background-wrapper2">
      <div class="charm-feature">
        <div class="charm-feature-content">
          <h3 class="charm-feature-title">2 関東屈指の濃厚温泉</h3>
          <ul class="charm-feature-list">
            <li>地下1504mから湧き出る自家源泉を使用した貴重な温泉</li>
            <li>成分量が療養泉基準の26倍以上、「古代の湯」「化石海水」とも呼ばれる濃さ</li>
            <li>湯冷めしにくい「熱の湯」として高い評価</li>
            <li>肌をしっとりつるつるにし、地球の恵みを体感できる贅沢な温泉</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- === CHARM 3 === -->
    <div class="background-wrapper background-wrapper3">
      <div class="charm-feature">
        <div class="charm-feature-content">
          <h3 class="charm-feature-title">3 地元の食材を使った料理</h3>
          <ul class="charm-feature-list">
            <li>のぞみ温泉がある、ひたちなか市は太平洋に面した海産物が有名なエリアです。</li>
            <li>お薦めの旬魚料理から一品料理まで、幅広くリーズナブルに取り揃えています。</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- === CHARM 4 === -->
    <div class="background-wrapper background-wrapper4">
      <div class="charm-feature">
        <div class="charm-feature-content">
          <h3 class="charm-feature-title">4 リラクリゼーション</h3>
          <ul class="charm-feature-list">
            <li>ボディケアなど多彩な施術で、深いリラックスをご堪能いただけます。</li>
            <li>マッサージ機など配置された充実した休憩スペースもお楽しみいただけます。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== News Section ======== -->
  <div class="news-container">
    <div class="news">
      <h3 class="news-title">新着情報</h3>
      <hr class="divider">
      <h3 class="news-subtitle">INFOMATION</h3>
    </div>
    <div class="news-posts">
      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'DESC'
      );
      $news_query = new WP_Query($args);
      ?>
      <?php if ( $news_query->have_posts() ) : ?>
      <ul class="news-posts-list">
        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
        <li class="news-post-item">
          <span class="news-post-date"><?php echo get_the_date('Y.m.d'); ?></span>
          <span class="news-post-tags">
            <?php
                  $post_tags = get_the_tags();
                  if ( $post_tags ) {
                    foreach ( $post_tags as $tag ) {
                      echo esc_html( $tag->name ) . ' ';
                    }
                  } else {
                    echo 'お知らせ';
                  }
                ?>
          </span>
          <a href="<?php the_permalink(); ?>" class="news-post-link">
            <?php
                  $title = get_the_title();
                  echo mb_strlen($title) > 27 ? mb_substr($title, 0, 27) . '...' : $title;
                ?>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php else : ?>
      <p class="news-no-posts">現在、投稿はありません。</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- ======== Links Section ======== -->
  <div class="front-links-container">
    <div class="front-link">
      <a href="<?php echo esc_url( site_url('/access') ); ?>" class="link-container">
        <div class="link access-link">
          <h2>アクセス</h2>
          <h3>ACCESS</h3>
          <p>当店への行き方</p>
        </div>
      </a>
    </div>
    <div class="front-link">
      <a href="<?php echo esc_url( site_url('/tourism') ); ?>" class="link-container">
        <div class="link tourism-link">
          <h2>観光情報</h2>
          <h3>TOURISM</h3>
          <p>周辺の観光スポットをチェック</p>
        </div>
      </a>
    </div>
  </div>

  <!-- ======== SNS Section ======== -->
  <div class="sns-container">
    <h2 class="sns-title">ソーシャルメディア</h2>
    <hr class="divider">
    <h3 class="sns-subtitle">SNS</h3>
    <ul class="sns-list">
      <li class="sns-item">
        <a href="https://x.com/" target="_blank" aria-label="x">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/xlogo.png' ); ?>" alt="tiktok">
        </a>
      </li>
      <li class="sns-item">
        <a href="https://www.tiktok.com/" target="_blank" aria-label="tiktok">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/tiktok-icon.png' ); ?>" alt="tiktok">
        </a>
      </li>
      <li class="sns-item">
        <a href="https://www.instagram.com/ajigauraonsen/" target="_blank" aria-label="Instagram">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/instagram-icon.png' ); ?>"
            alt="Instagram">
        </a>
      </li>
      <li class="sns-item">
        <a href="https://line.com/ajigauraonsen/" target="_blank" aria-label="LINE">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/linelogo.png' ); ?>" alt="LINE">
        </a>
      </li>
    </ul>
  </div>

</main>

<?php get_footer(); ?>
