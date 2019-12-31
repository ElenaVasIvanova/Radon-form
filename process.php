<?php
header('Content-type:text/html; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):
if (isset($_POST["Oblast"])) { $Oblast = $_POST["Oblast"]; }
if (isset($_POST["Obshtina"])) { $Obshtina = $_POST["Obshtina"]; }
if (isset($_POST["Grad"])) { $Grad = $_POST["Grad"]; }
if (isset($_POST["Selo"])) { $Selo = $_POST["Selo"]; }
if (isset($_POST["Adressgrada"])) { $Adressgrada = $_POST["Adressgrada"]; }
if (isset($_POST["Naimenovanie"])) { $Naimenovanie = $_POST["Naimenovanie"]; }
if (isset($_POST["Identificatorkod"])) { $Identificatorkod = $_POST["Identificatorkod"]; }
if (isset($_POST["categories"])) { $categories = $_POST["categories"]; }
if (isset($_POST["items"])) { $items = $_POST["items"]; }
if (isset($_POST["Prednaznachenienasgrtext"])) {
      $Prednaznachenienasgrtext = filter_var($_POST["Prednaznachenienasgrtext"], FILTER_SANITIZE_STRING ); 
  }


if (isset($_POST["GPSkoordinati"])) { $GPSkoordinati = $_POST["GPSkoordinati"]; }
if (isset($_POST["GPS"])) { $GPS = $_POST["GPS"]; }
if (isset($_POST["pochvenapokrivka"])) { $pochvenapokrivka = $_POST["pochvenapokrivka"]; }
if (isset($_POST["pochpokneznamvsm"])) { $pochpokneznamvsm = $_POST["pochpokneznamvsm"]; }
if (isset($_POST["Zastroenaplosht"])) { $Zastroenaplosht = $_POST["Zastroenaplosht"]; }
if (isset($_POST["Zastroenaploshtcheck"])) { $Zastroenaploshtcheck = $_POST["Zastroenaploshtcheck"]; }
if (isset($_POST["Razganataplosht"])) { $Razganataplosht = $_POST["Razganataplosht"]; }
if (isset($_POST["Razganataploshtcheck"])) { $Razganataploshtcheck = $_POST["Razganataploshtcheck"]; }
if (isset($_POST["Otopliavanaplosht"])) { $Otopliavanaplosht = $_POST["Otopliavanaplosht"]; }
if (isset($_POST["Otopliavanaploshtcheck"])) { $Otopliavanaploshtcheck = $_POST["Otopliavanaploshtcheck"]; }
if (isset($_POST["referenceshest"])) { $referenceshest = $_POST["referenceshest"]; }
if (isset($_POST["Broinaetagite"])) { $Broinaetagite = $_POST["Broinaetagite"]; }
if (isset($_POST["Godinanaeksploatacia"])) { $Godinanaeksploatacia = $_POST["Godinanaeksploatacia"]; }
if (isset($_POST["Godinanaeksploataciacheck"])) { $Godinanaeksploataciacheck = $_POST["Godinanaeksploataciacheck"]; }
if (isset($_POST["Vtoraeksploatacia"])) { $Vtoraeksploatacia = $_POST["Vtoraeksploatacia"]; }
if (isset($_POST["Vtoraeksploataciacheck"])) { $Vtoraeksploataciacheck = $_POST["Vtoraeksploataciacheck"]; }
if (isset($_POST["oneGodinavtoraeksploatacia"])) { $oneGodinavtoraeksploatacia = $_POST["oneGodinavtoraeksploatacia"]; }
if (isset($_POST["twoGodinavtoraeksploatacia"])) { $twoGodinavtoraeksploatacia = $_POST["twoGodinavtoraeksploatacia"]; }
if (isset($_POST["stroysys"])) { $stroysys = $_POST["stroysys"]; }
if (isset($_POST["osnsgrada"])) { $osnsgrada = $_POST["osnsgrada"]; }
if (isset($_POST["osnsgradadrugo"])) { $osnsgradadrugo = $_POST["osnsgradadrugo"]; }
if (isset($_POST["imalimaze"])) { $imalimaze = $_POST["imalimaze"]; }
if (isset($_POST["podzemenetaj"])) { $podzemenetaj = $_POST["podzemenetaj"]; }
if (isset($_POST["podzemenetajplosht"])) { $podzemenetajplosht = $_POST["podzemenetajplosht"]; }
if (isset($_POST["asanciorsgrada"])) { $asanciorsgrada = $_POST["asanciorsgrada"]; }
if(isset($_POST["merkiefectivnost"])) { 
$merkiefectivnost = "";
foreach($_POST["merkiefectivnost"] as $selected) {
    $merkiefectivnost .= $selected. " ";	
}
}
if(isset($_POST["Izpmerki"])) { 
$Izpmerki = "";
foreach($_POST["Izpmerki"] as $selected) {
    $Izpmerki .= $selected. " ";	
}
}
if (isset($_POST["hidroizolaciamaze"])) { $hidroizolaciamaze = $_POST["hidroizolaciamaze"]; }
if (isset($_POST["hidroizolaciaparvi"])) { $hidroizolaciaparvi = $_POST["hidroizolaciaparvi"]; }
if (isset($_POST["energymerkigodina"])) { $energymerkigodina = $_POST["energymerkigodina"]; }
if (isset($_POST["energymerkigodinacheck"])) { $energymerkigodinacheck = $_POST["energymerkigodinacheck"]; }
if(isset($_POST["sgrtipoveprozorci"])) { 
$sgrtipoveprozorci = "";
foreach($_POST["sgrtipoveprozorci"] as $selected) {
    $sgrtipoveprozorci .= $selected. " ";	
}
}
if (isset($_POST["sgrotoplitelnainst"])) { $sgrotoplitelnainst = $_POST["sgrotoplitelnainst"]; }
if(isset($_POST["otoplenie"])) { 
$otoplenie = "";
foreach($_POST["otoplenie"] as $selected) {
    $otoplenie .= $selected. " ";	
}
}
if (isset($_POST["drugoenergyizttext"])) { $drugoenergyizttext = $_POST["drugoenergyizttext"]; }
if (isset($_POST["mehanichnaventilacia"])) { $mehanichnaventilacia = $_POST["mehanichnaventilacia"]; }
if (isset($_POST["rabotanaventsys"])) { $rabotanaventsys = $_POST["rabotanaventsys"]; }
if (isset($_POST["sgrohladitelnasys"])) { $sgrohladitelnasys = $_POST["sgrohladitelnasys"]; }
if (isset($_POST["sgrohladitelnasys"])) { $sgrohladitelnasys = $_POST["sgrohladitelnasys"]; }
if (isset($_POST["kanalsys"])) { $kanalsys = $_POST["kanalsys"]; }
if (isset($_POST["piteinavoda"])) { $piteinavoda = $_POST["piteinavoda"]; }
if (isset($_POST["piteinavodatx"])) { $piteinavodatx = $_POST["piteinavodatx"]; }
if (isset($_POST["vidnaimota"])) { $vidnaimota = $_POST["vidnaimota"]; }
if (isset($_POST["godinanaobitavane"])) { $godinanaobitavane = $_POST["godinanaobitavane"]; }
if(isset($_POST["etajpomeshtenia"])) { 
$etajpomeshtenia = "";
foreach($_POST["etajpomeshtenia"] as $selected) {
    $etajpomeshtenia .= $selected. " ";	
    
}
}
if (isset($_POST["etajobitavane"])) { $etajobitavane = $_POST["etajobitavane"]; }
if(isset($_POST["nastilki"])) { 
$nastilki = "";
foreach($_POST["nastilki"] as $selected) {
    $nastilki .= $selected. " ";	
}
}
if (isset($_POST["drugvidnastilkitext"])) { $drugvidnastilkitext = $_POST["drugvidnastilkitext"]; }
if(isset($_POST["broihora"])) { 
$broihora = "";
foreach($_POST["broihora"] as $selected) {
    $broihora .= $selected. " ";	
}
}

if (isset($_POST["broihoravimotatext"])) { $broihoravimotatext = $_POST["broihoravimotatext"]; }
if (isset($_POST["obitateliundereighteen"])) { $obitateliundereighteen = $_POST["obitateliundereighteen"]; }
if (isset($_POST["srednodnevno"])) { $srednodnevno = $_POST["srednodnevno"]; }
if(isset($_POST["sloinasteni"])) { 
$sloinasteni = "";
foreach($_POST["sloinasteni"] as $selected) {
    $sloinasteni .= $selected. " ";	
}
}

if (isset($_POST["sloinastenitext"])) { $sloinastenitext = $_POST["sloinastenitext"]; }
if(isset($_POST["prozorcivid"])) { 
$prozorcivid = "";
foreach($_POST["prozorcivid"] as $selected) {
    $prozorcivid .= $selected. " ";	
}
}
if (isset($_POST["vanshnaizolacia"])) { $vanshnaizolacia = $_POST["vanshnaizolacia"]; }
                   
if (isset($_POST["vidtoplizolacia"])) { $vidtoplizolacia = $_POST["vidtoplizolacia"]; }

if(isset($_POST["vidtoplizolacia"])) { 
$vidtoplizolacia = "";
foreach($_POST["vidtoplizolacia"] as $selected) {
    $vidtoplizolacia .= $selected. " ";	
}

}

if (isset($_POST["EPSpenopolisteren"])) { $EPSpenopolisteren = $_POST["EPSpenopolisteren"]; }
if (isset($_POST["XPSpenopolisteren"])) { $XPSpenopolisteren = $_POST["XPSpenopolisteren"]; }
if (isset($_POST["Mineralna"])) { $Mineralna = $_POST["Mineralna"]; }
if (isset($_POST["drugoizolaciatext"])) { $drugoizolaciatext = $_POST["drugoizolaciatext"]; }
if (isset($_POST["izolaciapokriv"])) { $izolaciapokriv = $_POST["izolaciapokriv"]; }
if (isset($_POST["vremeprovetriavane"])) { $vremeprovetriavane = $_POST["vremeprovetriavane"]; }
if (isset($_POST["neuplatnenipuknatini"])) { $neuplatnenipuknatini = $_POST["neuplatnenipuknatini"]; }
if (isset($_POST["zashtitnimerki"])) { $zashtitnimerki = $_POST["zashtitnimerki"]; }
if (isset($_POST["kakvimerkitext"])) {
      $kakvimerkitext = filter_var($_POST["kakvimerkitext"], FILTER_SANITIZE_STRING ); 
  } 
if (isset($_POST["nomerizmervanenaradon"])) { $nomerizmervanenaradon = $_POST["nomerizmervanenaradon"]; }
if (isset($_POST["nomerizmervanenaradontext"])) { $nomerizmervanenaradontext = $_POST["nomerizmervanenaradontext"]; }
if (isset($_POST["izpalneniemerki"])) { $izpalneniemerki = $_POST["izpalneniemerki"]; }
if (isset($_POST["TriteImena"])) { $TriteImena = $_POST["TriteImena"]; }
if (isset($_POST["telnomer"])) { $telnomer = $_POST["telnomer"]; }
if (isset($_POST["Electronnaposhta"])) { $Electronnaposhta = $_POST["Electronnaposhta"]; }
if (isset($_POST["Dlajnost"])) { $Dlajnost = $_POST["Dlajnost"]; } 
if (isset($_POST["Belejki"])) {
      $Belejki = filter_var($_POST["Belejki"], FILTER_SANITIZE_STRING ); 
  }


  $formdata = array (
"Oblast" => $Oblast."-Област",
"Obshtina" => $Obshtina."-Община",
"Grad"  => $Grad."-Град",
"Selo"  => $Selo."-Село",
"Adressgrada" => $Adressgrada."-Адрес", 
"Naimenovanie" => $Naimenovanie."-Наименование",
"Identificatorkod" => $Identificatorkod."-Идентификатор",
"categories"  => $categories."-Сграда",
"items"  => $items."-Сграда",
"Prednaznachenienasgrtext" => $Prednaznachenienasgrtext."-Предназначение на сградата - текстово поле",
"GPSkoordinati" => $GPSkoordinati."-GPS координати",
"GPS" => $GPS."GPS - Не мога да отговоря ",
"pochvenapokrivka" => $pochvenapokrivka."-Дебелина на почвената покривка", 
"pochpokneznamvsm"  => $pochpokneznamvsm."-Дебелина на почвената покривка - Не мога да отговоря",
"Zastroenaplosht" => $Zastroenaplosht."-Застроена площ на сградата",
"Zastroenaploshtcheck" => $Zastroenaploshtcheck."-Застроена площ на сградата - Не мога да отговоря",
"Razganataplosht" => $Razganataplosht."-Разгъната застроена площ на сградата:",
"Razganataploshtcheck"=> $Razganataploshtcheck."-Разгъната застроена площ на сградата - Не мога да отговоря",
"Otopliavanaplosht" => $Otopliavanaplosht."-Отоплявана площ на сградата", 
"Otopliavanaploshtcheck" => $Otopliavanaploshtcheck."-Отоплявана площ на сградата - Не мога да отговоря",
"referenceshest" => $referenceshest."-Брой на етажите на сградата", 
"Broinaetagite" => $Broinaetagite."-Брой на етажите на сградата - текст", 
"Godinanaeksploatacia"  => $Godinanaeksploatacia."-Година на експлоатация за първи път", 
"Godinanaeksploataciacheck"  => $Godinanaeksploataciacheck."-Година на експлоатация за първи път - Не мога да отговоря",
"Vtoraeksploatacia"  => $Vtoraeksploatacia."-Повторно въвеждане в експлоатация",
"Vtoraeksploataciacheck"  => $Vtoraeksploataciacheck."-Повторно въвеждане в експлоатация - Не мога да отговоря",
"oneGodinavtoraeksploatacia"  => $oneGodinavtoraeksploatacia."-Повторно въвеждане в експлоатация - второ поле",
"twoGodinavtoraeksploatacia"  => $twoGodinavtoraeksploatacia."-Повторно въвеждане в експлоатация - трето поле",
"stroysys"  => $stroysys."-Строителна система по която е изградена сградата",
"osnsgrada" => $osnsgrada."-Каква е основата на сградата",
"osnsgradadrugo" => $osnsgradadrugo."-Каква е основата на сградата-Друго", 
"imalimaze" => $imalimaze."-Сградата има ли подземен етаж/сутерен",
"podzemenetaj" => $podzemenetaj."-За какво се използва подземният етаж на сградата",
"podzemenetajplosht" => $podzemenetajplosht."-Площта на стаите, която се обитава", 
"asanciorsgrada" => $asanciorsgrada."-Има ли сградата асансьор",  
"merkiefectivnost" => $merkiefectivnost."-Изпълнени ли са мерки за енергийна ефективност",
"Izpmerki" => $Izpmerki."-Посочете това, което Ви е известно",
"hidroizolaciamaze" => $hidroizolaciamaze."-Хидроизолация на пода на подземния етаж при строежа на сградата ",  
"hidroizolaciaparvi" => $hidroizolaciaparvi."-Хидроизолация при пода на първия надземен етаж",  
"energymerkigodina" => $energymerkigodina."-През кои години са изпълнени енергоспестяващите мерки",  
"energymerkigodinacheck" => $energymerkigodinacheck."-През кои години са изпълнени енергоспестяващите мерки-Не мога да отговоря",
 "sgrtipoveprozorci" => $sgrtipoveprozorci."-Какви типове прозорци има в сградата",
 "sgrotoplitelnainst" => $sgrotoplitelnainst."-Има ли изградена обща сградна отоплителна инсталация", 
"otoplenie" => $otoplenie."-Какви енергийни източници се използват за отопление в сградата",
"drugoenergyizttext" => $drugoenergyizttext."-Какви енергийни източници се използват за отопление в сградата-Друго",    
 "mehanichnaventilacia" => $mehanichnaventilacia."-Има ли изградена обща сградна механична система за вентилация",  
"rabotanaventsys" => $rabotanaventsys."-Работи ли вентилационната система в сградата",  
"sgrohladitelnasys" => $sgrohladitelnasys."-Има ли в сградата обща сградна система за охлаждане",  
"kanalsys" => $kanalsys."-Има ли сградата централна канализационна система",  
"piteinavoda" => $piteinavoda."-Как сградата се снабдява с питейна вода", 
"piteinavodatx" => $piteinavodatx."-По друг начин",     
 "vidnaimota" => $vidnaimota."-Обитаваното пространство е", 
"godinanaobitavane" => $godinanaobitavane."-Година на обитаване на сградата",
"etajpomeshtenia" => $etajpomeshtenia."-На кой етаж се намират обитаваните помещения ",  
"etajobitavane" => $etajobitavane."-Друго",  
"nastilki" => $nastilki."-Какви подови настилки има в имота", 
"drugvidnastilkitext" => $drugvidnastilkitext."-Друг вид", 
"broihora" => $broihora."-Колко човека обитават пространството на имота", 
"broihoravimotatext" => $broihoravimotatext."-Моля посочете брой хора",
"obitateliundereighteen" => $obitateliundereighteen."-Колко от обитателите на имота са под 18 годишна възраст",  
"srednodnevno" => $srednodnevno."-Колко време средно-дневно хората престояват в обитаваното пространство",
"sloinasteni" => $sloinasteni."-Какъв е завършващият слой на стените на помещенията от вътре", 
"sloinastenitext" => $sloinastenitext."-Друго",  
"prozorcivid" => $prozorcivid."-Какви са прозорците в обитаваното пространство",
 "vanshnaizolacia" => $vanshnaizolacia."-Има ли топлинна изолация на външните стени ",  
"vidtoplizolacia" => $vidtoplizolacia."-Какъв вид е топлинната изолация на обитаваното пространство",  
"EPSpenopolisteren" => $EPSpenopolisteren."-EPS експандиран пенополистирен",  
"XPSpenopolisteren" => $XPSpenopolisteren."-XPS екструдиран пенополистирен",  
"Mineralna" => $Mineralna."-Минерална вата",  
"drugoizolaciatext" => $drugoizolaciatext."-Друго",
"izolaciapokriv" => $izolaciapokriv."-Има ли топлинна изолация на покрива",  
"vremeprovetriavane" => $vremeprovetriavane."-Колко често проветрявате помещенията",   
"neuplatnenipuknatini" => $neuplatnenipuknatini."-Има ли пукнатини и отвори в пода, тавана или стените, които са неуплътнени",
"zashtitnimerki" => $zashtitnimerki."-Известно ли Ви е дали в сградата са изпълнявани защитни мерки",
"kakvimerkitext" => $kakvimerkitext."-Ако отговорите с „да“ моля посочете какви",
"nomerizmervanenaradon"=> $nomerizmervanenaradon."-Кое по ред е извършваното измерване за радон",  
"nomerizmervanenaradontext" => $nomerizmervanenaradontext."-Друго",
"izpalneniemerki" => $izpalneniemerki."-В случай на необходимост смятате ли за важно да изпълните предписаните мерки",
"TriteImena" => $TriteImena."-Име презиме и фамилия",  
"telnomer" => $telnomer."-Телефон за контакт",   
"Electronnaposhta" => $Electronnaposhta."\r\n-Електронна поща за кореспонденция",
"Dlajnost" => $Dlajnost."-Длъжност",
 "Belejki" => $Belejki."-Бележки"
  );
  
  
  
  
  
$header = "Content-type: text/html; charset=UTF-8\r\n"."From: form@example.com";	
	if (!empty($formdata)) :
		$to				= 	"elvi0@abv.bg";
		$from = $_POST["Electronnaposhta"];
		$subject	=		"От $TriteImena -- Попълнена анкетна карта - Радон";
		$subject2 = "От $TriteImena -- Копие от попълнената анкетна карта - Радон";
		$message	=		json_decode(json_encode($formdata),true);

		
		$replyto	=		"From: fromprocessor@iviewsource.com \r\n".
									"Reply-To: donotreply@iviewsource.com \r\n";
						
		
		if (mail( $to, "=?utf-8?B?".base64_encode($subject)."?=", implode("<br>" , (array)$message),  $header) && 
		mail($from,"=?utf-8?B?".base64_encode($subject2)."?=", implode("<br>" , (array)$message), $header)):
			$msg = "Благодарим Ви, че попълнихте анкетната карта";
		else:
			$msg = "Възникна проблем при изпращането на анкетната карта";
		endif; 

	endif; 

endif; 
?>
