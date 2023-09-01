<h2 class="page-header text-center">QR Code Generator</h2>
<div class="card search-card m-2 p2">
  <div class="row m-3 -p3">
    <div class="col-md-3">
      <input type="text" id="searchTxt" class="form-control" placeholder="Enter text or link">
    </div>
    <div class="col-sm-2">
      <button class="btn btn-primary" id="searchbtn">Generate Qr</button>

    </div>
  </div>
</div>
<div class="txtBox">

</div>
<div class="col-md-3"></div>
</div>


<!-- <div class="txtBox">

</div> -->

<script>
  document.querySelector("#searchbtn").addEventListener("click", qrGen);

  function qrGen(e) {
    const S_Element=document.querySelector("#searchTxt")
    const name = S_Element.value;
    if (name === "") {
     S_Element.classList.add("is-invalid");
      return;
    }
    S_Element.classList.remove("is-invalid");
    const qrlink = "https://api.akuari.my.id/other/qrcode?text=";
    const linkqr = qrlink.concat(name);

    try {
      document.querySelector(".txtBox").innerHTML = `
      <div class="card results-card  m-2 text-center">
      <div class="card-header">
        <h4>QR Code</h4>
      </div>
      <div class="card-body">
      <h4>${name}</h4>

      </div>
      
      <div>
        <img
          src="${linkqr}"
          class="rounded mx-auto d-block " alt="${name}" />
      </div>
      </div>
      `;
    }
    catch (error) {
      document.querySelector(".txtBox").innerHTML = `
      <h4>error try again later</h4>
      `;
      console.log("Lyrics not found", err);
    };

    e.preventDefault();
  }



</script>