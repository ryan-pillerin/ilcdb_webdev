
const ImageProcessing = () => {

    let elmImageProperty = document.forms[2];
    let elmDisplayProperyImage = document.getElementById('diplayPropertyImage');
    let elmFormImageProperty = document.getElementById('formPropertyImage');
    let htmlData = ``;

    const _processImage = async () => {
        let result = await fetch('./app/imageupload.php', {
            method: 'POST',
            body: new FormData(elmImageProperty)
        });
        let response = await result.text();
        htmlData += `
            <picture class="m-1">
                <source srcset="data:image/jpeg;charset=utf-8;base64,${response}" type="image/svg+xml">
                <img src="data:image/jpeg;charset=utf-8;base64,${response}" class="img-fluid img-thumbnail" alt="..." style="width:250px;">
            </picture>
        `;
        elmDisplayProperyImage.innerHTML = htmlData;
        elmFormImageProperty.reset();
    }

    const _eventListener = () => {
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