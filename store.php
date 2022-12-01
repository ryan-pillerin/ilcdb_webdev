<!-- <form id="uploadfile">
    <input type="file" name="image" id="image" />
    <button type="submit">upload</button>
</form>

<img id="image_display" src="" />
<script>
    let imageobject = document.getElementById('uploadfile');

    imageobject.addEventListener('submit', async function(e) {
        e.preventDefault();
        let result = await fetch('./app/imageupload.php', {
            method: 'POST',
            body: new FormData(document.forms[0])
        })

        let response = await result.text();
        
        let imagedisplay = document.getElementById('image_display');
        imagedisplay.setAttribute('src', 'data:image/jpeg;charset=utf-8;base64,' + response);

    });
</script> -->