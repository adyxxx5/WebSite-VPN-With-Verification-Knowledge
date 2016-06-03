DROP DATABASE IF EXISTS WebSiteVPN;
CREATE DATABASE WebSiteVPN DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE WebSiteVPN;

/*TABLE ID_USERS*/
CREATE TABLE USERS(
	ID_USER INTEGER NOT NULL AUTO_INCREMENT,
	NAME VARCHAR(30) NOT NULL,
	LASTNAME VARCHAR(30) NOT NULL,
	AGE INTEGER,
	PRIMARY KEY(ID_USER)
);

/*TABLE SESSIONS*/
CREATE TABLE SESSIONS(
	ID_SESSION INTEGER NOT NULL AUTO_INCREMENT,
	TIMER INTEGER, 
	POINTS INTEGER,
	ID_USER INTEGER NOT NULL,
	PRIMARY KEY(ID_SESSION),
	FOREIGN KEY(ID_USER) REFERENCES USERS(ID_USER)
);

/*TABLE QUESTIONS*/
CREATE TABLE QUESTIONS(
	ID_QUESTION INTEGER NOT NULL,
	QUESTION VARCHAR(255) NOT NULL,
	PRIMARY KEY(ID_QUESTION)
);

/*TABLE RANDOM QUESTION*/
CREATE TABLE RANDOM_Q(
	ID_SESSION INTEGER NOT NULL,
	ID_QUESTION INTEGER NOT NULL,
	FOREIGN KEY(ID_SESSION) REFERENCES SESSIONS(ID_SESSION),
	FOREIGN KEY(ID_QUESTION) REFERENCES QUESTIONS(ID_QUESTION),
	PRIMARY KEY(ID_SESSION, ID_QUESTION)
);

/*TABLE ANSWERS*/
CREATE TABLE ANSWERS(
	ID_ANSWER INTEGER NOT NULL,
	ANSWER VARCHAR(150) NOT NULL,
	CORRECT_ANSWER BOOLEAN NOT NULL,
	ID_QUESTION INTEGER NOT NULL,
	PRIMARY KEY(ID_ANSWER),
	FOREIGN KEY(ID_QUESTION) REFERENCES QUESTIONS(ID_QUESTION)
);


/*Test data*/
INSERT INTO USERS VALUES(1, "Adi", "Aioane", 18),(2, "Pippo", "Paperino", 12);
INSERT INTO SESSIONS VALUES(1, 20, 23, 1),(2, 25, 12, 2);
INSERT INTO QUESTIONS VALUES
(1, "Quali tra questi sono i vantaggi delle reti private con canali dedicati?"),
(2,"Quali tra questi sono i svantaggi della delle reti private con canali dedicati?"),
(3, "Quanti tipi di reti VPN (Virtual Private Network) esistono?"),
(4, "Quale tra queste tipi di reti VPN e' adatta per aziende di piccole dimensioni?"),
(5, "Quale tra queste tipi di reti VPN viene utilizzata da aziende di grandi dimensioni per conettersi con sedi piu piccole fisse?"),
(6, "Quanti tipi di Site-to-site VPN esistono?"),
(7, "Quali di queste reti VPN permette di collegare una sede con piu sedi in una rete privata?"),
(8, "Che cosa vuol dire server AAA?"),
(9, "Quale protocollo viene maggiormente uttilizzato nelle reti VPN per lo scambio delle chiavi di cifratura?"),
(10, "La definizione di tunneling consiste?"),
(11, "Quali sono i tre protocolli che costituiscono IPsec?"),
(12, "Che cosa e' SSL (Secure Socket Layer) e TSL (Transport Layer Security)?"),
(13, "Le reti VPN possono essere classificate in base ai protocolli che utilizzano e al grado di sicurezza, quante categorie esistono?"),
(14, "Seleziona la risposta corretta sulle reti Trusted VPN:"),
(15, "Seleziona la risposta corretta sulle Reti Secure VPN:"),
(16, "Quale di queste affermazioni sono vere?"),
(17, "I tipi principali di reti VPN in commercio adottano i protocolli di tipo:"),
(18, "Il protocollo MPLS (Multi-Protocol Label Switching) ha lo scopo di:"),
(19, "Il protocollo IPsec (IP security) ha lo scopo di:"),
(20, "Qual e il protocollo piu diffuso per le reti VPN?");

