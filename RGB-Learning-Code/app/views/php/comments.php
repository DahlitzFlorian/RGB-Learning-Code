<h2>Kommentare</h2>
<h3>Allgemein</h3>
<p>Kommentare sind sehr wichtig in der Programmierung. Damit lassen sich Programmierschritte nachvollziehen,
	die man vor längerer geschrieben hat. Es ist sinnvoll mit solchen nicht zu sparen.
</p>
<p>
	Der Vorteil an Kommentaren ist, dass sie nicht als Programmiercode erkannt werden, sodass man "alles"
	dort hinein schreiben kann. Damit lassen sich auch Befehle "auskommentieren" um zu sehen, wie ein
	Programm ohne gewisse Codezeilen abläuft.
</p>
<p>
	Man unterscheidet zwischen einzeiligen Kommentaren und mehrzeiligen Kommentaren.
</p>
<h3>einzeilige Kommentare</h3>
<p>Einzeilige Kommentare beginnen mit zwei Slashs <i>//</i> und enden am Ende der Zeile.</p>
<?php echo git_code('PHP/02_oneline_comment'); ?>
<h3>mehrzeilige Kommentare</h3>
<p>
	Mehrzeilige Kommentare beginnen mit einem Slash und einem Sternchen <i>/*</i> und enden mit einem Sternchen
	und einem Slash <i>*/</i>.<br>
	Alles was zwischen Anfang und Ende steht wird nicht als Programmiercode umgesetzt. Dieser Code kann auch mehr 
	als eine Zeile beinhalten.
</p>
<?php echo git_code('PHP/03_moreline_comment'); ?>