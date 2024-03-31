
# 2. Java technológiai áttekintés
### Java virtuális gép (JVM) fogalma
A Java programok fordítása rendszerint egy gépfüggetlen
bájtkód reprezentációba történik, melynek végrehajtására a
Java virtuális gépek szolgálnak.
 Egy saját utasításkészlettel rendelkező és vezérelhető absztrakt
számítógép, mely semmit sem tud a Java programozási nyelvről, hanem
csak egy speciális bináris formátumot ismer, a class állományformátumot.
##### Szabad és nyílt forrású implementációk:
HotSpot
Eclipse
##### Nem szabad implementációk:
PTC Perc
Azul Platform Prime
### Java platformok: Java SE, Java EE/Jakarta EE
A platform kifejezés azt a hardver vagy szoftver környezetet
jelenti, melyben egy program fut.
*Java SE* Java platform asztali és szerver számítógépekre történő alkalmazásfejlesztéshez.
*Java EE* API-t és futtató környezetet biztosít többrétegű,
skálázható, megbízható és biztonságos szerver
oldali alkalmazások fejlesztéséhez és
futtatásához.
*Jakarta EE* 2018. február 26-án bejelentésre került, hogy a
korábban Java EE-ként ismert technológia
Jakarta EE-re lett átnevezve.
### Java Runtime Environment (JRE), Java Development Kit (JDK)
Java futtató környezet (Java Runtime Environment) (JRE)
Java fejlesztői készlet (Java Development Kit) (JDK)
### OpenJDK ´es Oracle JDK, kapcsolatuk
*OpenJDK* Fejlesztők csoportulása, akik a Jave SE implementációin dolgoznak.
*Oracle JDK* A két JDK forráskódja nagymértékben azonos, az Oracle JDK
azonban tartalmaz nem nyílt forrású üzleti funkciókat is.
### A Java SE aktuális kiadási modellje
A legutóbbi LTS verzió a Java SE 21, mely 2023. szeptember
19-én jelent meg.

# 3. Rendszer építés
### Mi a rendszer építés?
A rendszerépítés az a folyamat, melynek során egy teljes végrehajtható
rendszer kerül létrehozásra a rendszerkomponensek, külső könyvtárak,
konfigurációs állományok és további információk lefordításával és
összeszerkesztésével.
### Build automatizálás, automatikus build eszközök, build eszközök funkciói
A rendszerépítés nagy mennyiségű, a szoftverrel és a működési
környezetével kapcsolatos információ összegyűjtésével jár. Emiatt
érdemes egy automatikus build eszközt használni a rendszerépítéshez.
Ideális esetben egyetlen paranccsal összeállítható egy teljes rendszer.
1. Build szkript generálás:
2. Verziókezelő rendszer integráció
3. Minimális újrafordítás
4. Végrehajtható rendszer létrehozása
5. Teszt automatizálás
6. Jelentéskészítés
7. Dokumentáció generálás
8. Függőségkezelés
### DevOps fogalma
Definíció (SEVOCAB):
Alapelvek és gyakorlatok, melyek jobb kommunikációt és
együttműködést tesznek lehetővé az érdekelt felek között szoftver és
rendszer termékek és szolgáltatások specifikálása, fejlesztése és
működtetése céljából.
A kifejezés a fejlesztés (Dev) és az üzemeltetés (Ops) kifejezések
kombinációja.

# 4. Apache Maven

### Mi az Apache Maven?
Egy projektkezelő eszköz, mindent megcsinál, összeállítási folyamatot kezeli, projekt információkat szolgáltat, verziót és függőséget kezel, jelentést készít, webhelyet hozhat létre, illetve disztribúciót tesz közzé és feneket töröl.
A szabványos könyvtárszerkezet
 
Parancssori használat
mvn -el kezdődnek, mvn help manualt hoz be, mvn site:run, mvn package, vagy tároló és artifact elérése groupId:artifactId:verzió:cél: pl. mvn org.codehaus.mojo:versions-mavenplugin:2.14.2:help
Alapfogalmak: 
Termék: Egy projekt által előállított állomány, mely annak végső termékének tekinthető. – Egy projektben általában egy termék készül (például egy jar csomagolású projektben egyetlen JAR állomány). A classifier POM elem szolgál az egy projekt által létrehozott termékek megkülönböztetésére.  Tárolókban kerülnek közzétételre, mely lehetővé teszi a más projektekhez függőségként történő felhasználásukat.
POM: Egy projekt deklaratív leírását tartalmazó XML dokumentum (pom.xml).
Szuper POM: A szuper-POM a Maven által alapértelmezésben használt POM. Ha egy projektnek nincs explicit módon megadott szülője, akkor az úgynevezett szuper-POM beállításait örökli
Effektív POM:  A projekthez tartozó POM, a felmenő ági projektekhez tartozó POM-ok és a szuper-POM kombinációja.  A futás során a projekthez ténylegesen felhasználásra kerülő beállításokat szolgáltatja.
Maven koordináták:
groupId: csoportazonosító, melynél gyakori a fordított domain-nevek használata (pl org.apache.maven.plugins)
artifactId: projektnév.
version: verzió. na hát! ☠️
groupId:artifactId:version a sorrend pl hu:videosbolt.unfield:2.1



