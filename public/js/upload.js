let feedback = function (res) {
    if (res.success === true) {
        let get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        document.querySelector('.status').innerHTML =
            ''+'<a name="link" href='+get_link+'>'+get_link+'</a>';
    }

};

new Imgur({
    clientid: '4fa0503ded7ce95',
    callback: feedback
});