<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}

.hero-image {
  background-image: url("img/library.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Wellcome to Library</h1>
    <p>Here can find BOOKs and CDs and DVDs</p>
    <button><a href="#section1"> See more..</a></button>
  </div>
</div>

<!-- MAIN (Center website) -->
<div class="main" id="section1">

<hr>

<h2>Library</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('books')"> books</button>
  <button class="btn" onclick="filterSelection('CDs')"> CDs</button>
  <button class="btn" onclick="filterSelection('DVDs')"> DVDs</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column books">
    <div class="content">
      <img src="img/bgbook3.jpg" height="190" width="100" alt="book1" style="width:100%;">
      <h4>Book</h4>
      <p>Der zwölfjährige Will gerät auf der Suche nach seinem verschollenen Vater zufällig durch ein Fenster in eine unbekannte Stadt aus einer anderen Welt. Dort begegnet er Lyra, der Heldin aus dem ''Goldenen Kompass..</p>
    </div>
  </div>
  <div class="column books">
    <div class="content">
    <img src="img/bgbook4.jpg" height="190" width="100" alt="book2" style="width:100%">
      <h4>Book</h4>
      <p>Logan Francis Silverstone und ich waren das komplette Gegenteil. Ich tanzte, er stand still. Er brachte kein Wort heraus, ich hörte nie auf zu reden. Er konnte sich kaum ein Lächeln...</p>
    </div>
  </div>
  <div class="column books">
    <div class="content">
    <img src="img/book5.jpg" height="190" width="100" alt="book3" style="width:100%">
      <h4>book</h4>
      <p>Sophie Donnershagen kennt ihn nicht, aber er begehrt sie schon lange, dabei weiß Philipp, dass sie eine verheiratete Frau ist. Aber Sophie hat etwas Unnahbares und gleichzeitig Verletzliches an sich, dem er nicht widerstehen kann….</p>
    </div>
  </div>

  <div class="column books">
    <div class="content">
    <img src="img/bgbook6.jpg" height="190" width="100" alt="book3" style="width:100%">
      <h4>book</h4>
      <p>Es gibt ihn in jeder Kleinstadt: Den verrückten alten Sonderling, der allein in einem unheimlichen Haus lebt, das fast so heruntergekommen ist wie er selbst...</p>
    </div>
  </div>

  <div class="column books">
    <div class="content">
    <img src="img/bgbook7.jpg" height="190" width="100" alt="book3" style="width:100%">
      <h4>book</h4>
      <p>KINDERSPIELE Das Leben der Geschwister Benny (8) und Tammy (11) ist ein Albtraum aus Gewalt und Erniedrigung. Sie werden... </p>
    </div>
  </div>

  <div class="column books">
    <div class="content">
    <img src="img/bgbook8.jpg" height="190" width="100" alt="book3" style="width:100%">
      <h4>book</h4>
      <p>Ferne Welten, ferne Zeiten.
      Nichts ist spannender als das Unbekannte, das nicht nur da draußen wartet, sondern auch in einer anderen Zeit. </p>
    </div>
  </div>

  <div class="column books">
    <div class="content">
    <img src="img/bgbook9.jpg" height="190" width="100" alt="book3" style="width:100%">
      <h4>book</h4>
      <p><li>Authentisches Englisch für erfolgreiche Kommunikation im Alltag</li>
      <li>Kursbuch mit 3 Audio-CDs mit den Hörmaterialien der Unterrichts- und Arbeitsbuchteile</li>...</p>
    </div>
  </div>

<div class="column books">
    <div class="content">
    <img src="img/bgbook10.jpg" height="190" width="100" alt="book3" style="width:100%">
      <h4>book</h4>
      <p>Der dunkle Wald, so warnt der Grüffelo sein Kind, ist voller Gefahren, denn dort lebt die große, böse Maus. Grüffelokinder aber sind neugierig, deshalb schleicht sich das Grüffelchen eines Nachts aus der Höhle...</p>
    </div>
  </div>

  <div class="column CDs">
    <div class="content" >
      <img src="img/bgbook1.jpg" height="190" width="100" alt="cd1" style="width:100%">
      <h4>11 Audio CDs</h4>
      <p>Die Geschichte beginnt in Oxford, wo ein Mädchen namens Lyra ein altehrwürdiges Internat besucht. Lyra ist klug, wild, unendlich neugierig und stößt bei ihren Erkundungen auf.</p>
    </div>
  </div>
  <div class="column CDs">
    <div class="content">
    <img src="img/bgbook2.jpg" height="190" width="100" alt="cd2" style="width:100%">
      <h4>16 Audio CDs</h4>
      <p>Zehn Jahre ist es her, dass Wills Vater bei einer Polarexpedition verschwand. Jetzt interessieren sich plötzlich…</p>
    </div>
  </div>
  <div class="column CDs">
    <div class="content">
    <img src="img/cd1.jpg" height="190" width="100" alt="cd3" style="width:100%">
      <h4>cd</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column DVDs">
    <div class="content">
      <img src="img/dvd1.jpg" height="190" width="100" alt="dvd1" style="width:100%">
      <h4>dvd</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column DVDs">
    <div class="content">
    <img src="img/dvd1.jpg" height="190" width="100" alt="dvd2" style="width:100%">
      <h4>dvd</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column DVDs">
    <div class="content">
    <img src="img/dvd1.jpg" height="190" width="100" alt="dvd3" style="width:100%">
      <h4>dvd</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</div>
</body>
</html>
