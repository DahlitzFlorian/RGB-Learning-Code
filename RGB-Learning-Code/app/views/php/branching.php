<h2>Verzweigungen</h2>
<h3>Allgemein</h3>
<p>
	Verzweigungen sind Kontrollstrukturen. Sie werden verwendet um Bedingungen, z.B. eine Eingabe zu überprüfen und
	je nach Ergebnis (Bedingung erfüllt?) einen bestimmten Programmteil ausführen oder eben nicht.
</p>
<h3>if-Anweisung</h3>
<p>
	Mit der if-Anweisung kann ein Wert auf seine Wahrheit geprüft werden. Nach dem Schlüsselwort <i>if</i> wird in
	runde Klammern <i>( )</i> die Bedingung geschrieben, die auf ihren Wahrheitsgehalt überprüft werden soll.
	Nach den runden Klammern steht in geschweiften Klammern <i>{ }</i>, dem sogenannten Anweisungsblock, die auszuführenden
	Anweisungen, die nur dann ausgeführt werden, wenn die Bedingung in den runden Klammern erfüllt ist.
</p>
<p>
	Wenn die Bedinung nicht erfüllt ist, wird der Anweisungsblock einfach ignoriert.
</p>
<?php echo git_code('PHP/07_if'); ?>
<h3>if-else-Anweisung</h3>
<p>
	Nun kann es aber unter Umständen nötig sein, dass der Anwender eine Information bekommt das die Bedingung nicht erfüllt ist.
	Und genau dafür gibt es die if-else-Anweisung.<br>
	Sie ist eine if-Anweisung, die nur um das Schlüsselwort <i>else</i> erweitert wurde, gefolgt von geschweiften Klammern.
</p>
<p>
	Der Anweisungsblock nach dem Schlüsselwort else wird immer dann ausgeführt, wenn die Bedingung von if nicht erfüllt ist.
</p>
<?php echo git_code('PHP/08_if_else'); ?>
<h3>else-if</h3>
<p>
	Manchmal ist es sinnvoll nicht nur eine Bedingung zu überprüfen, sondern eine zweite, falls die erste nocht erfüllt ist.
	Dazu benutzt man nach dem Anweisungsblock von if das Schlüsselwort <i>else if</i> und erst nach dem folgt else.
	In die runden Klammern der else-if-Anweisung kann man nun eine weitere Bedinung formulieren, die nur dann überprüft wird, 
	falls die Bedinung von if nicht erfüllt ist.
</p>
<?php echo git_code('PHP/09_else_if'); ?>
<h3>Verschachteln</h3>
<p>
	Man kann die verschiedenen Arten der if-Anweisung auch verschachteln, um mehrere Bedingungen hintereinander zu überprüfen.
	So werden Anweisungen nur ausgeführt wenn alle Bedinungen erfüllt sind.
</p>
<?php echo git_code('PHP/10_if_pyramid'); ?>
<h3>switch-case-Anweisung</h3>
<p>
	Die swith-case-Anweisung ist in PHP eher selten, da meist die if-Anweisung benutzt wird. Trotzdem ist es manchmal sinnvoll
	diese zu benutzen.
</p>
<p>
	Nach dem Schlüsselwort <i>switch</i> wird in runden Klammern ein Indexwert (ganze Zahl) übergeben. Mit den Nachfolgenden 
	<i>case</i> wird dann der oben übergebene Indexwert auf einen Wert überprüft. Ist dieser Wert gleich dem Indexwert, so
	"springt" die switch-Anweisung zum Anweisungsblock und führt ab da an alle Anweisungen bis zu einem break aus.
</p>
<p>
	Der Anweisungsblock nach <i>default</i> wird immer dann ausgeführt, wenn keines der Werte zutrifft (Standard wie else).
</p>
<?php echo git_code('PHP/11_switch'); ?>
<p>
	Das Schlüsselwort <i>break</i> beendet die Überprüfung aller weiteren Möglichkeiten. Manchmal ist es allerdings sinnvoll das 
	break wegzulassen.
</p>
<?php echo git_code('PHP/12_switch_without_break'); ?>