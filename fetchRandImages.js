document.querySelector("#randWallpaper").addEventListener("click", getWallpaper);
document.querySelector("#randDogs").addEventListener("click", getDogs);
document.querySelector("#randCats").addEventListener("click", getCats);
document.querySelector("#randFox").addEventListener("click", getFox);
document.querySelector("#randPanda").addEventListener("click", getPanda);
document.querySelector("#randBird").addEventListener("click", getBird);
function getWallpaper(e) {
    fetch(`https://some-random-api.ml/img/cat`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".randImgs").innerHTML = `
        <div>
        <img 
            src="${data.link}"
            class="rounded mx-auto d-block" alt="..."  />
        </div>
        
        
        `;
        })
        .catch((error) => {
            document.querySelector(".randImgs").innerHTML = `
        <h4>Maybe Api is down try again later 😞</h4>
        `;
        });

}
function getDogs(e) {
    fetch(`https://some-random-api.ml/img/dog`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".randImgs").innerHTML = `
        <div>
        <img 
            src="${data.link}"
            class="rounded mx-auto d-block" alt="..." />
        </div>
        
        
        `;
        })
        .catch((error) => {
            document.querySelector(".randImgs").innerHTML = `
        <h4>Maybe Api is down try again later 😞</h4>
        `;
        });


}
function getCats(e) {
    fetch(`https://some-random-api.ml/img/cat`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".randImgs").innerHTML = `
        <div>
        <img 
            src="${data.link}"
            class="rounded mx-auto d-block" alt="..."/>
        </div>
        
        
        `;
        })
        .catch((error) => {
            document.querySelector(".randImgs").innerHTML = `
        <h4>Maybe Api is down try again later 😞</h4>
        `;
        });
}
function getFox(e) {

    fetch(`https://some-random-api.ml/img/fox`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".randImgs").innerHTML = `
        <div>
        <img 
            src="${data.link}"
            class="rounded mx-auto d-block" alt="..." />
        </div>
        
        
        `;
        })
        .catch((error) => {
            document.querySelector(".randImgs").innerHTML = `
        <h4>Maybe Api is down try again later 😞</h4>
        `;
        });
}
function getPanda(e) {

    fetch(`https://some-random-api.ml/img/panda`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".randImgs").innerHTML = `
        <div>
        <img 
            src="${data.link}"
            class="rounded mx-auto d-block" alt="..." />
        </div>
        
        
        `;
        })
        .catch((error) => {
            document.querySelector(".randImgs").innerHTML = `
        <h4>Maybe Api is down try again later 😞</h4>
        `;
        });
}
function getBird(e) {

    fetch(`https://some-random-api.ml/img/bird`)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector(".randImgs").innerHTML = `
        <div>
        <img 
            src="${data.link}"
            class="rounded mx-auto d-block" alt="..."  />
        </div>
        
        
        `;
        })
        .catch((error) => {
            document.querySelector(".randImgs").innerHTML = `
        <h4>Maybe Api is down try again later 😞</h4>
        `;
        });
}
