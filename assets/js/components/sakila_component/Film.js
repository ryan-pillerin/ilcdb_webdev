
const Film = () => {

let actorForm = document.forms[0];
    let elementListOfActors = document.getElementById('ListOfFilms');

    const _getRecords = async () => {

        let results = await fetch('./app/sakila/film/getrecords.php', {
            method: 'POST',
            body: new FormData(actorForm)
        });
        let response = await results.text();
        let data = JSON.parse(response);
        _displayRecordsOnTable(data);
    }

    const _displayRecordsOnTable = ( data ) => {
        let htmlData = ``;
        data.map((row, index) => {
            htmlData += `
                <tr>
                    <td>${index+1}</td>
                    <td>${row.title}</td>
                    <td>${row.description}</td>
                    <td>${row.release_year}</td>
                    <td>${row.rating}</td>
                    <td>${row.special_features}</td>                   
                </tr>
            `;
        });

        elementListOfActors.innerHTML = htmlData;
    }

    const _eventListerner = () => {
        let elementFilmForm = document.getElementById('filmform');
        let elementSearchText = document.getElementById('searchfilm');

        elementFilmForm.addEventListener('submit', function(e) {
            e.preventDefault();
            _getRecords();
        });

        elementSearchText.addEventListener('keyup', function() {
            _getRecords();
        });
    }

    /**
     * Global Method - Initialize the Actor Object
     */
    const init = () => {
        /**
         * All codes here!
         */
        _getRecords();
        _eventListerner();
    }

    return {
        init
    }
}

export default Film;