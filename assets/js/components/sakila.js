const sakila = () => {

    const getActorRecords = async (searchtext) => {
        let formData = new FormData();
        formData.append('search', searchtext);

        let result = await fetch('./app/sakiladb.php', {
            method: 'POST',
            body: formData
        });

        let data = await result.text();
        let row = JSON.parse(data);
        _displayRecord(row);
    }

    const _displayRecord = (data) => {
        let displayElement = document.getElementById('display');
        let htmlData = ``;
        data.map(item => {
            htmlData += `
                <tr>
                    <td>${item.first_name}</td>
                    <td>${item.last_name}</td>
                </tr>
            `;
        });
        displayElement.innerHTML = htmlData;
    }

    const eventListener = () => {
        let btnSearchElement = document.getElementById('btnSearch');
        let txtSearchElement = document.getElementById('txtSearch');

        btnSearchElement.addEventListener('click', function() {
            getActorRecords(txtSearchElement.value);
        });

        txtSearchElement.addEventListener('keyup', function() {
            getActorRecords(txtSearchElement.value);
        });
    }

    return {
        getActorRecords,
        eventListener
    }

}

export default sakila;