# BLOC1-2024
# TD1  

**Question 1**  
  
**Méthode Get** utilisée pour la création de données ces données sont écrites directement dans l'URL  
Donc visible par l'utilisateur  
**Méthode POST** les données sont écrites par le serveur et donc non visible par l'utilisateur  

**Question 2**  

| Get | Post |    
| --- | ---- |  
| Visible pour l’utilisateur dans le champ d’adresse | Invisible pour l’utilisateur |  
| Les paramètres de l’URL sont stockés en même temps que l’URL | L’URL est enregistrée sans paramètres URL |  
| Les paramètres de l’URL sont stockés sans chiffrement | Les paramètres de l’URL ne sont pas enregistrés automatiquement |  
| Les paramètres de l’URL ne sont pas envoyés à nouveau | Le navigateur avertit que les données du formulaire doivent être renvoyées |  
| Caractères ASCII uniquement | Caractères ASCII mais également données binaires |  
| Longueur des données limitées longueur maximale de l’URL à 2 048 caractères | Longueur des données illimitées |  


**Question 3**  
Protocole HTTP extensible => posibilité de rajouter des information au sein de la recherche HTTP  

**Question 4**  
HTTP est un protocole sans état car chaque requête est executée indépendemment des précédentes  
Cette barrière du sans état est levée par les cookies  

**Question 5**  
Les différentes parties d'une URL : Le protocole · Le sous-domaine · Le nom de domaine principal · Le domaine de deuxième niveau · Le répertoire.  
Protocole : HTTP//:  
Domaine et sous domaine => adresse  
Repertoire : Hierarchie des pages  

**Question 6**  
Il y a 5 classes de codes de status de la réponse HTTP  
Chaque classe représente un type de réponse spécifique au serveur :  
- **1xx** : informations  
  - Exemple => **100 continue** : le serveur a reçu les entêtes de la requête et le client peut continuer a envoyer le corps de la requête  
- **2XX** : Succès  
  - Exemple => **200 OK** : le requête a réussi (page web demandée et envoyée correctement au client)  
- **3xx** : Redirection  
  - Exemple => **301 Moved Permanently** : la ressource demandée a été déplacée de façon permanente à une nouvelle URL. Les futures requêtes doivent utiliser la nouvelles URL.  
- **4xx** : Erreur du client  
  - Exemple => **404 Not Found** : le serveur n'a pas trouvé la ressource demandée . (URL incorreste ou ressource qui n'existe plus)  
- **5xx** : Erreur du serveur  
  - Exemple => **500 Internal Server Error** : le serveur ne peut répondre à la requête  

**Question 7**  
La négociation de contenu HTTP est un mécanisme utilisé dans les communications entre un client (comme un navigateur web) et un serveur pour déterminer la version la plus appropriée d'une ressource à renvoyer au client. Cette négociation permet d'adapter le contenu en fonction des préférences ou des capacités du client.    
**Principe Général**
    **Demande du client (Request)** : Le client envoie une requête HTTP au serveur. Cette requête peut contenir des en-têtes qui indiquent ses préférences pour le contenu souhaité.  
    **Analyse du serveur (Response)** : Le serveur examine ces en-têtes pour déterminer quel type de contenu il doit renvoyer.  
    **Réponse du serveur** : Le serveur sélectionne la version la plus appropriée de la ressource demandée et l'envoie au client. Si plusieurs versions sont disponibles et compatibles avec les préférences du client, le serveur en choisit une. Sinon, il peut renvoyer une erreur 406 (Not Acceptable) si aucune version ne correspond.
**Types de Négociation de Contenu**
- **1/ Négociation de Contenu Basée sur le Type MIME (Accept) :**  
        Le client indique les types MIME qu'il accepte, par exemple text/html, application/json.  
        Le serveur renvoie le contenu dans le format le plus approprié.  
        Exemple : Un client peut préférer recevoir une page web en HTML (text/html) mais accepte également un flux de données JSON (application/json).
  
**Illustration**  
````   
GET /resource HTTP/1.1  
Host: www.example.com  
Accept: text/html, application/json  
````  
**Réponse possible** 
````  
HTTP/1.1 200 OK  
Content-Type: text/html  
````  
- **2/ Négociation Basée sur la Langue (Accept-Language) :**  
    Le client spécifie les langues qu'il préfère, comme fr (français), en (anglais).  
    Le serveur choisit la version linguistique la plus adaptée de la ressource.
  
**Illustration**  
````
GET /page HTTP/1.1  
Host: www.example.com  
Accept-Language: fr, en;q=0.8  
````
**Réponse possible**   
````
HTTP/1.1 200 OK
Content-Language: fr
````  
- **3/ Négociation Basée sur l’Encodage (Accept-Encoding) :**  
    Le client indique les encodages de contenu qu'il supporte, par exemple gzip, deflate.
    Le serveur compresse la ressource avec l'encodage le plus approprié avant de la renvoyer.  
  
