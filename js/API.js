///////////////////////////////////////////////////////////////////////////////////

var tableauAffiche = false;

function afficherApi() {

    var isbn = document.getElementById('isbn-input').value;
    var url = 'https://www.googleapis.com/books/v1/volumes?q=isbn:' + isbn;

    fetch(url)
        .then(response => response.json())
        .then(data => {

            if (data.totalItems === 0) {
                document.getElementById('resultat').innerHTML = "Aucun livre trouvé pour cet ISBN.";
                return;
            }

            var livre = data.items[0].volumeInfo;
            var titre = livre.title;
            var auteur = livre.authors ? livre.authors.join(", ") : "Inconnu";
            var datePublication = livre.publishedDate || "Inconnue";
            var description = livre.description || "Aucune description disponible.";

            var tableau = '<tr><th>Titre</th><td>' + titre + '</td></tr>';
            tableau += '<tr><th>Auteur(s)</th><td>' + auteur + '</td></tr>';
            tableau += '<tr><th>Date de publication</th><td>' + datePublication + '</td></tr>';
            tableau += '<tr><th>Description</th><td>' + description + '</td></tr>';
            tableau += '</table><button id="close-btn" style="align-items: center; margin: 20px 0; width: 80%; border-collapse: collapse; background-size: cover;" onclick="enleverApi()">Fermer</button>';

            document.getElementById('resultat').innerHTML = tableau;
            tableauAffiche = true;
        })
        .catch(error => {
            document.getElementById('resultat').innerHTML = "Erreur de requête : " + error;
        });
}
function enleverApi() {
    document.getElementById('resultat').innerHTML = '';
    document.getElementById('isbn-container').style.display = 'flex';
    tableauAffiche = false;
}

document.getElementById('fetch-btn').addEventListener('click', afficherApi);