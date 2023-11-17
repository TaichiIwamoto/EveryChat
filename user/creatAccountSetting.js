//// パスワード確認(合致してるか)
var userName = document.getElementById("userName");
var password = document.getElementById("password");
var passwordCheck = document.getElementById("passwordCheck");
var alertPop = document.getElementById("alertPop");
var submit = document.getElementById("submit");
var passwordLength = document.getElementById("passwordLength");
function passwordMatch() {
  if (password.value != passwordCheck.value) {
    alertPop.textContent = "パスワードが合致しません";
    alertPop.hidden = false;
    submit.disabled = true;
  } else {
    alertPop.hidden = true;
    submit.disabled = false;
  }
}

function passwordStrength() {
  let str = password.value;
  console.log(str);
  console.log(str.length);
  if (str.length < 10) {
    alertPop.textContent = "パスワードは10文字以上にしてください";
    alertPop.hidden = false;
    submit.disabled = true;
  }
}

function errorPrint(str, event) {
  alertPop.textContent = str;
  alertPop.hidden = false;
  event.preventDefault();
}

passwordCheck.addEventListener("input", function () {
  passwordMatch();
  passwordStrength();
});

password.addEventListener("focusout", function () {
  passwordMatch();
});

password.addEventListener("input", function () {
  passwordLength.textContent = password.value.length;
  if (passwordLength.textContent < 10) {
    passwordLength.style.backgroundColor = "#FF6666";
  } else {
    passwordLength.style.backgroundColor = "#66FF99";
  }
});

submit.addEventListener("click", function (event) {
  if (userName.value == "" && password.value == "") {
    errorPrint("ユーザー名・パスワードを入力してください", event);
  } else if (userName.value == "") {
    errorPrint("ユーザー名を入力してください", event);
  } else if (password.value == "" || passwordCheck.value == "") {
    errorPrint("パスワードを入力してください", event);
  }
});

////
