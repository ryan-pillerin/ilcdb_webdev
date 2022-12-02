
const ImageProcessing = () => {

    let elmImageProperty = document.forms[2];
    let elmDisplayProperyImage = document.getElementById('diplayPropertyImage');
    let htmlData = ``;

    const _processImage = async () => {
        let result = await fetch('./app/realtor/property/processimage.php', {
            method: 'POST',
            body: new FormData(elmImageProperty)
        });
        let response = await result.text();
        let data = JSON.parse(response);
        console.log(data);
        /*htmlData += `
            <picture class="m-1">
                <source srcset="data:image/jpeg;charset=utf-8;base64,${data}" type="image/svg+xml">
                <img src="data:image/jpeg;charset=utf-8;base64,${data}" class="img-fluid img-thumbnail" alt="...">
            </picture>
        `;
        elmDisplayProperyImage.innerHTML = htmlData;*/
    }

    const _eventListener = () => {
        let elmFormImageProperty = document.getElementById('formPropertyImage');

        elmFormImageProperty.addEventListener('submit', function(e) {
            e.preventDefault();
            _processImage();
        });
    }

    const init = () => {
        _eventListener();
    }

    return {
        init
    }
}

export default ImageProcessing;