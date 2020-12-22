<?php

//user input
$badword = $_GET ["badword"];

//original text
$text = "Respiri piano per non far rumore<br>
Ti addormenti di sera e ti risvegli col sole<br>
Sei chiara come un'alba<br>
Sei fresca come l'aria<br>
Diventi rossa se qualcuno ti guarda<br>
E sei fantastica quando sei assorta<br>
Nei tuoi problemi, nei tuoi pensieri<br>
Ti vesti svogliatamente<br>
Non metti mai niente che possa attirare attenzione<br>
Un particolare, solo per farti guardare<br>
Respiri piano per non far rumore<br>
Ti addormenti di sera e ti risvegli col sole<br>
Sei chiara come un'alba<br>
Sei fresca come l'aria<br>
Diventi rossa se qualcuno ti guarda<br>
E sei fantastica quando sei assorta<br>
Nei tuoi problemi, nei tuoi pensieri<br>
Ti vesti svogliatamente<br>
Non metti mai niente che possa attirare attenzione<br>
Un particolare, per farti guardare<br>
E con la faccia pulita<br>
Cammini per strada mangiando una mela<br>
Coi libri di scuola, ti piace studiare<br>
Non te ne devi vergognare<br>
E quando guardi con quegli occhi grandi<br>
Forse un po' troppo sinceri, sinceri, sì<br>
Si vede quello che pensi, quello che sogni<br>
E qualche volta fai pensieri strani<br>
Con una mano, una mano ti sfiori<br>
Tu sola dentro la stanza<br>
E tutto il mondo fuori"
?>

<!-- bad words replacement -->
<?php
$text_new = str_replace($badword, "***", $text);
?>

<!-- displaying texts-->
<h1>Alba Chiara</h1>
<h4>Vasco Rossi</h4>
<p><?php
if($badword != ""){
  echo $text_new;
} else {
  echo $text;
}
?></p>

<!-- user input -->
<form name="form" action="" method="get">
  <input type="text" name="badword" value="" placeholder="Insert here a badword">
</form>
