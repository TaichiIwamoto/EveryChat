{
  var modalPop = document.getElementById("modalPop");
  var imgSelected = document.getElementById("imgSelected");
  var linkSelected = document.getElementById("linkSelected");
  var youtubeSelected = document.getElementById("youtubeSelected");
  var inserted = document.getElementById("inserted");
  var modalLabel = document.getElementById("modalLabel");
  var insert = document.getElementById("insert");
  var articleEdit = document.getElementById("articleEdit");
  var articlePreview = document.getElementById("articlePreview");
  var articleBody = document.getElementById("articleBody");
  var articleName = document.getElementById("articleName");
  var output = document.getElementById("output");

  var tmpSave = document.getElementById("tmpSave");

  //エディター表示
  articleEdit.addEventListener("click", function () {
    imgSelected.hidden = false;
    linkSelected.hidden = false;
    youtubeSelected.hidden = false;
    articleBody.hidden = false;
    console.log("edit clicked");
    output.innerHTML = "";
  });

  //プレビュー表示
  articlePreview.addEventListener("click", function () {
    imgSelected.hidden = true;
    linkSelected.hidden = true;
    youtubeSelected.hidden = true;
    articleBody.hidden = true;
    let articleText = articleBody.value;
    console.log("preview clicked");
    // console.log(articleText);

    let lines = articleText.split("\n");
    for (let i = 0; i < lines.length; i++) {
      let line = lines[i];
      if (line.indexOf("<link>") != -1) {
        line = line.replace("<link>", "");
        console.log(line);
        output.innerHTML +=
          "<a target=_blank href=" + line + ">" + line + "</a><br>";
      } else if (line.indexOf("<youtube>") != -1) {
        line = line.replace("<youtube>", "");
        line = line.replace("watch?v=", "embed/");
        console.log(line);
        output.innerHTML +=
          "<iframe width=640 height=480 src=" +
          line +
          " title=Youtube video player frameborder=0 allow=accelerometer;></iframe><br>";
      } else {
        output.innerHTML += line;
        output.innerHTML += "<br>";
      }
    }
  });

  //画像挿入
  imgSelected.addEventListener("click", function () {
    console.log("imgButton Clicked");
  });

  {
    let mode;
    //URL挿入
    linkSelected.addEventListener("click", function () {
      console.log("linkButton Clicked");
      mode = "link";
      insert.placeholder = "リンクを貼ってください";
      modalLabel.textContent = "リンクを挿入";
      modalPop.click();
    });

    //Youtube動画埋め込み
    youtubeSelected.addEventListener("click", function () {
      console.log("youtubeButton Clicked");
      mode = "youtube";
      insert.placeholder = "Youtube動画のリンクを貼ってください";
      modalLabel.textContent = "Youtube動画を挿入";
      modalPop.click();
    });

    //挿入
    inserted.addEventListener("click", function () {
      let modalClose = document.getElementById("modalClose");
      let str = insert.value;
      console.log(mode);
      if (mode == "init") {
        articleName.value = str;
        modalClose.click();
      }
      if (mode == "link") {
        let regex = /^(https?|ftp)(:\/\/[\w\/:%#\$&\?\(\)~\.=\+\-]+)/; //URL正規表現
        if (regex.test(str)) {
          console.log("一致しました");
          articleBody.value += "\n<link>" + str;
          insert.value = "";
          modalClose.click();
        } else {
          console.log("一致しません");
        }
      }
      if (mode == "youtube") {
        let regex = /^https:\/\/www.youtube.com\/watch\?v=[\w&=]*/; //Youtube正規表現
        if (regex.test(str)) {
          console.log("一致しました");
          articleBody.value += "\n<youtube>" + str;
          modalClose.click();
        } else {
          console.log("一致しませんでした");
        }
      }
    });
    //一時保存時に記事本文をsessionStorageに保存
    tmpSave.addEventListener("click", function () {
      sessionStorage.setItem("articleBody", articleBody.value);
      sessionStorage.setItem("articleName", articleName.value);
    });

    window.addEventListener("load", function (event) {
      console.log(articleName.value);
      articleBody.value = sessionStorage.getItem("articleBody");
      articleName.value = sessionStorage.getItem("articleName");
      if (articleName.value == "") {
        mode = "init";
        insert.type = "text";
        insert.placeholder = "記事タイトル";
        modalLabel.textContent = "タイトルを記入してください";
        modalPop.click();
      }
    });
  }
}
