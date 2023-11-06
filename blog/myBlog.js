// 読み込み時処理
var userName = document.getElementById("userName");
var submit = document.getElementById("submit");
//load変数の初期化
if (sessionStorage.getItem("load") == null) {
  sessionStorage.setItem("load", "false");
}

window.addEventListener("load", function (event) {
  userName.value = this.sessionStorage.getItem("userName");
  if (this.sessionStorage.getItem("load") == "false") {
    this.sessionStorage.setItem("load", "true");
    submit.click();
  } else {
    this.sessionStorage.removeItem("load");
  }
});

submit.addEventListener("submit", function (event) {
  event.preventDefault();
});
