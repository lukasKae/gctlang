<?php
global $LANG;
// Letzter Stand: 15.05.2014 
// Index Main Menu
$LANG['Index']['Mainmenu']['Home'] = "Home";
$LANG['Index']['Mainmenu']['Profil'] = "My Profile";
$LANG['Index']['Mainmenu']['Stats'] = "Server Statistics";
$LANG['Index']['Mainmenu']['Speak'] = "Language";
$LANG['Index']['Maintance'] = "Our User Control Panel is in maintain mode.<br /> Grund: {maintancereason}";
$LANG['Index']['OnlyLogin'] = "You have to log in to see this area!";


// Page User
$LANG['Page']['User']['Account']['EMail']['Change']['Newnotsame'] = "Your entered new-E-mail adresses don't match. Please retry.";
$LANG['Page']['User']['Account']['EMail']['Change']['Oldnotsame'] = "Your entered old-E-mail doesnt match our records. Please retry.";
$LANG['Page']['User']['Account']['EMail']['Change']['Success'] = "Your E-Mail adress has succesfully been changed.";
$LANG['User']['Changemail']['Title'] = "Changes on your Gameaccount";
$LANG['User']['Changemail']['Text']= "Dear {username},\\r\\n\r\n\\r\\n\r\nyour German-Crimetime account has been changed via. our User Control-Panel..\\r\\n\r\n\\r\\n\r\n\\r\\n\r\n<strong> Changes: {what} has been changed to {inwhat} </strong> \\r\\n\r\nYours,\\r\\n\r\nthe German Crimetime Team";
$LANG['Page']['User']['Account']['Mail']['Button'] = "Change E-Mail adress";
$LANG['Page']['User']['Account']['EMail']['New'][1] = "Repeat your new E-Mail adress:";
$LANG['Page']['User']['Account']['Email']['New'][0] = "Enter your new E-Mail adress:";
$LANG['Page']['User']['Account']['Passwort']['Heading'] = "Change account password";
$LANG['Page']['User']['Account']['EMail']['Heading'] = "Change E-Mail";
$LANG['Page']['User']['Account']['Passwort']['Old'] = "Your password: ";
$LANG['Page']['User']['Account']['Passwort']['New'][0] = "Your new Password: ";
$LANG['Page']['User']['Account']['Passwort']['New'][1] = "Repeat your new Password: ";
$LANG['Page']['User']['Account']['Passwort']['Button'] = "Change account password";
$LANG['Page']['User']['Account']['Passwort']['Change']['Success'] = "<strong>Success!</strong>Your password has been successfully changed. Your will be logged out now.";
$LANG['Page']['User']['Account']['Passwort']['Change']['Oldnotsame'] = "<strong>Error!</strong> Your entered password does not match our records.";
$LANG['Page']['User']['Account']['Passwort']['Change']['Newnotsame'] = "<strong>Error!</strong> Your entered passwords do not match.";


// Page Password Lose
$LANG['Page']['Pwlose']['Form']['Success'] = "Success! A new password has been sent to your E-Mail adress.";
$LANG['Page']['Pwlose']['Form']['Error']['NotFound'] = "Your entered username has not been found.";
$LANG['Page']['Pwlose']['Form']['Input']['Username'] = "Enter your Username:";
$LANG['Page']['Pwlose']['Form']['Button']['Submit'] = "Sent me a new password";


// Page Teamspeak Registration
$LANG['Page']['Ts3']['Form']['Input'] = "Your unique TeamSpeak3 ID";
$LANG['Page']['Ts3']['Form']['Button'] = "Register";
$LANG['Page']['Ts3']['Form']['Error']['ToShort'] = "<strong>Error:</strong> A unique ID must have 28 letters.";
$LANG['Page']['Ts3']['Form']['Error']['Server']['Down'] = "<strong>Error:</strong> The Server is not reachable.";
$LANG['Page']['Ts3']['Form']['Success'] = "<h4>Success!</h4>You are registered now.";
$LANG['Page']['Ts3']['Form']['Error']['NotFound'] = "<h4>Information:</h4>Your entered unique ID doesn't exist!";


// Page API
$LANG['Page']['Api']['Home']['Input']['Success']['NewKey'] = "Your generated a new API Key. Your API Key: {apikey}\r\n";
$LANG['Page']['Api']['Home']['Button'] = "Request new API key";
$LANG['Page']['Api']['Home']['Delete'] = "Delete API Key";
$LANG['Page']['Api']['Home']['Success']['DelKey'] = "<strong>Success!</strong> Your API Key has been deleted.";


// Team Ranks
$LANG['Team']['Ranks']['CommunityHelfer'] = "Community-Helper";
$LANG['Team']['Ranks']['Supporter'] = "Supporter";
$LANG['Team']['Ranks']['Moderator'] = "Moderator";
$LANG['Team']['Ranks']['Administrator'] = "Administrator";
$LANG['Team']['Ranks']['Full-Administrator'] = "Full-Administrator";
$LANG['Team']['Ranks']['Projektleiter'] = "CEO / Project manager";
$LANG['Team']['Ranks']['WebDeveloper'] = "Web Developer";


