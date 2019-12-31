
<?php
header("Content-Type: text/html; charset=UTF-8");
include "process.php"; 

?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Анкетна карта</title>
<link rel="stylesheet" href="normalize.css" />
<link rel="stylesheet" href="style.css" />
<link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script charset="UTF-8" src="script.js"></script>
<script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
<script src="jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$( function() {
$( "#accordion" ).accordion({
heightStyle: "content",
collapsible: true,
active: false
});
});
</script>
<script>
 $(document).ready(function(){
    $(window).scrollTop(0);
});
</script>

</head>
<body>
    <br>
 <img src="Prilojenie1.jpg" width="700px" >
 <br>
<?php if (isset($msg)) { echo '<div class="downerror">', $msg ,'</br></div>'; } ?>
<form id="formradon" accept-charset="UTF-8" name="theform" enctype="multipart/form-data" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST" onsubmit ="validate(event)" >
 <div id="accordion" >
<h3>І. ОБЩИ ДАННИ ЗА СГРАДАТА</h3>
<div>
<fieldset id="formstart" title="І. ОБЩИ ДАННИ ЗА СГРАДАТА ">
<legend>І. ОБЩИ ДАННИ ЗА СГРАДАТА</legend><br>
<ol>
<li>
<label for="oblast" style="color:red;">Полетата отбелязани с * са задължителн
<br><br>
1.ОБЛАСТ*</label>
<input type="text" class="Cyrillic" name="Oblast" id="oblast" title="Моля изберете област"  autofocus  placeholder="Област" value="<?php if (isset($Oblast)) { echo $Oblast; } ?>"  /><span id="oblerrorform" class="error"></span>
</li>
<li>
<label for="obshtina" style="color:red;">2.ОБЩИНА*</label>
<input type="text" class="Cyrillic" name="Obshtina" id="obshtina" title="Моля изберете община"   placeholder="Община"  value="<?php if (isset($Obshtina)) { echo $Obshtina; } ?>"  /><span id="obsherrorform" class="error"></span>
</li> 
</ol>
<ol>
<li>
<label for="nasеlenomiasto" style="color:red;">3.НАСЕЛЕНО МЯСТО*</label>
<table>
<tbody>
<tr>
<td ><label for="grad">Град</label></td>
<td style="padding: 5px 5px 5px 40px;"><label for="selo" >Село</label></td>
</tr>
<tr>
<td ><input type="text" class="Cyrillic" name="Grad" id="grad" title="Моля изберете град"  autofocus  placeholder="Град" onkeyup="disableselo()" value="<?php if (isset($Grad)) { echo $Grad; } ?>"/>
</td >
<td style="padding: 5px 5px 5px 40px;" >  
<input type="text" class="Cyrillic" name="Selo" id="selo" title="Моля изберете село" autofocus value="<?php if (isset($Selo)) { echo $Selo; } ?>"  placeholder="Село" onkeyup="disablegrad()"/></td >
</tr>
</tbody>
</table>
</li>
<span id="graderroriseloerrorform" class="error"></span>
<li>
<label for="adres-sgrada" style="color:red;">4.АДРЕС ПО МЕСТОНАХОЖДЕНИЕ НА СГРАДАТА*</label>
<input type="text" class="Cyrillic" name="Adressgrada" id="adres-sgrada" title="Моля попълнете адрес"  autofocus placeholder="Адрес" value="<?php if (isset($Adressgrada)) { echo $Adressgrada; } ?>" /><span id="miastoerrorform" class="error"></span> <br>
</li>		  
<li>
<label for="naimenovaniesgrada" style="color:red;">5.НАИМЕНОВАНИЕ НА СГРАДАТА*</label>
<input type="text" class="Cyrillic" name="Naimenovanie" id="naimenovaniesgrada" title="Моля попълнете наименование"   placeholder="Наименование" value="<?php if (isset($Naimenovanie)) { echo $Naimenovanie; } ?>" />
</li><span id="naimenovaniеerrorform" class="error"></span>
<li>
<span id="identificatorformat" class="poiasnenie"></span>
<label for="identificator" style="color:red;">6.ИДЕНТИФИКАТОР - КОД ПО КАДАСТЪРА И ИМОТНИЯ РЕГИСТЪР:*</label>
<input type="text" name="Identificatorkod" id="identificator" title="Моля попълнете кода" placeholder="xxxxx.xxx.xxxx.x.xx"   value="<?php if (isset($Identificatorkod)) { echo $Identificatorkod; } ?>" />
</li><span id="identiferror" class="error"></span>
</ol>
<ol>
<li>
<label for="reference" style="color:red;">7. ПРЕДНАЗНАЧЕНИЕ НА СГРАДАТА*</label>
<div id="wrapselect">
<select name="categories" onchange="updateModels(this.form)" id="reference">
<option value="" >Сграда за:</option>
<option <?php if ((isset($categories)) && ($categories === "Жилищна")) { echo "selected"; } ?> value="Жилищна" >Жилищна</option>
<option <?php if ((isset($categories)) && ($categories === "Здравеопазване")) { echo "selected"; } ?> value="Здравеопазване" >Здравеопазване</option>
<option <?php if ((isset($categories)) && ($categories === "Образование")) { echo "selected"; } ?> value="Образование" >Образование</option>
<option <?php if ((isset($categories)) && ($categories === "Култура")) { echo "selected"; } ?> value="Култура" >Култура</option>
<option <?php if ((isset($categories)) && ($categories === "Спорт")) { echo "selected"; } ?> value="Спорт" >Спорт</option>
<option <?php if ((isset($categories)) && ($categories === "Търговия")) { echo "selected"; } ?> value="Търговия" >Търговия</option>
<option <?php if ((isset($categories)) && ($categories === "Транспорт")) { echo "selected"; } ?> value="Транспорт" >Транспорт</option>
<option <?php if ((isset($categories)) && ($categories === "Администрация")) { echo "selected"; } ?> value="Администрация" >Администрация</option>
<option <?php if ((isset($categories)) && ($categories === "Религия")) { echo "selected"; } ?> value="Религия" >Религия</option>
</select>
<select name="items" id="reference2"></select><br> 
<span id="selecterror" class="error"></span>
</div>
<script type="text/javascript">
var items = [];
items.Жилищна = [ "Еднофамилна къща за живеене", "Вила, която се обитава до 4 месеца в годината",
"Многофамилна жилищна сграда", "Общежитие",
"Център за настаняване от семеен тип", "Преходно жилище",
"Защитено жилище", "Наблюдавано жилище"];
items.Здравеопазване = ["Болница за активно лечение", "Болница за долекуване и продължително лечение", "Болница за рехабилитация", "Център за спешна медицинска помощ", "Медико-диагностичен център/Поликлиника", "Ветеринарна клиника", "Амбулатория", "Аптека"];
items.Образование = ["Училище", "Детска градина", "Детска ясла", "Университет",
"Сграда на академично/научно звено"];
items.Култура = ["Читалище", "Библиотекa", "Театър", "Опера", "Танцова зала", "Концертна зала"];
items.Спорт = ["Спортна зала", "Сграда на стадион"];
items.Търговия = ["Търговски център от тип МОЛ", "Универсален магазин", "Базар-покрит пазар", "Панаирна палата", "Сграда за битови услуги", "Сграда за граждански ритуали", "Клуб-Казино", "Дискотека", "Игрална зала", "Хотел-Почивна база"];
items.Транспорт = ["Сграда на летище", "Сграда на железопътна гара", "Автогара"];
items.Администрация = ["Административна сграда"];
items.Религия = ["Сграда за вероизповедание"];
function updateModels(theForm) 
 { if(theForm.categories.selectedIndex<1){return false; }
var op=theForm.categories.options;
var newModels = items[op[op.selectedIndex].value];
theForm.items.options.length = 0;
theForm.items.options[0] = new Option("Сграда за:", "");
theForm.items.options[0].selected = true;
for (var i=0; i<newModels.length; i++) 
{ theForm.items.options[i+1] = new Option(newModels[i], newModels[i]); }  
 }
