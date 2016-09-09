<h2>Schleifen</h2>
<h3>Allgemein</h3>
<p>
	Schleifen, bzw. Wiederholungen verwendet man, um bestimmte Programmteile zu wiederholen.
	Man unterscheidet in PHP zwischen 4 Schleifen.
</p>
<h3>while-Schleife</h3>
<p>
	Die <i>while</i>-Schleife wird solange (engl. while) ausgeführt, wie die Bedingung in den runden Klammern
	hinter dem Schlüsselwort einen wahren Wert liefert. Die Anweisungen stehen wieder im Anweisungsblock in 
	geschweiften Klammern hinter der Bedingung.
</p>
<p>
	Die while-Schleife hat eine unbekannte Anzahl von Durchläufen (abhängig von Bedingung).
</p>
<?php echo git_code('PHP/13_while'); ?>
<h3>do-while-Schleife</h3>
<p>
	Die <i>do-while</i>-Schleife hat einen ähnlichen Aufbau und eine ähnliche Funktionsweise. Der Unterschied 
	zwischen beiden Schleifen besteht darin, dass die do-while-Schleife <i>fußgesteuert</i> ist, d.h. die
	Bedingung erst nach dem Anweisungsblock überprüft wird. Somit läuft im Gegensatz zu while-Schleife die 
	do-while-Schleife mindestens einmal komplett durch.
</p>
<?php echo git_code('PHP/14_do_while'); ?>
<h3>for-Schleife</h3>
<p>
	Bei der <i>for</i>-Schleife ist im Gegensatz zur while-Schleife die Wiederholungsanzahl bekannt, da diese im
	Kopf der Schleife festgelegt wird.
</p>
<p>
	Im Kopf der for-Schleife (in den runden Klammern) wird eine <i>Laufvariable</i> definiert, eine Bedingung festgelegt
	und die Erhöhung der Laufvariable nach einem Schleifendurchlauf festgelegt (in dieser Reihenfolge).
	Es folgt der Anweisungsblock.
</p>
<?php echo git_code('PHP/15_for'); ?>
<h3>foreach-Schleife</h3>
<p>
	Die <i>foreach</i>-Schleife wird genutzt, um alle Elemente eines Arrays nacheinander auszugeben, bzw. sie zu verändern.
</p>
<p>
	Im Schleifenkopf steht als erstes der Name das Arrays, gefolgt vom Schlüsselwort <i>as</i> und eine beliebige (logische)
	variable Bezeichnung für das einzelne Element des aktuellen Durchlaufs mit dem dann bestimmte Operationen, z.B. das ausgeben
	des Wertes, geschehen können.
</p>
<?php echo git_code('PHP/16_foreach'); ?>