<?php
global $LANG;
// Letzter Stand: 15.05.2014 
// Index Main Menu
$LANG['Index']['Mainmenu']['Home'] = "Startseite";
$LANG['Index']['Mainmenu']['Profil'] = "Dein Profil";
$LANG['Index']['Mainmenu']['Stats'] = "Server Statistiken";
$LANG['Index']['Mainmenu']['Speak'] = "Sprache";
$LANG['Index']['Maintance'] = "Das UCP befindet sich im Wartungsmodus.<br /> Grund: {maintancereason}";
$LANG['Index']['OnlyLogin'] = "Dieser Bereich ist nur für eingeloggte User verfügbar!";


// Page User
$LANG['Page']['User']['Account']['EMail']['Change']['Newnotsame'] = "Die Wiederholung der neuen E-Mail Addresse stimmt nicht überein.";
$LANG['Page']['User']['Account']['EMail']['Change']['Oldnotsame'] = "Die Wiederholung deiner alten E-Mail Addresse stimmt nicht überein.";
$LANG['Page']['User']['Account']['EMail']['Change']['Success'] = "Deine E-Mail wurde erfolgreich geändert.";
$LANG['User']['Changemail']['Title'] = "Änderung deiner Nutzerdaten";
$LANG['User']['Changemail']['Text'] = "Guten Tag Lieber {username},\\r\\n\r\n\\r\\n\r\ndein Account wurde auf dem Server German-Crimetime über das Control Panel bearbeitet.\\r\\n\r\n\\r\\n\r\n\\r\\n\r\n<strong> Änderung: {what} geändert zu {inwhat} </strong> \\r\\n\r\nMit freundlichen Grüßen\\r\\n\r\nDas German Crimetime Team";
$LANG['Page']['User']['Account']['EMail']['Button'] = "E-Mail ändern";
$LANG['Page']['User']['Account']['EMail']['New'][1] = "Wiederhole deine neue E-Mail:";
$LANG['Page']['User']['Account']['EMail']['New'][0] = "Gebe deine neue E-Mail ein:";
$LANG['Page']['User']['Account']['Passwort']['Heading'] = "Passwort ändern";
$LANG['Page']['User']['Account']['EMail']['Heading'] = "E-Mail ändern";
$LANG['Page']['User']['Account']['Passwort']['Old'] = "Dein aktuelles Passwort: ";
$LANG['Page']['User']['Account']['Passwort']['New'][0] = "Dein neues Passwort: ";
$LANG['Page']['User']['Account']['Passwort']['New'][1] = "Wiederhole dein neues Passwort: ";
$LANG['Page']['User']['Account']['Passwort']['Button'] = "Passwort ändern";
$LANG['Page']['User']['Account']['Passwort']['Change']['Success'] = "<strong>Erfolgreich!</strong>Du hast dein Passwort erfolgreich geändert. Zur Sicherheit wirst du nun abgemeldet.";
$LANG['Page']['User']['Account']['Passwort']['Change']['Oldnotsame'] = "<strong>Fehler!</strong> Das eingegebene alte Passwort stimmt nicht mit der Datenbank überein.";
$LANG['Page']['User']['Account']['Passwort']['Change']['Newnotsame'] = "<strong>Fehler!</strong> Die eingegeben neuen Passwörter sind nicht identisch.";


// Page Password Lose
$LANG['Page']['Pwlose']['Form']['Success'] = "Ein neues Passwort wurde dir via Mail zugesendet. Dein altes Passwort wurde gespeichert, sofern du es zurücksetzen willst.";
$LANG['Page']['Pwlose']['Form']['Error']['NotFound'] = "Der Nutzername wurde nicht gefunden.";
$LANG['Page']['Pwlose']['Form']['Input']['Username'] = "Gebe deinen Username ein:";
$LANG['Page']['Pwlose']['Form']['Button']['Submit'] = "Passwort anfordern";


