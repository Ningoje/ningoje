document.querySelector("#searchbtn").addEventListener("click", getLyrics);

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function lowerCaseName(string) {
  return string.toLowerCase();
}

function getLyrics(e) {
  const name = document.querySelector("#searchTxt").value;

  fetch(`https://some-random-api.ml/lyrics?title=${name}`)
    .then((response) => response.json())
    .then((data) => {
      document.querySelector(".txtBox").innerHTML = `
      <div>
        <img
          src="${data.thumbnail.genius}"
        />
      </div>
      <div class="txtInfos">
        <h1>${capitalizeFirstLetter(data.title) } by ${data.author}</h1>
        <p>Lyrics:</p>
        <p>${data.lyrics}\n</p>
        <p> Link :<a href="${data.links.genius}"> ${data.links.genius}</a></p>
        <p>Disclaimer: ${data.disclaimer}</p>
      </div>`;
    })
    .catch((err) => {
      document.querySelector(".txtBox").innerHTML = `
      <h4>Lyrics not found 😞</h4>
      `;
      console.log("Lyrics not found", err);
    });

  e.preventDefault();
}