<HTML>
<HEAD>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="form_css.css" type="text/css" rel="stylesheet"/>
	<title>VaciNit</title>
	
	<META name="robots" content="index, follow">
 
<style type="text/css">
	body,td			{ font-family: arial, helvetica; color: #434343; font-size: 12px; }
	

	A:link			{ text-decoration: none; color: #2244ee; }
	A:visited		{ text-decoration: none; color: #2244ee; }
	A:hover			{ text-decoration: underline; }

	.hidden			{ font-size: 8px; font-weight: bold; color: #ffffff; }
	A:link.hidden		{ text-decoration: none; color: #ffffff; }
	A:visited.hidden	{ text-decoration: none; color: #ffffff; }
	A:hover.hidden		{ text-decoration: none; color: #ffffff; }

	.small			{ font-size: 10px; }

	.emph			{ font-weight: bold; }
</style>


</HEAD>

<BODY BGCOLOR="FFFFFF" TEXT="000000" LINK="0000FF" VLINK="0000FF" Marginwidth=0 marginheight=0 leftmargin=0 topmargin=0>


<TABLE BORDER=0 height=100% WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0>
<TR>

<TD VALIGN=top BGCOLOR=#F38B3C width=20%>

<!--    ---------------- Lateral ---------------    -->
<FONT SIZE=6 COLOR=WHITE><B>
<BR><BR>

<CENTER><img src="logo.jpg"/> <BR>
</cENTER>
</B></FONT>

<BR><BR>

<FONT COLOR=White>

<BR><BR>

&nbsp; <FONT SIZE=3><A HREF="postos.php"><FONT COLOR=WHITE><B>Postos mais próximos</B></FONT></A><BR>

<BR><BR>

&nbsp;<FONT SIZE=3><A HREF="usuario.php"><FONT COLOR=WHITE><B>Meus dados</B></FONT></A><BR>

<BR><BR>

&nbsp; <A HREF="carteira.php"><FONT COLOR=WHITE><B>Caderneta de vacinação</B></FONT></A><BR>
<BR><BR>
&nbsp; <A HREF="menuusuaprin.php"><FONT COLOR=WHITE><B>Menu usuário</B></FONT></A><BR>
<BR><BR>



</FONT>



<!--    ---------------- final aba lateral ---------------    -->

</TD>


<TD VALIGN=top width=80%>

<!--    ---------------- centro ---------------    -->



<BR><BR>

<BR>
<!--    ---------------- link do topo---------------    -->

<TABLE BORDER=0 WIDTH=75% ALIGN=CENTER BGCOLOR=#F38B3C>
<TR><TD><CENTER><FONT COLOR=WHITE size=2>

<A HREF="index.php"><FONT SIZE=2 COLOR=WHITE><B>Home</B></FONT></A> | 
<A HREF="http://portalarquivos2.saude.gov.br/images/pdf/2018/julho/11/Calendario-de-Vacinacao-2018.pdf"><FONT SIZE=2 COLOR=WHITE><B>Vacinas</B></FONT></A> | 
<A HREF="contatos.php"><FONT SIZE=2 COLOR=WHITE><B>Fale conosco</B></FONT></A> | 
<A HREF="voluntas.php"><FONT SIZE=2 COLOR=WHITE><B>Voluntas</B></FONT></A> | 
<A HREF=""><FONT SIZE=2 COLOR=WHITE><B>Sair</B></FONT></A> | 

</FONT></CENTER></TD></TR>
</TABLE>

<BR>

<TABLE BORDER=0 WIDTH=98% ALIGN=CENTER>
<TR>

<TD VALIGN=top Width=75%>

<FONT COLOR=000040><B></B></FONT><BR><BR>

<FONT SIZE=2>

<img src="bannerusuario.jpg">


<?php


$sqlite = "sqlite:vacnit.sdb";


$pdo = new PDO($sqlite);

$execucao = $pdo->query("select * from Cidadao");


$row = $execucao->fetch();

?>
<img src="nomee.jpg"><input type="text" title="Coloque seu nome" placeholder="Nome" required size="70" name="nome" autofocus value="<?php echo $row["nome"]; ?>">


<BR><BR>

<BR><BR>
<img src="csuss.jpg"><input type="" title="Número do SUS" placeholder="Escreva seu cartão do SUS" required size="15" name="Número do sus" autofocus value="<?php echo $row ["cartaoSUS"]; ?>">

<BR><BR>

<img src="dnass.jpg"><input type="date" title="Insira sua data de nascimento" name="data" autofocus value="<?php echo $row ["dataNascimento"]; ?>">>

<BR><BR>

<img src="cell.jpg"><input type="tel" maxlength="11" placeholder="Telefone" title="Insira seu telefone" name="telefone" autofocus value="<?php echo $row ["telefone"]; ?>">>

<BR><BR>

<img src="ende.jpg"><input type="float" title="Insira seu endereço" placeholder="Endereço" required size="90" name="Insira seu endereço" autofocus value="<?php echo $row ["endereco"]; ?>">>>

<BR><BR>

<img src="maill.jpg"><input type="email"  placeholder="E-mail" title="Insira seu e-mail" size="50" name="email" autofocus value="<?php echo $row ["email"]; ?>">>>

<BR><BR>

<img src="fc.jpg"><img src="qr.jpg">

</FONT>

</TD>

<TD VALIGN=top width=20%>
<CENTER><FONT COLOR=000040><B>Saiba mais</B></FONT></CENTER><BR>

<FONT SIZE=2>

<A HREF="">Urgente</a> Entenda mais sobre Sarampo<BR>
<FONT SIZE=1><A HREF="https://g1.globo.com/bemestar/noticia/vacina-contra-sarampo-pode-ser-aplicada-em-adultos-e-criancas-entenda.ghtml"><B>Read more here....</B></A></FONT>
<BR><BR>

<A HREF="">Urgente</a> Rio, estado que menos vacinou contra sarampo e poliomielite<BR>
<FONT SIZE=1><A HREF="https://odia.ig.com.br/rio-de-janeiro/2018/08/5569048-rio-e-o-estado-que-menos-vacinou-contra-sarampo-e-poliomielite.html"><B>Read more here....</B></A></FONT>
<BR><BR>

<A HREF="">Urgente</a> Vacina do Sarampo falta em alguns postos do Rio<BR>
<FONT SIZE=1><A HREF="https://g1.globo.com/rj/rio-de-janeiro/noticia/2018/08/23/vacina-contra-o-sarampo-falta-em-alguns-postos-do-rio-saiba-quem-tem-prioridade-para-ser-imunizado.ghtml"><B>Read more here....</B></A></FONT>
<BR><BR>

</FONT>


</TD>

<TR></TABLE>

<CENTER>
<FONT SIZE=2>

<i></i>Site design by <FONT COLOR=000040><B>Maga</B></FONT><BR><BR><A HREF=""></a>.
</FONT>
</cENTER>

<DIV ALIGN=center class='hidden'>

</DIV>



</TD>

</TR>
</TABLE>


</BODY>
</HTML> 
