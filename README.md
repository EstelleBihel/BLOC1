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

**Question 10**  





