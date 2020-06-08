<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>Regex</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>

<h3> La fonction preg_match </h2>
<p> Recherche d'une chaine de caractères (deux délimiteurs, ici on utilise  <b>#</b>  mais on peut utiliser d'autres caractères)</p>
<br>

<p> Recherche du mot <b>guitare</b> dans la phrase: J'aime jouer de la guitare. </br>
<p> <b>preg_match</b>("#guitare#", "J'aime jouer de la guitare.");</p>
<br>

<p>Si on veut que nos regex ne fassent plus la différence entre majuscules et minuscules on rajute <b>i</b> après la balise de roite</p>  
<p> <b>preg_match</b>("#guitare#i", "J'aime jouer de la Guitare.");</p>

</br>
<h4> Le symbole ou |</h4>

<p> <b>preg_match</b>(#guitare|piano|banjo#, "J'aime jouer de la guitare.");</p>

<br>

<h4>Début et fin de chaîne  ^ $ </h4>

<p>Chaine commençant par bonjour</p> 
<p><b>preg_match</b>(#^bonjour#, "bonjour à tous");</p>

<p>Chaine finissant par tous</p> 
<p><b>preg_match</b>(#tous$#, "bonjour à tous");</p>

<br>
<h4>Classes de caractères [ ]</h4>
<p> <b>preg_match</b>("#gr<b>[aio]</b>s#", "Il est gras.");  VRAI</p>
<p> <b>preg_match</b>("#gr<b>[aio]</b>s#", "Il est gris.");  VRAI</p>
<p> <b>preg_match</b>("#gr<b>[aio]</b>s#", "Il est gros.");  VRAI</p>
<p> <b>preg_match</b>("#gr<b>[aio]</b>s<b>$#</b>", "Il est gros.");  FAUX car l'expression se termine par <b>gros.</b> rt non pas par <b>gros</b></p>

<p> <b>preg_match</b>("#^<b>[vaio]#</b>", "vraiment bien.");  VRAI</p>
<p> <b>preg_match</b>("#^<b>[vaio]#</b>", "incroyablement beau.");  VRAI</p>

<br>
<h4>Les intervalles de classes [0-9] [a-z] [A-Z] </h4>
<p> <b>preg_match</b>("#<b>[a-z]</b>#", "Il est gras.");  VRAI</p>
<p> <b>preg_match</b>("#<b>[0-9]</b>#", "Il est gras.");  FAUX</p>
<p> <b>preg_match</b>("#<b>[A-Z]</b>#", "Il est Gras.");  VRAI</p>
<p> <b>preg_match</b>("#<b>[^A-Z]</b>#", "Il est Gras."); FAUX le <b>^</b> signifie que la chaine de caractères ne doit pas contenir les caractères de la classe</p>

<br>
<h4>Les quantificateurs</h4>



<p><b>?(point d'interrogation)</b> : ce symbole indique que la lettre est facultative. Elle peut y être 0 ou 1 fois.<p>

<p>Ainsi,<b>#a?#</b>reconnaît 0 ou 1 « a » ;</p>

<p><b>+(signe plus)</b> : la lettre est obligatoire. Elle peut apparaître 1 ou plusieurs fois.</p>

<p>Ainsi,<b>#a+#</b>reconnaît « a », « aa », « aaa », « aaaa », etc. ;</p>

<p><b>*(étoile)</b> : la lettre est facultative. Elle peut apparaître 0, 1 ou plusieurs fois.</p>

<p>Ainsi,<b>#a*#</b>reconnaît « a », « aa », « aaa », « aaaa », etc. Mais s'il n'y a pas de « a », ça fonctionne aussi !</p>

<p><u>Notez que ces symboles s'appliquent à la lettre se trouvant directement devant.</u> On peut ainsi autoriser le mot « chien », qu'il soit au singulier comme au pluriel, avec la rege<b>#chiens?#</b>(fonctionnera pour « chien » et « chiens »).</p>
<p>#bor?is# Ce code reconnaîtra « boris » et « bois » </p>

<br>
<h4> Groupe de lettre qui se repetent</h4>
<p>#Ay<b>(ay)</b>*# Ce code reconnaîtra « Ay », « Ayay », « Ayayay », « Ayayayay »</p>   

<br>
<h4> Exemples d'utilisation des quentificateurs</h4>
<p>eeeee	 #e+#	  VRAI</p>

<p>ooo #u?# VRAI</p>

<p>magnifique #[0-9]+# FAUX</p>

<p>Yahoooooo  #^Yaho+$# VRAI </p>

<p>Yahoooooo c'est génial ! #^Yaho+$# FAUX </p>

<p>Blablablablabla #^Bla(bla)*$# VRAI </p> 

<br>
<h4>Être plus précis grâce aux accolades</h4>
<p>Parfois on aimerait indiquer que la lettre peut être répétée quatre fois, ou de quatre à six fois… bref, on aimerait être plus précis sur le nombre de répétitions.
C'est là qu'entrent en jeu les accolades. Vous allez voir : si vous avez compris les derniers exemples, ça va vous paraître tout simple.

Il y a trois façons d'utiliser les accolades.
</p>
<p>{3} : si on met juste un nombre, cela veut dire que la lettre (ou le groupe de lettres s'il est entre parenthèses) doit être répétée 3 fois exactement.</p>

<p>#a{3}#fonctionne donc pour la chaîne « aaa ».</p>

<p>{3,5} : ici, on a plusieurs possibilités. On peut avoir la lettre de 3 à 5 fois.</p>
<p>#a{3,5}#fonctionne pour « aaa », « aaaa », « aaaaa ».</p>

<p>{3,} : si vous mettez une virgule, mais pas de 2e nombre, ça veut dire qu'il peut y en avoir jusqu'à l'infini. Ici, cela signifie « 3 fois ou plus ».</p>
<p>#a{3,}#fonctionne pour « aaa », « aaaa », « aaaaa », « aaaaaa », etc. Je ne vais pas tous les écrire, ça serait un peu long.</p>

<p>Si vous faites attention, vous remarquez que :</p>

<p>?revient à écrire {0,1} ;</p>

<p>+revient à écrire {1,} ;</p>

<p>*revient à écrire {0,}.</p>

<p>On se fait quelques exemples, histoire de se dire qu'on est prêts (tableau suivant) ?</p>

<p>Chaîne Regex Résultat</p>

<p>eeeee #e{2,}# VRAI </p>
<p>Blablablabla  #^Bla(bla){4}$# FAUX </p>
<p>546781 #^[0-9]{6}$# VRAI </p>

</body>