**Illustration**  
````  
GET /file HTTP/1.1  
Host: www.example.com  
Accept-Encoding: gzip, deflate  
````
**Réponse possibble**  
````
HTTP/1.1 200 OK  
Content-Encoding: gzip  
````
- **4/ Négociation Basée sur les Caractères (Accept-Charset) :**  
    Le client indique les jeux de caractères qu'il préfère, comme UTF-8, ISO-8859-1.  
    Le serveur renvoie la ressource dans le jeu de caractères le plus approprié.
  
**Illustration**  
````  
GET /document HTTP/1.1  
Host: www.example.com  
Accept-Charset: utf-8, iso-8859-1;q=0.7  
````  
**Réponse possibble**  
````
HTTP/1.1 200 OK  
Content-Type: text/plain; charset=utf-8  
````  
**Conclusion**  
La négociation de contenu permet une flexibilité dans la distribution des ressources, assurant que le client reçoit la version la plus appropriée de la ressource, qu'il s'agisse du format, de la langue, de l'encodage, ou du jeu de caractères. Cela améliore l'expérience utilisateur en offrant du contenu adapté à ses préférences et aux capacités de son système. 
  
**Question 8**  
**Installation Xampp**  
  
**Question 9**  
**CURL (Client URL)**  
=> Récupérer le contenu dune ressource  
  
CMD               
                                               
C:\Users\Bihel>curl http://dev.local  
<!doctype html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <title>Web local</title>  
</head>  
<body>  
    <h1>TDs web</h1>  
</body>  
</html>  
  
C:\Users\Bihel>curl http://dev.local/notExisting  C:\Users\Bihel>curl http://dev.local/notexisting  
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">  
<html><head>  
<title>404 Not Found</title>  
</head><body>  
<h1>Not Found</h1>  
<p>The requested URL was not found on this server.</p>  
<hr>  
<address>Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at dev.local Port 80</address>  
</body></html>  
  
**Question 10**  
| En-tête | Rôle | Illustration |  
|---------|------|--------------|  
| **'Host'** | Indique le nom de domaine et le port du serveur auquel la requête est destinée | 'Host: www.example.com' |  
| **'User-Agent'** | Fournit des informations sur le client, comme le navigateur et le système d'exploitation | 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)' |  
| **'Accept'** | Spécifie les types de contenu MIME que le client est prêt à recevoir | 'Accept: text/html, application/json' |  
| **'Accept-Language'** | Indique les langues préférées du client pour la réponse | 'Accept-Language: en-US,en;q=0.9,fr;q=0.8' |  
| **'Accept-Encoding'** | Spécifie les encodages de contenu que le client accepte  |  'Accept-Encoding: gzip, deflate, br' |  
| **'Accept-Charset'** | Indique les jeux de caractères que le client accepte pour la réponse | 'Accept-Charset: utf-8, iso-8859-1;q=0.7'|  
| **'Authorization'** | Envoie des informations d'authentification pour accéder à une ressource protégée | 'Authorization: Basic YWxhZGRpbjpvcGVuc2VzYW1l |  
| **'Content-Type'** | Indique le type de média du corps de la requête, généralement utilisé dans les requêtes POST | 'Content-Type: application/json' |  
| **'Content-Length'** | Indique la taille du corps de la requête en octets | 'Content-Length: 348' |  
| **'Cookie'** | Envoie des cookies au serveur, souvent utilisés pour maintenir les sessions | 'Cookie: sessionId=abc123; theme=dark' |  
| **Referer** | Indique l'URL de la page qui a conduit à la requête en cours, pour le suivi de la navigation | 'Referer: https://www.google.com/' |  
| **'Connection'** | Contrôle si la connexion doit rester ouverte ou non après l'envoi de la réponse | 'Connection: keep-alive' |  
| **'If-Modified-Since'** | Permet au serveur de répondre avec un code 304 si la ressource n'a pas changé depuis la date indiquée | 'If-Modified-Since: Wed, 21 Oct 2015 07:28:00 GMT'|  
| **'If-None-Match'** | Permet au serveur de répondre avec un code 304 si l'ETag de la ressource correspond | 'If-None-Match: "686897696a7c876b7e" |  
| **'Range'** | Demande une partie spécifique d'une ressource, utile pour reprendre un téléchargement interrompu | 'Range: bytes=500-999' |  
| **'Cache-Control'** | Directives pour la mise en cache, indiquant comment la ressource doit être stockée et utilisée | 'Cache-Control: no-cache' |  
| **'Upgrade-Insecure-Requests'** | Indique la préférence du client pour obtenir une version sécurisée d'une ressource, si disponible | 'Upgrade-Insecure-Requests: 1' |  










