var start_id = 4;
var limit = 3;
function load() {
    $.ajax({
        url: 'module.php',
        type: 'POST',
        data: "start_id="+start_id+"&limit="+limit,
        error: function (req, text, error) {
            console.log(text + "  " + error)
        },
        success: function(answer) {
            console.log(answer);
            htmlInsert(answer);
        }
    });
}

function htmlInsert (jsonArr) {
    let arr =  JSON.parse(jsonArr);
    //console.log(arr.length);
    let box = document.querySelector('.box_content');
    for(let i = 0; i < arr.length; i++){
        let htmlSrt = `
        <a class="im" href="fullImage.php?img=${arr[i].path}">
            <img width="200" src="small/${arr[i]["path"]}" alt="error">
        </a>
        `;
        box.insertAdjacentHTML("beforeend", htmlSrt);
        start_id = Number(arr[i].id) + 1;
    }
}