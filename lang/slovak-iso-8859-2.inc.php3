<?php
/* $Id$ */

/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = '"verdana ce", "arial ce", verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = '"verdana ce", "arial ce", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';

$strAPrimaryKey = 'Bol pridan� prim�rny k��� pre %s';
$strAccessDenied = 'Pr�stup zamietnut�';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddNewField = 'Prida� nov� pole';
$strAddPriv = 'Prida� nov� privil�gium';
$strAddPrivMessage = 'Privil�gium bolo pridan�.';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dotazu po "where" pr�kaze):';
$strAddToIndex = 'Prida� do indexu &nbsp;%s&nbsp;st�pec';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Sp�';
$strAfterInsertNewInsert = 'Vlo�i� nov� z�znam';
$strAll = 'V�etko';
$strAllTableSameWidth = 'zobrazi� v�etky tabu�ky s rovnakou ��rkou?';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnIndex = 'Bol pridan� index pre %s';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAny = 'Ak�ko�vek';
$strAnyColumn = 'Ak�ko�vek st�pec';
$strAnyDatabase = 'Ak�ko�vek datab�za';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyTable = 'Ak�ko�vek tabu�ka';
$strAnyUser = 'Ak�ko�vek pou��vate�';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';

$strBack = 'Sp�';
$strBeginCut = 'ZA�IATOK V�SEKU';
$strBeginRaw = 'ZA�IATOK TOKU';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBookmarkDeleted = 'Z�znam z ob��ben�ch bol zmazan�.';
$strBookmarkLabel = 'N�zov';
$strBookmarkQuery = 'Ob��ben� SQL dotaz';
$strBookmarkThis = 'Prida� tento SQL dotaz do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowse = 'Prech�dza�';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'nie je mo�n� nahra� roz��renie pre MySQL,<br />pros�m skontrolujte konfigur�ciu PHP.';
$strCantLoadRecodeIconv = 'Nie je mo�n� nahra� roz��renie iconv alebo recode potrebn� pre prevod znakov�ch sad. Upravte nastavenie php tak aby umo��ovalo pou�i� tieto roz��renia alebo vypnite t�to vlastnos� v konfigur�cii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nie je mo�n� premenova� index na PRIMARY!';
$strCantUseRecodeIconv = 'Nie je mo�n� pou�i� funkcie iconv,libiconv a recode_string aj napriek tomu, �e roz��renia s� nahran�. Skontrolujte pros�m nastavenie PHP.';
$strCardinality = 'Mohutnos�';
$strCarriage = 'N�vrat voz�ku (Carriage return): \\r';
$strChange = 'Zmeni�';
$strChangeDisplay = 'Zvolte, ktor� pole zobrazi�';
$strChangePassword = 'Zmeni� heslo';
$strCharsetOfFile = 'Znakov� sada s�boru:';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckDbPriv = 'Skontrolova� privil�gia datab�zy';
$strCheckTable = 'Skontrolova� tabu�ku';
$strChoosePage = 'Pros�m zvolte si Str�nku, ktor� chcete upravi�';
$strColComFeat = 'Zobrazova� koment�re st�pcov';
$strColumn = 'St�pec';
$strColumnNames = 'N�zvy st�pcov';
$strComments = 'Koment�re';
$strCompleteInserts = '�pln� vlo�enie';
$strConfigureTableCoord = 'Pros�m skonfigurujte koordin�ty pre tabu�ku %s';
$strConfirm = 'Skuto�ne si �el�te toto vykona�?';
$strCookiesRequired = 'Cookies musia by� povolen�, pokia� chcete pokra�ova�.';
$strCopyTable = 'Skop�rova� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strCopyTable = 'Skop�rova� tabu�ku do';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCreate = 'Vytvori�';
$strCreateIndex = 'Vytvori� index na&nbsp;%s&nbsp;st�pcoch';
$strCreateIndexTopic = 'Vytvori� nov� index';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze %s';
$strCreatePage = 'Vytvori� nov� Str�nku';
$strCreatePdfFeat = 'Vytv�ranie PDF';
$strCriteria = 'Krit�ria';

