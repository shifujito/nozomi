<?php
/*
 Template Name: 温泉のご利用案内
*/
get_header();
?>
<div class="onsen-header-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/charm1-bg.jpg" alt="温泉のご案内画像">
</div>
<div class="onsen-guide-container">
  <main class="onsen-content">
    <h3 class="onsen-title">温泉のご利用案内</h3>
    <h3 class="onsen-subtitle">GUIDE</h3>
    <table class="onsen-table">
      <tbody>
        <tr>
          <th><strong>営業時間</strong></th>
          <td>午前10時 ～ 午後9時</td>
        </tr>
        <tr>
          <th><strong>休館日</strong></th>
          <td>木曜日（祝日、年始、GW、お盆期間とかさなる場合は営業します）</td>
        </tr>
        <tr>
          <th><strong>入館料</strong></th>
          <td>
            <ul>
              <li><strong>平日:</strong> 980円 (子供 600円)</li>
              <li><strong>土日祝:</strong> 1,250円 (子供 700円)</li>
              <li><strong>特定日（正月・GW・お盆）:</strong> 1,350円</li>
            </ul>
            <p>※子供は、3才～小学生までです。</p>
            <p>※2歳未満は浴場のご利用不可となります（<strong>入館無料</strong>）家族風呂はご利用可</p>
            <p></p>
          </td>
        </tr>
        <tr>
          <th><strong>アメニティ</strong></th>
          <td>
            <p>シャンプー、コンディショナー、洗顔フォーム、ボディーソープ、ドライヤー</p>
            <p>レンタルタオル（フェイス 120円、バス 220円）</p>
            <p>館内衣＋バスタオル+フェイスタオルセット(550円)</p>
            <p>※タオル・バスタオルは、私物をお使いいただいてOK</p>
          </td>
        </tr>
        <tr>
          <th><strong>お支払</strong></th>
          <td>クレジットカード、PayPay、電子マネー、現金</td>
        </tr>
        <tr>
          <th><strong>アクセス</strong></td>
          <td>
            <p><strong>高速をご利用の場合:</strong> 常磐自動車道、友部ＪＣＴより北関東自動車道、</p>
            <p>「ひたち海浜公園口」より阿字ヶ浦方面に3分。</p>
            <p><strong>電車をご利用の場合:</strong> JR常磐線勝田乗換え茨城交通那珂湊線終点</p>
            <p>阿字ヶ浦駅より徒歩3分。</p>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="onsen-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.985671882338!2d140.61245407704357!3d36.38534089097332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022258ec50e27f7%3A0x252ebf87eb49f84c!2z6Zi_5a2X44O25rWmIOa4qeazieOBruOBnuOBvw!5e0!3m2!1sja!2sjp!4v1736088813701!5m2!1sja!2sjp"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </main>
</div>
<?php get_footer(); ?>