<div class="card glowing-card  h-100">
    <div class="card-header">
        Result ${index + 1}
    </div>
    <div class="card-body">
        <h5 class="card-title">${element.word} ${element.phonetic ?? ''}</h5>
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
                    }).join('<br> <br>')
                    }
            </div>

        </div>`
        }).join('')}
        <h6 class="card-subtitle mb-2 text-muted">Synonyms</h6>
        <ul class="text-left"> ${element.meanings.map(x => {
            return `${x.synonyms.map(x => {
            return `${x}`
            }).join(', ')}`
            }).join('')
            }</p>
            <h6 class="card-subtitle mb-2 text-muted">Antonyms</h6>
            <ul class="text-left"> ${element.meanings.map(x => {
                return `${x.antonyms.map(x => {
                return `${x}`
                }).join(', ')}`
                }).join('<br> <br>')
                }
            </ul>
            <div class="card-footer text-body-secondary">
                ${element.license.name}
            </div>
    </div>
</div>