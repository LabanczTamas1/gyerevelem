
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
