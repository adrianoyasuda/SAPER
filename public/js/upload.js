let feedback = function (res) {
    if (res.success === true) {
        let get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        document.querySelector('.status').innerHTML =
            ''+'<input  id="img_url" value='+get_link+' type="hidden" name="img_url"></input>';
    }

};

new Imgur({
    clientid: '4fa0503ded7ce95',
    callback: feedback
});