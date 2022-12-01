
const Actor = () => {

    let actorForm = document.forms[0];
    let elementListOfActors = document.getElementById('ListOfActors');

    const _getRecords = async () => {

        elementListOfActors.innerHTML = `
        <tr>
            <td colspan="3" class="text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="text-muted">Retrieving Records...</div>
            </td>
        <tr>
        `;

        let results = await fetch('./app/sakila/actor/getrecords.php', {
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
                    <td>${row.first_name} ${row.last_name}</td>
                    <td>&nbsp;</td>
                </tr>
            `;
        });

        elementListOfActors.innerHTML = htmlData;
    }

    const _eventListerner = () => {
        let elementActorForm = document.getElementById('actorform');

        elementActorForm.addEventListener('submit', function(e) {
            e.preventDefault();
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

export default Actor;