$strData = 'D�ta';
$strDataDict = 'D�tov� slovn�k';
$strDataOnly = 'Iba d�ta';
$strDatabase = 'Datab�za ';
$strDatabaseHasBeenDropped = 'Datab�za %s bola zmazan�.';
$strDatabaseWildcard = 'Datab�za (nahradzuj�ce znaky povolen�):';
$strDatabases = 'datab�z(y)';
$strDatabasesStats = '�tatistiky datab�zy';
$strDefault = 'Predvolen�';
$strDelete = 'Zmaza�';
$strDeleteFailed = 'Mazanie bolo ne�spe�n�!';
$strDeleteUserMessage = 'Pou��vate� %s bol zmazan�.';
$strDeleted = 'Riadok bol zmazan�';
$strDeletedRows = 'Zmazan� riadky:';
$strDescending = 'Zostupne';
$strDisabled = 'Vypnut�';
$strDisplay = 'Zobrazi�';
$strDisplayFeat = 'Zobrazi� vlastnosti';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDisplayPDF = 'Zobrazi� sch�mu PDF';
$strDoAQuery = 'Vykona� "dotaz pod�a pr�kladu" (nahradzuj�ci znak: "%")';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDocu = 'Dokument�cia';
$strDrop = 'Odstr�ni�';
$strDropDB = 'Odstr�ni� datab�zu %s';
$strDropTable = 'Zru�i� tabu�ku';
$strDumpXRows = 'Zobrazi� %s riadkov od riadku %s.';
$strDumpingData = 'S�ahujem d�ta pre tabu�ku';
$strDynamic = 'dynamick�';

$strEdit = 'Upravi�';
$strEditPDFPages = 'Upravi� PDF Str�nky';
$strEditPrivileges = 'Upravi� privil�gia';
$strEffective = 'Efekt�vny';
$strEmpty = 'Vypr�zdni�';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEnabled = 'Zapnut�';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC V�SEKU';
$strEndRaw = 'KONIEC TOKU';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL privil�gi� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strExplain = 'Vysvetli� SQL';
$strExport = 'Exportova�';
$strExportToXML = 'Exportova� do form�tu XML';
$strExtendedInserts = 'Roz��ren� vkladanie';
$strExtra = 'Extra';

$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s bolo odstr�nen�';
$strFields = 'Polia';
$strFieldsEmpty = ' Po�et pol� je pr�zdny! ';
$strFieldsEnclosedBy = 'Polia uzatvoren�';
$strFieldsEscapedBy = 'Polia uveden� pomocou';
$strFieldsTerminatedBy = 'Polia ukon�en�';
$strFixed = 'pevn�';
$strFlushTable = 'Vypr�zdni� tabu�ku ("FLUSH")';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFormat = 'Form�t';
$strFullText = 'Pln� texty';
$strFunction = 'Funkcia';

$strGenBy = 'Vygenerovan�';
$strGenTime = 'Vygenerovan�:';
$strGeneralRelationFeat = 'Mo�nosti v�eobecn�ch vz�ahov';
$strGo = 'Vykonaj';
$strGrants = 'Privil�gia';
$strGzip = '"gzip-ovan�"';

$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHaveToShow = 'Zvolte pros�m aspo� jeden st�pec, ktor� chcete zobrazi�';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin-a';
$strHomepageSourceforge = 'Download str�nka phpMyAdmin-a (Sourceforge)';
$strHost = 'Hostite�';
$strHostEmpty = 'N�zov hostite�a je pr�zdny!';

$strIdxFulltext = 'Cel� text';
$strIfYouWish = 'Ak si �el�te nahra� iba ur�it� st�pce tabu�ky, �pecifikujte ich ako zoznam pol� oddelen� �iarkou.';
$strIgnore = 'Ignorova�';
$strImportDocSQL = 'Importova� s�bory docSQL';
$strInUse = 'pr�ve sa pou��va';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index pre %s bol odstr�nen�';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexes = 'Indexy';
$strInsecureMySQL = 'Konfigura�n� s�bor obsahuje nastavenia (root bez hesla), ktor� zodpovedaj� predvolen�mu privilegovan�mu MySQL ��tu. Ak MySQL server be�� s t�mto nastaven�m, nie je zabezpe�en� proti napadnutiu, t�to bezpe�nostn� chyba by mala by� ur�chlene odstr�nen�.';
$strInsert = 'Vlo�i�';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertNewRow = 'Vlo�i� nov� riadok';
$strInsertTextfiles = 'Vlo�i� textov� s�bory do tabu�ky';
$strInsertedRows = 'Vlo�en� riadky:';
$strInstructions = 'In�trukcie';
$strInvalidName = '"%s" je rezervovan� slovo, nem��e by� pou�it� ako n�zov datab�zy/tabu�ky/po�a.';

