<h2 class="page-header text-center">Dictionary</h2>
<div class="card search-card m-2 p-2">
  <div class="row m-3 p-3">
    <div class="col-md-3">
      <input id="searchTxt" class="form-control" type="Pokemon name" placeholder="Enter word" />
    </div>
    <div class="col-sm-2">
      <button class="btn btn-primary" id="searchbtn">🔎</button>
    </div>
  </div>
</div>
<!-- saerch -->
<div class="card searchBox">
</div>

<div class="card results-card txtBox m-2">

</div>
<script>

  document.querySelector("#searchbtn").addEventListener("click", getDictionary);
  function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }
  async function getDictionary(e) {
    const word = document.querySelector("#searchTxt").value;
    const results_div = document.querySelector(".txtBox")
    if (word == "") {
      document.getElementById('searchTxt').classList.add('is-invalid');
      return
    }
    document.getElementById('searchTxt').classList.remove('is-invalid');
    //show loader
    results_div.innerHTML = modal_content
    //`https://some-random-api.ml/dictionary?word=${word}`
    const url_ = `https://api.dictionaryapi.dev/api/v2/entries/en/${encodeURIComponent(word)}`
    await fetch(url_)
      .then((response) => response.json())
      .then((data) => {
        if (data.title) {
          throw new Error(data.title + '<br> ' + data.message + '<br>' + data.resolution)
        }

        //       document.getElementById('info').innerHTML =
        //        `

        //   <div>
        //   <img
        //     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcStXqSrn9HZpaLCX85mKp6aujjkNn7mjR4w&usqp=CAU"
        //     class="rounded mx-auto d-block" alt="..."/>
        // </div>
        //  <div class ="txtInfos">
        //   <h1> Word : ${capitalizeFirstLetter(data.word)}<h1>

        //   <p><h5> Definition : ${data.definition}</h5></p>

        //   </div> 
        //   `;
        //@data array sample
        /*
   
        */
        //create columns
        const columns = data.length;
        const cols_width = parseInt(12 / columns);
        // alert(columns)
        let iner_cols = '';

        for (let x = 0; x < columns; x++) {
          iner_cols += `<div class="col-md-${cols_width}" id="results_${x}"></div>`;
        }

        results_div.innerHTML = `
  <div class="row m-2 p-2">
    ${iner_cols}
  </div>
`;

        //alert(iner_cols)
        //results_div.innerHTML = ''
        data.forEach((element, index) => {
          //alert(index)
          document.getElementById(`results_${index}`).innerHTML =`
<div class ="card glowing-card  h-100">
            <div class="card-header">
 Result ${index + 1}
  </div>
           <div class="card-body">
            <h5 class="card-title">${element.word}    ${element.phonetic ?? ''}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Phonetics</h6>
${element.phonetics.map((phonetic) => {
              return `<div class="card-text">
              <p>${phonetic.text}</p>
              <audio controls>
              <source src="${phonetic.audio}" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
              <p>licence : ${phonetic?.license?.name ?? ''}</p>

              </div>`
            }).join('')}

            <h6 class="card-subtitle mb-2 text-muted ">Meanings</h6>
            ${element.meanings.map((meaning) => {
              return `<div class="card-text">
              <p class="alert alert-info">Part of speech : ${meaning.partOfSpeech}</p>
              <p>Definitions :<br></p>
              <div class="text-left alert alert-success">
              <ul class="text-left"> ${meaning.definitions.map(x => {
                return `<li>${x.definition}</li>`
              }).join('')
                }</div>
              
              </div>`
            }).join('')}
            <h6 class="card-subtitle mb-2 text-muted">Synonyms</h6>
            ${element.meanings.map(x => {
              return `${x.synonyms.map(x => {
                return `${x}`
              }).join(', ')}`
            }).join('')
            }

              <h6 class="card-subtitle mb-2 text-muted">Antonyms</h6>
              <ul class="text-left"> ${element.meanings.map(x => {
              return `${x.antonyms.map(x => {
                return `${x}`
              }).join(', ')}`
            }).join('<br> <br>')
            }
            </ul>
            <div class="card-footer ">
   License :${element.license?.name??''}
   <a href="${element.license?.url??''}" class="btn btn-primary">More info</a>
  </div>
           </div>
           </div>

           `

        });
      }).catch((err) => {
        results_div.innerHTML = `
        <div class="alert alert-danger text-center m-0 p-0" role="alert">
        <h4>Error</h4>
        <h5>${err}</h5>
        </div>
        `;
        console.log("Lyrics not found", err);




      })
  }



</script>