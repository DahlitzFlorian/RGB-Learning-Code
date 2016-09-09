<h2>Vererbung</h2>
<h3>Allgemein</h3>
<p>
	In PHP ist es möglich, dass neue Klassen etwas von anderen Klassen <i>erben</i>. Die sogenannte <i>Elternklase</i> 
	besítzt genauso wie die neuzuerstellende Klasse Eigenschaften, einen Konstruktor und Methoden.
</p>
<p>
	Wenn nun eine  neue Klasse erstellt wird und diese die Eigenschaften, Methoden und den Konstruktor einer anderen Klasse
	beinhalten soll, so kann diese mit dem Schlüsselwort <i>extends</i> nach dem Klassennamen, gefolgt vom Namen der Elternklassse
	diese erben.
</p>
<?php echo git_code('OOP/08_heredity_extends'); ?>
<p>
	Wichtig ist dabei, dass die Elternklasse sich in der gleichen Datei und das VOR der <i>Tochterklasse</i> befindet oder aber
	VOR der Tochterklasse eine entsprechende Datei eingebunden wird, die die Elternklasse beinhaltet.
</p>
<p>
	Nun kann man auf die Methoden und den Konstruktor der Elternklasse mit dem Schlüsselwort <i>parent</i>, gefolgt von zwei 
	Doppelpunkten und dem Namen der Methode bzw. des Konstruktors aufrufen.
</p>
<?php echo git_code('OOP/09_heredity_constructor'); ?>
<p>
	Ein vollständiges Beispiel mit Vererbung findest du <?php echo anchor(git_link('OOP/10_heredity_example'), 'hier'); ?>.
</p>