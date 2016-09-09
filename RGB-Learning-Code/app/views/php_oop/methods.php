<h2>Methoden</h2>
<h3>Allgemein</h3>
<p>
	Mit Funktionen können wir bereits existierende Objekte verändern, bzw. deren Eigenschaften.
</p>
<h3>Erstellen einer Methode</h3>
<p>
	Eine Methode wird ebenfalls mit den Schlüsselwörtern <i>public</i> (Zugriff von außen) und <i>function</i>
	(als Kennzeichen für eine Funktion/Methode), gefolgt vom Namen der Methode, erstellt.
</p>
<p>
	Der Methode können auch Parameter übergeben werden, wie zum Beispiel einer Zahl für die Höhe der Beschleunigung.
	Es folgt der Anweisungsblock, in dem die Eigenschaften geändert werden (neue Werte zugewiesen werden).
</p>
<?php echo git_code('OOP/06_methods'); ?>
<p>
	Im obigen Beispiel wird die Methode <i>speed_up</i> definiert und ihr ein Parameter übergeben, der den Standardwert 10
	besitzt.
</p>
<p>
	Der Eigenschaft <i>speed</i> wird im folgenden um den übergebenen Parameter erhöht, bzw., falls dieser nicht vorhanden ist,
	um den Wert 10.
</p>
<h3>Zugriff auf Methoden</h3>
<p>
	Wenn man nun ein Objekt verändern will mit Hilfe einer Methode, so geschieht das außerhalb einer Klasse auf ein bereits 
	bestehendes Objekt.
</p>
<p>
	Nach dem Objektname folgt ein Pfeil <i>-></i> und der Name der Methode und dahinter in runden Klammern gegebenenfalls die
	Parameter.
</p>
<?php echo git_code('OOP/07_methods_access'); ?>