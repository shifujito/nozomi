<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>阿字ヶ浦温泉のぞみ<?php wp_title('|', true, 'left'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>

<?php
// 現在のURLを取得
$current_url = $_SERVER['REQUEST_URI'];
// トップページかどうかを判定
$header_class = (is_front_page()) ? 'transparent-header' : 'solid-header';
?>

<body <?php body_class(); ?>>
  <div class="site-wrapper">
    <!-- ここで全体をラップ -->
    <header class="header <?php echo $header_class; ?>">
      <div style="display: flex; align-items: center; justify-content: space-between;">
        <!-- サイト名 -->
        <h1 style="margin: 0;">
          <a href="<?php echo home_url(); ?>" style="header-menu">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"
              style="height: 50px; vertical-align: middle;">
          </a>
        </h1>

        <!-- ナビゲーションメニュー -->
        <nav>
          <ul class="menu-bar">
            <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
            <li><a href="<?php echo home_url('/info'); ?>">ご利用案内</a></li>
            <li class="has-submenu">
              <a href="<?php echo home_url('/facilities'); ?>">施設案内</a>
              <ul class="sub-menu">
                <li><a href="<?php echo home_url('/facilities#quality'); ?>">泉質</a></li>
                <li><a href="<?php echo home_url('/facilities#spa'); ?>">温泉紹介</a></li>
                <li><a href="<?php echo home_url('/facilities#sauna'); ?>">サウナ</a></li>
              </ul>
            </li>
            <!-- 他のメニュー項目 -->
          </ul>
        </nav>
      </div>
    </header>
