var i = 3;

function ajout() {
    document.getElementById('reponses').innerHTML +=
        '<div>' +
            '<label for="reponse'+ i + '">Réponse ' + i + '</label> ' +
            '<input placeholder="Écrire une réponse" type="text" id="reponse'+ i + '" name="reponse' + i + '">' +
        '</div>';
    
    i++;
}