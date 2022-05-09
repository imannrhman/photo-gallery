const CACHE_ARTIKEL = "aktivitas_artikel";
const CACHE_TUTORIAL = "aktivitas_tutorial"

function checkForStorage() {
    return typeof (Storage) !== "undefined"
}



function putArtikel(listData) {
    if (checkForStorage()) {
        console.log(listData);
        localStorage.setItem(CACHE_ARTIKEL, JSON.stringify(listData));
    }
}

function putTutorial(listTutorial){
    if (checkForStorage()) {
        localStorage.setItem(CACHE_TUTORIAL, JSON.stringify(listData));
    }
}


function createArtikel(imgSrc, title, type, isLike, isReadLater) {
    return artikel = {
        imgSrc: imgSrc,
        title: title,
        type: type,
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor in quo iste voluptates, repellat odit ut, ad facere perferendis ab voluptatem fuga laboriosam aperiam illum aliquid blanditiis nisi inventore ratione!",
        isLike: isLike,
        isReadLater: isReadLater,
    };
}

//jika ingin menambahkan artikel baru bisa ditambah disini 
let initialArtikel = [
    createArtikel(
        "https://images.unsplash.com/photo-1425082661705-1834bfd09dca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2076&q=80g",
        "Project Foto tentang Hewan",
        "Animal", false,
        false,
    ),
    createArtikel(
        "https://images.unsplash.com/photo-1483794344563-d27a8d18014e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80",
        "Project Foto tentang Tanaman",
        "Plant",
        false,
        false,
    ),
    createArtikel(
        "https://images.unsplash.com/photo-1565043666747-69f6646db940?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2874&q=80",
        "Artikel Foto tentang Otomotif",
        "Otomotif",
        false,
        false,
    ),
];


function showListArtikel() {
    if (checkForStorage()) {
        let listData = JSON.parse(localStorage.getItem(CACHE_ARTIKEL)) || initialArtikel;
        if(listData.length >= initialArtikel.length){
            return listData;
        }else{
            for(let i = 0 ; i < listData.length;i++){
                initialArtikel[i] = listData[i];
            }
            return initialArtikel;
        }
    } else {
        return initialArtikel;
    }
}



function createTutorial(imgSrc, title, isLike, isReadLater) {
    return tutorial = {
        imgSrc: imgSrc,
        title: title,
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor in quo iste voluptates, repellat odit ut, ad facere perferendis ab voluptatem fuga laboriosam aperiam illum aliquid blanditiis nisi inventore ratione!",
        isLike: isLike,
        isReadLater: isReadLater,
    };
}


//jika ingin menambahkan artikel baru bisa ditambah disini 
let initialTutorial = [
    createTutorial(
        "https://images.unsplash.com/photo-1512521743077-a42eeaaa963c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1771&q=80",
        "Tutorial Membuat Foto Hitam Putih",
        false,
        false,
    ),
    createTutorial(
        "https://images.unsplash.com/photo-1488342994276-7c3bc0742042?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80",
        "Tutorial Membuat Foto Blur",
        false,
        false,
    ),
    createTutorial(
        "https://images.unsplash.com/photo-1551361375-5f420bf7e738?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80",
        "Tutorial Membuat Foto Autofocus",
        false,
        false,
    ),
];


function showListTutorial() {
    if (checkForStorage()) {
        let listData = JSON.parse(localStorage.getItem(CACHE_TUTORIAL)) || initialTutorial;
        if (listData.length >= initialTutorial.length) {
            return listData;
        } else {
            for (let i = 0; i < listData.length; i++) {
                initialTutorial[i] = listData[i];
            }
            return initialTutorial;
        }
    } else {
        return initialTutorial;
    }
}


