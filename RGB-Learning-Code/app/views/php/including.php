<h2>Einbinden erxterner Datein</h2>
<h3>Erklärung</h3>
<p>
	Es ist sinnvoll bestimmte Programmzeilen <i>auszulagern</i>.<br>
	Das können zum Beispiel Funktionen sein, sodass man sie nur einmal schreiben muss, aber in allen Datein
	wo man sie braucht einbinden kann und nutzen kann, statt sie jedes Mal neu zu definieren.
</p>
<p>
	Das auslagern von Programmcode wird meist beim Objektorientierten Programmieren (OOP) verwendet, um Klassen
	in sogenannte <i>Module</i> auszulagern.
</p>
<h3>require_once</h3>
<p>
	<i>require_once</i> ist die beste Möglichkeit um externe Datein einzubinden, da es zusätzlich überprüft,
	ob die Datei bereits eingebunden wurde (Unterbindung von Mehrfacheinbindungen).
</p>
<p>
	Nach dem Schlüsselwort <i>require_once</i> steht in runden Klammern und in einfachen Hochkommata der relative oder
	absolute Pfad zur jeweiligen Datei.
</p>
<p>
	Datein sollten möglichst am Anfang einer PHP-Datei eingebunden werden, da die enthaltenen Funktionen oder Klassen
	erst am der Zeile der Einbindung verfügbar sind.
</p>
<?php echo git_code('PHP/17_extern_files'); ?>