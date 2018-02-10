<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
</head>
<body>
<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="cr10_Atra_Naseri_bigLibrary";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
	die("Connection failed: " . msqli_connect_error() ."\n");
} 
//first insert values to Author tabele//

$sql ="INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(1,'phlip','pullman');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(2,'Brittainy','C.Cherry');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(3,'Salim','Gueler');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(4,'Danny','King');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(5,'Wolfgang','Brunner');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(6,'Galax','Acheronian');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(7,'Vennessa','Clark');";
$sql .= "INSERT INTO Author(Author_ID,First_name,Last_name)
VALUES(8,'Alex','Scheffler');";

//second inser values to Publisher table//

$sql .= "INSERT INTO Publisher(Publisher_ID,Name,Address,'size')
VALUES(1,'amazon','westbanhoh','big');";
$sql .= "INSERT INTO Publisher(Publisher_ID,Name,Address,'size')
VALUES(2,'Harper','hauptbanhof','medium');";

//insert value to table book//

$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type')
VALUES(001222,'His Dark Material,Band1',1,'fiction',1,'Die Geschichte beginnt in Oxford, wo ein Mädchen namens Lyra ein altehrwürdiges Internat besucht. Lyra ist klug, wild, unendlich neugierig und stößt bei ihren Erkundungen auf beunruhigende Dinge: Was erforscht ihr geheimnisvoller Onkel Lord Asriel oben im eisigen Norden Europas? Und warum verschwinden in der Gegend um Oxford immer mehr Kinder?.
','11 CDs-Audio');";
$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(001223,'His Dark Material,Band2',1,'fiction',1,'Zehn Jahre ist es her, dass Wills Vater bei einer Polarexpedition verschwand. Jetzt interessieren sich plötzlich zwielichtige Gestalten für den Forscher – und für Will. Doch der Junge findet durch Zufall das perfekte Versteck: eine andere Welt. Hier begegnet er Lyra, die wie er einem großen Geheimnis auf der Spur ist. Gemeinsam geraten die beiden in einen erbitterten Kampf, bei dem die Zukunft ihrer Welten auf dem Spiel steht …
','16 Audio CDs');";
$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(001224,'His Dark Material,Band3',1,'fiction',1,'Der zwölfjährige Will gerät auf der Suche nach seinem verschollenen Vater zufällig durch ein Fenster in eine unbekannte Stadt aus einer anderen Welt. Dort begegnet er Lyra, der Heldin aus dem Goldenen Kompass. Ansonsten ist die Stadt menschenleer - bis plötzliche einige Kinder auftauchen und Unheimliches erzählen: Alle Erwachsenen sind geflohen, da sie von Gespenstern bedroht wurden, die den Erwachsenen die Seelen aus dem Körper saugen…','books');";

$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(002123,'Wie das Feuer zwischen uns',2,'romance-war',2,'Logan Francis Silverstone und ich waren das komplette Gegenteil. Ich tanzte, er stand still. Er brachte kein Wort heraus, ich hörte nie auf zu reden. Er konnte sich kaum ein Lächeln abringen, während ich zu keinem einzigen finsteren Blick fähig war.','book');";

$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(002124,'Das Fenster',3,'Krimi',1,'Sophie Donnershagen kennt ihn nicht, aber er begehrt sie schon lange, dabei weiß Philipp, dass sie eine verheiratete Frau ist. Aber Sophie hat etwas Unnahbares und gleichzeitig Verletzliches an sich, dem er nicht widerstehen kann….','book');";


$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(003444,'Das Haus der Monster'4,'horror'2,'Es gibt ihn in jeder Kleinstadt: Den verrückten alten Sonderling, der allein in einem unheimlichen Haus lebt, das fast so heruntergekommen ist wie er selbst.
In dem englischen Städtchen Thetford ist sein Name John Coal. Aber als die Jungen aus der Nachbarschaft anfangen, dem eigenbrötlerischen Alten immer dreistere Streiche zu spielen, müssen sie feststellen, dass sie sich mit dem Falschen angelegt haben.','book');";

$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(003446,'Kinders spiel',5,'horror-Thriller',1,'KINDERSPIELE Das Leben der Geschwister Benny (8) und Tammy (11) ist ein Albtraum aus Gewalt und Erniedrigung. Sie werden von ihren Eltern geschlagen und sexuell missbraucht. Hoffnung finden sie in ihrer gegenseitigen Geschwisterliebe und in einer heilen Fantasiewelt, in die sie flüchten, wann immer sie Gelegenheit dazu haben. Doch Realität und Fiktion vermischen sich.','book');";
$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(003448,'Science fiction Stories',6,'science fiction',2,'Ferne Welten, ferne Zeiten.Nichts ist spannender als das Unbekannte, das nicht nur da draußen wartet, sondern auch in einer anderen Zeit.
	Die Zukunft birgt nicht nur Lösungen und Antworten, sie fordert ein Umdenken und eine neue Betrachtung unserer Rolle.Sind wir allein? Und warum nicht? ','book');";

$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(003454,'Network now',7,'student book',1,'•	Authentisches Englisch für erfolgreiche Kommunikation im Alltag
				•	Kursbuch mit 3 Audio-CDs mit den Hörmaterialien der Unterrichts- und Arbeitsbuchteile','book and 3 CDs');";

$sql .= "INSERT INTO books(ISBN,title,fk_Author_ID,'Genre','fk_Publisher_ID','Description','Type') VALUES(003455,'Das Grüffelokind',8,'children book',1,'Der dunkle Wald, so warnt der Grüffelo sein Kind, ist voller Gefahren, denn dort lebt die große, böse Maus. Grüffelokinder aber sind neugierig, deshalb schleicht sich das Grüffelchen eines Nachts aus der Höhle. Beherzt und mutig zieht es los, denn es will endlich wissen, ob es die böse Maus wirklich gibt. Die Fortsetzung vom Grüffelo, der längst ein Klassiker ist.','book');";


if($conn->multi_query($sql)===TRUE){
	echo "New records created successfully";
} else{
	echo "Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();


?>
</body>
</html>