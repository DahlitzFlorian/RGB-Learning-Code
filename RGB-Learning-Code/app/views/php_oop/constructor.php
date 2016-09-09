<h2>Konstruktor</h2>
<h3>Allgemein</h3>
<p>
	Der Konstruktor wird immer dann aufgerufen, wenn wir ein Objekt einer Klasse erstellen wollen. Das Objekt wird
	also <i>konstruiert</i>.
<p>
	Der Objekt werden dabei die Eigenschaften die jedes Objekt der Klasse besitzt zugeteilt.
</p>
<h3>Aufbau</h3>
<?php echo git_code('OOP/03_constructor_raw'); ?>
<p>
	Das ist der Grundaufbau eines Konstruktors in PHP. Die Schlüsselwörter <i>public</i>, welches erlaubt, dass auch von
	außerhalb auf die Klasse zugegriffen werden kann, und <i>function</i>, welches das folgende als Funktion (hier: Methode)
	ausweist, gefolgt von <i>__construct()</i> (doppelter Unterstrich) deklarieren den Konstruktor.
</p>
<p>
	In die runden Klammern kann man noch Parameter schreiben, um jedem Objekt andere Werte für die Eigenschaften zuzuweisen.
</p>
<?php echo git_code('OOP/04_constructor'); ?>
<p>
	Im obigen Beispiel wird dem Konstruktor beim erstellen des Objektes ein Parameter übergeben. Dieser wird dann der Eigenschaft
	<i>speed</i> des Objektes zugewiesen. Es wird die feste Variable <i>this</i> im Anweisungsblock verwendet, da es sich um ein 
	Objekt der Klasse handelt. Somit ist es möglich, dass mehrere Objekte die selbe Eigenschaft besitzen und diese nicht 
	überschrieben werden, bzw. der obigen Variablen ein fester Wert zugewiesen wird.
</p>
<h3>Erstellen von Objekten</h3>
<p>
	Das Erstellen von Objekten gescheiht außerhalb der Klasse.
</p>
<p>
	Dazu definieren wir eine neues Objekt, indem wir wie bei Variablen dem Objekt nach dem Dollerzeichen einen Bezeichner geben.
	Nach dem Zuweisungsoperator folgt das Schlüsselwort <i>new</i> gefolgt vom Klassennamen mit runden Klammern, welcher den 
	Konstruktor darstellt, d.h gegebenenfalls muss in die runden Klammern ein Parameter, je nachdem wie der Konstruktor definiert
	ist.
</p>
<?php echo git_code('OOP/05_create_objects'); ?>