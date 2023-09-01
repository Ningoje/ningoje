document.querySelector("#searchbtn").addEventListener("click", getLyrics);

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

async function getLyrics(e) {
  const Elementname = document.querySelector("#searchTxt");
  const name = Elementname.value;
  if (name === "") {
    Elementname.classList.add("is-invalid");
    return
  } else {
    Elementname.classList.remove("is-invalid");
  }
  
  document.querySelector(".txtBox").innerHTML=modal_content
  //await fetch(`https://some-random-api.ml/lyrics?title=${name}`)
  const url = `https://api.akuari.my.id/search/lirik?query=${encodeURIComponent(name)}`
  await fetch(url)
    .then((response) => response.json())
    .then((data) => {
    //   document.querySelector(".txtBox").innerHTML = `
    //   <div>
    //     <img
    //       src="${data.thumbnail.genius}"
    //     />
    //   </div>
    //   <div class="txtInfos">
    //     <h1>${capitalizeFirstLetter(data.title)} by ${data.author}</h1>
    //     <p>Lyrics:</p>
    //     <p>${data.lyrics}\n</p>
    //     <p> Link :<a href="${data.links.genius}"> ${data.links.genius}</a></p>
    //     <p>Disclaimer: ${data.disclaimer}</p>
    //   </div>`;
    // 
 
    const lyrs=data.result[0].lirik
    const title=data.result[0].judul
    const artist=data.result[0].artis
    if(!lyrs){
      document.querySelector(".txtBox").innerHTML = `
      <div class="alert alert-danger">

      <h4>Lyrics not found 😞</h4>
      </div>
      `;
      return
    }
    //replase \n to <br>
    const lyrics=lyrs.replace(/\n/g, "<br />")

    document.querySelector(".txtBox").innerHTML = `
    <div class="alert alert-success m-0">

    ${lyrics}
    </div>
    `


  })
    .catch((err) => {
      // document.querySelector(".txtBox").innerHTML = `
      // <div class="alert alert-danger">

      // <h4>Lyrics not found 😞</h4>
      // </div>
      // `;
      // console.log("Lyrics not found", err);
    });

  e.preventDefault();
}