// Page Teamspeak Registration
$LANG['Page']['Ts3']['Form']['Input'] = "Deine eindeutige TS³ ID";
$LANG['Page']['Ts3']['Form']['Button'] = "Freischalten";
$LANG['Page']['Ts3']['Form']['Error']['ToShort'] = "<strong>Fehler:</strong> Deine eindeutige TS³ ID muss 28 Zeichen lang sein.";
$LANG['Page']['Ts3']['Form']['Error']['Server']['Down'] = "<strong>Fehler:</strong> Der Server ist zur Zeit nicht erreichbar.";
$LANG['Page']['Ts3']['Form']['Success'] = "<h4>Teamspeak 3 Registration Erfolgreich</h4>Du hast dich im Teamspeak Erfolgreich Registriert und dir wurden die Rechte zugewiesen.";
$LANG['Page']['Ts3']['Form']['Error']['NotFound'] = "<h4>Information:</h4>Die angegebene EindeutigeID exestiert nicht!";


// Page API
$LANG['Page']['Api']['Home']['Button'] = "Neuen Key anfordern";
$LANG['Page']['Api']['Home']['Success']['NewKey'] = "Du hast einen neuen API Key generiert. Dieser lautet: {apikey}\r\n";
$LANG['Page']['Api']['Home']['Delete'] = "API Key Löschen";
$LANG['Page']['Api']['Home']['Success']['DelKey'] = "<strong>Erfolgreich!</strong> Der API Key wurde gelöscht.";


// Team Ranks
$LANG['Team']['Ranks']['CommunityHelfer'] = "Community-Helfer";
$LANG['Team']['Ranks']['Supporter'] = "Supporter";
$LANG['Team']['Ranks']['Moderator'] = "Moderator";
$LANG['Team']['Ranks']['Administrator'] = "Administrator";
$LANG['Team']['Ranks']['Full-Administrator'] = "Full-Administrator";
$LANG['Team']['Ranks']['Projektleiter'] = "Projektleiter";
$LANG['Team']['Ranks']['WebDeveloper'] = "Web Developer";


// Page Serverstats
$LANG['Page']['Serverstats']['Userstatistics']['Title'] = "Nutzerstatistik";
$LANG['Page']['Serverstats']['Groupstatistics']['Title'] = "Gruppenstatistiken";
$LANG['Page']['Serverstats']['Team']['Title'] = "Das GCT Team";
$LANG['Page']['Serverstats']['Userstatistics']['Coplevel']['Title'] = "Top 10 nach Coplevel";
$LANG['Page']['Serverstats']['Userstatistics']['Ganglevel']['Title'] = "Top 10 nach Ganglevel";
$LANG['Page']['Serverstats']['Userstatistics']['Money']['Title'] = "Top 10 nach Geld";
$LANG['Page']['Serverstats']['Userstatistics']['Deaths']['Title'] = "Top 10 nach Toden";
$LANG['Page']['Serverstats']['Userstatistics']['Kills']['Title'] = "Top 10 nach Kills";
$LANG['Page']['Serverstats']['Userstatistics']['Derby']['Title'] = "Top 10 nach Derbysiegen";
$LANG['Page']['Serverstats']['Userstatistics']['Place']['Show'] = "Rang";
$LANG['Page']['Serverstats']['Userstatistics']['Name']['Show'] = "Username";
$LANG['Page']['Serverstats']['Userstatistics']['Level']['Show'] = "Level";
$LANG['Page']['Serverstats']['Userstatistics']['Money']['Show'] = "Geld";
$LANG['Page']['Serverstats']['Userstatistics']['Deaths']['Show'] = "Deaths";
$LANG['Page']['Serverstats']['Userstatistics']['Kills']['Show'] = "Kills";
$LANG['Page']['Serverstats']['Userstatistics']['Derby']['Show'] = "Gewonnen Derbys";
$LANG['Page']['Serverstats']['Groupstatistics']['EXP'] = "EXP";
$LANG['Page']['Serverstats']['Groupstatistics']['Money'] = "Gruppenkasse";
$LANG['Page']['Serverstats']['Groupstatistics']['Kills'] = "Kills";
$LANG['Page']['Serverstats']['Groupstatistics']['Deaths'] = "Deaths";
$LANG['Page']['Serverstats']['Groupstatistics']['Member'] = "Mitglieder";
$LANG['Page']['Serverstats']['Team']['Rank'] = "Teamposition";