INSERT INTO ANSWERS VALUES
(1, "Sicurezza garantita", TRUE, 1),
(2, "Costi minori di manuntenzione", FALSE, 1),
(3, "Nessun problema di accesso", TRUE, 1),
(4, "Mancanza di scalabilità", FALSE, 1),
(5, "Alti costi d'installazione", TRUE, 2),
(6, "Costi riccorenti di manuntenzione", TRUE, 2),
(7, "Scarse prestazioni", FALSE, 2),
(8, "Poca sicurezza", FALSE, 2),
(9, "Remote-Access-Control VPN", FALSE, 3),
(10, "Remote-Access VPN", TRUE, 3),
(11, "Site-to-site VPN", TRUE, 3),
(12, "Site-to-web VPN", FALSE, 3),
(13, "Remote-Access-Control VPN", FALSE, 4),
(14, "Remote-Access VPN", TRUE, 4),
(15, "Site-to-site VPN", FALSE, 4),
(16, "Site-to-web VPN", FALSE, 4),
(17, "Remote-Access-Control VPN", FALSE, 5),
(18, "Remote-Access VPN", FALSE, 5),
(19, "Site-to-site VPN", TRUE, 5),
(20, "Site-to-web VPN", FALSE, 5),	
(21, "Una", FALSE, 6),
(22, "Due", TRUE, 6),
(23, "Tre", FALSE, 6),
(24, "Quattro", FALSE, 6),
(25, "Site-to-site Extranet-based", FALSE, 7),
(26, "Remote-Access Extranet-based", FALSE, 7),
(27, "Remote-Access Intranet-based", FALSE, 7),
(28, "Site-to-site Intranet-based", TRUE, 7),
(29, "Authentication, Authorization, Accounting", TRUE, 8),
(30, "Access, Authorization, Accounting", FALSE, 8),
(31, "Access, Authorization, Account", FALSE, 8),
(32, "Authorization, Access, Accounting", FALSE, 8),
(33, "IKE (Internet Key Exchange", TRUE, 9),
(34, "KEI (Key Exchange Internet", FALSE, 9),
(35, "Diffie-Hellman key exchange", FALSE,9),
(36, " RSA", FALSE, 9),
(37, "Un insieme di tecniche per cui un protocollo viene incapsulato in un protocollo dello stesso livello o superiore", TRUE, 10),
(38, "Un insieme di tecniche per cui un protocollo viene decapsulato in un protocollo dello stesso livello o superiore", FALSE, 10),
(39, "Un protocollo che consente di criptografare i dati prima di trasmetterli in internet", FALSE, 10),
(40, "Nessuna di queste risposte", FALSE, 10),
(41, "AH(Authentication Header), ESP (Encapsulating Security Payload), IKE (Internet Key Exchange)", TRUE, 11),
(42, "AH(Authentication Header), ESP (Encapsulating Security Payload), KEI (Key Exchange Internet)", FALSE, 11),
(43, "AH(Authentication Header), SEP (Security Encapsulating Payload), KEI (Key Exchange Internet)", FALSE, 11),
(44, " Nessuna delle risposte elencate", FALSE, 11),
(45, "Un protocollo che ha lo scopo di autentificare il server da parte del client e di far comunicare il Client con il Server", FALSE, 12),
(46, "Protocollo Client/Server che ha lo scopo di autentificare il server da parte del client, facoltativo anche il client da parte del server", FALSE, 12),
(47, "Nessuna di queste definizione è corretta per la domanda fatta", FALSE, 12),
(48, "Protocollo Client/Server che ha lo scopo di autentificare il server da parte del client, facoltativo anche il client da parte del server, e di creare un canale cifrato e sicuro", TRUE, 12),
(49, "Una", FALSE, 13),
(50, "Due", FALSE, 13),
(51, "Tre", TRUE, 13),
(52, "Quattro", FALSE, 13),
(53, "Utilizzano la cifratura e il tunneling per trasmettere i dati", FALSE, 14),
(54, "Utilizzano solo la crifratura ma non il tunneling per trasmettere i dati", FALSE, 14),
(55, "Non utilizzano ne la cifratura e ne il tunneling per trasmettere i dati", TRUE, 14),
(56, "Questo tipo di rete non esiste", FALSE, 14),
(57, "Utilizzano la cifratura e il tunneling per trasmettere i dati", TRUE, 15),
(58, "Utilizzano solo la crifratura ma non il tunneling per trasmettere i dati", FALSE, 15),
(59, "Non utilizzano ne la cifratura e ne il tunneling per trasmettere i dati", FALSE, 15),
(60, "Questo tipo di rete non esiste", FALSE, 15),
(61, "Le Secure VPN assicurano la cifratura dei dati ma non assicurano i percorsi", TRUE, 16),
(62, "Le Secure VPN non assicurano la cifratura dei dati ma assicurano i percorsi", FALSE, 16),
(63, "Le Trusted VPM assicurano la proprieta dei percorsi ma non garantiscono un alto livello di sicurezza", TRUE, 16),
(64, "Le Trusted VPN non assicurano la proprieta dei percorsi ma garantiscono un alto livello di sicurezza", FALSE, 16),
(65, "Secure VPN", TRUE, 17),
(66, "Trusted VPN", FALSE, 17),
(67, "Hybrid VPN", FALSE, 17),
(68, "Nessuna di queste", FALSE, 17),
(69, "Garantisce l'instradamento in modo efficiente e veloce tramite schemi di routing Site-to-site, ma meno sicuro di IPsec", TRUE, 18),
(70, "Garantisce l'instradamento in modo meno efficiente e piu lento tramite schemi di routing Site-to-site, ma meno sicuro di IPsec", FALSE, 18),
(71, "Garantisce l'instradamento in modo meno efficiente e piu lento tramite schemi di routing Site-to-site, ma piu sicuro di IPsec", FALSE, 18),
(72, "Garantisce l'instradamento in modo meno efficiente e piu lento tramite schemi di routing Remote-Access, ma meno sicuro di IPsec", FALSE, 18),
(73, "Protocollo con una buona sicurezza che utilizza  la cifratura per garantire l'integrita e confidenzialita dei dati" ,FALSE, 19),
(74, "Protocollo di massima sicurezza che utilizza l'autentificazione e la cifratura per garantire l'integrita e confidenzialita dei dati", TRUE, 19),
(75, "Protocollo con una buona sicurezza che utilizza la cifratura per garantire l'integrita e confidenzialita dei dati", FALSE, 19),
(76, "Protocollo non sicuro che non utilizza ne l autentificazione e ne la cifratura", FALSE, 19),
(77, "SSL/TLS (Secure Socket Layer)/(Transport Layer Security)", FALSE, 20),
(78, "IPsec (IP Security", TRUE, 20),
(79, "BGP/MPLS (Border Gateway Protocol)/(Multi-Protocol Label Switching)", FALSE, 20),
(80, "Nossuno di questi protocolli e usato prevalentemente", FALSE, 20);


/*Permission for procedure
GRANT EXECUTE ON PROCEDURE UserDoTest TO utente IDENTIFIED BY 'password';
GRANT EXECUTE ON PROCEDURE TimeUserDoTest TO utente IDENTIFIED BY 'password';
GRANT EXECUTE ON PROCEDURE SeeQuestion TO utente IDENTIFIED BY 'password';
GRANT EXECUTE ON PROCEDURE SessionsUser TO utente IDENTIFIED BY 'password';
*/
