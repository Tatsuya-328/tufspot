
//読み込み時の表示
window_load();

//ウィンドウサイズ変更時に更新
window.onresize = window_load;

//サイズの表示
function window_load() {
  if (window.innerWidth <= 1245) {
    document.querySelector(".flickity-slider").style.left= "3.5vw"
  } else {
    document.querySelector(".flickity-slider").style.left= "8vw"
  }
}


document.querySelectorAll(".carousel-cell").forEach(element => element.style.left="0px");
