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
                <a href="?page=amis&a=listFriends" title="liste d'amis" onclick="listfriend()">Liste d'amis</a>
                <a href="?page=amis&a=ajoutDamis" title="Ajouter un ami"  onclick="searchfriend()">Rechercher un ami</a>
            </article>
            <section class="amis-system">
                <section>
                    <?php 
                        if ($_GET['a'] == 'listFriends') 
                        {
                            echo "
                            <article class='liste-amis' id='listfriend'>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nom d'utilisateur</th>
                                            <th>Supprimer cet ami(e)</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                        // Liste des amis avec possibilités de les supprimer
                            foreach($amis as $ami)
                            {
                                if($ami->user_id != $_SESSION['userId'])
                                {
                                    echo "<tr><td>". $ami->user_name."</td><td><a href='?page=amis&delete=".$ami->friendship_id."'>Supprimer l'ami(e)</a></td></tr>";
                                } 
                            }

                            echo "  
                                    </tbody>
                                </table>
                            </article>"; 
                        } 
                        else if ($_GET['a'] == 'ajoutDamis')
                        {
                            echo "<article class='liste-amis' id='searchUser'>
                            <form method='POST' class='rechercherJoueur'>
                                <input type='search' name='search-user' placeholder='rechercher un joueur'>
                                <button type='submit' name='valid-search-user'>
                                    <img src='./assets/images/icon-search.png' alt='search-icon'>
                                </button>
                            </form>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nom d'utilisateur</th>
                                        <th>Ajouter cet ami(e)</th>
                                    </tr>
                                </thead> 
                                <tbody>";
                        }
                    ?>
                            <?php 
                                if (isset($_POST['valid-search-user'])) 
                                {   
                                    foreach ($amis as $listeAmis) {
                                        if ($listeAmis->user_id != $_SESSION['userId'])
                                        {
                                            $userCheck[] += $listeAmis->user_id;
                                        }
                                    }
                                    foreach ($resultSearch as $resultUser):
                                        if(in_array($resultUser->user_id, $userCheck))
                                        {
                                            if($resultUser->user_id == $_SESSION['userId'])
                                            {
                                                echo "<tr>
                                                        <td>". $resultUser->user_name."</td>
                                                        <td>Vous</td>
                                                    </tr>";

                                            }
                                            else 
                                            {
                                                echo "<tr>
                                                        <td>". $resultUser->user_name."</td>
                                                        <td>Ami(e)</td>
                                                    </tr>";   
                                            }
                                        }
                                        else
                                            {
                                                echo "<tr>
                                                        <td>". $resultUser->user_name."</td>
                                                        <td><a href='?page=amis&ajouter=".$resultUser->user_id."'title='ajouter cet ami(e)'>Ajouter en ami</a></td>
                                                    </tr>";
                                            }
                                    endforeach;
                                }
                            ?>

                            </tbody>
                        </table>
                    </article>
                </section>
            </section>
            <article class="amis-connect">
                <h2>Amis connectés</h2> 
                <ul>
                <?php 
                    foreach($amis as $ami)
                    {
                        if($ami->user_id != $_SESSION['userId'] AND $ami->user_isConnected == 1)
                        {
                            echo "<li>". $ami->user_name."</li>";
                        }                        
                    }
                ?>
                </ul>
            </article>
        </section>
    </main>
    
    <?php include("inc/FooterUser.php") ?>
    
    <script src="js/burger.js"></script>
    <script src="js/friend.js"></script>
</body>
</html>