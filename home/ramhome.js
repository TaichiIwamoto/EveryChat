// ログインボタン処理
var loginDropDown = document.getElementById("loginDropDown");
var loginButton = document.getElementById("loginButton");
var createButton = document.getElementById("createButton");

if (sessionStorage.getItem("userName") == null) {
  console.log("he");
  loginDropDown.hidden = true;
  loginButton.hidden = false;
} else {
  loginDropDown.hidden = false;
  loginButton.hidden = true;
}
