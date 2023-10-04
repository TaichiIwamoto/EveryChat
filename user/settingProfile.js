// プロフィール画像
var userImage = document.getElementById("userImage");
var userImageChangeText = document.getElementById("userImageChangeText");
userImage.addEventListener("mouseover", function () {
  userImageChangeText.hidden = false;
});

userImage.addEventListener("mouseleave", function () {
  userImageChangeText.hidden = true;
});

userImage.addEventListener("click", function () {});
//
