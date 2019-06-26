let feedback = function (res) {
    if (res.success === true) {
        let get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        document.querySelector('.status').innerHTML =
            ''+'<a>'+get_link+'</a>'+'<br><img src='+get_link+'>';
    }

};

new Imgur({
    clientid: '4fa0503ded7ce95',
    callback: feedback
});