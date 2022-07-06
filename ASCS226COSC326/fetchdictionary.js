document.querySelector("#searchbtn").addEventListener("click",getDictionary);
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }
function getDictionary(e){
    const word = document.querySelector("#searchTxt").value;
    fetch(`https://some-random-api.ml/dictionary?word=${word}`)
    .then((response) => response.json())
    .then((data)=>{

    document.querySelector(".txtBox").innerHTML =`
    
    <div>
    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcStXqSrn9HZpaLCX85mKp6aujjkNn7mjR4w&usqp=CAU"
    />
  </div>
   <div class ="txtInfos">
    <h1> Word : ${capitalizeFirstLetter(data.word)}<h1>
    
    <p><h5> Definition : ${data.definition}</h5></p>
    
    </div> 
    `;
    }).catch((err)=>{
        document.querySelector(".dictBody").innerHTML = `
        <h4>word not found 😞</h4>
        `;
        console.log("Lyrics not found", err);




    })
}