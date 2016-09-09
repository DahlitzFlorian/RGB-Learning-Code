<h2>Nutzung von PHP-Code</h2>
<h3>Allgemein</h3>
<p>
	Vorab ist es wichtig zu wissen, dass man bei allen Bezeichnern (Variablennamen, PHP-Datein, etc.) englische Bezeichner, 
	bzw. Namen verwendet. Das liegt daran, dass PHP-Code auch in anderen Ländern verstanden werden soll.
</p>
<h3>PHP-Datei</h3>
<p>
	Um mit PHP programmieren zu können, muss man erst eine PHP-Datei erstellen.<br>
	Diese kann einen beliebigen Namen haben, dieser sollte aber aussagekräftig sein und Leerzeichen sollten nicht
	verwendet werden, stattdessen sollten etwaige Leerstellen mit einem Unterstrich aufgefüllt werden.<br>
	Als Dateiendung wird dann <i>.php</i> verwendet.
</p>
<img src="<?php echo pic_png('php_file'); ?>"></img>
<h3>PHP-Code</h3>
<p>
	Der Beginn von PHP-Code wird mit <i>< ?php</i> (ohne Leerzeichen nach der spitzen Klammer) und das Ende durch
	<i>?></i>.
</p>
<p>
	Sobald in einer HTML-Datei PHP-Code verwendet wird, muss man diese Datei als PHP-Datei abspeichern und nicht als HTML-Datei.<br>
	Besteht eine Datei allerdings nur aus PHP-Code, so kann das <i>?></i> weggelassen werden.
</p>
<p>
	Bei der Verwendung von HTML-Befehlen im PHP-Code werden einfache Hochkommata ' ' verwendet, und auch bei einigen PHP-Befehlen
	werden einfache Hochkommata verwendet, statt der doppelten (Anführungszeichen).<br>
	Nur Strings werden in Anführungszeichen " " geschrieben.
</p>
<?php echo git_code('PHP/01_Hello_World'); ?>