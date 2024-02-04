function home(){
    window.location.href="homepg.html";

}

function about(){

}
   
function dropAcc(){
    var dropdownContent = document.querySelector('.categoriesbutton .dropdowncontent');
    dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
}

function explore(){
    window.location.href="explore.html";

}

function contact(){

}

function login(){
    

}

function dropart(dropdownID) {
    var dropdownContent = document.getElementById(dropdownID);
    dropdownContent.style.display = (dropdownContent.style.display === 'flex') ? 'none' : 'flex';

    var parentElement = dropdownContent.parentElement;
    var images = parentElement.getElementsByClassName('artimg');

    for(var i=0; i < images.length; i++) {
        var img = images[i];
        if(dropdownContent.style.display === 'flex'){
            img.style.width = (img.style.width === '80%') ? '400px' : '70%';
        }else {
            img.style.width = '';
        }
    }
}


function opensearch() {
    var searchContainer = document.querySelector('.formcontainer');
    searchContainer.classList.toggle('show');
}

window.addEventListener('DOMContentLoaded', function() {
    function search() {
        var searchTerm = document.getElementById('searchinput').value.toLowerCase();

        var articles = [
            { id: "artimg1", name: "aaa", page: "women.html" },
            { id: "artimg2", name: "aab", page: "women.hmtl" },
            { id: "artimg3", name: "aac", page: "kids.html" },
            { id: "artimg4", name: "aad", page: "kids.html" },
            { id: "artimg5", name: "aae", page: "women.html" },
            { id: "artimg6", name: "aaf", page: "women.html" },
            { id: "artimg7", name: "aag", page: "kids.html" },
        ];

        var match = articles.filter(function (article) {
            return article.name.toLowerCase().includes(searchTerm);
        });

        if (match.length > 0) {
            var fullURL = match[0].page + '#' + match[0].id;
            window.location.href = fullURL;
            var divid = match[0].id;
            var divelm = document.getElementById(divid);
            divelm.scrollIntoView({ behavior: 'smooth' });
        } else {
            alert('article not found');
        }
    }

    document.getElementById('sb').addEventListener('click', search);
});

const input = document.getElementById('searchinput');
const ssug = document.getElementById('searchsug');

const suggestions = ["aaa", "aab", "aac"];

input.onkeyup = (h) => {

}
