<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amis</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>

    <?php include("inc/HeaderUser.php"); ?>
    
    <main>
        <section class="section-amis">
            <article class="dash-amis">
                <h1>Gérer mes amis</h1>
                <a href="#" title="liste d'amis" onclick="listfriend()">Liste d'amis</a>
                <a href="#" title="Ajouter un ami"  onclick="searchfriend()">Rechercher un ami</a>
            </article>
            <section class="amis-system">
                <section>
                    <article class="liste-amis" id="listfriend">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom d'utilisateur</th>
                                    <th>Supprimer cet ami(e)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vegeta</td>
                                    <td><a href="#" title="supprimer cet ami(e)">Supprimer</a></td>
                                </tr>
                                <tr>
                                    <td>Goku</td>
                                    <td><a href="#" title="supprimer cet ami(e)">Supprimer</a></td>
                                </tr>
                                <tr>
                                    <td>Luffy</td>
                                    <td><a href="#" title="supprimer cet ami(e)">Supprimer</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                    <article class="liste-amis" id="searchUser">
                        <form method="POST" class="rechercherJoueur">
                            <input type="search" name="search-user" id="" placeholder="rechercher un joueur">
                            <button type="submit" name="valid-search-user">
                                <img src="./assets/images/icon-search.png" alt="search-icon">
                            </button>
                        </form>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom d'utilisateur</th>
                                    <th>Ajouter cet ami(e)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Naruto</td>
                                    <td><a href="#" title="ajouter cet ami(e)">Ajouter</a></td>
                                </tr>
                                <tr>
                                    <td>Souris</td>
                                    <td><a href="#" title="ajouter cet ami(e)">Ajouter</a></td>
                                </tr>
                                <tr>
                                    <td>Smile</td>
                                    <td><a href="#" title="ajoutercet ami(e)">Ajouter</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                </section>
            </section>
            <article class="amis-connect">
                <h2>Amis connectés</h2>
                <ul>
                    <li>Sousa</li>
                    <li>Contro</li>
                    <li>Fletcher</li>
                </ul>
            </article>
        </section>
    </main>
    
    <?php include("inc/FooterUser.php") ?>
    
    <script src="js/burger.js"></script>
    <script src="js/friend.js"></script>
</body>
</html>