</script>
</li>
</ol>
<ol>
<li>
<input type="button" id="drugoButton" value="Друго предназначение на сградата"><br>
<div id="drugo">
<label for="other6">Моля опишете предназначението на сградата</label><br>
<textarea name="Prednaznachenienasgrtext" id="other6" ><?php if (isset($Prednaznachenienasgrtext)) { echo $Prednaznachenienasgrtext; } ?></textarea><br>
<input type="button" id="selecttransport" value="Изчисти текста">
</div>
<br>
<script>
$("#drugoButton").click(function(){
$("#drugo").toggle();
});
</script>
<script> 
$(document).ready(function(){
$("#selecttransport").click(function(){
$("#other6").val("").empty();
})
}); 
</script> 
</li>
</ol>
<ol>
<li>
<ol>
<li>
<label for="koordinati">8. GPS КООРДИНАТИ</label><br>
<span id="koord" class="poiasnenie"></span>
<table >
<tbody>  
<tr>
<td>
<input type="text" class="Cyrillic" name="GPSkoordinati" id="koordinati"   title="Моля попълнете координати" placeholder="N _ _-_ _-_ / E _ _-_ _-_"  onkeyup="disablecheckeight()" value="<?php if (isset($GPSkoordinati)) { echo $GPSkoordinati; } ?>"/>
</td>
<td style="padding: 5px 5px 5px 40px;">  
<p>
<input type="checkbox" id="koordinatineznam" name="GPS" onclick="disableeight()" <?php if (isset($GPS)) { echo "checked"; } ?> />
Не мога да отговоря
</p>
</td >
</tr>
</tbody>
</table>
</li>
</ol>
<br>
<ol>
<li>
<label for="pochvenapokrivka">9. ДЕБЕЛИНА НА ПОЧВЕНАТА ПОКРИВКА</label>
<table >
<tbody>  
<tr>
<td>
<input type="text" class="Cyrillic" name="pochvenapokrivka" id="pochvenapokrivka" title="Моля попълнете почвена покривка в см"    placeholder="приблизително __ см" onkeyup="disablechecknine()" value="<?php if (isset($pochvenapokrivka)) { echo $pochvenapokrivka; } ?>"/>
</td>
<td style="padding: 5px 5px 5px 40px;">  
<p>
<input type="checkbox" id="pochpokneznam" name="pochpokneznamvsm" <?php if (isset($pochpokneznamvsm)) { echo "checked"; } ?> onclick="disablenine()"/>
Не мога да отговоря
</p>
</td >
</tr>
</tbody>
</table>
</li>
</ol>
<span id="pochvachislo" class="poiasnenie"></span>
</fieldset>
</div>
<h3>IІ. ОБЕМНОПЛАНИРОВЪЧНИ И ФУНКЦИОНАЛНИ ХАРАКТЕРИСТИКИ НА СГРАДАТА</h3>
<div>
<fieldset id="formpart2" title="IІ. ОБЕМНОПЛАНИРОВЪЧНИ И ФУНКЦИОНАЛНИ ХАРАКТЕРИСТИКИ НА СГРАДАТА">
<legend> IІ. ОБЕМНОПЛАНИРОВЪЧНИ И ФУНКЦИОНАЛНИ ХАРАКТЕРИСТИКИ НА СГРАДАТА
</legend><br>
<ol>
<li>
<label for="1zastroenaplosht">10. Застроена площ на сградата:</label>
<table>
<tbody>  
<tr>
<td>
<input type="text" class="Cyrillic" name="Zastroenaplosht" id="1zastroenaplosht" title="Моля попълнете застроената площ"    placeholder="__ квадратни метри"
onkeyup="disablecheckten()"
value="<?php if (isset($Zastroenaplosht)) { echo $Zastroenaplosht; } ?>" />
</td>
<td style="padding: 5px 5px 5px 40px;">  
<p>
<input type="checkbox" id="zastroenaplosht" name="Zastroenaploshtcheck"   onclick="disableten()" 
<?php if (isset($Zastroenaploshtcheck)) { echo "checked"; } ?>
/>
Не мога да отговоря
</p>
</td>
</tr>
</tbody>
</table>
<label for="1razganataplosht">11. Разгъната застроена площ на сградата:</label>
<table>
<tbody>  
<tr>
<td>
<input type="text" class="Cyrillic" name="Razganataplosht" id="1razganataplosht" title="Моля попълнете разгънатата площ"    placeholder="__ квадратни метри" onkeyup="disablecheckeleven()" 
value="<?php if (isset($Razganataplosht)) { echo $Razganataplosht; } ?>" />
</td>
<td style="padding: 5px 5px 5px 40px;">  
<p>
<input type="checkbox" id="razganataplosht" name="Razganataploshtcheck"
onclick="disableleven()" 
<?php if (isset($Razganataploshtcheck)) { echo "checked"; } ?>
/>
Не мога да отговоря
</p>
</td>
</tr>
</tbody>
</table>
</li>
</ol>
<ol>
<li>
<label for="1otopliaemaplosht">12. Отоплявана площ на сградата:</label>
<table >
<tbody>  
<tr>
<td>
<input type="text" class="Cyrillic" name="Otopliavanaplosht" id="1otopliaemaplosht" title="Моля попълнете отопляемата площ"    placeholder="__ квадратни метри" onkeyup="disablechecktwelve()" 
value="<?php if (isset($Otopliavanaplosht)) { echo $Otopliavanaplosht; } ?>" />
</td>
<td style="padding: 5px 5px 5px 40px;">  
<p>
<input type="checkbox" id="otopliaemaplosht" name="Otopliavanaploshtcheck" onclick="disabletwelve()"   
<?php if (isset($Otopliavanaploshtcheck)) { echo "checked"; } ?> />
Не мога да отговоря
</p>
</td>
</tr>
</tbody>
</table>
</ol>
<ol>
<li>
<label for="reference6.1" style="color:red;">13. На колко етажа е сградата?*<br> (без да броите подземния етаж, ако има такъв)</label>
<table >
<tbody>  
<tr>
<td>
<label>Моля изберете...</label>
<select onclick="disableselectthirteen()" name="referenceshest" id="reference6-1" />
<option value="" >Моля изберете</option>
<option value="1 етаж" 
<?php if ((isset($referenceshest)) && ($referenceshest === "1 етаж")) { echo "selected"; } ?> >1 етаж</option>
<option value="2 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "2 етажа")) { echo "selected"; } ?> >2 етажа</option>
<option value="3 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "3 етажа")) { echo "selected"; } ?> >3 етажа</option>
<option value="4 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "4 етажа")) { echo "selected"; } ?> >4 етажа</option>
<option value="5 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "5 етажа")) { echo "selected"; } ?> >5 етажа</option> 
<option value="6 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "6 етажа")) { echo "selected"; } ?> >6 етажа</option>
<option value="7 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "7 етажа")) { echo "selected"; } ?> >7 етажа</option>
<option value="8 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "8 етажа")) { echo "selected"; } ?> >8 етажа</option>
<option value="9 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "9 етажа")) { echo "selected"; } ?> >9 етажа</option>
<option value="10 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "10 етажа")) { echo "selected"; } ?> >10 етажа</option>
<option value="11 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "11 етажа")) { echo "selected"; } ?> >11 етажа</option>
<option value="12 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "12 етажа")) { echo "selected"; } ?> >12 етажа</option>
<option value="13 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "13 етажа")) { echo "selected"; } ?> >13 етажа</option>
<option value="14 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "14 етажа")) { echo "selected"; } ?> >14 етажа</option>
<option value="15 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "15 етажа")) { echo "selected"; } ?> >15 етажа</option>             
<option value="16 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "16 етажа")) { echo "selected"; } ?> >16 етажа</option>
<option value="17 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "17 етажа")) { echo "selected"; } ?> >17 етажа</option>
<option value="18 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "18 етажа")) { echo "selected"; } ?> >18 етажа</option>
<option value="19 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "19 етажа")) { echo "selected"; } ?> >19 етажа</option>
<option value="повече от 20 етажа" <?php if ((isset($referenceshest)) && ($referenceshest === "повече от 20 етажа")) { echo "selected"; } ?> >повече от 20 етажа</option>
</select>
</td>
<td style="padding: 5px 5px 5px 80px;">  
<p>Моля посочете етажите тук</p>
<input type="text" class="Cyrillic" name="Broinaetagite" id="etagi" title="Моля попълнете на колко етажа е сградата"    placeholder="__ етажа" value="<?php if (isset($Broinaetagite)) { echo $Broinaetagite; } ?>" />
</td >
</tr>
</tbody>
</table>
</li>
</ol>
<span id="bretagierrorform" class="error"></span>
<span id="bretagierrortextform" class="error"></span>
<ol>
<li>
<label for="vavedenavexp">14. През коя година сградата е въведена в експлоатация за първи път?</label>
<table >
<tbody>  
<tr>
<td>
<input type="text" class="Cyrillic" name="Godinanaeksploatacia" id="1vavedenavexp" title="Моля попълнете годината" placeholder="____ година" onkeyup="disablecheckfourteen()" 
value="<?php if (isset($Godinanaeksploatacia)) { echo $Godinanaeksploatacia; } ?>"
/>
</td>
<td style="padding: 5px 5px 5px 40px;">  
<p>
<input type="checkbox" id="vavedenavexp" name="Godinanaeksploataciacheck" onclick="disablefourteen()" <?php if (isset($Godinanaeksploataciacheck)) { echo "checked"; } ?>
/> Не мога да отговоря
</p>
</td>
</tr>
</tbody>
</table>
</li>
</ol>
<ol>
<li>
<label for="osnovniremonti">14а. Въвеждана ли е сградата в експлоатация повторно след основни ремонти и през кои години?</label>
<table>
<tbody>  
<tr>
<td>
<input type="text" name="Vtoraeksploatacia" id="osnovniremontiexp" title="Моля попълнете годината"    placeholder="____ година" onkeyup="disablecheckfourteena()"
value="<?php if (isset($Vtoraeksploatacia)) { echo $Vtoraeksploatacia; } ?>"
/>
</td>
<td style="padding: 5px 5px 5px 40px;">       
<input type="checkbox" id="osnovniremonti" name="Vtoraeksploataciacheck" onclick="disablefourteena()" 
<?php if (isset($Vtoraeksploataciacheck)) { echo "checked"; } ?>
/>
Не мога да отговоря             
</td >
</tr>
<tr>
<td>
<input type="text" class="Cyrillic" name="oneGodinavtoraeksploatacia" id="1osnovniremonti" title="Моля попълнете годината"    placeholder="____ година" onkeyup="disablecheckfourteena1()" 
value="<?php if (isset($oneGodinavtoraeksploatacia)) { echo $oneGodinavtoraeksploatacia; } ?>"
/>
</td>
<td>
</td>
<tr>
</tr>
<tr>
<td>
<input type="text" name="twoGodinavtoraeksploatacia" id="2osnovniremonti" title="Моля попълнете годината"    placeholder="____ година"  onkeyup="disablecheckfourteena2()" 
value="<?php if (isset($twoGodinavtoraeksploatacia)) { echo $twoGodinavtoraeksploatacia; } ?>" />
</td>
<td>  
</td>
</tr>
</tbody>
</table>
</li>
</ol>
<ol>
<li>
<div class="grouphead" style="color:red;">15. По коя строителна система е изградена сградата?*</div>
<ol>
<li>
<input type="radio" name="stroysys" value="панелна- построена от панели (готови сглобяеми елементи);" id="panelnaitem" <?php if ((isset($stroysys)) && ($stroysys==="панелна- построена от панели (готови сглобяеми елементи);")) { echo "checked"; } ?>
/>
<label for="panelnaitem">панелна- построена от панели (готови сглобяеми елементи);</label><br>
</li>
<li>
<input type="radio" name="stroysys" value="стоманобетонна (стоманобетонна конструкция с плоча и колони) - за масивно-монолитни сгради (със стоманобетонни елементи, ЕПК, ППП (пакетоповдигани плочи);" id="stomanaitem" <?php if ((isset($stroysys)) && ($stroysys==="стоманобетонна (стоманобетонна конструкция с плоча и колони) - за масивно-монолитни сгради (със стоманобетонни елементи, ЕПК, ППП (пакетоповдигани плочи);")) { echo "checked"; } ?> />
<label for="stomanaitem">стоманобетонна (стоманобетонна конструкция с плоча и колони) - за масивно-монолитни сгради (със стоманобетонни елементи, ЕПК, ППП (пакетоповдигани плочи);</label><br>
</li>
<li>
<input type="radio" name="stroysys" value="тухлена (с бетонна плоча)  -  сграда с тухлени стени и бетонни плочи между етажите, но без стоманобетонни колони;" id="tuhlabetitem" <?php if ((isset($stroysys)) && ($stroysys==="тухлена (с бетонна плоча)  -  сграда с тухлени стени и бетонни плочи между етажите, но без стоманобетонни колони;")) { echo "checked"; } ?> />
<label for="tuhlabetitem">тухлена (с бетонна плоча)  -  сграда с тухлени стени и бетонни плочи между етажите, но без стоманобетонни колони;</label><br>
</li>
<li>
<input type="radio" name="stroysys" value="тухлена с гредоред без стоманобетон  -  сграда с тухлени стени и бетонни плочи между етажите, но няма стоманобетонни колони;" id="tuhlagreditem" <?php if ((isset($stroysys)) && ($stroysys==="тухлена с гредоред без стоманобетон  -  сграда с тухлени стени и бетонни плочи между етажите, но няма стоманобетонни колони;")) { echo "checked"; } ?> />
<label for="tuhlagreditem">тухлена с гредоред без стоманобетон  -  сграда с тухлени стени и бетонни плочи между етажите, но няма стоманобетонни колони;</label><br>
</li>
<li>
<input type="radio" name="stroysys" value="кирпич- сграда, построена от кирпич;" id="kirpichitem" <?php if ((isset($stroysys)) && ($stroysys==="кирпич- сграда, построена от кирпич;")) { echo "checked"; } ?> />
<label for="kirpichitem">кирпич- сграда, построена от кирпич;</label><br>
</li>
<li>
<input type="radio" name="stroysys" value="дърво - сграда, построена от дърво, дъски, дървени плоскости;" id="darvoitem" <?php if ((isset($stroysys)) && ($stroysys==="дърво - сграда, построена от дърво, дъски, дървени плоскости;")) { echo "checked"; } ?> />
<label for="darvoitem">дърво - сграда, построена от дърво, дъски, дървени плоскости;</label><br>
</li>
<li>
<input type="radio" name="stroysys" value="камък - сграда, построена преобладаващо от камък;" id="kamakitem" <?php if ((isset($stroysys)) && ($stroysys==="камък - сграда, построена преобладаващо от камък;")) { echo "checked"; } ?> />
<label for="kamakitem">камък - сграда, построена преобладаващо от камък;</label><br>
</li>
<li>    <input type="radio" name="stroysys" value="не мога да отговоря;" id="neznamitem" 
<?php if ((isset($stroysys)) && ($stroysys==="не мога да отговоря;")) { echo "checked"; } ?> />
<label for="neznamitem">не мога да отговоря</label><br>
</li>
</ol>
</li>   
</ol>
<span id="stroysyserror" class="error"></span>
<span id="sgrmazetxtnerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">16. Каква е основата на сградата?*</div>
<ol>
<li>
<input type="radio" name="osnsgrada" value="Стоманобетон;" id="stombetitem" class="osnovata"
<?php if ((isset($osnsgrada)) && ($osnsgrada==="Стоманобетон;")) { echo "checked"; } ?> 
/>
<label for="stombetitem">Стоманобетон;</label><br>
</li>
<li>
<input type="radio" name="osnsgrada" value="Камък;" id="stoneitem" class="osnovata"
<?php if ((isset($osnsgrada)) && ($osnsgrada==="Камък;")) { echo "checked"; } ?>
/>
<label for="stoneitem">Камък;</label><br>
</li>
<li>
<input type="radio" name="osnsgrada" value="Гредоред;" id="grediitem" class="osnovata"
<?php if ((isset($osnsgrada)) && ($osnsgrada==="Гредоред;")) { echo "checked"; } ?>
/>
<label for="grediitem">Гредоред;</label><br>
</li>
<li>
<input type="radio" name="osnsgrada" value="Не мога да отговоря;" id="nemogaitem" class="osnovata"
<?php if ((isset($osnsgrada)) && ($osnsgrada==="Не мога да отговоря;")) { echo "checked"; } ?>
/>
<label for="nemogaitem">Не мога да отговоря;</label><br>
</li>
</ol>
</li>   
</ol>
<ol>
<li>                
<label for="otherosn">Друго</label>
<textarea name="osnsgradadrugo" id="otherosn" onkeyup="disablesixteenradio();" >
 <?php if (isset($osnsgradadrugo)) { echo $osnsgradadrugo; } ?> 
</textarea>
</li>
</ol>
<span id="osnovaerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">17. Сградата има ли подземен етаж/сутерен?*</div> 
<ol>
<li>
<input type="radio" name="imalimaze" value="Да" id="daitem" 
<?php if ((isset($imalimaze)) && ($imalimaze==="Да")) { echo "checked"; } ?>
/>
<label for="daitem">Да</label><br>
</li>
<li>
<input type="radio" name="imalimaze" value="Не" id="neitem" 
<?php if ((isset($imalimaze)) && ($imalimaze==="Не")) { echo "checked"; } ?>
/>
<label for="neitem">Не</label><br>
</li>
<li>
<input type="radio" name="imalimaze" value="Не мога да отговоря" id="nemogasutitem" 
<?php if ((isset($imalimaze)) && ($imalimaze==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="nemogasutitem">Не мога да отговоря</label>
</li>
</ol>
</li>   
</ol>
<span id="sgrmazeerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">18. За какво се използва подземният етаж на сградата?*</div> 
<ol>
<li>
<input type="radio" name="podzemenetaj" value="Само за мазе без да се обитава за живеене от хора и/или за обитаване в сграда за обществено обслужване;" id="samomazeitem" 
<?php if ((isset($podzemenetaj)) && ($podzemenetaj==="Само за мазе без да се обитава за живеене от хора и/или за обитаване в сграда за обществено обслужване;")) { echo "checked"; } ?>
/>
<label for="samomazeitem">Само за мазе без да се обитава за живеене от хора и/или за обитаване в сграда за обществено обслужване; </label><br>
</li>
<li>
<input type="radio" name="podzemenetaj" value="Основно за мазе, но има и стаи за живеене/общественообслужващи дейности;" id="osnovnomazeitem"  
<?php if ((isset($podzemenetaj)) && ($podzemenetaj==="Основно за мазе, но има и стаи за живеене/общественообслужващи дейности;")) { echo "checked"; } ?>
/>
<label for="osnovnomazeitem">Основно за мазе, но има и стаи за живеене/общественообслужващи дейности;</label><br>
</li>
<li>
<label for="obitaemaploshtmaze">Моля посочете площта на стаите, която се обитава тук (кв.м):</label>
<input type="text" name="podzemenetajplosht" id="obitaemaploshtmaze" title="Моля попълнете площ"   placeholder="Въведете число" 
value="<?php if (isset($podzemenetajplosht)) { echo $podzemenetajplosht; } ?>" /><br>
</li>
<li>
<input type="radio" name="podzemenetaj" value="Целият сутерен се обитава за живеене от хора и/или по съответното предназначение в сграда за обществено обслужване." id="zajiveenemazeitem" 
<?php if ((isset($podzemenetaj)) && ($podzemenetaj==="Целият сутерен се обитава за живеене от хора и/или по съответното предназначение в сграда за обществено обслужване.")) { echo "checked"; } ?>
/>
<label for="zajiveenemazeitem">Целият сутерен се обитава за живеене от хора и/или по съответното предназначение в сграда за обществено обслужване.</label>
</li>
</ol>
</li>
</ol>
<span id="sgrmazeprednerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">19. Има ли сградата асансьор?*</div> 
<ol>
<li>
<input type="radio" name="asanciorsgrada" value="Да" id="daitemas" 
<?php if ((isset($asanciorsgrada)) && ($asanciorsgrada==="Да")) { echo "checked"; } ?>
/>
<label for="daitemas">Да</label><br>
</li>
<li>
<input type="radio" name="asanciorsgrada" value="Не" id="neitemas" 
<?php if ((isset($asanciorsgrada)) && ($asanciorsgrada==="Не")) { echo "checked"; } ?> />
<label for="neitemas">Не</label><br>
</li>
<li>
<input type="radio" name="asanciorsgrada" value="Не мога да отговоря" id="nemogaasitem" 
<?php if ((isset($asanciorsgrada)) && ($asanciorsgrada==="Не мога да отговоря")) { echo "checked"; } ?> />
<label for="nemogaasitem">Не мога да отговоря</label>
</li>
</ol>
</li>
</ol>
<span id="asanciorerror" class="error"></span>
<ol>
<li>
<?php  $merkiefectivnost=array();  ?>
<div class="grouphead" style="color:red;">20. Изпълнени ли са мерки за енергийна ефективност при построяването на сградата или в последствие при извършване на основен ремонт?
Моля посочете това, което Ви е известно.*</div>
<input type="checkbox" id="efectivnost1" name="merkiefectivnost[]"  onclick="select20OnlyOne(this.id); Enable20Select();"
value="Да както следва:" <?php if ((isset($merkiefectivnost)) && (in_array("Да както следва:", $merkiefectivnost))) { echo "checked"; } ?>
 />
Да както следва:
</li>

<li>
<?php  $Izpmerki=array();  ?>
<label>Моля изберете...</label>
<select name="Izpmerki[]" id="reference7" multiple style="width: 600px !important; min-width: 600px; max-width: 600px;">
<option value="" selected="selected"> Моля изберете</option>
<option value="Нови/подменени са всички прозорци в сградата;">
Нови/подменени са всички прозорци в сградата;</option>
<option value="Нови/подменени са по-голяма част от прозорците в сградата (над 50%);"
<?php if ((isset($Izpmerki)) && ($Izpmerki === "Нови/подменени са по-голяма част от прозорците в сградата (над 50%);")) { echo "selected"; } ?>
>Нови/подменени са по-голяма част от прозорците в сградата (над 50%);</option>
<option value="Нови/подменени са част от прозорците в сградата (под 50%);"
<?php if ((isset($Izpmerki)) && ($Izpmerki === "Нови/подменени са част от прозорците в сградата (под 50%);")) { echo "selected"; } ?>
>Нови/подменени са част от прозорците в сградата (под 50%);</option>
<option value="Всички външни стени са топлинно изолирани (100 % от площта);"> Всички външни стени са топлинно изолирани (100 % от площта);</option>
<option value="Част от площта на външните стени са топлинно изолирани (под 50%);">Част от площта на външните стени са топлинно изолирани (под 50%);</option>
<option value="По-голямата площ от външните стени са топлинно изолирани (над 50%);">По-голямата площ от външните стени са топлинно изолирани (над 50%);</option>
<option value="Външните стени на сутерена са топлинно изолирани;">Външните стени на сутерена са топлинно изолирани;</option>
<option value="Външните стени на таванския етаж са топлинно изолирани;">Външните стени на таванския етаж са топлинно изолирани;</option>
<option value="Покривът е топлинно изолиран;"> Покривът е топлинно изолиран;</option>
<option value="Нов/подменен е котелът/абонатната станция;">Нов/подменен е котелът/абонатната станция;</option>
<option value="Нова/ремонтирана е отоплителната инсталация;">Нова/ремонтирана е отоплителната инсталация;</option>
<option value="Нова/ремонтирана е вентилационната/ите инсталация/и;">Нова/ремонтирана е вентилационната/ите инсталация/и;</option>
<option value="Нова/ремонтирана е системата за централна климатизация;">Нова/ремонтирана е системата за централна климатизация;</option>
<option value="Въведени са мерки за контрол и регулиране на топлоподаването;">Въведени са мерки за контрол и регулиране на топлоподаването;</option>
<option value="Приложени/извършени са и други енергоспестяващи мерки.">Приложени/извършени са и други енергоспестяващи мерки.</option>            
</select><br>
</li>
<li>
<input type="checkbox" id="efectivnost2" name="merkiefectivnost[]"  onclick="select20OnlyOne(this.id); Enable20Select();" value="Не, в сградата не са изпълнявани енергоспестяващи мерки"
<?php if ((isset($merkiefectivnost)) && (in_array("Не, в сградата не са изпълнявани енергоспестяващи мерки", $merkiefectivnost))) { echo "checked"; } ?>
/>
Не, в сградата не са изпълнявани енергоспестяващи мерки
</li>
<li>
<input type="checkbox" id="efectivnost3" name="merkiefectivnost[]"  onclick="select20OnlyOne(this.id); Enable20Select();" value="Не мога да отговоря"
<?php if ((isset($merkiefectivnost)) && (in_array("Не мога да отговоря", $merkiefectivnost))) { echo "checked"; } ?>
/>
Не мога да отговоря.
</li>
</ol>
<span id="energyefferr" class="error"></span>

<ol>
<li>
<div class="grouphead">21. Има ли положена хидроизолация на пода на подземния етаж при строежа на сградата или при извършван ремонт през годините на нейната експлоатация?</div> 
<ol>
<li>
<input type="radio" name="hidroizolaciamaze" value="Да" id="dahidroizolacia" 
<?php if ((isset($hidroizolaciamaze)) && ($hidroizolaciamaze==="Да")) { echo "checked"; } ?>
/>
<label for="dahidroizolacia">Да</label><br>
</li>
<li>
<input type="radio" name="hidroizolaciamaze" value="Не" id="nehidroizolacia" 
<?php if ((isset($hidroizolaciamaze)) && ($hidroizolaciamaze==="Не")) { echo "checked"; } ?>
/>
<label for="nehidroizolacia">Не</label><br>
</li>
<li>
<input type="radio" name="hidroizolaciamaze" value="Не мога да отговоря" id="neznamhidroizolacia" 
<?php if ((isset($hidroizolaciamaze)) && ($hidroizolaciamaze==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="neznamhidroizolacia">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">23. Ако сградата е без подземен етаж има ли хидроизолация при пода на първия надземен етаж ?</div> 
<ol>
<li>
<input type="radio" name="hidroizolaciaparvi" value="Да" id="dahidroizolaciaetaj" 
<?php if ((isset($hidroizolaciaparvi)) && ($hidroizolaciaparvi==="Да")) { echo "checked"; } ?>
/>
<label for="dahidroizolaciaetaj">Да</label><br>
</li>
<li>
<input type="radio" name="hidroizolaciaparvi" value="Не" id="nehidroizolaciaetaj" 
<?php if ((isset($hidroizolaciaparvi)) && ($hidroizolaciaparvi==="Не")) { echo "checked"; } ?>
/>
<label for="nehidroizolaciaetaj">Не</label><br>
</li>
<li>
<input type="radio" name="hidroizolaciaparvi" value="Не мога да отговоря" id="neznamhidroizolaciaetaj" 
<?php if ((isset($hidroizolaciaparvi)) && ($hidroizolaciaparvi==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="neznamhidroizolaciaetaj">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<label for="energymerky">24. През коя/кои година/и са изпълнени енергоспестяващите мерки в сградата?</label>
<input type="text" class="Cyrillic" name="energymerkigodina" id="energymerky" title="Моля попълнете годините на изпълнение на енергоспестяващи мерки"    placeholder="______ г.; ______ г.; ______ г.;" onkeyup="disablecheck24()"
value="<?php if (isset($energymerkigodina)) { echo $energymerkigodina; } ?>"
/>
</li>
<li>
<input type="checkbox" id="neznamenergymerky" name="energymerkigodinacheck" onclick="disable24text()" 
<?php if (isset($energymerkigodinacheck)) { echo "checked"; } ?>
/>
Не мога да отговоря. 
</li>
</ol>
<ol>
<li>
<div class="grouphead" style="color:red;">25. Какви типове прозорци има в сградата? (Моля посочете всички видове дограма в сградата)*</div>
<ol>
<li>
<?php  $sgrtipoveprozorci=array();  ?>
<input type="checkbox" name="sgrtipoveprozorci[]" value="Дървени слепени (стари);" id="darvenistari" 
<?php if ((isset($sgrtipoveprozorci)) && (in_array("Дървени слепени (стари);", $sgrtipoveprozorci))) { echo "checked"; } ?> class="sgrtipoveprozorci"
/>
<label for="darvenistari">Дървени слепени (стари);</label>
</li>
<li>
<input type="checkbox" name="sgrtipoveprozorci[]" value="Двукатни дървени (стари);" id="dvukatnidarveni" 
<?php if ((isset($sgrtipoveprozorci)) && (in_array("Двукатни дървени (стари);", $sgrtipoveprozorci))) { echo "checked"; } ?> class="sgrtipoveprozorci"
/>
<label for="dvukatnidarveni">Двукатни дървени (стари);</label>
</li>
<li>
<input type="checkbox" name="sgrtipoveprozorci[]" value="Стъклопакет с рамка от дърво (нови);" id="staklopaketdarvo" 
<?php if ((isset($sgrtipoveprozorci)) && (in_array("Стъклопакет с рамка от дърво (нови);", $sgrtipoveprozorci))) { echo "checked"; } ?> class="sgrtipoveprozorci"
/>
<label for="staklopaketdarvo">Стъклопакет с рамка от дърво (нови);</label>
</li>
<li>
<input type="checkbox" name="sgrtipoveprozorci[]" value="Стъклопакет с алуминиев профил (нови);" id="staklopaketaluminii" 
<?php if ((isset($sgrtipoveprozorci)) && (in_array("Стъклопакет с алуминиев профил (нови);", $sgrtipoveprozorci))) { echo "checked"; } ?> class="sgrtipoveprozorci"
/>
<label for="staklopaketaluminii">Стъклопакет с алуминиев профил (нови);</label>
</li>
<li>
<input type="checkbox" name="sgrtipoveprozorci[]" value="Стъклопакет с рамка от PVC (нови);" id="staklopaketPVC" 
<?php if ((isset($sgrtipoveprozorci)) && (in_array("Стъклопакет с рамка от PVC (нови);", $sgrtipoveprozorci))) { echo "checked"; } ?> class="sgrtipoveprozorci"
/>
<label for="staklopaketPVC">Стъклопакет с рамка от PVC (нови);</label>
</li>
</ol>
</li>
</ol>
<span id="sgrtipoveprozorcierror" class="error"></span>
<ol>
<li>
<div class="grouphead">26. Има изградена обща сградна отоплителна инсталация в сградата?</div> 
<ol>
<li>
<input type="radio" name="sgrotoplitelnainst" value="Да" id="daotopinst" 
<?php if ((isset($sgrotoplitelnainst)) && ($sgrotoplitelnainst==="Да")) { echo "checked"; } ?>
/>
<label for="daotopinst">Да</label><br>
</li>
<li>
<input type="radio" name="sgrotoplitelnainst" value="Не" id="neotopinst" 
<?php if ((isset($sgrotoplitelnainst)) && ($sgrotoplitelnainst==="Не")) { echo "checked"; } ?>
/>
<label for="neotopinst">Не</label><br>
</li>
<li>
<input type="radio" name="sgrotoplitelnainst" value="Не мога да отговоря" id="neznamotopinst" 
<?php if ((isset($sgrotoplitelnainst)) && ($sgrotoplitelnainst==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="neznamotopinst">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>

<ol>
<li>
<div class="grouphead" style="color:red;">27. Какви енергийни източници се използват за отопление в сградата?*</div>
<ol>
<li>
<?php  $otoplenie=array();  ?>
<input type="checkbox" name="otoplenie[]" value="Топлофикация (централно топлоснабдяване от ТЕЦ);" id="TEC" 
<?php if ((isset($otoplenie)) && (in_array("Топлофикация (централно топлоснабдяване от ТЕЦ);", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="TEC">Топлофикация (централно топлоснабдяване от ТЕЦ);</label>
</li>
<li>
<input type="checkbox" name="otoplenie[]" value="Природен газ;" id="prirodengas" 
<?php if ((isset($otoplenie)) && (in_array("Природен газ;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="prirodengas">Природен газ;</label>
</li>
<li>
<input type="checkbox" name="otoplenie[]" value="Нафта/газьол;" id="nafta" 
<?php if ((isset($otoplenie)) && (in_array("Нафта/газьол;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="nafta">Нафта/газьол;</label>
</li>
<li>
<input type="checkbox" name="otoplenie[]" value="Въглища;" id="vaglishta" 
<?php if ((isset($otoplenie)) && (in_array("Въглища;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="vaglishta">Въглища;</label>
</li>
<li>
<input type="checkbox" name="otoplenie[]" value="Дърва;" id="darva" 
<?php if ((isset($otoplenie)) && (in_array("Дърва;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="darva">Дърва;</label>
</li>
<li>
<input type="checkbox" name="otoplenie[]" value="Пелети;" id="peleti" 
<?php if ((isset($otoplenie)) && (in_array("Пелети;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="peleti">Пелети;</label>
</li>
<li>
<input type="checkbox" name="otoplenie[]" value="Брикети;" id="briketi" 
<?php if ((isset($otoplenie)) && (in_array("Брикети;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="briketi">Брикети;</label>   </li>
<li>
<input type="checkbox" name="otoplenie[]" value="Електричество;" id="electrichestvo" 
<?php if ((isset($otoplenie)) && (in_array("Електричество;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="electrichestvo">Електричество;</label>  </li>
<li>
<input type="checkbox" name="otoplenie[]" value="Не мога да отговоря;" id="neznamenizt" 
<?php if ((isset($otoplenie)) && (in_array("Не мога да отговоря;", $otoplenie))) { echo "checked"; } ?> class="otoplenie"
/>
<label for="neznamenizt">Не мога да отговоря;</label>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<label for="drugoenergyizt">Друго</label>               
<input type="text" class="Cyrillic" name="drugoenergyizttext" id="drugoenergyizt" title="Моля попълнете енергийните източници"    placeholder="Моля посочете __________________________" onkeyup="disable27check()"

value="<?php if (isset($drugoenergyizttext)) { echo $drugoenergyizttext; } ?>"
/>
</li>           
</ol>
<span id="otoplenieerror" class="error"></span>
<ol>                
<li>           
<div class="grouphead">28. Има ли изградена обща сградна механична система/и за вентилация в сградата?</div> 
<ol>
<li>
<input type="radio" name="mehanichnaventilacia" value="Да" id="dasobinst" 
<?php if ((isset($mehanichnaventilacia)) && ($mehanichnaventilacia==="Да")) { echo "checked"; } ?>
/>
<label for="dasobinst">Да</label><br>
</li>
<li>
<input type="radio" name="mehanichnaventilacia" value="Не" id="nesobinst" 
<?php if ((isset($mehanichnaventilacia)) && ($mehanichnaventilacia==="Не")) { echo "checked"; } ?>
/>
<label for="nesobinst">Не</label><br>
</li>
<li>
<input type="radio" name="mehanichnaventilacia" value="Не мога да отговоря" id="neznamsobinst" 
<?php if ((isset($mehanichnaventilacia)) && ($mehanichnaventilacia==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="neznamsobinst">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol> 
<li>
<div class="grouphead">29. Работи ли вентилационната система в сградата, ако има изградена такава? </div> 
<ol>
<li>
<input type="radio" name="rabotanaventsys" value="Да - по-малко от 4 часа на ден;" id="da>4chasa" 
<?php if ((isset($rabotanaventsys)) && ($rabotanaventsys==="Да - по-малко от 4 часа на ден;")) { echo "checked"; } ?>
/>
<label for="da>4chasa">Да - по-малко от 4 часа на ден;</label><br>
</li>
<li>
<input type="radio" name="rabotanaventsys" value="Да - повече от 4 часа на ден;" id="da<4chasa" 
<?php if ((isset($rabotanaventsys)) && ($rabotanaventsys==="Да - повече от 4 часа на ден;")) { echo "checked"; } ?>
/>
<label for="da<4chasa">Да - повече от 4 часа на ден;</label><br>
</li>
<li>
<input type="radio" name="rabotanaventsys" value="Не, вентилационната система не работи и не се използва по предназначение;" id="neventsys" 
<?php if ((isset($rabotanaventsys)) && ($rabotanaventsys==="Не, вентилационната система не работи и не се използва по предназначение;")) { echo "checked"; } ?>
/>
<label for="neventsys">Не, вентилационната система не работи и не се използва по предназначение;</label><br>
</li>
<li>
<input type="radio" name="rabotanaventsys" value="Не мога да отговоря" id="neznamventsys" 
<?php if ((isset($rabotanaventsys)) && ($rabotanaventsys==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="neznamventsys">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">30. Има в сградата обща сградна система за охлаждане?</div> 
<ol>
<li>
<input type="radio" name="sgrohladitelnasys" value="Да" id="daohlsys" 
<?php if ((isset($sgrohladitelnasys)) && ($sgrohladitelnasys==="Да")) { echo "checked"; } ?>
/>
<label for="daohlsys">Да</label><br>
</li>
<li>
<input type="radio" name="sgrohladitelnasys" value="Не" id="neohlsys" 
<?php if ((isset($sgrohladitelnasys)) && ($sgrohladitelnasys==="Не")) { echo "checked"; } ?>
/>
<label for="neohlsys">Не</label><br>
</li>
<li>
<input type="radio" name="sgrohladitelnasys" value="Не мога да отговоря" id="neznamohlsys" 
<?php if ((isset($sgrohladitelnasys)) && ($sgrohladitelnasys==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="neznamohlsys">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">31. Има ли сградата централна канализационна система?</div> 
<ol>
<li>
<input type="radio" name="kanalsys" value="Да, сградата е свързана с централна канализация;" id="dakanal" 
<?php if ((isset($kanalsys)) && ($kanalsys==="Да, сградата е свързана с централна канализация;")) { echo "checked"; } ?>
/>
<label for="dakanal">Да, сградата е свързана с централна канализация;</label><br>
</li>
<li>
<input type="radio" name="kanalsys" value="Не, използва се септична яма;" id="nekanal" 
<?php if ((isset($kanalsys)) && ($kanalsys==="Не, използва се септична яма;")) { echo "checked"; } ?>
/>
<label for="nekanal">Не, използва се септична яма;</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead" style="color:red;">32. Как сградата се снабдява с питейна вода?*</div> 
<ol>
<li>
<input type="radio" name="piteinavoda" id="vodoprovod" value="От централен водопровод;"
<?php if ((isset($piteinavoda)) && ($piteinavoda==="От централен водопровод;")) { echo "checked"; } ?>
/>
<label for="vodoprovod">От централен водопровод;</label><br>
</li>
<li>
<input type="radio" name="piteinavoda" value="От собствен източник;" id="sobsizt" 
<?php if ((isset($piteinavoda)) && ($piteinavoda==="От собствен източник;")) { echo "checked"; } ?>
/>
<label for="sobsizt">От собствен източник;</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<label for="piteinavodatxt">По друг начин</label>      
<input type="text" class="Cyrillic" name="piteinavodatx" id="piteinavodatxt" title="Моля попълнете как сградата се снабдява с питейна вода"  onkeyup="disable32radio();"  placeholder="Моля посочете__________________" 
value="<?php if (isset($piteinavodatx)) { echo $piteinavodatx; } ?>"
/>
</li>
</ol>
<span id="piteinavodatext" class="error"></span>
</fieldset>
</div> 
<h3>III. ИНФОРМАЦИЯ ЗА ОБИТАВАНОТО ПРОСТРАНСТВО (КОНКРЕТЕН ИМОТ) И ОБИТАТЕЛИТЕ</h3>
<div>
<fieldset id="formpart3" title="III. ИНФОРМАЦИЯ ЗА ОБИТАВАНОТО ПРОСТРАНСТВО (КОНКРЕТЕН ИМОТ) И ОБИТАТЕЛИТЕ" >
<legend>III. ИНФОРМАЦИЯ ЗА ОБИТАВАНОТО ПРОСТРАНСТВО (КОНКРЕТЕН ИМОТ) И ОБИТАТЕЛИТЕ 
</legend><br>
<ol>
<li>
<div class="grouphead">33. Обитаваното пространство (имотът) е:</div> 
<ol>
<li>
<input type="radio" name="vidnaimota" value="Жилище, разположено на етаж от къща" id="kashta" 
<?php if ((isset($vidnaimota)) && ($vidnaimota==="Жилище, разположено на етаж от къща")) { echo "checked"; } ?>
/>
<label for="kashta">Жилище, разположено на етаж от къща</label><br>
</li>
<li>
<input type="radio" name="vidnaimota" value="Апартамент (жилище) в многофамилна жилищна сграда" id="apart" 
<?php if ((isset($vidnaimota)) && ($vidnaimota==="Апартамент (жилище) в многофамилна жилищна сграда")) { echo "checked"; } ?>
/>
<label for="apart">Апартамент (жилище) в многофамилна жилищна сграда</label><br>
</li>
<li>
<input type="radio" name="vidnaimota" value="Помещения за нежилищни нужди по функционалното предназначение на сградата (при сгради с нежилищно предназначение)" id="nejil" 
<?php if ((isset($vidnaimota)) && ($vidnaimota==="Помещения за нежилищни нужди по функционалното предназначение на сградата (при сгради с нежилищно предназначение)")) { echo "checked"; } ?>
/>
<label for="nejil">Помещения за нежилищни нужди по функционалното предназначение на сградата (при сгради с нежилищно предназначение) 
</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<label for="godobitavane">34. От коя година обитавате сградата?</label>
<input type="text" class="Cyrillic" name="godinanaobitavane" id="godobitavane" 
title="Моля попълнете годината на обитаване на сградата"    placeholder="__________________г." 
value="<?php if (isset($godinanaobitavane)) { echo $godinanaobitavane; } ?>" />
</li>
</ol>
<ol>
<li>
<div class="grouphead" style="color:red;">35. На кой етаж се намират обитаваните помещения на имота?*</div>
<ol>
<li>
  <?php  $etajpomeshtenia=array();  ?>
<input type="checkbox" name="etajpomeshtenia[]" value="На подземния етаж" id="podzemen" 
<?php if ((isset($etajpomeshtenia)) && (in_array("На подземния етаж", $etajpomeshtenia))) { echo "checked"; } ?>
/>
<label for="podzemen">На подземния етаж</label>
</li>
<li>
<input type="checkbox" name="etajpomeshtenia[]" value="На първия надземен етаж" id="parvi" 
<?php if ((isset($etajpomeshtenia)) && (in_array("На първия надземен етаж", $etajpomeshtenia))) { echo "checked"; } ?>
/>
<label for="parvi">На първия надземен етаж</label>
</li>
<li>
<input type="checkbox" name="etajpomeshtenia[]" value="На втория надземен етаж" id="vtori"
<?php if ((isset($etajpomeshtenia)) && (in_array("На втория надземен етаж", $etajpomeshtenia))) { echo "checked"; } ?>
/>
<label for="vtori">На втория надземен етаж</label>
</li>
<li>
<input type="checkbox" name="etajpomeshtenia[]" value="На третия надземен етаж" id="treti" 
<?php if ((isset($etajpomeshtenia)) && (in_array("На третия надземен етаж", $etajpomeshtenia))) { echo "checked"; } ?>
/>
<label for="treti">На третия надземен етаж</label>
</li>
<li>
<input type="checkbox" name="etajpomeshtenia[]" value="На етаж над третия надземен" id="nadtreti" 
<?php if ((isset($etajpomeshtenia)) && (in_array("На етаж над третия надземен", $etajpomeshtenia))) { echo "checked"; } ?>
/>
<label for="nadtreti">На етаж над третия надземен</label>
</li>
</ol>
</li>
</ol>
<ol>
<li>                    
<label for="etajnaobitavane">Друго</label>
<input type="text" class="Cyrillic" name="etajobitavane" id="etajnaobitavane" title="Моля попълнете етажа"    placeholder="Моля посочете:__________________" onkeyup="disable35check()"
value="<?php if (isset($etajobitavane)) { echo $etajobitavane; } ?>"
/>
</li>   
</ol>
<span id="etajpomeshteniaerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">36. Какви подови настилки има в имота? Моля посочете всички видове*</div>
<ol>
<li>
<?php  $nastilki=array();  ?>
<input type="checkbox" name="nastilki[]" value="Теракот;" id="teracot" 
<?php if ((isset($nastilki)) && (in_array("Теракот;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="teracot">Теракот;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Паркет от дърво;" id="parket" 
<?php if ((isset($nastilki)) && (in_array("Паркет от дърво;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="parket">Паркет от дърво;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Балатум;" id="balatum" 
<?php if ((isset($nastilki)) && (in_array("Балатум;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="balatum">Балатум; </label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Дюшеме;" id="dusheme" 
<?php if ((isset($nastilki)) && (in_array("Дюшеме;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="dusheme">Дюшеме;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Гранитогрес;" id="granitogres" 
<?php if ((isset($nastilki)) && (in_array("Гранитогрес;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="granitogres">Гранитогрес;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Ламиниран паркет;" id="laminiranparket"
<?php if ((isset($nastilki)) && (in_array("Ламиниран паркет;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="laminiranparket">Ламиниран паркет;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Мокет;" id="moket" 
<?php if ((isset($nastilki)) && (in_array("Мокет;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="moket">Мокет;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Саморазливна подова настилка;" id="samorazlivna" 
<?php if ((isset($nastilki)) && (in_array("Саморазливна подова настилка;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="samorazlivna">Саморазливна подова настилка;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Винилова настилка;" id="vinilova" 
<?php if ((isset($nastilki)) && (in_array("Винилова настилка;", $nastilki))) { echo "checked"; } ?> 
/>
<label for="vinilova"> Винилова настилка; </label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Без подова настилка;" id="beznastilka"<?php if ((isset($nastilki)) && (in_array("Без подова настилка;", $nastilki))) { echo "checked"; } ?>  
/>
<label for="beznastilka">Без подова настилка;</label>
</li>
<li>
<input type="checkbox" name="nastilki[]" value="Не мога да отговоря;" id="neznamnastilka" 
<?php if ((isset($nastilki)) && (in_array("Не мога да отговоря;", $nastilki))) { echo "checked"; } ?>  
/>
<label for="neznamnastilka">Не мога да отговоря;</label><br>
</li>  
</ol>
</li>   
</ol>
<ol>
<li>                
<label for="drugvid">Друг вид</label>
<input type="text" class="Cyrillic" name="drugvidnastilkitext" id="drugvid" title="Моля попълнете подовите настилки"    placeholder="Моля посочете _____________________________" onkeyup="disable36check()" 
value="<?php if (isset($drugvidnastilkitext)) { echo $drugvidnastilkitext; } ?>"
/>
</li>   
</ol>
<span id="nastilkaerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">37. Колко човека обитават пространството на имота, заедно с Вас?*</div>
<ol>
<li>
<?php  $broihora=array();  ?>
<input type="checkbox" name="broihora[]" value="Аз + един съжител;" id="sagitel" class="broi" 
<?php if ((isset($broihora)) && (in_array("Аз + един съжител;", $broihora))) { echo "checked"; } ?>  
/>
<label for="sagitel">Аз + един съжител;</label>
</li>
<li>
<input type="checkbox" name="broihora[]" value="Аз + двама съжители;" id="sagitel" class="broi"  
<?php if ((isset($broihora)) && (in_array("Аз + двама съжители;", $broihora))) { echo "checked"; } ?> 
/>
<label for="sagitel">Аз + двама съжители;</label>
</li>
<li>
<input type="checkbox" name="broihora[]" value="Аз + трима съжители;" id="sagitel" class="broi"  
<?php if ((isset($broihora)) && (in_array("Аз + трима съжители;", $broihora))) { echo "checked"; } ?> 
/>
<label for="sagitel">Аз + трима съжители;</label>
</li>
<li>
<input type="checkbox" name="broihora[]" value="Аз + четирима съжители;" id="sagitel" class="broi"  
<?php if ((isset($broihora)) && (in_array("Аз + четирима съжители;", $broihora))) { echo "checked"; } ?> 
/>
<label for="sagitel">Аз + четирима съжители;</label>
</li>
<li>
<input type="checkbox" name="broihora[]" value="Аз + петима съжители;" id="sagitel" class="broi"  
<?php if ((isset($broihora)) && (in_array("Аз + петима съжители;", $broihora))) { echo "checked"; } ?> 
/>
<label for="sagitel">Аз + петима съжители;</label><br>
</li>
</ol>
</li>           
</ol>
<script>
$(document).ready(function(){
    $('.broi').click(function() {
        $('.broi').not(this).prop('checked', false);
    });
});
</script>



<span id="broihoraerror" class="error"></span>
<ol>
<li>        
<label for="broihoratext">Моля посочете брой хора</label>
<input type="text" class="Cyrillic" name="broihoravimotatext" id="broihoratext" title="Моля попълнете брой хора"    placeholder="Аз + ________________ брой съжители. Моля посочете;" onkeyup = "disable37check()"
value="<?php if (isset($broihoravimotatext)) { echo $broihoravimotatext; } ?>"
/>
</li>
<li>
<label for="pod18g">38. Колко от обитателите на имота са под 18 годишна възраст?</label>
<input type="text" name="obitateliundereighteen" id="pod18g" title="Моля попълнете брой обитатели под 18 год."    placeholder="Брой: _______________ ;" value="<?php if (isset($obitateliundereighteen)) { echo $obitateliundereighteen; } ?>" 
/> 
</li>       
</ol>
<ol>
<li>
<div class="grouphead" style="color:red;">39. Колко време средно-дневно хората престояват в обитаваното пространство (в помещенията)?*</div>
<ol>
<li>
<input type="radio" name="srednodnevno" value="1 час" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="1 час")) { echo "checked"; } ?>
/>
<label for="chasove">1 час</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="2 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="2 часа")) { echo "checked"; } ?>
/>
<label for="chasove">2 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="3 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="3 часа")) { echo "checked"; } ?>
/>
<label for="chasove">3 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="4 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="4 часа")) { echo "checked"; } ?>
/>
<label for="chasove">4 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="5 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="5 часа")) { echo "checked"; } ?>
/>
<label for="chasove">5 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="6 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="6 часа")) { echo "checked"; } ?>
/>
<label for="chasove">6 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="7 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="7 часа")) { echo "checked"; } ?>
/>
<label for="chasove">7 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="8 часа" id="chasove"  
<?php if ((isset($srednodnevno)) && ($srednodnevno==="8 часа")) { echo "checked"; } ?>
/>
<label for="osemchasa">8 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="9 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="9 часа")) { echo "checked"; } ?>
/>
<label for="chasove">9 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="10 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="10 часа")) { echo "checked"; } ?>
/>
<label for="chasove">10 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="11 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="11 часа")) { echo "checked"; } ?>
/>
<label for="chasove">11 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="12 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="12 часа")) { echo "checked"; } ?>
/>
<label for="chasove">12 часа</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="от 12 до 14 ч" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="от 12 до 14 ч")) { echo "checked"; } ?>
/>
<label for="chasove">от 12 до 14 ч</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="от 14 до 18 ч" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="от 14 до 18 ч")) { echo "checked"; } ?>
/>
<label for="chasove"> от 14 до 18 ч</label>
</li>
<li>
<input type="radio" name="srednodnevno" value="24 часа" id="chasove" 
<?php if ((isset($srednodnevno)) && ($srednodnevno==="24 часа")) { echo "checked"; } ?>
/>
<label for="chasove">24 часа</label>
</li>
</ol>
</li>
</ol>
<span id="chasoveerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">40. Какъв е завършващият слой на стените на помещенията от вътре?
(Моля посочете всички от възможните отговори.)*</div>
<ol>
<li>
<?php  $sloinasteni=array();  ?>
<input type="checkbox" name="sloinasteni[]" value="Латекс върху гипсова шпакловка, положена над варо-циментова мазилка;" id="lateksgips" 
<?php if ((isset($sloinasteni)) && (in_array("Латекс върху гипсова шпакловка, положена над варо-циментова мазилка;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="lateksgips">Латекс върху гипсова шпакловка, положена над варо-циментова мазилка;</label>
</li>
<li>
<input type="checkbox" name="sloinasteni[]" value="Латекс върху варо-циментова мазилка;" id="lateksciment" 
<?php if ((isset($sloinasteni)) && (in_array("Латекс върху варо-циментова мазилка;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="lateksciment">Латекс върху варо-циментова мазилка;</label>
</li>
<li>
<input type="checkbox" name="sloinasteni[]" value="Тапети върху варо-циментова мазилка;" id="tapeti" 
<?php if ((isset($sloinasteni)) && (in_array("Тапети върху варо-циментова мазилка;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="tapeti">Тапети върху варо-циментова мазилка;</label>
</li>
<li>
<input type="checkbox" name="sloinasteni[]" value="Декоративна мазилка по съвременна технология;" id="mazilka" 
<?php if ((isset($sloinasteni)) && (in_array("Декоративна мазилка по съвременна технология;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="mazilka">Декоративна мазилка по съвременна технология;</label>
</li>
<li>
<input type="checkbox" name="sloinasteni[]" value="Латекс върху гипсокартон;" id="gipskarton" 
<?php if ((isset($sloinasteni)) && (in_array("Латекс върху гипсокартон;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="gipskarton">Латекс върху гипсокартон;</label>
</li>
<li>
<input type="checkbox" name="sloinasteni[]" value="Латекс, тапет или друго върху вътрешна топлинна изолация;" id="izolacia" 
<?php if ((isset($sloinasteni)) && (in_array("Латекс, тапет или друго върху вътрешна топлинна изолация;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="izolacia">Латекс, тапет или друго върху вътрешна топлинна изолация;</label>
</li>
<li>
<input type="checkbox" name="sloinasteni[]" value="Дървена ламперия;" id="lamperia" 
<?php if ((isset($sloinasteni)) && (in_array("Дървена ламперия;", $sloinasteni))) { echo "checked"; } ?> 
/>
<label for="lamperia">Дървена ламперия;</label>
</li>
</ol>
</li> 
</ol>
<ol>
<li> 
<label for="drugsloi">Друго</label>
<input type="text" class="Cyrillic" name="sloinastenitext" id="drugsloi" title="Моля попълнете какъв е завършващия слой"    placeholder="Моля посочете ____________________" onkeyup="disable40check()"
value="<?php if (isset($sloinastenitext)) { echo $sloinastenitext; } ?>" 
/>
</li> 
</ol>
<span id="sloistenierror" class="error"></span>
<ol>
<li>
<div class="grouphead">41. Какви са прозорците в обитаваното пространство?</div>
<ol>
<li>
<?php  $prozorcivid=array();  ?>
<input type="checkbox" name="prozorcivid[]" value=" Дървени слепени (стари);" id="darvenistari1.0" 
<?php if ((isset($prozorcivid)) && (in_array("Дървени слепени (стари);", $prozorcivid))) { echo "checked"; } ?>
/>
<label for="darvenistari1.0">Дървени слепени (стари);</label>
</li>
<li>
<input type="checkbox" name="prozorcivid[]" value="Двукатни дървени (стари);" id="dvukatnidarveni1.0" 
<?php if ((isset($prozorcivid)) && (in_array("Двукатни дървени (стари);", $prozorcivid))) { echo "checked"; } ?>
/>
<label for="dvukatnidarveni1.0">Двукатни дървени (стари);</label>
</li>
<li>
<input type="checkbox" name="prozorcivid[]" value="Стъклопакет с рамка от дърво (нови)" id="staklopaket" 
<?php if ((isset($prozorcivid)) && (in_array("Стъклопакет с рамка от дърво (нови)", $prozorcivid))) { echo "checked"; } ?>
/>
<label for="staklopaket">Стъклопакет с рамка от дърво (нови)</label>
</li>
<li>
<input type="checkbox" name="prozorcivid[]" value="Стъклопакет с алуминиев профил (нови);" id="aluminievprofil" 
<?php if ((isset($prozorcivid)) && (in_array("Стъклопакет с алуминиев профил (нови);", $prozorcivid))) { echo "checked"; } ?>
/>
<label for="aluminievprofil">Стъклопакет с алуминиев профил (нови);</label>
</li>
<li>
<input type="checkbox" name="prozorcivid[]" value="Стъклопакет с рамка от PVC (нови);" id="staklopaketPVC1.0" 
<?php if ((isset($prozorcivid)) && (in_array("Стъклопакет с рамка от PVC (нови);", $prozorcivid))) { echo "checked"; } ?>
/>
<label for="staklopaketPVC1.0">Стъклопакет с рамка от PVC (нови);</label>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">42. Има ли топлинна изолация на външните стени на обитаваното пространство?</div> 
<ol>
<li>
<input type="radio" name="vanshnaizolacia" value="Да" id="izolociada" onclick="Enable43Answer();" 
<?php if ((isset($vanshnaizolacia)) && ($vanshnaizolacia==="Да")) { echo "checked"; } ?>
/>
<label for="izolociada">Да</label><br>
</li>
<li>
<input type="radio" name="vanshnaizolacia" value="Не" id="izolociane" onclick="Enable43Answer();"
<?php if ((isset($vanshnaizolacia)) && ($vanshnaizolacia==="Не")) { echo "checked"; } ?>
/>
<label for="izolociane">Не</label><br>
</li>
<li>
<input type="radio" name="vanshnaizolacia" id="izolocianeznam" onclick="Enable43Answer();" value="Не мога да отговоря"
<?php if ((isset($vanshnaizolacia)) && ($vanshnaizolacia==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="izolocianeznam">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">43. Какъв вид е топлинната изолация на обитаваното пространство?</div>
<ol>
<li>
<?php  $vidtoplizolacia=array();  ?>
<input type="checkbox" name="vidtoplizolacia[]" value="EPS (експандиран пенополистирен);" id="EPS" onclick="enableText43Check(this.id);" disabled="disabled" 
<?php if ((isset($vidtoplizolacia)) && (in_array("EPS (експандиран пенополистирен);", $vidtoplizolacia))) { echo "checked"; } ?>
/>
<label for="expand">EPS (експандиран пенополистирен);</label>
<input type="text" name="EPSpenopolisteren" id="expand" title="Моля попълнете см на топлинната изолация"    placeholder="с дебелина ____см;" 
value="<?php if (isset($EPSpenopolisteren)) { echo $EPSpenopolisteren; } ?>"
/><br>
</li>
<li>
<input type="checkbox" name="vidtoplizolacia[]" value="XPS (екструдиран пенополистирен);" id="XPS" onclick="enableText43Check(this.id);" disabled="disabled"
<?php if ((isset($vidtoplizolacia)) && (in_array("XPS (екструдиран пенополистирен);", $vidtoplizolacia))) { echo "checked"; } ?>
/>
<label for="extrud">XPS (екструдиран пенополистирен);</label>
<input type="text" name="XPSpenopolisteren" id="extrud" title="Моля попълнете см на топлинната изолация"    placeholder="с дебелина ____см;" 
value="<?php if (isset($XPSpenopolisteren)) { echo $XPSpenopolisteren; } ?>"
/><br>
</li>
<li>
<input type="checkbox" name="vidtoplizolacia[]" value="Минерална вата;" id="mineralnavata" onclick="enableText43Check(this.id);" disabled="disabled"
<?php if ((isset($vidtoplizolacia)) && (in_array("Минерална вата;", $vidtoplizolacia))) { echo "checked"; } ?>
/>
<label for="minvat">Минерална вата;</label>
<input type="text" name="Mineralna" id="minvat" title="Моля попълнете см на топлинната изолация"    placeholder="с дебелина ____см;" 
value="<?php if (isset($Mineralna)) { echo $Mineralna; } ?>"
/><br>
</li>
<li>
<input type="checkbox" name="vidtoplizolacia[]" value="Не мога да отговоря;" id="neznamtoplizo" onclick="enableText43Check(this.id);" disabled="disabled"
<?php if ((isset($vidtoplizolacia)) && (in_array("Не мога да отговоря;", $vidtoplizolacia))) { echo "checked"; } ?>
/>
<label for="neznamtoplizo">Не мога да отговоря;</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<label for="drugotoplizo">Друго</label>
<input type="text" class="Cyrillic" name="drugoizolaciatext" id="drugotoplizo" title="Моля попълнете вида на топлинната изолация"    placeholder="Посочете:  ________________с дебелина ______________сантиметра;" onkeyup="disableCheck43();" disabled="disabled"
value="<?php if (isset($drugoizolaciatext)) { echo $drugoizolaciatext; } ?>"
/>
</li>
</ol>
<ol>
<li>
<div class="grouphead">44. Ако обитаваното пространство е на последния етаж от сградата има ли топлинна изолация на покрива? 
</div> 
<ol>
<li>
<input type="radio" name="izolaciapokriv" value="Да" id="izolaciapokda" 
<?php if ((isset($izolaciapokriv)) && ($izolaciapokriv==="Да")) { echo "checked"; } ?>
/>
<label for="izolaciapokda">Да</label><br>
</li>
<li>
<input type="radio" name="izolaciapokriv" value="Не" id="izolaciapokne" 
<?php if ((isset($izolaciapokriv)) && ($izolaciapokriv==="Не")) { echo "checked"; } ?>
/>
<label for="izolaciapokne">Не</label><br>
</li>
<li>
<input type="radio" name="izolaciapokriv" value="Не мога да отговоря" id="izolaciapokneznam" 
<?php if ((isset($izolaciapokriv)) && ($izolaciapokriv==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="izolaciapokneznam">Не мога да отговоря</label><br>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">45. Колко често проветрявате помещенията, които обитавате?</div>
<ol>
<li>
<input type="radio" name="vremeprovetriavane" value="Всеки ден най-малко веднъж на ден;" id="edinpat" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Всеки ден най-малко веднъж на ден;")) { echo "checked"; } ?> />
  <label for="edinpat">Всеки ден най-малко веднъж на ден;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="Всеки ден най-малко два пъти на ден;" id="dvapati" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Всеки ден най-малко два пъти на ден;")) { echo "checked"; } ?> />
<label for="dvapati">Всеки ден най-малко два пъти на ден;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="През ден най-малко веднъж до два пъти дневно;" id="prezden" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="През ден най-малко веднъж до два пъти дневно;")) { echo "checked"; } ?>
/>
<label for="prezden">През ден най-малко веднъж до два пъти дневно;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="Веднъж на всеки два дни;" id="nadvadni" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Веднъж на всеки два дни;")) { echo "checked"; } ?>
/>
<label for="nadvadni">Веднъж на всеки два дни;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="Веднъж седмично;" id="sedmichno" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Веднъж седмично;")) { echo "checked"; } ?>
/>
<label for="sedmichno">Веднъж седмично;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="Веднъж до два пъти месечно;" id="mesechno" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Веднъж до два пъти месечно;")) { echo "checked"; } ?>
/>
<label for="mesechno">Веднъж до два пъти месечно;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="Не проветрявам;" id="neprovetriavam" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Не проветрявам;")) { echo "checked"; } ?>
/>
<label for="neprovetriavam">Не проветрявам;</label>
</li>
<li>
<input type="radio" name="vremeprovetriavane" value="Винаги има отворен прозорец;" id="vinagi" 
<?php if ((isset($vremeprovetriavane)) && ($vremeprovetriavane==="Винаги има отворен прозорец;")) { echo "checked"; } ?>
/>
<label for="vinagi">Винаги има отворен прозорец;</label>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<div class="grouphead">46. Има ли пукнатини и отвори в пода, тавана или стените на подземния етаж под Вашето обитаемо пространство, за които Ви е известно, че са неуплътнени? 
</div> 
<ol>
<li>
<input type="radio" name="neuplatnenipuknatini" value="Да" id="puknatinida" 
<?php if ((isset($neuplatnenipuknatini)) && ($neuplatnenipuknatini==="Да")) { echo "checked"; } ?>
/>
<label for="puknatinida">Да</label><br>
</li>
<li>
<input type="radio" name="neuplatnenipuknatini" value="Не" id="puknatinine" 
<?php if ((isset($neuplatnenipuknatini)) && ($neuplatnenipuknatini==="Не")) { echo "checked"; } ?>
/>
<label for="puknatinine">Не</label><br>
</li>
<li>
<input type="radio" name="neuplatnenipuknatini" id="puknatinineznam"  value="Не мога да отговоря"
<?php if ((isset($neuplatnenipuknatini)) && ($neuplatnenipuknatini==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="puknatinineznam">Не мога да отговоря</label><br>
</li>
</ol>
</li>    
</ol>
<ol>
<li>
<div class="grouphead" style="color:red;">47. Известно ли Ви е дали в сградата са изпълнявани защитни мерки за ограничаване проникването на радон?*</div> 
<ol>
<li>
<input type="radio" name="zashtitnimerki" value="Да" id="merkida"  
<?php if ((isset($zashtitnimerki)) && ($zashtitnimerki==="Да")) { echo "checked"; } ?>
/>
<label for="merkida">Да</label><br>
</li>
<li>
<input type="radio" name="zashtitnimerki" value="Не" id="merkine"  
<?php if ((isset($zashtitnimerki)) && ($zashtitnimerki==="Не")) { echo "checked"; } ?>
/>
<label for="merkine">Не</label><br>  
</li>
<li>
<input type="radio" name="zashtitnimerki" value="Не мога да отговоря" id="merkineznam" <?php if ((isset($zashtitnimerki)) && ($zashtitnimerki==="Не мога да отговоря")) { echo "checked"; } ?>
/>
<label for="merkineznam">Не мога да отговоря</label><br>
</li>
</ol>
</li> 
</ol>
<ol>
<li> 
<label for="kakvimerki">Ако отговорите с „да“ моля посочете какви:</label>
<textarea name="kakvimerkitext" id="kakvimerki">
 <?php if (isset($kakvimerkitext)) { echo $kakvimerkitext; } ?>   
</textarea>
</li> 
</ol>
<span id="zashtitaradonerror" class="error"></span>
<span id="zashtitaradonerrorda" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">48. Кое по ред е извършваното измерване за радон във вашата сграда?*</div>
<ol>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Първо;" id="parvo" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Първо;")) { echo "checked"; } ?>
/>
<label for="parvo">Първо;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Второ;" id="vtoro" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Второ;")) { echo "checked"; } ?>
/>
<label for="vtoro">Второ;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Трето;" id="treto" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Трето;")) { echo "checked"; } ?>
/>
<label for="treto">Трето;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Четвърто;" id="chetvarto" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Четвърто;")) { echo "checked"; } ?>
/>
<label for="chetvarto">Четвърто;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Пето;" id="peto" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Пето;")) { echo "checked"; } ?>
/>
<label for="peto">Пето;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Шесто;" id="shesto" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Шесто;")) { echo "checked"; } ?>
/>
<label for="shesto">Шесто;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Седмо;" id="sedmo" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Седмо;")) { echo "checked"; } ?>
/>
<label for="sedmo">Седмо;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Осмо;" id="osmo" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Осмо;")) { echo "checked"; } ?>
/>
<label for="osmo">Осмо;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Девето;" id="deveto" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Девето;")) { echo "checked"; } ?>
/>
<label for="deveto">Девето;</label>
</li>
<li>
<input type="radio" name="nomerizmervanenaradon" value="Десето;" id="deseto" 
<?php if ((isset($nomerizmervanenaradon)) && ($nomerizmervanenaradon==="Десето;")) { echo "checked"; } ?>
/>
<label for="deseto">Десето;</label>
</li>
</ol>
</li>
</ol>
<ol>
<li>
<label for="drugoporedizm">Друго</label>
<input type="text" class="Cyrillic" name="nomerizmervanenaradontext" id="drugoporedizm" title="Моля попълнете кое по ред измерване е това"    placeholder="Посочете:  _____________________________;" onkeyup="disable48check()"
value="<?php if (isset($nomerizmervanenaradontext)) { echo $nomerizmervanenaradontext; } ?>"
/>
</li>
</ol>
<span id="nomerizmervaneerror" class="error"></span>
<ol>
<li>
<div class="grouphead" style="color:red;">49. В случай на необходимост смятате ли за важно да изпълните предписаните мерки за защита от облъчване на обитателите с радон?*
</div> 
<ol>
<li>
<input type="radio" name="izpalneniemerki" value="Задължително и неотложно;" id="zadaljitelno" 
<?php if ((isset($izpalneniemerki)) && ($izpalneniemerki==="Задължително и неотложно;")) { echo "checked"; } ?>
/>
<label for="zadaljitelno">Задължително и неотложно;</label><br>
</li>
<li>
<input type="radio" name="izpalneniemerki" value="С висока спешност;" id="visokaspeshnost" 
<?php if ((isset($izpalneniemerki)) && ($izpalneniemerki==="С висока спешност;")) { echo "checked"; } ?>
/>
<label for="visokaspeshnost">С висока спешност;</label><br>
</li>
<li>
<input type="radio" name="izpalneniemerki" value="С ниска спешност;" id="niskaspeshnost" 
<?php if ((isset($izpalneniemerki)) && ($izpalneniemerki==="С ниска спешност;")) { echo "checked"; } ?>
/>
<label for="niskaspeshnost">С ниска спешност;</label><br>
</li>
<li>
<input type="radio" name="izpalneniemerki" value="Не считам за необходимо;" id="neeneobhodimo" 
<?php if ((isset($izpalneniemerki)) && ($izpalneniemerki==="Не считам за необходимо;")) { echo "checked"; } ?>
/>
<label for="neeneobhodimo">Не считам за необходимо;</label><br>
</li>
<li>
<input type="radio" name="izpalneniemerki" value="Не мога да преценя;" id="nemogadaprecenia" 
<?php if ((isset($izpalneniemerki)) && ($izpalneniemerki==="Не мога да преценя;")) { echo "checked"; } ?>
/>
<label for="nemogadaprecenia">Не мога да преценя;</label><br>
</li>
</ol>
</li>
</ol>
<span id="izpalnenieerror" class="error"></span>
</fieldset>
</div>
<h3>IV. ДАННИ ЗА ЛИЦЕТО, ПОПЪЛНИЛО АНКЕТАТА</h3>
<div>
<fieldset id="formpart4" title="IV. ДАННИ ЗА ЛИЦЕТО, ПОПЪЛНИЛО АНКЕТАТА">
<legend> IV. ДАННИ ЗА ЛИЦЕТО, ПОПЪЛНИЛО АНКЕТАТА 
</legend><br>

<ol>
<li>
<label for="ime">Име, презиме и фамилия:</label>
<input type="text" name="TriteImena" id="ime" title="Моля попълнете трите си имена"   placeholder="Трите имена"  
value="<?php if (isset($TriteImena)) { echo $TriteImena; } ?>"
/>
</li>
<li>
<span id="tel" class="poiasnenie"></span>
<label for="telephon" style="color:red;">Телефон за контакт:*</label>
<input type="text" name="telnomer" id="telephon" title="Моля попълнете телефон"   placeholder="Телефонен номер"
value="<?php if (isset($telnomer)) { echo $telnomer; } ?>"
/>
</li>
<span id="telerror" class="error"></span>
<li>
<label for="elposhta" style="color:red;">Електронна поща за кореспонденция:<br>
(При изпращане на попълнената анкетна карта ще получите копие от нея на посочения email адрес)*

</label>
<input type="text" name="Electronnaposhta" id="elposhta" title="Моля попълнете email"   placeholder="email"
value="<?php if (isset($Electronnaposhta)) { echo $Electronnaposhta; } ?>"
/>
</li>
<span id="emailerror" class="error"></span>
<li>
<label for="dlajnost">Длъжност (ако е приложимо):</label>
<input type="text" name="Dlajnost" id="dlajnost" title="Моля попълнете длъжност"   placeholder="Длъжност"
value="<?php if (isset($Dlajnost)) { echo $Dlajnost; } ?>"
/>

</li>
</ol>

<ol>
<li>                
<label for="komentari">Бележки и коментари по попълнената анкетна карта</label>
<textarea name="Belejki" id="komentari"  >
 <?php if (isset($Belejki)) { echo $Belejki; } ?> 
</textarea>
</li>
</ol>

<button id="B1" type="submit" name="action"  value="submit" >Изпрати</button>
</fieldset>
</div>
</div>

</form>
<div>

<span id="oblerror" class="downerror"></span>
<span id="obshterror" class="downerror"></span>
<span id="graderroriseloerror" class="downerror"></span>
<span id="miastoerror" class="downerror"></span>
<span id="naimenovaniеerror" class="downerror"></span>
<span id="identiferr" class="downerror"></span>
<span id="tipsgrada" class="downerror"></span>
<span id="broietagierror" class="downerror"></span>
<span id="broietagierrortext" class="downerror"></span>
<span id="stroysyserrordown" class="downerror"></span>
<span id="sgrosnerror" class="downerror"></span>
<span id="sgrmaze" class="downerror"></span>
<span id="prednmaze" class="downerror"></span>
<span id="asancior" class="downerror"></span>
<span id="energyeff" class="downerror"></span>
<span id="tipoveprozorci" class="downerror"></span>
<span id="otoplenieerrdown" class="downerror"></span>
<span id="piteinavodaerr" class="downerror"></span>
<span id="etajpomeshteniaerr" class="downerror"></span>
<span id="nastilkaerr" class="downerror"></span>
<span id="broihoraerr" class="downerror"></span>
<span id="chasoveer" class="downerror"></span>
<span id="sloistenier" class="downerror"></span>
<span id="zashtitaradonerr" class="downerror"></span>
<span id="zashtitaradonerrda" class="downerror"></span>
<span id="nomerizmervaneerr" class="downerror"></span>
<span id="izpalnenieerr" class="downerror"></span>
<span id="telerr" class="downerror"></span>
<span id="emailerr" class="downerror"></span>
<br>
<br>
<br>
</div>

<script type="text/javascript">


var inputFields = document.querySelectorAll("input[type=text].Cyrillic");
for (key in inputFields) {
var TextField = inputFields[key];
TextField.onchange = function() {
var CyrillicPattern =  /[\0-\9-\u0400-\u04FF-\0-\9]/;
var TextPlaceholder = this.placeholder;
var isValid = this.value.search(CyrillicPattern) >= 0;
if (!(isValid)) {
alert("Моля пишете на кирилица - " + TextPlaceholder) ;
this.value="";
}
else{return true}
} 
}

document.getElementById("pochvenapokrivka").onfocus = function() {
document.getElementById("pochvachislo").innerHTML = "Моля въведете число";
}
document.getElementById("pochvenapokrivka").onblur=function() {
document.getElementById("pochvachislo").innerHTML = "";
}
document.getElementById("koordinati").onfocus=function() {
document.getElementById("koord").innerHTML = "Моля въведете координатите във формат: N 00-00-0/E 00-00-0";
}
document.getElementById("koordinati").onblur = function() {
document.getElementById("koord").innerHTML = "";
}
document.getElementById("identificator").onfocus=function() {
document.getElementById("identificatorformat").innerHTML = "Въведете кода с числа във формат 55555.333.4444.1.22";
}
document.getElementById("identificator").onblur = function() {
document.getElementById("identificatorformat").innerHTML = "";
}
document.getElementById("telephon").onfocus=function() {
document.getElementById("tel").innerHTML = "Въведете GSM номера във формат xxx-xxx-xxxx";
}
document.getElementById("telephon").onblur = function() {
document.getElementById("tel").innerHTML = "";
}


</script>
</body>
</html>





 







