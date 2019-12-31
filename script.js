
function validate() {


var check2=document.getElementById("obshtina");
var obshanswer=document.getElementById("obshtina").value;
var obshtproform=document.getElementById("obsherrorform");
var obshtpro=document.getElementById("obshterror");
var check3=document.getElementById("grad");
var gradanswer=document.getElementById("grad").value;
var gradiseloproform=document.getElementById("graderroriseloerrorform");
var check3t1=document.getElementById("selo");
var seloanswer=document.getElementById("selo").value;
var gradiselopro=document.getElementById("graderroriseloerror");
var check4=document.getElementById("adres-sgrada");
var miastoanswer=document.getElementById("adres-sgrada").value;
var miastoproform=document.getElementById("miastoerrorform");
var miastopro=document.getElementById("miastoerror");
var check5=document.getElementById("naimenovaniesgrada");
var iman=document.getElementById("naimenovaniesgrada").value;
var naime=document.getElementById("naimenovaniеerrorform");
var impro=document.getElementById("naimenovaniеerror");
var identif=document.getElementById("identificator").value;
var filteridentif =(/\d{5}[.]\d{3}[.]\d{4}[.]\d{1}[.]\d{2}/);
var etaji=document.getElementById("reference6-1");
var etajiizbrano=etaji.options[etaji.selectedIndex].value;
var syserror=document.getElementById("stroysyserror");
var stroysyserrordown=document.getElementById("stroysyserrordown");
var strsyst=document.getElementsByName("stroysys");
var sgrmazeerror17=document.getElementById("sgrmazeerror");
var sgrmaze17=document.getElementById("sgrmaze");
var mazeopt=document.theform.imalimaze;
var sgrmazeprednerror=document.getElementById("sgrmazeprednerror");
var prednmaze=document.getElementById("prednmaze");
var obitaemaploshtmaze=document.getElementById("obitaemaploshtmaze");
var podzet=document.getElementsByName("podzemenetaj");
var asanciorerror=document.getElementById("asanciorerror");
var asancior=document.getElementById("asancior");
var asanciorsgrada=document.theform.asanciorsgrada;
var tipove=document.getElementsByClassName("sgrtipoveprozorci");
var tipoveprerror=document.getElementById("sgrtipoveprozorcierror");
var tipoveprerrordown=document.getElementById("tipoveprozorci");
var otoplenie=document.getElementsByClassName("otoplenie");
var otoplenieerror=document.getElementById("otoplenieerror");
var otoplenieer=document.getElementById("otoplenieerrdown");
var drugoenergyizt=document.getElementById("drugoenergyizt");
var piteinavoda=document.getElementsByName("piteinavoda");
var piteinavodatext=document.getElementById("piteinavodatext");
var piteinavodaerr=document.getElementById("piteinavodaerr");
var piteinavodatxt=document.getElementById("piteinavodatxt");
var etajpomeshtenia=document.getElementsByName("etajpomeshtenia[]");
var etajpomerr=document.getElementById("etajpomeshteniaerror");
var etajpom=document.getElementById("etajpomeshteniaerr");
var etajnaobitavanetxt=document.getElementById("etajnaobitavane");
var podovanastilka=document.getElementsByName("nastilki[]");
var nastilkaerr=document.getElementById("nastilkaerror");
var nastilkaer=document.getElementById("nastilkaerr");
var drugvidtxt=document.getElementById("drugvid") ;
var broihora=document.getElementsByName("broihora[]");
var broihoraerror=document.getElementById("broihoraerror");
var broihoraerr=document.getElementById("broihoraerr");
var broihoratext=document.getElementById("broihoratext");
var sgrmazeprednerremove=document.getElementById("sgrmazeprednerror");
var prednmazeremove=document.getElementById("prednmaze");
var obitaemaploshtmazere=document.getElementById("obitaemaploshtmaze");
var podzetremove=document.theform.podzemenetaj;
var srednodnevno=document.getElementsByName("srednodnevno");
var chasoveerror=document.getElementById("chasoveerror");
var chasoveer=document.getElementById("chasoveer");
var sloisteni=document.getElementsByName("sloinasteni[]");
var sloistenierror=document.getElementById("sloistenierror");
var sloistenier=document.getElementById("sloistenier");
var drugsloi=document.getElementById("drugsloi");
var nomerizmervanenaradon=document.getElementsByName("nomerizmervanenaradon");
var nomerizmervaneerror=document.getElementById("nomerizmervaneerror");
var nomerizmervaneerr=document.getElementById("nomerizmervaneerr");
var drugoporedizm=document.getElementById("drugoporedizm");
var izpaln=document.getElementsByName("izpalneniemerki");
var izpalnerror=document.getElementById("izpalnenieerror");
var izpalnerr=document.getElementById("izpalnenieerr");
var teleph=document.getElementById("telephon").value;
var filtertel = (/\d{3}[\-]\d{3}[\-]\d{4}/);
var email=document.getElementById("elposhta").value;
var filter=(/^([a-zA-Z0-9_.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
var oblanswer1=document.getElementById("oblast").value;
var oblastpro1=document.getElementById("oblerror");
var oblastproform1=document.getElementById("oblerrorform");


var check1=document.getElementById("oblast");
if(check1.value === "" ) {
document.getElementById("oblerror").innerHTML="Раздел 1,1-въведете област";
document.getElementById("oblerrorform").innerHTML="Моля въведете област";
event.preventDefault();
  
}
var oblanswer=document.getElementById("oblast").value;
var oblastpro=document.getElementById("oblerror");
var oblastproform=document.getElementById("oblerrorform"); 
if(oblanswer1!=="" && oblastpro1!=="undefined" && oblastpro1!==null
&& oblastproform1!=="undefined" && oblastproform1!==null)
{oblastpro1.style.display="none";
oblastproform1.style.display="none";

}




if(check2.value === "" ) {
document.getElementById("obshterror").innerHTML="Раздел 1,2-въведете община";
document.getElementById("obsherrorform").innerHTML="Моля въведете община";
event.preventDefault();


}

var obshanswer2=document.getElementById("obshtina").value;
var obshtproform2=document.getElementById("obsherrorform");
var obshtpro2=document.getElementById("obshterror");
if(obshanswer2!=="" && obshtproform2!=="undefined" && obshtproform2!==null
&& obshtpro2!=="undefined" && obshtpro2!==null)
{obshtpro2.style.display="none";
obshtproform2.style.display="none";


}

 if(check3.value === "" && check3t1.value === "" ){
document.getElementById("graderroriseloerror").innerHTML=
"Раздел 1,3-въведете град или село";
document.getElementById("graderroriseloerrorform").innerHTML=
"Моля въведете град или село";
event.preventDefault();


}


var gradanswer3=document.getElementById("grad").value;
var gradiseloproform3=document.getElementById("graderroriseloerrorform");
var seloanswer3=document.getElementById("selo").value;
var gradiselopro3=document.getElementById("graderroriseloerror");
if(gradanswer3!=="" && gradiseloproform3!=="undefined" && gradiseloproform3!==null
 ||
seloanswer3!=="" && gradiselopro3!=="undefined" && gradiselopro3!==null )
{gradiseloproform3.style.display="none";
gradiselopro3.style.display="none";

   
}

if( check4.value === "" ) {
document.getElementById("miastoerror").innerHTML=
"Раздел 1,4-въведете адрес на сградата";
document.getElementById("miastoerrorform").innerHTML=
"Моля въведете адрес на сградата";
event.preventDefault();

}

var miastoanswer4=document.getElementById("adres-sgrada").value;
var miastoproform4=document.getElementById("miastoerrorform");
var miastopro4=document.getElementById("miastoerror");
if  ( miastoanswer4!=="" && miastoproform4!=="undefined" && miastoproform4!==null
&& miastopro4!=="undefined" && miastopro4!==null)
{miastoproform4.style.display="none";
miastopro4.style.display="none";
 
}

 if( check5.value === "" ) {
document.getElementById("naimenovaniеerror").innerHTML=
"Раздел 1,5-въведете наименование";
document.getElementById("naimenovaniеerrorform").innerHTML=
"Моля въведете наименование";
event.preventDefault();


}
var iman5=document.getElementById("naimenovaniesgrada").value;
var naime5=document.getElementById("naimenovaniеerrorform");
var impro5=document.getElementById("naimenovaniеerror");
if  (iman5!=="" && naime5!=="undefined" && naime5!==null && impro5!=="undefined" )
{naime5.style.display="none";
impro5.style.display="none";

    
}

 if (!filteridentif.test(identif) && identif!==null )
{document.getElementById("identiferror").innerHTML=
"Моля въведете кода с числа във формат 55555.333.4444.1.22";
document.getElementById("identiferr").innerHTML=
"Раздел 1,6-въведете кода с числа във формат 55555.333.4444.1.22";
event.preventDefault();

}


if (filteridentif.test(identif))
{document.getElementById("identiferror").innerHTML="";
document.getElementById("identiferr").innerHTML="";
}

var optjiler=document.getElementById("selecterror");
var optjilerdown=document.getElementById("tipsgrada");
var optjil = document.getElementById("reference");
var choicejil = optjil.options[optjil.selectedIndex].value;
if(choicejil == "") 
{ optjiler.innerHTML = "Моля посочете предназначението на сградата";
optjilerdown.innerHTML = "Раздел 1, 7-посочете предназначението на сградата";

 
}

if(choicejil != "") 
{ optjiler.innerHTML = "";
optjilerdown.innerHTML = "";
}
var bret13 = document.getElementById("bretagierrorform")
var bret13down = document.getElementById("broietagierror")
if(etajiizbrano=="")
{
bret13.innerHTML=
"Моля посочете етажите на сградата";
bret13down.innerHTML=
"Раздел 2,13-посочете етажите на сградата";

 
}

var etaji13=document.getElementById("reference6-1");
var etajiizbrano13=etaji13.options[etaji13.selectedIndex].value;
if (etajiizbrano13!=0) {bret13.innerHTML="";
bret13down.innerHTML="";

    
}

var etaji13num=document.getElementById("bretagierrortextform")
var etaji13numdown=document.getElementById("broietagierrortext")
if((etajiizbrano == "повече от 20 етажа") &&
(document.getElementById("etagi").value===""))
{
etaji13num.innerHTML=
"Моля уточнете броя на етажите на сградата в текстовото поле";
etaji13numdown.innerHTML=
"Раздел 2,13-уточнете броя на етажите на сградата в текстовото поле";
event.stopPropagation() 

    
}

if((etajiizbrano13 == "повече от 20 етажа") &&
(document.getElementById("etagi").value!==""))
{
etaji13num.innerHTML="";
etaji13numdown.innerHTML="";

   
}
for (i=0; i<strsyst.length; i+=1)
if (strsyst[i].checked===false && strsyst !== "undefined" && strsyst !== null){
syserror.innerHTML="Моля въведете строителната система на сградата";
stroysyserrordown.innerHTML=
"Раздел 2,15-въведете строителната система на сградата";


    
}

for (i=0; i<strsyst.length; i+=1)
if (strsyst[i].checked===true){
syserror.innerHTML="";
stroysyserrordown.innerHTML="";

}


var errorradioosn = document.getElementById("osnovaerror")
var sgrosnerror = document.getElementById("sgrosnerror")
var drugoem = document.getElementById("otherosn");
var osn = document.theform.osnsgrada;
for (var i=0; i<osn.length; i++)
if (osn[i].checked===false && trimfield(drugoem.value) ==="" )
{errorradioosn.innerHTML="Моля въведете каква е основата на сградата";
sgrosnerror.innerHTML="Раздел 2,16-въведете каква е основата на сградата";
}

for (var i=0; i<osn.length; i++)
if (osn[i].checked===true || trimfield(drugoem.value) !=="" )
{errorradioosn.innerHTML="";
sgrosnerror.innerHTML="";
}





for (i=0; i<mazeopt.length; i+=1)
if (mazeopt[i].checked===false && mazeopt !== "undefined" && mazeopt !== null )
{sgrmazeerror17.innerHTML="Моля посочете има ли сградата подземен етаж";
sgrmaze17.innerHTML="Раздел 2,17-посочете има ли сградата подземен етаж";


}

for (i=0; i<mazeopt.length; i+=1)
if (mazeopt[i].checked===true )
{sgrmazeerror17.innerHTML="";
sgrmaze17.innerHTML="";

 
}

for (i=0; i<podzet.length; i+=1)
if (podzet[i].checked===false && podzet!=="undefined" && podzet!==null  )
{sgrmazeprednerror.innerHTML="Моля посочете предназначението на подземния етаж";
prednmaze.innerHTML="Раздел 2,18-посочете предназначението на подземния етаж";

   
}
for (i=0; i<podzet.length; i+=1)
if (podzet[i].checked===true)
{sgrmazeprednerror.innerHTML="";
prednmaze.innerHTML="";
}
for (i=0; i<podzetremove.length; i+=1)
if  (podzetremove[1].checked===true && obitaemaploshtmazere.value === "")
{sgrmazeprednerremove.innerHTML=
"Моля посочете предназначението на подземния етаж и площа му (въведете число)";
prednmazeremove.innerHTML=
"Раздел 2,18- предназначение на подземния етаж  и площа му (въведете число)";

  
}
for (i=0; i<asanciorsgrada.length; i+=1)
if (asanciorsgrada[i].checked===false && asanciorsgrada !== "undefined"
&& asanciorsgrada !== null  )
{asanciorerror.innerHTML="Моля посочете има ли в сградата асансьор";
asancior.innerHTML="Раздел 2,19-посочете има ли в сградата асансьор";

    
}
for (i=0; i<asanciorsgrada.length; i+=1)
if (asanciorsgrada[i].checked===true  )
{asanciorerror.innerHTML="";
asancior.innerHTML="";

    
}
var merkiefectivnostch = document.getElementsByName("merkiefectivnost[]");
var energyefferrch = document.getElementById("energyefferr");
var energyeffch = document.getElementById("energyeff"); 
for (var i=0; i<merkiefectivnostch.length; i++)
if (merkiefectivnostch[i].checked === false)  {
energyefferrch.innerHTML = "Моля посочете изпълнени ли са мерки за енергийна ефективност" ;
energyeffch.innerHTML = "Раздел 2,20 - Моля посочете изпълнени ли са мерки за енергийна ефективност" ;
}
for (var i=0; i<merkiefectivnostch.length; i++)
if (merkiefectivnostch[0].checked === true  )  {
energyefferrch.innerHTML = "Моля изберете от списъка изпълнените мерки за енергийна ефективност" ;
energyeffch.innerHTML = "Раздел2,20-изберете от списъка изпълнените мерки за енергийна ефективност" ;
}
for (var i=0; i<merkiefectivnostch.length; i++)
if (merkiefectivnostch[1].checked === true || merkiefectivnostch[2].checked === true  )  {
energyefferrch.innerHTML = "" ;
energyeffch.innerHTML = "" ;
}

var listref = document.getElementById("reference7");
var refizbrano = listref.options[listref.selectedIndex].value;
for (var i=0; i<merkiefectivnostch.length; i++)
if (merkiefectivnostch[0].checked === true && (refizbrano!=0) &&  ( refizbrano !== "undefined") && (refizbrano !== null) )  {
energyefferrch.innerHTML = "" ;
energyeffch.innerHTML = "" ;
}


for (i=0; i<tipove.length; i+=1)
if (tipove[i].checked === false)  {
tipoveprerror.innerHTML=
"Моля уточнете типовете прозорци (можете да изберете повече от един тип)";
tipoveprerrordown.innerHTML=
"Раздел 2,25-уточнете типовете прозорци(можете да изберете повече от един тип)";


}

for (i=0; i<tipove.length; i+=1)
if (tipove[i].checked === true)  {
tipoveprerror.innerHTML="";
tipoveprerrordown.innerHTML="";

    
}

for (i=0; i<otoplenie.length; i+=1)
if (otoplenie[i].checked === false && drugoenergyizt.value === "" )  {
otoplenieerror.innerHTML=
"Моля уточнете енергийните източници за отопление на сградата";
otoplenieer.innerHTML=
"Раздел 2,27-уточнете енергийните източници за отопление на сградата";


}
for (i=0; i<otoplenie.length; i+=1)
if (otoplenie[i].checked === true || drugoenergyizt.value!=="")  {
otoplenieerror.innerHTML="";
otoplenieer.innerHTML="";

    
}

for (i=0; i<piteinavoda.length; i+=1)
if (piteinavoda[i].checked === false && piteinavodatxt.value === "" )  {
piteinavodatext.innerHTML=
"Моля посочете как сградата се снабдява с питейна вода";
piteinavodaerr.innerHTML=
"Раздел 2,32-посочете как сградата се снабдява с питейна вода";


}
for (i=0; i<piteinavoda.length; i+=1)
if (piteinavoda[i].checked === true || piteinavodatxt.value!=="" )  {
piteinavodatext.innerHTML="";
piteinavodaerr.innerHTML="";

    
}


for (i=0; i<etajpomeshtenia.length; i+=1)
if (etajpomeshtenia[i].checked === false && etajnaobitavanetxt.value === "" )  {
etajpomerr.innerHTML=
"Моля уточнете на кой етаж се намират обитаваните помещения на сградата";
etajpom.innerHTML=
"Раздел 3,35-уточнете на кой етаж се намират обитаваните помещения на сградата";


}
for (i=0; i<etajpomeshtenia.length; i+=1)
if (etajpomeshtenia[i].checked === true || etajnaobitavanetxt.value!=="" )  {
etajpomerr.innerHTML="";
etajpom.innerHTML="";

    
}

for (i=0; i<podovanastilka.length; i+=1)
if ((podovanastilka[i].checked === false) && (drugvidtxt.value === "" ))  {
nastilkaerr.innerHTML="Моля уточнете какви подови настилки има в имота";
nastilkaer.innerHTML="Раздел 3,36-уточнете какви подови настилки има в имота";

}
for (i=0; i<podovanastilka.length; i+=1)
if (podovanastilka[i].checked === true || drugvidtxt.value!=="")  {
nastilkaerr.innerHTML="";
nastilkaer.innerHTML="";

    
}

for (i=0; i<broihora.length; i+=1)
if ((broihora[i].checked === false) && (broihoratext.value === "" ))  {
broihoraerror.innerHTML="Моля посочете брой хора обитаващи имота";
broihoraerr.innerHTML="Раздел 3,37-посочете брой хора обитаващи имота";
}
for (i=0; i<broihora.length; i+=1)
if (broihora[i].checked === true  || broihoratext.value!=="")  {
broihoraerror.innerHTML="";
broihoraerr.innerHTML="";
}
for (i=0; i<srednodnevno.length; i+=1)
if (srednodnevno[i].checked === false)  {
chasoveerror.innerHTML=
"Моля посочете колко време хората престояват в обитаваното пространство?";
chasoveer.innerHTML=
"Раздел 3,39- колко време хората престояват в обитаваното пространство?";
}
for (i=0; i<srednodnevno.length; i+=1)
if (srednodnevno[i].checked === true)  {
chasoveerror.innerHTML="";
chasoveer.innerHTML="";
}
for (i=0; i<sloisteni.length; i+=1)
if ((sloisteni[i].checked === false) && (drugsloi.value === "" ))  {
sloistenierror.innerHTML=
"Моля посочете какъв е завършващият слой на стените на помещенията от вътре?";
sloistenier.innerHTML=
"Раздел 3,40- какъв е завършващият слой на стените на помещенията от вътре?";
}
for (i=0; i<sloisteni.length; i+=1)
if (sloisteni[i].checked === true || drugsloi.value!=="" )  {
sloistenierror.innerHTML="";
sloistenier.innerHTML="";
}

var zashtitaradon = document.getElementsByName("zashtitnimerki");
var zashtitaradonerror47 = document.getElementById("zashtitaradonerror");
var zashtitaradonerr47 = document.getElementById("zashtitaradonerr"); 
for (var i=0; i<zashtitaradon.length; i++)
if (zashtitaradon[i].checked === false) {
zashtitaradonerror47.innerHTML = "Моля посочете изпълнявани ли са защитни мерки за ограничаване проникването на радон?" ;
zashtitaradonerr47.innerHTML = "Раздел 4,47-посочете изпълнявани ли са защитни мерки за ограничаване проникването на радон?" ;
}

for (var i=0; i<zashtitaradon.length; i++) 
if  (zashtitaradon[0].checked==true && trimfield(kakvimerki.value) === ""){zashtitaradonerror47.innerHTML="Моля посочете какви мерки са предприемани за ограничаване въздействието на радон";
zashtitaradonerr47.innerHTML="Раздел 4,47-посочете какви мерки са предприемани за ограничаване въздействието на радон";
}
for (var i=0; i<zashtitaradon.length; i++) 
if  ((zashtitaradon[0].checked==true && trimfield(kakvimerki.value) !== "") || zashtitaradon[1].checked==true || zashtitaradon[2].checked==true){zashtitaradonerror47.innerHTML="";
zashtitaradonerr47.innerHTML="";
}

for (i=0; i<nomerizmervanenaradon.length; i+=1)
if ((nomerizmervanenaradon[i].checked === false) && (drugoporedizm.value ===""))
{
nomerizmervaneerror.innerHTML=
"Моля посочете кое по ред е извършваното измерване за радон?";
nomerizmervaneerr.innerHTML=
"Раздел 3,48-посочете кое по ред е извършваното измерване за радон?";
}
for (i=0; i<nomerizmervanenaradon.length; i+=1)
if (nomerizmervanenaradon[i].checked === true || drugoporedizm.value!==""){
nomerizmervaneerror.innerHTML="";
nomerizmervaneerr.innerHTML="";
}
for (i=0; i<izpaln.length; i+=1)
if (izpaln[i].checked === false)  {
izpalnerror.innerHTML=
"Моля посочете смятате ли за важно да изпълните предписаните мерки за защита?";
izpalnerr.innerHTML=
"Раздел 3,49- смятате ли за важно да изпълните предписаните мерки за защита?";

}

for (i=0; i<izpaln.length; i+=1)
if (izpaln[i].checked === true)  {
izpalnerror.innerHTML="";
izpalnerr.innerHTML="";

}

if (!filtertel.test(teleph) && teleph!==null )
{document.getElementById("telerror").innerHTML=
"Моля въведете телефонен номер във формат 123-456-7890";
document.getElementById("telerr").innerHTML=
"Раздел 4, Моля въведете телефонен номер във формат 123-456-7890";
event.preventDefault();
 
}


if (filtertel.test(teleph) && teleph!=="" )
{document.getElementById("telerror").innerHTML=
"";
document.getElementById("telerr").innerHTML=
"";

}

if (!filter.test(email) ) {
document.getElementById("emailerror").innerHTML="Моля въведете валиден email";
document.getElementById("emailerr").innerHTML="Раздел 4, Моля въведете валиден email";
event.preventDefault();
  
return false; 
}

if( 
((filter.test(email)) && (choicejil == ""))
||((filter.test(email)) && (bret13.innerHTML!=""))
||((filter.test(email)) && (etaji13num.innerHTML!=""))
|| ((filter.test(email)) && ( syserror.innerHTML!=""))
|| ((filter.test(email)) && ( errorradioosn.innerHTML!=""))
|| ((filter.test(email)) && ( sgrmazeerror17.innerHTML!=""))
|| ((filter.test(email)) && ( sgrmazeprednerror.innerHTML!=""))
|| ((filter.test(email)) && ( asanciorerror.innerHTML!=""))
|| ((filter.test(email)) && ( energyefferrch.innerHTML!=""))
|| ((filter.test(email)) && ( tipoveprerror.innerHTML!=""))
|| ((filter.test(email)) && ( otoplenieerror.innerHTML!=""))
|| ((filter.test(email)) && ( piteinavodatext.innerHTML!=""))
|| ((filter.test(email)) && ( etajpomerr.innerHTML!=""))
|| ((filter.test(email)) && ( nastilkaerr.innerHTML!=""))
|| ((filter.test(email)) && ( broihoraerror.innerHTML!=""))
|| ((filter.test(email)) && ( chasoveerror.innerHTML!=""))
|| ((filter.test(email)) && ( sloistenierror.innerHTML!=""))
|| ((filter.test(email)) && ( zashtitaradonerror47.innerHTML!=""))
|| ((filter.test(email)) && ( nomerizmervaneerror.innerHTML!=""))
|| ((filter.test(email)) && ( izpalnerror.innerHTML!=""))
)
{
event.preventDefault(); 
return false;     
}

else 

{
 document.theform.onsubmit();
 return true; }
}

function trimfield(str) 
{ 
    return str.replace(/^\s+|\s+$/g,''); 
}





var disablegrad = function () {
  var selovavedeno = document.getElementById("selo").value.length > 0;
  document.getElementById("grad").disabled = selovavedeno;
};

  var disableselo = function () {
  var gradvavedeno = document.getElementById("grad").value.length > 0;
  document.getElementById("selo").disabled = gradvavedeno;
};

var disablecheckeight = function () {
  var gpsvavedeno = document.getElementById("koordinati").value.length > 0;
  document.getElementById("koordinatineznam").disabled = gpsvavedeno;
};

function disableeight(){  
if(document.getElementById("koordinatineznam").checked === true){  
document.getElementById("koordinati").disabled = true;  
}else{
document.getElementById("koordinati").disabled = false;
}  
}  


function disablenine(){  
if(document.getElementById("pochpokneznam").checked === true){  
document.getElementById("pochvenapokrivka").disabled = true;  
}else{
document.getElementById("pochvenapokrivka").disabled = false;
}  
}  
  
var disablechecknine = function () {
var vavedeno = document.getElementById("pochvenapokrivka").value.length > 0;
document.getElementById("pochpokneznam").disabled = vavedeno;
};

function disableten(){  
if(document.getElementById("zastroenaplosht").checked === true){  
document.getElementById("1zastroenaplosht").disabled = true;  
}else{
document.getElementById("1zastroenaplosht").disabled = false;
}  
}  
  
var disablecheckten = function () {
var zastvavedeno = document.getElementById("1zastroenaplosht").value.length > 0;
document.getElementById("zastroenaplosht").disabled = zastvavedeno;
};


function disableleven(){  
if(document.getElementById("razganataplosht").checked === true){  
document.getElementById("1razganataplosht").disabled = true;  
}else{
document.getElementById("1razganataplosht").disabled = false;
}  
}  
  
var disablecheckeleven = function () {
var razgvavedeno = document.getElementById("1razganataplosht").value.length > 0;
document.getElementById("razganataplosht").disabled = razgvavedeno;
};

function disabletwelve(){  
if(document.getElementById("otopliaemaplosht").checked === true){  
document.getElementById("1otopliaemaplosht").disabled = true;  
}else{
document.getElementById("1otopliaemaplosht").disabled = false;
}  
}  
  
var disablechecktwelve = function () {
var otopvavedeno = document.getElementById("1otopliaemaplosht").value.length > 0;
document.getElementById("otopliaemaplosht").disabled = otopvavedeno;
};

var disablethirteen = function () {
var etajivavedeno = document.getElementById("etagi").value.length > 0;
document.getElementsByName("referenceshest")[0].disabled = etajivavedeno;
};



var disablethirteen = function () {
var etajivavedeno = document.getElementById("etagi").value.length > 0;
document.getElementsByName("referenceshest")[0].disabled = etajivavedeno;
};

function disableselectthirteen()
{
var opt = document.getElementById("reference6-1");
var choice = opt.options[opt.selectedIndex].value;


if(choice == "повече от 20 етажа")
{
document.getElementById("etagi").disabled = false;
}
else {document.getElementById("etagi").disabled = true;
document.getElementById("etagi").value = "";
}
}


function disablefourteen(){  
if(document.getElementById("vavedenavexp").checked == true){  
document.getElementById("1vavedenavexp").disabled = true;  
}else{
document.getElementById("1vavedenavexp").disabled = false;
}  
}  
  
var disablecheckfourteen = function () {
var expvavedeno = document.getElementById("1vavedenavexp").value.length > 0;
document.getElementById("vavedenavexp").disabled = expvavedeno;
};


function disablefourteena(){  
if(document.getElementById("osnovniremonti").checked == true){  
document.getElementById("1osnovniremonti").disabled = true;
document.getElementById("osnovniremontiexp").disabled = true;
document.getElementById("2osnovniremonti").disabled = true;
}else{
document.getElementById("1osnovniremonti").disabled = false;
document.getElementById("osnovniremontiexp").disabled = false;
document.getElementById("2osnovniremonti").disabled = false;
}  
}  

var disablecheckfourteena = function () {
var osnremvavedeno = document.getElementById("osnovniremontiexp").value.length > 0;
document.getElementById("osnovniremonti").disabled = osnremvavedeno;
};

var disablecheckfourteena1 = function () {
var osn1remvavedeno = document.getElementById("1osnovniremonti").value.length > 0;
document.getElementById("osnovniremonti").disabled = osn1remvavedeno;
};

var disablecheckfourteena2 = function () {
var osn2remvavedeno = document.getElementById("2osnovniremonti").value.length > 0;
document.getElementById("osnovniremonti").disabled = osn2remvavedeno;
};


var disablesixteenradio = function () {
var osnova = document.getElementsByName("osnsgrada");
if(document.getElementById("otherosn").value.length > 0 )
{
for (var i = 0; i < osnova.length; i++) {
    osnova[i].disabled = true;
    osnova[i].checked = false;
}
}

else{ document.getElementById("otherosn").value.length = 0

for (var i = 0; i < osnova.length; i++) {
    osnova[i].disabled = false;
   }

}
}


var disable32radio = function () {
var voda = document.getElementsByName("piteinavoda");
if(document.getElementById("piteinavodatxt").value.length > 0 )
{
for (var i = 0; i < voda.length; i++) {
    voda[i].disabled = true;
    voda[i].checked = false;
}
}
else{ document.getElementById("piteinavodatxt").value.length = 0

for (var i = 0; i < voda.length; i++) {
    voda[i].disabled = false;
   }

}
}


function select20OnlyOne(id) {
for (var i = 1;i <= 3; i++){
if ("efectivnost" + i === id && document.getElementById("efectivnost" + i).checked ===true){
document.getElementById("efectivnost" + i).checked = true;
} else {
document.getElementById("efectivnost" + i).checked = false;
}
}  
}

window.onload= function() {
  enableText18();
  Enable20 ();
  enableText43();
  enableText47();
  
   };


function Enable20Select() {
if (document.getElementById("efectivnost1").checked===true) {
document.getElementById("reference7").disabled=false;
}
else{document.getElementById("reference7").disabled=true;
document.getElementById("reference7").selectedIndex=0;
}
}
function Enable20 (){
    var refseven =document.getElementById("reference7");
refseven.disabled=true;
}

function enableText18 (){
document.getElementById("obitaemaploshtmaze").disabled=true;
var maze = document.getElementsByName("podzemenetaj");
for ( i=0; i<maze.length; i+=1){
maze[i].onclick=enableText18inRadio;
}
}

function enableText18inRadio() {
switch(this.id) {
case "samomazeitem" :
document.getElementById("obitaemaploshtmaze").value="";
document.getElementById("obitaemaploshtmaze").disabled=true;
break;
case "osnovnomazeitem" :
document.getElementById("obitaemaploshtmaze").disabled=false;
break;
case "zajiveenemazeitem" :
document.getElementById("obitaemaploshtmaze").value="";
document.getElementById("obitaemaploshtmaze").disabled=true;
break;
}
}

function disable24text(){  
if(document.getElementById("neznamenergymerky").checked == true){  
document.getElementById("energymerky").disabled = true;  
}else{
document.getElementById("energymerky").disabled = false;
}  
}  
  
var disablecheck24 = function () {
var zastvavedeno = document.getElementById("energymerky").value.length > 0;
document.getElementById("neznamenergymerky").disabled = zastvavedeno;
};

var disable27check = function () {
var otoplenieval = document.getElementsByClassName("otoplenie");
if(document.getElementById("drugoenergyizt").value.length > 0 )
{
for (var i = 0; i < otoplenieval.length; i++) {
    otoplenieval[i].disabled = true;
    otoplenieval[i].checked = false;
}
}
else{ document.getElementById("drugoenergyizt").value.length = 0

for (var i = 0; i < otoplenieval.length; i++) {
    otoplenieval[i].disabled = false;
   }

}
}

var disable32radio = function () {
var voda = document.getElementsByName("piteinavoda");
if(document.getElementById("piteinavodatxt").value.length > 0 )
{
for (var i = 0; i < voda.length; i++) {
    voda[i].disabled = true;
    voda[i].checked = false;
}
}
else{ document.getElementById("piteinavodatxt").value.length = 0

for (var i = 0; i < voda.length; i++) {
    voda[i].disabled = false;
   }

}
}

var disable35check = function () {
var etajpomeshtenia = document.getElementsByName("etajpomeshtenia[]");
if(document.getElementById("etajnaobitavane").value.length > 0 )
{
for (var i = 0; i < etajpomeshtenia.length; i++) {
    etajpomeshtenia[i].disabled = true;
    etajpomeshtenia[i].checked = false;
}
}
else{ document.getElementById("etajnaobitavane").value.length = 0

for (var i = 0; i < etajpomeshtenia.length; i++) {
    etajpomeshtenia[i].disabled = false;
   }
}
}

var disable36check = function () {
var nastilki = document.getElementsByName("nastilki[]");
if(document.getElementById("drugvid").value.length > 0 )
{
for (var i = 0; i < nastilki.length; i++) {
    nastilki[i].disabled = true;
    nastilki[i].checked = false;
}
}
else{ document.getElementById("drugvid").value.length = 0

for (var i = 0; i < nastilki.length; i++) {
    nastilki[i].disabled = false;
   }
}
}

var disable37check = function () {
var broihora = document.getElementsByName("broihora[]");
if(document.getElementById("broihoratext").value.length > 0 )
{
for (var i = 0; i < broihora.length; i++) {
    broihora[i].disabled = true;
    broihora[i].checked = false;
}
}
else{ document.getElementById("broihoratext").value.length = 0

for (var i = 0; i < broihora.length; i++) {
    broihora[i].disabled = false;
   }
}
}



var disable40check = function () {
var sloinasteni = document.getElementsByName("sloinasteni[]");
if(document.getElementById("drugsloi").value.length > 0 )
{
for (var i = 0; i < sloinasteni.length; i++) {
    sloinasteni[i].disabled = true;
    sloinasteni[i].checked = false;
}
}
else{ document.getElementById("drugsloi").value.length = 0

for (var i = 0; i < sloinasteni.length; i++) {
    sloinasteni[i].disabled = false;
   }
}
}



 function Enable43Answer() {
if (document.getElementById("izolociada").checked==true) {
document.getElementById("expand").disabled=false;
document.getElementById("extrud").disabled=false;
document.getElementById("minvat").disabled=false;

document.getElementById("EPS").disabled=false;
document.getElementById("XPS").disabled=false;
document.getElementById("mineralnavata").disabled=false;
document.getElementById("drugotoplizo").disabled=false;
document.getElementById("neznamtoplizo").disabled=false;
}
else if (document.getElementById("izolociane").checked==true || document.getElementById("izolocianeznam").checked==true )
{
document.getElementById("expand").value="";
document.getElementById("extrud").value="";
document.getElementById("minvat").value="";
document.getElementById("drugotoplizo").value="";
document.getElementById("expand").disabled=true;
document.getElementById("extrud").disabled=true;
document.getElementById("minvat").disabled=true;
document.getElementById("drugotoplizo").disabled=true;
document.getElementById("EPS").disabled=true;
document.getElementById("XPS").disabled=true;
document.getElementById("mineralnavata").disabled=true;
document.getElementById("neznamtoplizo").disabled=true;
document.getElementById("EPS").checked=false;
document.getElementById("XPS").checked=false;
document.getElementById("mineralnavata").checked=false;
document.getElementById("neznamtoplizo").checked=false;
}
}

var disableCheck43 = function () {
var vidtoplizolacia = document.getElementsByName("vidtoplizolacia")
if(document.getElementById("drugotoplizo").value.length > 0 )
{
for (var i = 0; i < vidtoplizolacia.length; i++) {
vidtoplizolacia[i].disabled = true;
vidtoplizolacia[i].checked = false;
document.getElementById("expand").value="";
document.getElementById("extrud").value="";
document.getElementById("minvat").value="";
}
}
else{ document.getElementById("drugotoplizo").value.length = 0

for (var i = 0; i < vidtoplizolacia.length; i++) {
    vidtoplizolacia[i].disabled = false;
}
}
}


function enableText43 (){
document.getElementById("expand").disabled=true;
document.getElementById("extrud").disabled=true;
document.getElementById("minvat").disabled=true;
var vidtoplizolacia=document.getElementsByName("vidtoplizolacia");
for (i=0; i < vidtoplizolacia.length; i+=1){
vidtoplizolacia[i].onclick=enableText43Check;
}
}
function enableText43Check() {
switch(this.id) {
case "EPS" :
document.getElementById("expand").disabled=false;
break;
case "XPS" :
document.getElementById("extrud").disabled=false;
break;
case "mineralnavata" :
document.getElementById("minvat").disabled=false;
break;
case "neznamtoplizo" :
document.getElementById("EPS").checked=false;
document.getElementById("XPS").checked=false;
document.getElementById("mineralnavata").checked=false;
document.getElementById("expand").value="";
document.getElementById("extrud").value="";
document.getElementById("minvat").value="";
document.getElementById("expand").disabled=true;
document.getElementById("extrud").disabled=true;
document.getElementById("minvat").disabled=true;
break;
}
}


function enableText47 (){
document.getElementById("kakvimerki").disabled=true;
var merki=document.getElementsByName("zashtitnimerki");
for (i=0; i < merki.length; i+=1){
merki[i].onclick=enableText47Radio;
}
}
function enableText47Radio() {
switch(this.id) {
case "merkida" :

document.getElementById("kakvimerki").disabled=false;
break;
case "merkine" :
document.getElementById("kakvimerki").value="";
document.getElementById("kakvimerki").disabled=true;

break;
case "merkineznam" :
document.getElementById("kakvimerki").value="";
document.getElementById("kakvimerki").disabled=true;
break;
}
}


var disable48check = function () {
var nomerizmervane = document.getElementsByName("nomerizmervanenaradon");
if(document.getElementById("drugoporedizm").value.length > 0 )
{
for (var i = 0; i < nomerizmervane.length; i++) {
    nomerizmervane[i].disabled = true;
    nomerizmervane[i].checked = false;
}
}
else{ document.getElementById("drugoporedizm").value.length = 0

for (var i = 0; i < nomerizmervane.length; i++) {
    nomerizmervane[i].disabled = false;
   }

}
}




    


