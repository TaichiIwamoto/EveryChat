//ユーザー情報取得
var userName = document.getElementById("userName");
if (sessionStorage.getItem("userName") != null) {
  userName.textContent = sessionStorage.getItem("userName");
}

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
////

// 年月選択

//年
var yearButton = document.getElementById("yearButton");
var yearPullDown = document.getElementById("yearPullDown");
yearButton.addEventListener("click", function () {
  const now = new Date();
  const year = now.getFullYear();
  if (yearPullDown.childElementCount == 0) {
    for (i = 0; i < 30; i++) {
      const yearIndex = createIndex();
      yearIndex.textContent = year - 30 + i;
      yearIndex.addEventListener("click", function () {
        yearButton.textContent = yearIndex.textContent;
        sessionStorage.setItem("userYear", yearIndex.textContent);
      });
      yearPullDown.appendChild(yearIndex);
    }
  }
});

//月
var monthButton = document.getElementById("monthButton");
var monthPullDown = document.getElementById("monthPullDown");
monthButton.addEventListener("click", function () {
  console.log(monthPullDown.childElementCount);
  if (monthPullDown.childElementCount == 0) {
    for (i = 0; i < 12; i++) {
      const monthIndex = createIndex();
      monthIndex.textContent = i + 1;
      monthIndex.addEventListener("click", function () {
        monthButton.textContent = monthIndex.textContent;
        sessionStorage.setItem("userMonth", monthIndex.textContent);
      });
      monthPullDown.appendChild(monthIndex);
    }
  }
});

//日
var dayButton = document.getElementById("dayButton");
var dayPullDown = document.getElementById("dayPullDown");
dayButton.addEventListener("click", function () {
  if (dayPullDown.childElementCount == 0) {
    for (i = 0; i < 31; i++) {
      const dayIndex = createIndex();
      dayIndex.textContent = i + 1;
      dayIndex.addEventListener("click", function () {
        dayButton.textContent = dayIndex.textContent;
        sessionStorage.setItem("userDay", dayIndex.textContent);
      });
      dayPullDown.appendChild(dayIndex);
    }
  }
});

//プルダウン内のボタン自動生成
function createIndex() {
  const Index = document.createElement("button");
  Index.className = "dropdown-item";
  return Index;
}

////

//ロード時処理
window.addEventListener("load", function (event) {
  //誕生日のsession確認
  if (sessionStorage.getItem("userYear") !== null) {
    yearButton.textContent = sessionStorage.getItem("userYear");
  } else {
    yearButton.textContent = "xxxx";
  }
});
////
