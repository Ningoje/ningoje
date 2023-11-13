<!-- entertainment section -->
<h2 class="page-header text-center" id="cat-header">Entertainment</h2>

<!-- get category from url -->
<?php
$category = $_GET['cat'];
$cats = ['jokes', 'quotes', 'riddles'];
// if (!in_array($category, $cats)) {
//    include('404.php');
// }

?>
<div class="row ">
    <div class="col-md-1"></div>
    <div class="col-md-10" id="cat-div">
        <!-- dynamic cat content -->
    </div>
    <div class="col-md-1"></div>
</div>
<!-- script -->
<script>
    //modal content
    const modal_content_ = `

            <div class="d-flex justify-content-center">
                <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
                </div>
            </div>
    
`
    const base_url = 'https://api.api-ninjas.com/v1/';
    const api_key = 'pVu+077nJZLR5aSU3rT4Uw==Mjk3lCw4PETJptdl';
    const category = '<?php echo $category; ?>';
    const cat_div = document.getElementById('cat-div');
    const cat_header = document.getElementById('cat-header');
    switch (category) {
        case 'jokes':
            getJokes();
            break;
        case 'quotes':
            getQuotes();
            setQoutesCategoryDiv();
            //end
            //get quotes

            break;
        case 'riddles':
            getRiddles();
            break;
        default:
            break;
    }
    // alert(category);
    //get jokes
    async function getJokes() {
        cat_header.innerHTML = 'Jokes';

        //show loading
        cat_div.innerHTML = modal_content_;
        //get jokes
        const jokes = await fetch(base_url + 'jokes?limit=1', {
            headers: { 'X-Api-Key': api_key },
        })
            .then(res => res.json())
            .then(data => data[0]).catch(err => '');

        //show jokes
        const refresh_btn = `<button class="btn btn-primary" onclick="getJokes()">Refresh</button>`;
        cat_div.innerHTML = `
    ${jokes.joke} <br>
    ${refresh_btn}
    `;
    }
    async function getQuotes() {
        cat_header.innerHTML = 'Quotes';
        setQoutesCategoryDiv()
        
        //get quotes
        //url : https://api.api-ninjas.com/v1/quotes?category=
        addEventListener('change', (async (e) => {
            const category = e.target.value;//show loading
        cat_div.innerHTML = modal_content_;
            const quotes = await fetch(base_url + 'quotes?category=' + category, {
                headers: { 'X-Api-Key': api_key },
            })
                .then(res => res.json())
                .then(data => data[0]).catch(err => '');
            console.log(quotes);
            refresh_btn = `<button class="btn btn-primary" onclick="getQuotes()">Refresh</button>`;
            cat_div.innerHTML = `
            <blockquote class="blockquote">
            <p class="text text-center">${quotes.quote} </p><br>
            </blockquote>
            ~${quotes.author} <br>
            <br>
            ${refresh_btn}
            `;

        }))


    }
    let riddles_ = {
        question: '',
        answer: '',
        btn: '',
    }
    function setQoutesCategoryDiv(){
        //set category dropdown
        const categoryDropdown = [
            "age", "alone", "amazing", "anger", "architecture", "art", "attitude", "beauty", "best", "birthday", "business", "car", "change", "communications", "computers", "cool", "courage", "dad", "dating", "death", "design", "dreams", "education", "environmental", "equality", "experience", "failure", "faith", "family", "famous", "fear", "fitness", "food", "forgiveness", "freedom", "friendship", "funny", "future", "god", "good", "government", "graduation", "great", "happiness", "health", "history", "home", "hope", "humor", "imagination", "inspirational", "intelligence", "jealousy", "knowledge", "leadership", "learning", "legal", "life", "love", "marriage", "medical", "men", "mom", "money", "morning", "movies", "success"
        ]
        const categoryDropdown_ = categoryDropdown.map(cat => `<option value="${cat}">${cat}</option>`);
        const categoryDropdownHtml = `
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                ${categoryDropdown_}
            </select>
            `;
        cat_div.innerHTML = categoryDropdownHtml;
    }
    async function getRiddles() {
        //url : https://api.api-ninjas.com/v1/riddles
        cat_header.innerHTML = 'Riddles';
        //show loading
        cat_div.innerHTML = modal_content_;
        //get riddles
        const riddles = await fetch(base_url + 'riddles', {
            headers: { 'X-Api-Key': api_key },
        }).then(res => res.json()).then(data => data[0]).catch(err => '');
        riddles_ = { ...riddles };
        const refresh_btn = `<button class="btn btn-primary" onclick="getRiddles()">Refresh</button>`;
        riddles_.btn = refresh_btn;
        const answer_btn = `<button class="btn btn-primary" onclick="showAnswer()">Show Answer</button>`
        cat_div.innerHTML = `
        ${riddles.question} <br>
       ${answer_btn}
        ${refresh_btn}
        `;




    }
    //showAnswer(); 
    function showAnswer() {
        console.log(riddles_);
        cat_div.innerHTML = `
            ${riddles_.question} <br>
            <p class="alert alert-success">${riddles_.answer} <br></p>

            ${riddles_.btn}
            `;
    }



</script>