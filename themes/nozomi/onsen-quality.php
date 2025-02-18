<?php
/*
Template Name: 施設案内
*/
get_header();
?>

<div class="onsen-header-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/onsen-quality-top.jpg" alt="温泉のご案内画像">
</div>

<!-- ======== 温泉について Section ======== -->
<div class="onsen-quality-container">
  <main class="onsen-quality-content">
    <div class="onsen-quality-intro">
      <h1 id="quality" class="quality-title">泉質</h1>
      <hr class="divider">
      <h3 class="quality-subtitle">SPRING QUALITY</h3>
    </div>


    <!-- ３つの特徴を紹介するセクション -->
    <div class="spring-features">

      <!-- 1つ目 (奇数) -> 画像 左 / テキスト 右 -->
      <section class="feature">
        <div class="feature-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quality1.jpg" alt="泉質1">
        </div>
        <div class="feature-text">
          <h2>特徴その1 　『濃い温泉』</h2>
          <p>関東近辺・県内でも屈指のすごく濃い温泉です。</p>
          <p>「温泉」・「療養泉」として認められる成分量の基準<b>26倍以上</b>の成分を含んでおり、</p>
          <p>関東でも屈指の濃さを誇る「高張性」のナトリウム-塩化物『強』塩泉です。</p>
          <p>成分が体に浸透しやすく、湯あたりしやすいので短時間の入浴をおすすめします。</p>
        </div>
      </section>

      <!-- 2つ目 (偶数) -> 画像 右 / テキスト 左 -->
      <section class="feature">
        <div class="feature-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quality1.jpg" alt="泉質1">
        </div>
        <div class="feature-text">
          <h2>特徴その2 『よく温まる』</h2>
          <p><b>のぞみの温泉の特徴は、塩分を多く含む「ナトリウム-塩化物泉」</b></p>
          <p>この成分により汗の蒸発が抑えられ、湯冷めしにくい効果があります。</p>
          <p>特に高濃度のぞみ温泉は、入浴でもぽかぽかが長時間続き、快眠をサポートします。</p>
          <p>効果をより実感するには、湯上がり時に温泉を洗い流さず、水分補給をおすすめします。</p>
        </div>
      </section>

      <!-- 3つ目 (奇数) -> 画像 左 / テキスト 右 -->
      <section class="feature">
        <div class="feature-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quality1.jpg" alt="泉質1">
        </div>
        <div class="feature-text">
          <h2>特徴その3 『マグネシウムの恵み』</h2>
          <p><b>のぞみ温泉は、豊富なマグネシウムを含むことでも知られています。</b></p>
          <p>マグネシウムには血流を促進し、筋肉の緊張を和らげる作用があり、</p>
          <p>体の疲労回復を助け、心地よいリラクゼーション効果が得られるのが特徴です。</p>
          <p>さらに、肌の代謝を促進し、滑らかで健やかな肌へと導く美容効果も期待されています。</p>
        </div>
      </section>

    </div>
    <div class="onsen-quality-intro">
      <h1 id="spa" class="quality-title">温泉紹介</h1>
      <hr class="divider">
      <h3 class="quality-subtitle">SPRING</h3>
    </div>

    <!-- 温泉施設紹介 -->
    <div class="spring-facilities">
      <!-- 施設1 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility1.jpg" alt="大浴場">
        </div>
        <h4 class="facility-name">大浴場</h4>
        <p class="facility-description">開放感のある大浴場で、ゆったりと温泉をお楽しみいただけます。</p>
      </div>

      <!-- 施設2 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility2.jpg" alt="ひのき露天風呂">
        </div>
        <h4 class="facility-name">ひのき露天風呂</h4>
        <p class="facility-description">熱めの43～44度に設定してあります。また、ひのきにはリラックス効果があります。</p>
      </div>

      <!-- 施設3 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility3.jpg" alt="展望岩風呂">
        </div>
        <h4 class="facility-name">展望岩風呂</h4>
        <p class="facility-description">ぬる湯はイライラや興奮状態を鎮めるリラックス効果があります。</p>
        <p class="facility-description">太平洋を一望しながら、お湯をお楽しみいただけます。</p>
      </div>

      <!-- 施設4 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility4.jpg" alt="水晶水風呂（女性のみ）">
        </div>
        <h4 class="facility-name">水晶水風呂（女性のみ）</h4>
        <p class="facility-description">水晶水風呂は、水晶の浄化力で心身を癒し、リフレッシュ効果やエネルギーバランス調整が期待できます。</p>
      </div>

      <!-- 施設5 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility5.jpg" alt="備長炭水風呂（男性のみ）">
        </div>
        <h4 class="facility-name">備長炭水風呂（男性のみ）</h4>
        <p class="facility-description">備長炭水風呂は、水を浄化し遠赤外線で体を温め、肌や髪に優しい入浴効果が期待できます。</p>
      </div>

      <!-- 施設6 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility6.jpg" alt="香り風呂">
        </div>
        <h4 class="facility-name">香り風呂</h4>
        <p class="facility-description">芳醇な香りがあなたをリラックスへと導きます。香りは月ごとに変わります。他にも意外な効果が？</p>
      </div>

      <!-- 施設7 -->
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility7.jpg" alt="五右衛門風呂">
        </div>
        <h4 class="facility-name">五右衛門風呂</h4>
        <p class="facility-description">ざぶんとあふれ出る湯が気持ちのいい風呂、やや熱めです。</p>
      </div>

      <!-- 施設8 -->

      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility8.jpg" alt="鞍馬天狗">
        </div>
        <h4 class="facility-name">鞍馬天狗</h4>
        <p class="facility-description">
          通称「洞窟風呂」。胎内のような、暗く丸い洞窟のなかで湯に浸かっていると、まるでお母さんのお腹の中にいるときのような音も聞こえる不思議なお風呂です…　薄明かりの中に、やさしい顔の観音様の像があります。</p>
      </div>
      <div class="facility-item">
        <div class="facility-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facility8.jpg" alt="サウナ">
        </div>
        <h4 class="facility-name">サウナ</h4>
        <p class="facility-description">
          サウナ</p>
      </div>
  </main>


</div>



<?php get_footer(); ?>