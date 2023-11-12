year_=document.getElementById('year')
year_.innerHTML=new Date().getFullYear()
// show loading modal
const modal_content=`

            <div class="d-flex justify-content-center">
                <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
                </div>
            </div>
    
`
function showLoadingModal() {
    //create modal
    const modal = document.createElement('div');
    modal.className = 'modal';
    modal.innerHTML = `<div class="d-flex justify-content-center">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>`;
    document.body.appendChild(modal);
}

// hide loading modal
function hideLoadingModal() {
    document.querySelector('.modal').remove();
}
function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