Bővítmények: 
Szinte minden funkciót bővítmények nyújtanak. – A bővítmények egy-egy funkciót megvalósító célokat szolgáltatnak. 
 A bővítmények is termékek, melyekre a Maven koordinátákkal lehet hivatkozni. – Példa a POM-ban történő hivatkozásra:  org.apache.maven.plugins maven-javadoc-plugin 3.5.0 
 Minden bővítményhez tartozik egy olyan előtag, mely lehetővé teszi az egyes célokra előtag:cél formában történő hivatkozást, mint például site:deploy.40 
Névkonvenció: – A hivatalos, azaz az Apache Maven projektben fejlesztett bővítmények neve maven-xyz-plugin formájú, ahol xyz az előtag.
 Más bővítményeknél tilos ezt a mintát követni. – Más bővítményeknél xyz-maven-plugin az ajánlott forma, ahol xyz az előtag.
 Az előtagot a bővítmények határozhatják meg a róluk metaadatokat szolgáltató plugin.xml állományban. 
 A Maven alapértelmezésben csak az org.apache.maven.plugins és az org.codehaus.mojo csoportokba tartozó bővítmények céljaira való hivatkozásokat teszi lehetővé előtagok révén. 
– Lásd a maven-metadata-central.xml állományokat a $HOME/.m2/repository/org/apache/maven/plugins és a $HOME/.m2/repository/org/codehaus/mojo könyvtárakban.

Tárolók: A termékek, köztük a bővítmények elérése tárolókból történik, amelyeknek két fajtája van:
Távoli tároló: A weben érhetők el, például HTTP vagy HTTPS protokollon keresztül. Van központi tárolója is a Mavennek.
Lokális tároló: Lokális helyi letöltött termékeket tartalmaz és az mvn install-al telepített termékeket.

Életciklusok, életciklus fázisok (ZH POZITÍV KÉRDÉS )
Életciklusok: Egy életciklus jól meghatározott életciklus fázisok egy sorozatát jelenti. Minden életciklus fázist egy egyedi név azonosít. – A fázisokhoz bővítmény-célokat lehet hozzárendelni, a hozzárendelést kötésnek nevezik. 
Az életciklus fázisok végrehajtása a hozzájuk tartozó bővítmény-célok végrehajtását jelenti. – Adott fázis végrehajtása maga után vonja valamennyi, a sorrendben azt megelőző fázis végrehajtását
Három szabványos életciklus: clean, default, site
A site életciklusai: pre-site, site, post-site, site-deploy, általában ez is a séma, kivéve a defaultnál
A clean életciklus az alábbi három életciklus fázist tartalmazza: pre-clean, clean, post-clean
A default életciklus és főbb fázisai 
1. generate-sources: resources:resources
2. process-resources : resources:resources
3. compile: compiler:compile
4. package: ejb:ejb / jar:jar / rar:rar / war:war 
5. install: install:install
6. deploy: deploy:deploy

Tulajdonságok, hivatkozás tulajdonságokra
A ${x} formájú hivatkozások helyettesítése a POM-ban. 
${env.név} formájú hivatkozások helyettesítése a megfelelő nevű környezeti változó értékével.
A hivatkozásban megadható Java rendszertulajdonság neve. Pl: ${java.home}, ${line.separator}
${project.x} formájú hivatkozások helyettesítése a POM megfelelő elemének értékével. Csak egyszerű típusú elemekhez használható!
${settings.x} formájú hivatkozások helyettesítése a settings.xml állomány megfelelő elemének értékével
Függőségek megadása (Ami kell):
groupId, artifactId, version: Sima Maven koordináták
classifier: az egy projekt által létrehozott termékek megkülönböztetésére szolgál. (javadoc, sources)
 type: a függőség típusát tartalmazza. A típus meghatározza a termék állománynév kiterjesztését (alapértelmezés: jar)
