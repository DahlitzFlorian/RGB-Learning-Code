<h2>Klassen</h2>
<h3>Allgemein</h3>
<p>
	Klassen sind Sammlungen von Objekten mit gleichen Eigenschaften.
</p>
<p>
	So ist das Objekt Pkw beispielsweise ein Fahrzeug und gehört demzufolge zur Klasse Fahrzeuge.
</p>
<h3>Aufbau</h3>
<p>
	Klassen werden mit dem Schlüsselwort <i>class</i>, gefolgt vom Klassennamen eingeleitet. Es folgen die geschweiften Klammern,
	in denen der Klasse später
	<?php
		echo anchor(base_url('PHP_OOP/attributes'), 'Eigenschaften');
		echo ', der ' . anchor(base_url('PHP_OOP/constructor'), 'Konstruktor');
		echo ' und ' . anchor(base_url('PHP_OOP/methods'), 'Methoden');
	?>
	zugewiesen und erstellt werden.
</p>
<?php echo git_code('OOP/01_classes'); ?>