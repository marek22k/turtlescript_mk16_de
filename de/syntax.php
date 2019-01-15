<?php
	include "./data/header";
?>
<div>
	<div id="p1">
		<b>1.</b>
		Die allgemeine Syntax von turtlescript lautet:<br>
		<code>[TYPE]@[VARIABLE NAME] = [VALUE];</code><br>
		das gleiche k&ouml;nnte man auch als:<br>
		<code>[TYPE]@[VARIABLE NAME]= [VALUE];</code><br>
		schreiben.<br>
		Ein Datensatz besteht aus der allgemeinen Syntax und damit aus einem Variablentyp(siehe <a href="#p2">Punkt 2</a>), einem Variablennamen, und einem Variablenwert.
	</div>
	<div id="p2">
		<b>2.</b>
		Ein Type(im obrigen Code [TYPE]) ist dabei:<br>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>TYPE</th>
					<th>C++ Typ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>INTEGER</td>
					<td>TUR_INTEGER</td>
				</tr>
				<tr>
					<td>2</td>
					<td>BOOLEAN</td>
					<td>TUR_BOOLEAN</td>
				</tr>
				<tr>
					<td>3</td>
					<td>STRING</td>
					<td>TUR_STRING</td>
				</tr>
				<tr>
					<td>4</td>
					<td>BIGNUM</td>
					<td>TUR_BIGNUM</td>
				</tr>
				<tr>
					<td>5</td>
					<td>BYTE</td>
					<td>TUR_BYTE</td>
				</tr>
				<tr>
					<td>6</td>
					<td>FLOAT</td>
					<td>TUR_FLOAT</td>
				</tr>
			</tbody>
		</table>
		Der Type wird bei der Erstellung eines Datensatzes immer klein geschrieben angegeben.
	</div>
	<div id="p3">
		<b>3.</b> <em>INTEGER</em><br>
		Ein Integer wird als TUR_INTEGER(int) gespeichert.<br>
		Es hat einen Wertebereich von -2147483648 bis 2147483647.<br>
		Dabei wird das Minuszeichen direkt vor der Zahl hingeschrieben.
	</div>
	<div id="p4">
		<b>4.</b> <em>BOOLEAN</em><br>
		Ein Boolean wird als TUR_BOOLEAN(int) gespeichert.<br>
		Es kann entweder den Wert <code>true</code>(wahr) oder <code>false</code>(unwahr/falsch) annehmen.
	</div>
	<div id="p5">
		<b>5.</b> <em>STRING</em><br>
		Ein String wird als TUR_STRING(string) gespeichert.<br>
		Der Text des Strings wird in Anf&uuml;hrungszeichen geschrieben.<br>
		Dabei wird das doppelte Anf&uuml;hrungszeichen(<code>"</code>) verwendet werden.
	</div>
	<div id="p6">
		<b>6.</b> <em>BIGNUM</em><br>
		Eine Bignum wird als TUR_BIGNUM(long long) gespeichert.<br>
		Es hat einen Wertebereich von -(2<sup>63</sup>) bis (2<sup>63</sup>)-1.<br>
		Dabei wird das Minuszeichen direkt vor der Zahl hingeschrieben.
	</div>
	<div id="p7">
		<b>7.</b> <em>BYTE</em><br>
		Ein Byte wird als TUR_BYTE(unsigned char) gespeichert.<br>
		Es hat einen Wertebereich von 0 bis 255.<br>
		Es sollte vermieden werden h&ouml;here Werte als 255 in einem Byte zu speichern.<br>
		Der Wertebereich eines Byte ist mindenes so groß das, das ASCII-Alphabet(auch ASCII-Code) dastellbar ist.
	</div>
	<div id="p8">
		<b>8.</b> <em>FLOAT</em>
		Ein Float wird als TUR_FLOAT(string) gespeichert.<br>
		Dabei wird bis zur Auswertung bzw. Auslesung der Daten das Float als String gespeichert.<br>
		Erst dann, wenn es gelesen wird, wird es in ein float umgewandelt.<br>
	</div>
	<div id="p9">
		<b>9.</b>(C++)
		Um die Dateien mit einem C++ Compiler zu kompilieren ben&ouml;tigt man das <a href="http://www.boost.org/" target="_blank">C++ Boost Library</a>.
	</div>
	<div id="p10">
		<b>10.</b>(C++)
		In C++ wird es erfolgreicher inkludierung der Header Datei und erfolgreichem Kompilimiren der turtlescript-Dateien ein Namensbereich(namespace) turtlescript existieren.<br>
		In diesem Namespace befinden sich die Funktionen editvar, eval, context, stack, getinteger, getboolean, getstring, getbignum, getbyte, getfloat und clear.
	</div>
	<div id="p11">
		<b>11.</b>(C++) <em>editvar</em><br>
		Nicht f&uuml;r den Benutzer/Entwickler vorgesehen.
	</div>
	<div id="p12">
		<b>12.</b>(C++) <em>eval</em><br>
		Interpretiert turtlescript Code.<br>
		Fordert als erstes Argument den turtlescript Code, der interpretiert werden soll.<br>
		Gibt immer eins zur&uuml;ck.
	</div>
	<div id="p13">
		<b>13.</b>(C++) <em>context</em><br>
		Nur teilweise f&uuml;r den Benutzer/Entwickler vorgesehen.<br>
		Interpretiert turtlescript Code-Value.<br>
		Fordert als erstes Argument den Value der interpretiert werden soll.<br>
		Gibt das Ausgewertete Value zur&uuml;ck.<br>
		Als Value wird bei der Zuweisung der nach den Zuweisungszeichen(<code>=</code>) stehenden Code gemeint.
	</div>
	<div id="p14">
		<b>14.</b>(C++) <em>stack</em><br>
		Gibt den derzeit verwendeten Stack als TUR_STACK zur&uuml;ck.
	</div>
	<div id="p15">
		<b>15.</b>(C++) <em>getinteger</em><br>
		Wandelt eine Variable in den Typ TUR_INTEGER um.<br>
		Als erstes Argument wird der Variablen namen, von der Variable von der der Inhalt umgewandelt soll, gefordert.
	</div>
	<div id="p16">
		<b>16.</b>(C++) <em>getboolean</em><br>
		Wandelt eine Variable in den Typ TUR_BOOLEAN um.<br>
		Als erstes Argument wird der Variablen namen, von der Variable von der der Inhalt umgewandelt soll, gefordert.
	</div>
	<div id="p17">
		<b>17.</b>(C++) <em>getstring</em><br>
		Wandelt eine Variable in den Typ TUR_STRING um.<br>
		Als erstes Argument wird der Variablen namen, von der Variable von der der Inhalt umgewandelt soll, gefordert.
	</div>
	<div id="p18">
		<b>18.</b>(C++) <em>getbignum</em><br>
		Wandelt eine Variable in den Typ TUR_BIGNUM um.<br>
		Als erstes Argument wird der Variablen namen, von der Variable von der der Inhalt umgewandelt soll, gefordert.
	</div>
	<div id="p19">
		<b>19.</b>(C++) <em>getbyte</em><br>
		Wandelt eine Variable in den Typ TUR_BYTE um.<br>
		Als erstes Argument wird der Variablen namen, von der Variable von der der Inhalt umgewandelt soll, gefordert.
	</div>
	<div id="p20">
		<b>20.</b>(C++) <em>getfloat</em><br>
		Wandelt eine Variable in den Typ TUR_FLOAT um.<br>
		Als erstes Argument wird der Variablen namen, von der Variable von der der Inhalt umgewandelt soll, gefordert.
	</div>
	<div id="p21">
		<b>21.</b>(C++) <em>clear</em><br>
		Leert den Variablen Stack.<br>
		Gibt immer eins zur&uuml;ck.
	</div>
	<div id="p22">
		<b>22.</b> <em>Stack</em><br>
		Variablen in turtlescript werden in einem Stack vom Typ TUR_STACK gespeichert.<br>
		(C++) Ein TUR_STACK ist eine Struktur(struct) die drei Vektoren(vector) enth&auml;lt.<br>
		Im ersten Vektor, mit den Namen name und den Speichertyp string werden die Namen der Variablen gespeichert.<br>
		Im zweiten Vektor, mit den Namen value und den Speichertyp any(aus boost) werden die Inhalte der Variablen gespeichert.<br>
		Im dritten Vektor, mit den type und den Speichertyp int werden die Typen(siehe <a href="#p2">Punkt 2</a>) der Variablen gespeichert.
	</div>
	<div id="p23">
		<b>23.</b>(C++) <em>TUR_EXCEPTION</em><br>
		Die TUR_EXCEPTION Klasse in eine Exception-Klasse (die nicht von der Klasse exception(Aus std) abstammt), die gewurfen wird, wenn ein Interpretations Fehler auftritt.<br>
		Sie beinhaltet die Funktion what die nichts als Argument fordert und die Fehler Meldung zur&uuml;ckgibt.<br>
Sie beinhaltet die Funktion line die nichts als Argument fordert und Zeilennummer in der, der Fehler passiert ist zur&uuml;ck gibt.
	</div>
	<div id="p24">
		<b>24.</b>
		Um den Wert von einer Variable einer anderen zuzuweisen wird das Dollarzeichen(<code>$</code>) verwendet.<br>
		Hinter das Dollarzeichen(<code>$</code>) schreibt man den Variablen namen, von der der Inhalt ein eingeblendet werden soll.<br>
		Rechenoperationen, wie +, -, *, / oder &auml;hnliches, sind nicht m&ouml;glich.<br>
		Die Zusammenketten von Strings ist auch nicht m&ouml;glich.
	</div>
	<div id="p25">
		<b>25.</b>
		Ein turtlescript Datei hat die Dateierweiterung .tur oder .turtle und wird normalerweise mit der UTF-8-Codierung gespeichert.
	</div>
	<div id="p26">
		<b>26.</b>
		Es d&uuml;rfen beliebig viele Datens&auml;tze unter oder nebeneinander stehen.
	</div>
	<div id="p27">
		<b>27.</b>
		Kommentare werden mit einem Doppelplus-Zeichen(<code>#</code>) eingeleitet und mit einem Symikolon(<code>;</code>) beendet.<br>
		Kommentare d&uuml;rfen auch &uuml;ber mehrere Zeilen gehen.
	</div>
</div>
<p>Download(Veraltet): <a href="/files/pdf/turtlescript_syntax_de.pdf">PDF</a>; <a href="/files/markdown/turtlescript_syntax_de.md">Markdown</a></p>
<?php
	include "./data/footer";
?>