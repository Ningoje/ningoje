document.querySelector("#searchbtn").addEventListener("click", qrGen);

function qrGen(e) {
  const name = document.querySelector("#searchTxt").value;
  const qrlink ="https://api.akuari.my.id/other/qrcode?text=";
  const linkqr = qrlink.concat(name);

 try{
      document.querySelector(".txtBox").innerHTML = `
      <div>
        <img
          src="${linkqr}"
        />
      </div>
      <div class="txtInfos">
        <h1> ${name}</h1>
        
      </div>`;
 }
    catch(error) {
      document.querySelector(".txtBox").innerHTML = `
      <h4>Lyrics not found 😞</h4>
      `;
      console.log("Lyrics not found", err);
    };

  e.preventDefault();
}