// Page Serverstats
$LANG['Page']['Serverstats']['Userstatistics']['Title'] = "User statistics";
$LANG['Page']['Serverstats']['Groupstatistics']['Title'] = "Group statistics";
$LANG['Page']['Serverstats']['Team']['Title'] = "GCT Team";
$LANG['Page']['Serverstats']['Team']['Rank'] = "Team Rank";
$LANG['Page']['Serverstats']['Userstatistics']['Coplevel']['Title'] = "Top 10 by Cop level";
$LANG['Page']['Serverstats']['Userstatistics']['Ganglevel']['Title'] = "Top 10 by Gang level";
$LANG['Page']['Serverstats']['Userstatistics']['Money']['Title'] = "Top 10 by Money";
$LANG['Page']['Serverstats']['Userstatistics']['Deaths']['Title'] = "Top 10 by Deaths";
$LANG['Page']['Serverstats']['Userstatistics']['Kills']['Title'] = "Top 10 by Kills";
$LANG['Page']['Serverstats']['Userstatistics']['Place']['Show'] = "Rank";
$LANG['Page']['Serverstats']['Userstatistics']['Name']['Show'] = "Username";
$LANG['Page']['Serverstats']['Userstatistics']['Level']['Show'] = "Level";
$LANG['Page']['Serverstats']['Userstatistics']['Money']['Show'] = "Money";
$LANG['Page']['Serverstats']['Userstatistics']['Deaths']['Show'] = "Deaths";
$LANG['Page']['Serverstats']['Userstatistics']['Kills']['Show'] = "Kills";
$LANG['Page']['Serverstats']['Groupstatistics']['EXP'] = "EXP";
$LANG['Page']['Serverstats']['Groupstatistics']['Money'] = "Group money";
$LANG['Page']['Serverstats']['Groupstatistics']['Kills'] = "Kills";
$LANG['Page']['Serverstats']['Groupstatistics']['Deaths'] = "Deaths";
$LANG['Page']['Serverstats']['Groupstatistics']['Member'] = "Members";
$LANG['Page']['Serverstats']['Userstatistics']['Derby']['Show'] = "Won Derbys";
$LANG['Page']['Serverstats']['Userstatistics']['Derby']['Title'] = "Top 10 by Derbys";


// Page Login & Logout
$LANG['Page']['Login']['Form']['Username'] = "Username";
$LANG['Page']['Login']['Form']['Password'] = "Password";
$LANG['Page']['Login']['Success'] = "<strong>Success!</strong> You are logged in now..";
$LANG['Page']['Login']['Error']['Ban'] = "<strong>Fehler!</strong> You are banned permanently, so you can't login.<strong>Banreason: {banreason}</strong>";
$LANG['Page']['Login']['Error']['NotFound']['Main'] = "<strong>Error!</strong> Your entered data is incorrect. Please check your entered username and password.";
$LANG['Page']['Login']['Form']['Username'] = "Username";
$LANG['Page']['Logout']['Success'] = "<strong>Erfolgreich!</strong> You successfully logged out.";
$LANG['Page']['Login']['Error']['NotFound']['Maintance'] = "<strong>Error!</strong> Die eingegeben Login Daten konnten nicht gefunden werden oder du bist nicht berechtigt dazu auf das UCP im Wartungsmodus zuzugreifen.";
$LANG['Page']['Login']['losepw'] = "Can't login?";

// Page UserMenu
$LANG['Index']['Usermenu']['Login'] = "Log In";
$LANG['Index']['Usermenu']['Greeting'] = "Welcome";
$LANG['Index']['Usermenu']['Logout'] = "Log Out";
$LANG['Index']['Usermenu']['Guest'] = "Guest";
$LANG['Index']['Usermenu']['AccountChange'] = "Edit Account";
$LANG['Index']['Usermenu']['Teamspeak'] = "Teamspeak Registration";
$LANG['Index']['Usermenu']['Api'] = "Developerarea(API)";
$LANG['Index']['Usermenu']['Suppanel'] = "Supporterpanel";
$LANG['Index']['Usermenu']['Adminpanel'] = "Adminpanel";
$LANG['Index']['Usermenu']['Devpanel'] = "Developerpanel";


// Page Home
$LANG['Page']['Home']['ServerInfo']['Title'] = "Serverinformations";
$LANG['Page']['Home']['ServerInfo']['Samp'] = "SAMP Server:";
$LANG['Page']['Home']['ServerInfo']['Ts'] = "Teamspeak3 Server:";
$LANG['Page']['Home']['ServerInfo']['Board'] = "Board:";
$LANG['Page']['Home']['ServerViewer'] = "Now online on GCT:";
$LANG['Page']['Home']['News']['Time'] = "written by {writer}. {time}";

// Page 404
$LANG['Page']['404'] = "<strong>Error!</strong> 404 Page not found.";


// Page Profil
$LANG['Page']['Profil']['Name'] = "Username";
$LANG['Page']['Profil']['Money']['Hand'] = "Money(Hand)";
$LANG['Page']['Profil']['Money']['Bank'] = "Money(Bank)";
$LANG['Page']['Profil']['Group']['Title'] = "Group";
$LANG['Page']['Profil']['Group']['NoGroup'] = "Not in a group.";
$LANG['Page']['Profil']['Level']['Cop'] = "Coplevel";
$LANG['Page']['Profil']['Level']['Gang'] = "Ganglevel";
$LANG['Page']['Profil']['Derby'] = "Won Derbys";
$LANG['Page']['Profil']['KD'] = "Kills/Deaths (KD)";
$LANG['Page']['Profil']['Playtime']['Title'] = "Total played:";
$LANG['Page']['Profil']['Playtime']['Normal'] = "{days} Days {hours} Hours {mins} Minutes and {secs} Seconds";
$LANG['Page']['Profil']['Playtime']['Jail'] = "Thereof in prison: {days} Days {hours} Hours {mins} Minutes and {secs} Seconds";
$LANG['Page']['Profil']['RobberSkills'] = "Robber skills";


?>

