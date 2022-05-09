let listArtikel = showListArtikel();


const articleView = document.querySelector("#artikel");


function likeArtikel(item){
    item.isLike = !item.isLike;
}

function readLaterArtikel(item){
     item.isReadLater = !item.isReadLater;
}

function renderArtikel(){
    let content = '<h1>Project</h1>';
    console.log(listArtikel);
    for(let item of listArtikel){ 
        content += contentToHtml(item.imgSrc,item.title,item.type,item.description,item.isLike,item.isReadLater);   
        articleView.innerHTML = content;
    }
}



function contentToHtml(imgSrc,title,type,description,isLike,isReadLater){
    let date = new Date();
   
    let imgHtml = '<img class="img-article" src="'+imgSrc+'" />';
    let typeHtml = '<h3 class="type">'+type+'</h3>';
    let titleHtml = '<h2 class="title">'+title+'</h2>';
    let dateHtml = '<p class="date">' + date.toUTCString() + '</p>';
    let descriptionHtml = '<p class="description">'+description+'</p>'
    let iconFavorite = validationFavorite(isLike);
    let iconBookmark = validationBookmark(isReadLater);
    return '<article class="container card">' + imgHtml + '<div class="article-content">' + typeHtml + titleHtml + dateHtml + descriptionHtml + '<div class="icon-container">' + iconBookmark+iconFavorite+'</div>' + '</div></article>';
}


renderArtikel();

const cardList = articleView.querySelectorAll(".container");
let i = 0;
console.log(cardList);
for (let item of cardList) {
    let favoriteButton = item.querySelector('.favorite');
    let bookmarkButton = item.querySelector('.bookmark');
    let article = listArtikel[i];
    favoriteButton.addEventListener('click', function (event) {
         likeArtikel(article);
         favoriteButton.innerText = article.isLike  ? "favorite" : "favorite_border";
         putArtikel(listArtikel);
     });
    bookmarkButton.addEventListener('click', function (event) {
        readLaterArtikel(article);
        bookmarkButton.innerText = article.isReadLater ? "bookmark" : "bookmark_border";
        putArtikel(listArtikel);
    });
    i++;
}



function validationFavorite(isLike){
    return isLike ? '<i class="large material-icons icon-action favorite">favorite</i>' : '<i class="large material-icons icon-action favorite">favorite_border</i>';
}

function validationBookmark(isReadLater){
    return isReadLater ? '<i class="large material-icons icon-action bookmark">bookmark</i>' : '<i class="large material-icons icon-action bookmark">bookmark_border</i>';
}