$strKeepPass = 'Nezmeni� heslo';
$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';

$strLength = 'D�ka';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLineFeed = 'Ukon�enie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLinesTerminatedBy = 'Riadky ukon�en�';
$strLinkNotFound = 'Linka nebola n�jden�';
$strLinksTo = 'Linkova� na';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Pou��vate�:';
$strLogin = 'Login';
$strLogout = 'Odhl�si� sa';

$strMissingBracket = 'Ch�ba z�tvorka';
$strModifications = 'Zmeny boli ulo�en�';
$strModify = 'Zmeni�';
$strModifyIndexTopic = 'Modifikova� index';
$strMoveTable = 'Presun�� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strMoveTableOK = 'Tabu�ka %s bola presunut� do %s.';
$strMySQLCharset = 'Znakov� sada v MySQL';
$strMySQLReloaded = 'MySQL znovu-na��tan�.';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLServerProcess = 'MySQL %pma_s1% be�� na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNext = '�al��';
$strNo = 'Nie';
$strNoDatabases = '�iadne datab�zy';
$strNoDescription = 'bez Popisu';
$strNoDropDatabases = 'Mo�nos� "DROP DATABASE" vypnut�.';
$strNoExplain = 'Presko�i� vysvetlenie SQL';
$strNoFrames = 'phpMyAdmin funguje lep�ie s prehliada�mi podporuj�cimi <b>r�my</b>.';
$strNoIndex = 'Nebol definovan� �iadny index!';
$strNoIndexPartsDefined = '�asti indexu neboli definovan�!';
$strNoModification = '�iadna zmena';
$strNoPassword = '�iadne heslo';
$strNoPhp = 'bez PHP k�du';
$strNoPrivileges = '�iadne privil�gia';
$strNoQuery = '�iadny SQL dotaz!';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNoValidateSQL = 'Presko�i� potvrdenie platnosti SQL';
$strNone = '�iadny';
$strNotNumber = 'Toto nie je ��slo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabu�ka <b>%s</b> nebola n�jden� alebo nie je nastaven� v %s';
$strNotValidNumber = ' nie je platn� ��slo riadku!';
$strNull = 'Nulov�';
$strNumSearchResultsInTable = '%s v�skyt(ov)v tabu�ke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> v�skyt(ov)';

$strOK = 'OK';
$strOftenQuotation = '�asto uvodzuj�ce znaky. Volite�ne znamen�, �e iba polia typu char a varchar s� uzatvoren� do "uzatv�rac�ch" znakov.';
$strOperations = 'Oper�cie';
$strOptimizeTable = 'Optimalizova� tabu�ku';
$strOptionalControls = 'Volite�n�. Ur�uje ako zapisova� alebo ��ta� �peci�lne znaky.';
$strOptionally = 'Volite�ne';
$strOptions = 'Vo�by';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPHP40203 = 'Pou��vate PHP 4.2.3, ktor� ma v�nu chybu pri pr�ci s viac bajtov�mi znakmi (mbstring). V PHP je t�to chyba zdokumentovan� pod ��slom 19404. Nedoporu�uje sa pou��va� t�to verziu PHP s phpMyAdminom.';
$strPHPVersion = 'Verzia PHP';
$strPageNumber = '��slo str�nky:';
$strPartialText = '�iasto�n� texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPdfDbSchema = 'Sch�ma datab�zy "%s"  - Strana %s';
$strPdfInvalidPageNum = 'Nedefinovan� ��slo str�nky v PDF!';
$strPdfInvalidTblName = 'Tabu�ka "%s" neexistuje!';
$strPdfNoTables = '�iadne tabu�ky';
$strPhp = 'Vytvori� PHP k�d';
$strPmaDocumentation = 'phpMyAdmin Dokument�cia';
$strPmaUriError = 'Direkt�va <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfigura�nom s�bore MUS� by� nastaven�!';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimary = 'Prim�rny';
$strPrimaryKey = 'Prim�rny k���';
$strPrimaryKeyHasBeenDropped = 'Prim�rny k��� bol zru�en�';
$strPrimaryKeyName = 'N�zov prim�rneho k���a mus� by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> by� <b>iba</b> meno prim�rneho k���a!)';
$strPrint = 'Vytla�i�';
$strPrintView = 'N�h�ad k tla�i';
$strPrivileges = 'Privil�gia';
$strProperties = 'Vlastnosti';
$strPutColNames = 'Prida� n�zvy pol� na prv� riadok';

