<div class="row m-3 p-3">
  <div class="col-md-3">

    <input class="form-control" type="text" id="searchTxt" placeholder="Enter a word">
  </div>
  <div class="col-sm-2">
    <button class="btn btn-info" id="searchbtn">🔎</button>
  </div>
</div>


<div class="card m-3 p-0 text-center" id="info"></div>

<script>

  document.querySelector("#searchbtn").addEventListener("click", getDictionary);
  function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }
  async function getDictionary(e) {
    const word = document.querySelector("#searchTxt").value;
    await fetch(`https://some-random-api.ml/dictionary?word=${word}`)
      .then((response) => response.json())
      .then((data) => {

        document.getElementById('info').innerHTML = `
    
    <div>
    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcStXqSrn9HZpaLCX85mKp6aujjkNn7mjR4w&usqp=CAU"
      class="rounded mx-auto d-block" alt="..."/>
  </div>
   <div class ="txtInfos">
    <h1> Word : ${capitalizeFirstLetter(data.word)}<h1>
    
    <p><h5> Definition : ${data.definition}</h5></p>
    
    </div> 
    `;
      }).catch((err) => {
        document.getElementById('info').innerHTML = `
        <div class="alert alert-danger text-center m-0 p-0" role="alert">
        <h4>word not found 😞</h4>
        </div>
        `;
        console.log("Lyrics not found", err);




      })
  }



</script>