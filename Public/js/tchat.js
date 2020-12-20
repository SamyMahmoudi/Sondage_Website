var numSondage = $('#numSondage').text();
var numId = $('#numId').text();


$('#envoieMsg').click(function (e) {

    var message = $('#contenu-message').val();
    e.preventDefault("index.php?page=ajax&function=add&c=" + numSondage + "&id=" + numId + "&msg=" + message);
    $.ajax({
        url: "index.php?page=ajax&function=add&c=" + numSondage + "&id=" + numId + "&msg=" + message,
        dataType: "json",
        method: "POST",
        success: function () {
            keepTchat();
        }
    });
    keepTchat();
    $('#contenu-message').val('')
});

function keepTchat() {
    $.ajax({
        url: "index.php?page=ajax&function=refresh&c=" + numSondage,
        dataType: "json",
        success: function (renvoi) {
            $('#container-messages').html("");
            renvoi.forEach(tchat => {
                $('#container-messages').append("<li class='msg'>" + tchat.user_name + " dit : " + tchat.tchat_message + "</li>");
            });
        }
    });
}

function afficheScore() {
    $.ajax({
        url: "index.php?page=ajax&function=score&c=" + numSondage,
        dataType: "json",
        success: function (renvoi) {
            $('.score').html("");
            renvoi.forEach(score => {
                $('.score').append("<li>" + score.reponse_titre + " a un score de " + score.reponse_score + "</li>");
            });
        }
    });
}




afficheScore();
keepTchat();
const refreshTchat = window.setInterval(keepTchat, 1000);
const refreshScore = window.setInterval(afficheScore, 3000);