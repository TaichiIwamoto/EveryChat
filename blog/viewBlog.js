var articleText = document.getElementById("articleText");
var output = document.getElementById("output");

window.addEventListener("load", function () {
  var text = articleText.textContent;
  console.log(text);
  let lines = text.split("\n");
  for (let i = 0; i < lines.length; i++) {
    let line = lines[i];
    if (line.indexOf("!link!") != -1) {
      line = line.replace("!link!", "");
      console.log(line);
      output.innerHTML +=
        "<a target=_blank href=" + line + ">" + line + "</a><br>";
    } else if (line.indexOf("!youtube!") != -1) {
      line = line.replace("!youtube!", "");
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
