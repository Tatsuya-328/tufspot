
//読み込み時の表示
window_load();

//ウィンドウサイズ変更時に更新
window.onresize = window_load;

//サイズの表示
function window_load() {
  // if (window.innerWidth <= 1245) {
  //   document.querySelector(".flickity-slider").style.left= "3.5vw"
  // } else {
  //   document.querySelector(".flickity-slider").style.left= "8vw"
  // }
  if (window.innerWidth >= 1440) {
    document.querySelector(".flickity-slider").style.left= "145px"
  }
  else if (window.innerWidth >= 900) {
    document.querySelector(".flickity-slider").style.left= "9vw"
  } else if(window.innerWidth >= 800) {
    document.querySelector(".flickity-slider").style.left= "7vw"
  }else if(window.innerWidth > 768) {
      document.querySelector(".flickity-slider").style.left= "4vw"
    }else if(window.innerWidth <= 768) {
      document.querySelector(".flickity-slider").style.left= "0vw"
    }
}


document.querySelectorAll(".carousel-cell").forEach(element => element.style.left="0px");