$strQBE = 'Dotaz pod�a pr�kladu';
$strQBEDel = 'Zmaza�';
$strQBEIns = 'Vlo�i�';
$strQueryOnDb = ' SQL dotaz v datab�ze <b>%s</b>:';

$strReType = 'Potvrdi�';
$strRecords = 'Z�znamov';
$strReferentialIntegrity = 'Skontrolova� referen�n� integritu:';
$strRelationNotWorking = 'Pr�davn� vlastnosti pre pr�cu s prepojen�mi tabu�kami boli deaktivovan�. Ak chcete zisti� pre�o, kliknite %ssem%s.';
$strRelationView = 'Zobrazi� spojitosti';
$strReloadFailed = 'Znovu-na��tanie MySQL bolo ne�spe�n�.';
$strReloadMySQL = 'Znovu-na��ta� MySQL';
$strRememberReload = 'Nezabudnite znovu-na��ta� MySQL server.';
$strRenameTable = 'Premenova� tabu�ku na';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRepairTable = 'Opravi� tabu�ku';
$strReplace = 'Nahradi�';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReset = 'P�vodn� (Reset)';
$strRevoke = 'Zru�i�';
$strRevokeGrant = 'Zru�i� polovenie pride�ova� privil�gia';
$strRevokeGrantMessage = 'Bolo zru�en� pr�vo pride�ova� privil�gia pre %s';
$strRevokeMessage = 'Boli zru�en� privil�gia pre %s';
$strRevokePriv = 'Zru�i� privil�gia';
$strRowLength = 'D�ka riadku';
$strRowSize = ' Ve�kos� riadku ';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky za��naj� od';
$strRowsModeHorizontal = 'horizont�lnom';
$strRowsModeOptions = 'v(o) %s m�de a opakova� hlavi�ky po ka�d�ch %s bunk�ch';
$strRowsModeVertical='vertik�lnom';
$strRowsStatistic = '�tatistika riadku';
$strRunQuery = 'Odo�li dotaz';
$strRunSQLQuery = 'Spusti� SQL dotaz/dotazy na datab�zu %s';
$strRunning = 'be�� na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Je mo�n�, �e ste na�li chybu v SQL syntaktickom analyz�tore. Presk�majte podrobne SQL dotaz, predov�etk�m spr�vnos� umiestnenia �vodzoviek. �al�ia mo�nos� je, �e nahr�vate s�bor s bin�rnymi d�tami nezap�san�mi v �vodzovk�ch. M��ete tie� vysk��a� pou�i� pr�kazov� riadok MySQL na odstr�nenie probl�mu. Pokial st�le m�te probl�my alebo syntaktick� analyz�tor SQL st�le hl�si chybu v dotaze, ktor� v pr�kazovom riadku funguje, pros�m pok�ste sa zredukova� dotaz na �o najmen��, v ktorom sa probl�m e�te vyskytuje a ohl�ste chybu na str�nke phpMyAdmina spolu so sekciou V�PIS uveden� ni��ie:';
$strSQLParserUserError = 'Vyskytla sa chyba v SQL dotaze. Ni��ie uveden� MySQL v�stup (ak je nejak�) V�m m��e pom�c� odstr�ni� probl�m';
$strSQLQuery = 'SQL dotaz';
$strSQLResult = 'v�sledok SQL';
$strSQPBugInvalidIdentifer = 'Neplatn� identifik�tor';
$strSQPBugUnclosedQuote = 'Neuzatvoren� �vodzovky';
$strSQPBugUnknownPunctuation = 'Nezn�my interpunk�n� re�azec';
$strSave = 'Ulo�i�';
$strScaleFactorSmall = 'Mierka je pr�li� mala na roztiahnutie sch�my na str�nku';
$strSearch = 'H�ada�';
$strSearchFormTitle = 'H�ada� v datab�ze';
$strSearchInTables = 'V tabu�ke(�ch):';
$strSearchNeedle = 'Slovo(�) alebo hodnotu(y), ktor� chcete vyh�ada� (nahradzuj�ci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'v�etky slov�';
$strSearchOption3 = 'presn� v�raz';
$strSearchOption4 = 'ako regul�rny v�raz';
$strSearchResultsFor = 'Preh�ada� v�sledky na "<i>%s</i>" %s:';
$strSearchType = 'N�jdi:';
$strSelect = 'Vybra�';
$strSelectADb = 'Pros�m vyberte si datab�zu';
$strSelectAll = 'Ozna�i� v�etko';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSelectTables = 'Vybra� Tabu�ky';
$strSend = 'Po�li';
$strServer = 'Server %s';
$strServerChoice = 'Vo�ba serveru';
$strServerVersion = 'Verzia serveru';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", pros�m zad�vajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca potrebujete zada� sp�tn� lom�tko ("\") alebo apostrof ("\'") pri t�chto hodnot�ch, zadajte ich napr�klad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShow = 'Uk�za�';
$strShowAll = 'Zobrazi� v�etko';
$strShowColor = 'Zobrazi� farbu';
$strShowCols = 'Zobrazi� st�pce';
$strShowGrid = 'Zobrazi� mrie�ku';
$strShowPHPInfo = 'Zobrazi� inform�cie o PHP';
$strShowTableDimension = 'Zobrazi� rozmery tabuliek';
$strShowTables = 'Zobrazi� tabu�ky';
$strShowThisQuery = ' Zobrazi� tento dotaz znovu ';
$strShowingRecords = 'Uk�za� z�znamy ';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSort = 'Triedi�';
$strSpaceUsage = 'Zabran� miesto';
$strSplitWordsWithSpace = 'Slov� s� rozdelen� medzerou (" ").';
$strStatement = '�daj';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucDrop = 'Pridaj \'vyma� tabu�ku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel d�ta';
$strStrucOnly = 'Iba �trukt�ru';
$strStructPropose = 'Navrhn�� �trukt�ru tabu�ky';
$strStructure = '�trukt�ra';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dotaz bol �spe�ne vykonan�';
$strSum = 'Celkom';

