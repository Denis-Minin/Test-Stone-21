<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
<title>Title</title>
</head>

<form action="" method="post">
<p>
<label for="data">Введите дату в формате дд.мм.гггг:</label>
<input name="data" type="text" size="10" value="27.07.2020"><br>

<label for="val">Выберите интересующюю Вас валюту:</label>
<select name="valute">
	<option>GBR</option>
	<option>BYR</option>
	<option>DKK</option>
	<option>USD</option>
	<option>EUR</option>
	<option>ISK</option>
	<option>KZT</option>
	<option>CAD</option>
	<option>NOK</option>
	<option>XDR</option>
	<option>SGD</option>
	<option>TRY</option>
	<option>UAH</option>
	<option>SEK</option>
	<option>CHF</option>
	<option>JPY</option>
</select>
<input type="submit" value="Получить значение">
</p>
</form>


 <?php   
    $date = $_POST['data']; // Выбранная дата
	$val = $_POST['valute']; // Выбранная валюта
    $content = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp?date_req=".$date);
    
    foreach($content->Valute as $cur) {
    

        if($cur->NumCode == 826) { $gbr = str_replace(",", ".", $cur->Value); } // Фунт стерлингов Соединенного королевства
        if($cur->NumCode == 974) { $byr = str_replace(",", ".", $cur->Value); } // Белорусских рублей
        if($cur->NumCode == 208) { $dkk = str_replace(",", ".", $cur->Value); } // Датских крон
        if($cur->NumCode == 840) { $usd = str_replace(",", ".", $cur->Value); } // Доллар США
        if($cur->NumCode == 978) { $eur = str_replace(",", ".", $cur->Value); } // Евро
        if($cur->NumCode == 352) { $isk = str_replace(",", ".", $cur->Value); } // Исландских крон
        if($cur->NumCode == 398) { $kzt = str_replace(",", ".", $cur->Value); } // Казахстанских тенге
        if($cur->NumCode == 124) { $cad = str_replace(",", ".", $cur->Value); } // Канадский доллар
        if($cur->NumCode == 578) { $nok = str_replace(",", ".", $cur->Value); } // Норвежских крон
        if($cur->NumCode == 960) { $xdr = str_replace(",", ".", $cur->Value); } // СДР (специальные права заимствования)
        if($cur->NumCode == 702) { $sgd = str_replace(",", ".", $cur->Value); } // Сингапурский доллар
        if($cur->NumCode == 949) { $try = str_replace(",", ".", $cur->Value); } // Турецкая лира
        if($cur->NumCode == 980) { $uah = str_replace(",", ".", $cur->Value); } // Украинских гривен
        if($cur->NumCode == 752) { $sek = str_replace(",", ".", $cur->Value); } // Шведских крон
        if($cur->NumCode == 756) { $chf = str_replace(",", ".", $cur->Value); } // Швейцарский франк
        if($cur->NumCode == 392) { $jpy = str_replace(",", ".", $cur->Value); } // Японских иен
        
    }

	if ($val == 'EUR')
		echo "Курс Евро на $date составляет $eur";
	if ($val == 'GBR')
		echo "Курс фунтов стерлингов Соединенного королевства на $date составляет $gbr";
	if ($val == 'BYR')
		echo "Курс Белорусского рубля на $date составляет $byr";
	if ($val == 'DKK')
		echo "Курс Датских крон на $date составляет $dkk";
	if ($val == 'USD')
		echo "Курс доллара США на $date составляет $usd";
	if ($val == 'ISK')
		echo "Курс Исландских крон на $date составляет $isk";
	if ($val == 'KZT')
		echo "Курс Казахстанских тенге на $date составляет $kzt";
	if ($val == 'CAD')
		echo "Курс Канадского доллара на $date составляет $cad";
	if ($val == 'NOK')
		echo "Курс Норвежских крон на $date составляет $nok";
	if ($val == 'XDR')
		echo "Курс СДР (специальные права заимствования) на $date составляет $xdr";
	if ($val == 'SGD')
		echo "Курс Сингапурского доллара на $date составляет $sgd";
	if ($val == 'TRY')
		echo "Курс Турецкой лиры на $date составляет $try";
	if ($val == 'UAH')
		echo "Курс Украинских гривен на $date составляет $uah";
	if ($val == 'SEK')
		echo "Курс Шведских крон на $date составляет $sek";
	if ($val == 'CHF')
		echo "Курс Швейцарских франков на $date составляет $chf";
	if ($val == 'JPY')
		echo "Курс Японских иен на $date составляет $jpy";
	
?>



<body>
</body>
</html>