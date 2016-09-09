<h2>Arrays</h2>
<h3>Allgemein</h3>
<p>
	Ein Array ist eine sogenannte Feldvariable.<br>
	Diese Feldvariable ist eine Variable, die nicht nur einen Wert, sondern eine Menge an Werten
	beinhält.
</p>
<h3>Erstellung</h3>
<p>
	Ein Array wird wie eine Variable mit einem Dollerzeichen <i>$</i>, gefolgt von einem Bezeichner
	erstellt. Nach dem Bezeichner folgt der Zuweisungsoperator <i>=</i>, gefolgt von eckigen Klammern 
	<i>[]</i>.
</p>
<p>
	In die eckigen Klammern kommen mit Kommata getrennt die Werte des Arrays hinein.<br>
	Der Schlüssel, um den jeweiligen Wert aufzurufen entspricht der Stelle in dem Array (der erste Wert besitzt den
	Schlüssel 0).
</p>
<?php echo git_code('PHP/05_array'); ?>
<p>
	Eine weitere Möglichkeit ist, die Schlüssel selbst zu bestimmen. Dafür wird in die eckigen Klammern der Schlüssel
	gefolgt von <i>=></i> und dem Wert. Danach kommt ein Komma und weitere Wertepaare können ergänzt werden.
</p>
<?php echo git_code('PHP/06_array_key'); ?>