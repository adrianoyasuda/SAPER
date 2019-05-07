let feedback = function (res) {
    if (res.success === true) {
        let get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        document.querySelector('.status').classList.add('bg-success');
        document.querySelector('.status').innerHTML =
            'Image : '+'<br><input class="image-url" value=\"'+get_link+'\"/>'+'<img class="img" alt="Imgur-Upload" src=\"'+get_link+'\"/>';
    }

};

new Imgur({
    clientid: '4fa0503ded7ce95',
    callback: feedback
});