<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
if(isset($_POST['telm']))
mail("lex.webzone@gmail.com","Бриф на продвижение Instagram","Name: ".$_POST['namem']."\r\nPhone: ".$_POST['telm']."\r\nComments: ".$_POST["commm"]."\r\nOptions: \r\n ".str_replace("<br>","\r\n ",$_POST["checks"]));

else{
	if(isset($_POST['brif']))
	{
		$comments = "";
		if($_POST["Comments"] !="")$comments .= "Цель продвижения: ".$_POST["Comments"]."\r\n";
		if($_POST["Comments2"] !="")$comments .= "Чем вы занимайтесь?: ".$_POST["Comments2"]."\r\n";
		if($_POST["Comments3"] !="")$comments .= "Информация для оформления аккаунта: ".$_POST["Comments3"]."\r\n";
		if($_POST["Comments4"] !="")$comments .= "ССылки на известных конкурентов: ".$_POST["Comments4"]."\r\n";
		if($_POST["Comments5"] !="")$comments .= "Основные отличия от конкурентов: ".$_POST["Comments5"]."\r\n";
		if($_POST["Comments7"] !="")$comments .= "Примерный возраст вашего аккаунта: ".$_POST["Comments7"]."\r\n";
		if($_POST["Comments6"] !="")$comments .= "Информация которая поможет составить контент план, можно добавить ссылки на ресурсы: ".$_POST["Comments6"]."\r\n";
				mail("lex.webzone@gmail.com","Бриф на продвижение Instagram","Email: ".$_POST['Email']."\r\nPhone: ".$_POST['Company']."\r\nComments: ".$comments."\r\nOptions: \r\n ".str_replace("<br>","\r\n ",$_POST["checks"]));

	}
else
mail("lex.webzone@gmail.com","Бриф на продвижение Instagram","Email: ".$_POST['Email']."\r\nPhone: ".$_POST['Company']."\r\nComments: ".$_POST["Comments"]."\r\nOptions: \r\n ".str_replace("<br>","\r\n ",$_POST["checks"]));
}
?>