$strTable = 'tabu�ka ';
$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableHasBeenDropped = 'Tabu�ka %s bola odstr�nen�';
$strTableHasBeenEmptied = 'Tabu�ka %s bola vypr�zden�';
$strTableHasBeenFlushed = 'Tabu�ka %s bola vypr�zdnen�';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTableType = 'Typ tabu�ky';
$strTables = '%s tabu�ka(y)';
$strTextAreaLength = ' Toto mo�no nep�jde upravi�,<br /> kv�li svojej d�ke ';
$strTheContent = 'Obsah V�ho s�boru bol vlo�en�.';
$strTheContents = 'Obsah s�boru prep��e obsah vybranej tabu�ky v riadkoch s identick�m prim�rnym alebo unik�tnym k���om.';
$strTheTerminator = 'Ukon�enie pol�.';
$strTotal = 'celkovo';
$strType = 'Typ';

$strUncheckAll = 'Odzna�i� v�etko';
$strUnique = 'Unik�tny';
$strUnselectAll = 'Odzna�i� v�etko';
$strUpdatePrivMessage = 'Boli aktualizovan� privil�gia pre %s.';
$strUpdateProfile = 'Aktualizova� profil:';
$strUpdateProfileMessage = 'Profil bol aktualizovan�.';
$strUpdateQuery = 'Aktualizova� dotaz';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUseTables = 'Pou�i� tabu�ky';
$strUser = 'Pou��vate�';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUsers = 'Pou��vatelia';

$strValidateSQL = 'Potvrdi� platnos� SQL';
$strValidatorError = 'SQL validator nemohol by� inicializovan�. Pros�m skontrolujte, �i s� nain�talovan� v�etky potrebn� roz��renia php, tak ako s� pop�san� v %sdocumentation%s.';
$strValue = 'Hodnota';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';

$strWebServerUploadDirectory = 'upload adres�r web serveru';
$strWebServerUploadDirectoryError = 'Adres�r ur�en� pre upload s�borov sa ned� otvori�';
$strWelcome = 'Vitajte v %s';
$strWithChecked = 'V�ber:';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strYes = '�no';

$strZip = '"zo zipovan�"';

// To translate
$strCompression = 'Compression'; //to translate
?>
