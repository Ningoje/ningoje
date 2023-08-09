<div class="row">


  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="container">
      <h1>QR Code Generator</h1>
      <div class="row m-3 -p3">
        <div class="col-md-3">
          <input type="text" id="searchTxt" class="form-control" placeholder="Enter text or link">
        </div>
        <div class="col-sm-2">
          <button class="btn btn-primary" id="searchbtn">Generate Qr</button>

        </div>
        <div class="row m-3 -p-3">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="txtBox">

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-md-3"></div>
</div>


<!-- <div class="txtBox">

</div> -->

<script>
  document.querySelector("#searchbtn").addEventListener("click", qrGen);

  function qrGen(e) {
    const name = document.querySelector("#searchTxt").value;
    const qrlink = "https://api.akuari.my.id/other/qrcode?text=";
    const linkqr = qrlink.concat(name);

    try {
      document.querySelector(".txtBox").innerHTML = `
      <div>
        <img
          src="${linkqr}"
          class="rounded mx-auto d-block" alt="${name}" />
      </div>`;
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