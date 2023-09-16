<h1>PHP共同開発環境構築</h1>
<ol>
  <li>
    <b>VisualStudioCodeのインストール</b><br>
    https://code.visualstudio.com/<br>
    
  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/8a332bc3-af54-4632-844a-7d17bf31d98c)
  </li>
  <li>
    <b>PHPのインストール</b><br>
    https://windows.php.net/download#php-8.2<br>

  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/23bda5ff-1a75-41cf-a3d6-64fc6824b50f)

  VS16 x64 Non Thread Safeの・Zipをダウンロード<br>
  ダウンロードしたzipファイルを解凍し,Cドライブ直下に配置する。<br>
  (例：C:\pg\PHP)ダウンロードした"php~~~"という長い名前を"PHP"にリネームしました<br>
  </li>

  <li>
    <b>環境変数からPathを通す</b><br>
     "システム環境変数の編集"の選択<br>
  
  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/4d966725-32dc-4bc9-84f6-95227bd2ece3)

   "環境変数(N)..."を選択<br>

  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/96616668-ebf1-488c-b193-a95758ffa0ba)

  "システム環境変数(S)"からPathを選択して編集を選択<br>

  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/0609d4cb-236f-456a-81a9-02ce8c418542)

  新規を押して、先程配置したPHP実行可能ファイルが存在するディレクトリを入力する<br>
  
  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/2f528062-d225-460a-a405-5efdd3d299bc)

  コマンドプロンプトを開き<br>
  php -v<br>
  と入力する。<br>
  PHPのバージョンが画像の様に表示されればPHPのインストール完了！<br>

![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/fc307768-8fda-454d-b430-841f8a8c2261)

<li>
  <b>github.com/TaichiIwamoto/EveryChatのリポジトリをローカルにクローンする</b><br>
  まずGitBashをインストール<br>
  https://gitforwindows.org/

  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/7fd73056-636d-4cbc-aef6-4d4dc1fe1cc9)

  インストール後GitBashを起動し、クローンしたいディレクトリに移動する。<br>
  (例：cd C:\Users\userName\Documents\GitHub)<br>
  
  ※初めてGitを使う場合は、ユーザ名とメールアドレスを設定する必要があります。(自分のGitHubアカウントで入力してください)<br>
  git config --global user.name "Your Name"<br>
  git config --global user.email "youremail@example.com"<br>

  そして以下の内容を入力してcloneする。<br>
  git clone https://github.com/TaichiIwamoto/EveryChat.git<br>
  これで私のリポジトリがあなたのローカルリポジトリに保存されます<br>

</li>
  <li> 
    <b>VisualStudioCodeでの拡張機能のダウンロード</b><br>
    VisualStudioCodeを開き、左の欄から拡張機能を選択し、PHPと入力し検索する。<br>
    PHP Debugという拡張機能をインストール...<br>
    

  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/996f66cf-e704-461c-a88c-cb70d75cf587)
  </li>

  <li>
    <b>VSCodeでローカルリポジトリをワークスペースに追加</b><br>
  ファイル→フォルダーをワークスペースに追加<br>
    から先程クローンしたリポジトリを選択<br>
    
  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/fb84fd7e-2463-4ab5-90b1-2f9af4889564)

  上手く行けば下記の図のようになるはず...<br>
  ※.vscodeは存在しなくて大丈夫<br>

![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/c71e35e0-cedb-4df6-9a7c-66ea92339c24)

その後、左の欄の実行とデバッグを選択し、"launch.jsonファイルを作成します"を選択。

![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/f87f5f89-efa6-4ba7-85b6-f3a7f1238ac4)

そしたら下記の図のようなlaunch.jsonファイルが.vscode下に生成される

![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/a380320f-8a08-4518-ae6a-f10141ae676e)

そしたらこのjsonファイルのListen for Xdebugの所にpathMappingsを加える。<br>
 "name": "Listen for Xdebug",<br>
            "type": "php",<br>
            "request": "launch",<br>
            "port": 9003,<br>
            "pathMappings": {<br>
                "リポジトリのルートディレクトリ(私の場合:c:\\Users\\taich\\OneDrive\\プログラミング\\PHP\\ChatTool\\ramnoisy.com)":"${workspaceFolder}"<br>
            }<br>

  index.phpをエディタで開き、F5(デバッグ)を押すと、localhost:8000が開き実行することが出来るはず<br>
  下記の図みたいに<br>

  ![image](https://github.com/TaichiIwamoto/EveryChat/assets/131168152/957e22d3-f973-435b-8817-3748d454f1d0)
  </li>

  以上の手順で分からないことやエラーが発生した場合は遠慮せずに聞いてください<br>




  

  </li>
</ol>
