
        var modalPop = document.getElementById("modalPop");
        var imgSelected = document.getElementById("imgSelected");
        var linkSelected = document.getElementById("linkSelected");
        var youtubeSelected = document.getElementById("youtubeSelected");
        var inserted = document.getElementById("inserted");
        var modalLabel = document.getElementById("modalLabel");
        var insert = document.getElementById("insert");

        //画像挿入
        imgSelected.addEventListener("click", function () {
            console.log("imgButton Clicked");
        });

        //URL挿入
        linkSelected.addEventListener("click", function () {
            console.log("linkButton Clicked");
            insert.placeholder="リンクを貼ってください";
            modalLabel.textContent = "リンクを挿入";
            modalPop.click();
        });

        //Youtube動画埋め込み
        youtubeSelected.addEventListener("click", function () {
            console.log("youtubeButton Clicked");
            insert.placeholder="Youtube動画のリンクを貼ってください";
            modalLabel.textContent = "Youtube動画を挿入";
            modalPop.click();
        });

        inserted.addEventListener("click",function(){
            let regex = /^(https?|ftp)(:\/\/[\w\/:%#\$&\?\(\)~\.=\+\-]+)/ //URL正規表現
            let str = insert.value;
            console.log(str);

            if(regex.test(str)){
                console.log("一致しました");
            }else{
                console.log("一致しません");
            }
        });





   

