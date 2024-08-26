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

**Question 10**  