optional: opcionális-e a függőség  	
scope: a függőség hatáskörét tartalmazza 
Fontos elemei a scope-nak (zh kérdés)!!!!!!!!!!!:
compile: minden classpath tartalmazza a függőséget, a függő projekteknek is függősége lesz (ez az alapértelmezés)
provided: a függőséget a futtató környezet (például a JDK) biztosítja, csak a fordításhoz használt classpath tartalmazza, nem tranzitív
runtime: a függőség csak a végrehajtáshoz szükséges (a programtesztek végrehajtásánál is rendelkezésre áll)
system: a függőséget nem egy tároló szolgáltatja, hanem a lokális állományrendszerben található
test:a függőség csak a programtesztek fordításához és végrehajtásához áll rendelkezésre, nem tranzitív
import: kizárólag pom típusú függőségekhez adható meg a dependencyManagement részben, egy ilyen függőség kicserélésére kerül a POM-ja dependencyManagement részének függőségeire
Verziószámok
A verziószámok p.q.r-s alakúak 
p a főverzió,		 q az alverzió,	 	r inkrementális verzió,	   s build szám vagy minősítő 
Verzió követelmények (ZH POZITÍV)
Függőségekben verziószám helyett megadható verziótartomány.  ([3.8, 4.0]), 4.0 nél kisebb verziójú-> [,4.0)
Ha a <version> között csak egy verzió van akkor a Maven helyettesíti amivel akarja szal tökmind1 mit írsz oda, ez fossa le, de ha azt akarod hogy ugyanaz a verzió legyen akkor kapcsos zárójellel kell megadni [3.8] módon. Ha két különálló verziót máshogy adunk meg, akkor az BUILD FAILURE-t fog eredményezni.
Tranzitív függőségek, tranzitív függőségek kizárása (A←B, B←C, akkor A←C)
Ha B függősége A-nak, C pedig B-nek, akkor azt mondjuk, hogy C tranzitív függősége A-nak. A Maven képes megoldani tranzitív függőségek által adódott problémát. ☠️ ⚰️
Tranzitív függőségek kizárására szolgál az exclusions elem. 
Snapshot  és release termékek
Ha valami még nem jelent meg snapshot, ez hamar elavul, ha valami megjelent akkor az release, általában a 2 külön maven tárolót használ.
Öröklés
Olyan projekt lehet szülő, melynél a csomagolás módja pom.
A gyerek projekt a szülő projekthez tartozó POM-ból automatikusan örököl bizonyos beállításokat az effektív POM előállítása során, néha csak akkor lesz a szülőtől átvéve ha a gyerekbe nincs explicit módon megadva valami
Bizonyos elemek esetén a tartalom kombinálása történik, ha a szülő és a gyerek POM-ban is szerepelnek (repositories, plugins>
Profilok, profil aktiválás
A profilok a POM olyan opcionális beállításokat tartalmazó részei, amelyek csak aktiválás esetén kerülnek felhasználásra. Lehetővé teszik a POM futásidejű módosítását. Véld úgy hogy mint egy sablont
 
Bővítmények használata
Lényegében pluginok a <pluginsban>
A plugin elemben rendelkezésre álló elemek:
groupId, artifactId, version: a bővítmény Maven koordinátái
configuration: konfigurációs paramétereket tartalmaz a célok végrehajtásához, amely az xml séma tartalomra nem tesz semmilyen megszórítást
dependencies: a bővítményhez szükséges függőségeket tartalmazza
executions: lehetővé teszi bővítmény-célok végrehajtásának hozzákötését életciklus fázisokhoz
id: a végrehajtás egyedi azonosítója
phase: az életciklus fázis neve, amelyhez hozzá kell kötni a cél(ok) végrehajtását
goal: a végrehajtandó bővítmény-célok nevei
inherited: azt jelzi, hogy öröklés során át kell-e venni az execution elemet
configuration: konfigurációs paramétereket tartalmaz a goal elemekben felsorolt célok végrehajtásához
extensions: azt jelzi, hogy be kell-t tölteni a bővítmény kiterjesztéseit
inherited: azt jelzi, hogy öröklés során át kell-e venni a bővítmény beállításait (true, false)
Egy bővítmény-célhoz tartozhat egy alapértelmezett életciklus fázis, ekkor az execution elemben nem szükséges megadni a phase elemet.
Ha nincs alapértelmezett életciklus fázis, akkor a phase elem hiányában a bővítmény-cél nem kerül 
