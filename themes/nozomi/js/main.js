// スライドショーを管理する関数
function setupSlideshow(containerId) {
  const container = document.getElementById(containerId);
  const slides = container.getElementsByClassName("slide");
  let currentIndex = 0;

  function showSlide(index) {
    // 全てのスライドを非表示にする
    for (let slide of slides) {
      slide.style.display = "none";
    }
    // 指定されたスライドを表示
    slides[index].style.display = "block";
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  // 最初のスライドを表示
  showSlide(currentIndex);

  // 3秒ごとにスライドを切り替え
  setInterval(nextSlide, 3000);
}

// スライドショーを初期化
setupSlideshow("slideshow1");
setupSlideshow("slideshow2");
