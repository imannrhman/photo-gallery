let listTutorial = showListTutorial();

let tutorialView = document.querySelector("#tutorial");

function renderTutorial() {
    let content = '<h1>Tutorial</h1>';
    for (let item of listTutorial) {
        content += contentToHtml(item.imgSrc, item.title, item.description,item.isLike,item.isReadLater);
        tutorialView.innerHTML = content;
    }
}

function contentToHtml(imgSrc, title, description, isLike, isReadLater) {
    let date = new Date();

    let imgHtml = '<img class="img-article" src="' + imgSrc + '" />';
    let titleHtml = '<h2 class="title">' + title + '</h2>';
    let dateHtml = '<p class="date">' + date.toUTCString() + '</p>';
    let descriptionHtml = '<p class="description">' + description + '</p>'
    let iconFavorite = validationFavorite(isLike);
    let iconBookmark = validationBookmark(isReadLater);
    return '<article class="container card">' + imgHtml + '<div class="article-content">' + titleHtml + dateHtml + descriptionHtml + '<div class="icon-container">' + iconBookmark + iconFavorite + '</div>' + '</div></article>';
}

function likeArtikel(item) {
    item.isLike = !item.isLike;
}

function readLaterArtikel(item) {
    item.isReadLater = !item.isReadLater;
}

renderTutorial();
const cardListTutorial = tutorialView.querySelectorAll(".container");
let it = 0;
console.log(cardListTutorial);
for (let item of cardListTutorial) {
    let favoriteButton = item.querySelector('.favorite');
    let bookmarkButton = item.querySelector('.bookmark');
    let tutorial = listTutorial[it];
    favoriteButton.addEventListener('click', function (event) {
        likeArtikel(tutorial);
        favoriteButton.innerText = tutorial.isLike ? "favorite" : "favorite_border";
    });
    bookmarkButton.addEventListener('click', function (event) {
        readLaterArtikel(tutorial);
        bookmarkButton.innerText = tutorial.isReadLater ? "bookmark" : "bookmark_border";
    });
    it++;
}

function validationFavorite(isLike) {
    return isLike ? '<i class="large material-icons icon-action favorite">favorite</i>' : '<i class="large material-icons icon-action favorite">favorite_border</i>';
}

function validationBookmark(isReadLater) {
    return isReadLater ? '<i class="large material-icons icon-action bookmark">bookmark</i>' : '<i class="large material-icons icon-action bookmark">bookmark_border</i>';
}