// Page Login & Logout
$LANG['Page']['Login']['Form']['Username'] = "Benutzername";
$LANG['Page']['Login']['Form']['Password'] = "Passwort";
$LANG['Page']['Login']['Success'] = "<strong>Erfolgreich!</strong> Du bist nun angemeldet.";
$LANG['Page']['Login']['Error']['Ban'] = "<strong>Fehler!</strong> Du wurdest permanent gebannt. Du kannst dich somit nicht im UCP einloggen.<strong>Grund: {banreason}</strong>";
$LANG['Page']['Login']['Error']['NotFound']['Main'] = "<strong>Fehler!</strong> Die Angaben sind ungültig. Bitte überprüfe deinen Benutzernamen und dein Passwort.";
$LANG['Page']['Login']['Form']['Username'] = "Benutzername";
$LANG['Page']['Logout']['Success'] = "<strong>Erfolgreich!</strong> Du hast dich erfolgreich ausgeloggt.";
$LANG['Page']['Login']['Error']['NotFound']['Maintance'] = "<strong>Fehler!</strong> Die eingegeben Login Daten konnten nicht gefunden werden oder du bist nicht berechtigt dazu auf das UCP im Wartungsmodus zuzugreifen.";
$LANG['Page']['Login']['LosePW'] = "Passwort vergessen?";

// Page UserMenu
$LANG['Index']['Usermenu']['Login'] = "Anmelden";
$LANG['Index']['Usermenu']['Greeting'] = "Hallo";
$LANG['Index']['Usermenu']['Logout'] = "Abmelden";
$LANG['Index']['Usermenu']['Guest'] = "Gast";
$LANG['Index']['Usermenu']['AccountChange'] = "Account bearbeiten";
$LANG['Index']['Usermenu']['Teamspeak'] = "Teamspeak Registrierung";
$LANG['Index']['Usermenu']['Api'] = "Developerbereich(API)";
$LANG['Index']['Usermenu']['Suppanel'] = "Supporterpanel";
$LANG['Index']['Usermenu']['Adminpanel'] = "Adminpanel";
$LANG['Index']['Usermenu']['Devpanel'] = "Developerpanel";


// Page Home
$LANG['Page']['Home']['ServerInfo']['Title'] = "Serverinformation";
$LANG['Page']['Home']['ServerInfo']['Samp'] = "SAMP Server:";
$LANG['Page']['Home']['ServerInfo']['Ts'] = "Teamspeak Server:";
$LANG['Page']['Home']['ServerInfo']['Board'] = "Forum:";
$LANG['Page']['Home']['ServerViewer'] = "Zur Zeit in SAMP unterwegs:";
$LANG['Page']['Home']['News']['Time'] = "geschrieben von {writer} am {time}";

// Page 404
$LANG['Page']['404'] = "<strong>Fehler!</strong> Die angeforderte Seite konnte nicht gefunden werden.";


// Page Profil
$LANG['Page']['Profil']['Name'] = "Nutzername";
$LANG['Page']['Profil']['Money']['Hand'] = "Geld(Hand)";
$LANG['Page']['Profil']['Money']['Bank'] = "Geld(Bank)";
$LANG['Page']['Profil']['Group']['Title'] = "Gruppe";
$LANG['Page']['Profil']['Group']['NoGroup'] = "Keine Gruppe";
$LANG['Page']['Profil']['Level']['Cop'] = "Coplevel";
$LANG['Page']['Profil']['Level']['Gang'] = "Ganglevel";
$LANG['Page']['Profil']['Derby'] = "Derbysiege";
$LANG['Page']['Profil']['KD'] = "Kills/Deaths (KD)";
$LANG['Page']['Profil']['Playtime']['Title'] = "Spielzeit:";
$LANG['Page']['Profil']['Playtime']['Normal'] = "{days} Tage {hours} Stunden {mins} Minuten und {secs} Sekunden";
$LANG['Page']['Profil']['Playtime']['Jail'] = "davon im Knast : {days} Tage {hours} Stunden {mins} Minuten und {secs} Sekunden";
$LANG['Page']['Profil']['RobberSkills'] = "Robberskills:";


?>

