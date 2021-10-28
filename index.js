fetch("https://16881.p.rapidapi.com/api?api=item_search_1688&q=%E9%9E%8B&page_size=20&page=1&sort=default", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "16881.p.rapidapi.com",
        "x-rapidapi-key": "a2f9b83603mshe836b91d46c776ep1f5d51jsn58d6b0976f97"
    }
})
    .then(response => {
        console.log(response);
    })
    .catch(err => {
        console.error(err);
    });