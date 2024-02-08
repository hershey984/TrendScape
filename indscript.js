function dropart(dropdownID) {
    var dropdownContent = document.getElementById(dropdownID);
    dropdownContent.style.display = (dropdownContent.style.display === 'flex') ? 'none' : 'flex';

    var parentElement = dropdownContent.parentElement;
    var images = parentElement.getElementsByClassName('artimg');

    for(var i=0; i < images.length; i++) {
        var img = images[i];
        if(dropdownContent.style.display === 'flex'){
            img.style.width = (img.style.width === '630px') ? '400px' : '630px';
            img.style.margin = (img.style.margin-left === '25px') ? 'none' : '25px';
            img.style.border = (img.style.border === '4px solid black') ? 'none' : '4px solid black';
        }else {
            img.style.width = '';
        }
    }
}

var articles = [
    { id: "artimg1", name: "aaa", page: "women.html" },
    { id: "artimg2", name: "aab", page: "women.html" },
    { id: "artimg3", name: "aac", page: "kids.html" },
    { id: "artimg4", name: "aad", page: "kids.html" },
    { id: "artimg5", name: "aae", page: "women.html" },
    { id: "artimg6", name: "aaf", page: "women.html" },
    { id: "artimg7", name: "aag", page: "kids.html" },
];

function opensearch() {
    var searchContainer = document.querySelector('.formcontainer');
    searchContainer.classList.toggle('show');
}

window.addEventListener('DOMContentLoaded', function() {
    function search() {
        var searchTerm = document.getElementById('searchinput').value.toLowerCase();

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

input.onkeyup = function (h) {
    var search = h.target.value;
    var suggestions = articles.map(function(articles){
        return articles.name;    
    });

    var a = [];

    if (search) {
        a = suggestions.filter(function (data) {
            return data.toLowerCase().startsWith(search.toLowerCase());
        });

        a = a.map(function (data) {
            return '<li>' + data + '</li>';
        });

        if (a.length > 0) {
            var sugbox = document.getElementById('searchsug');
            sugbox.style.display = (sugbox.style.display === 'block') ? 'none' : 'block';

            var dislist = sugbox.querySelectorAll("li");

            for (var i = 0; i < dislist.length; i++) {
                dislist[i].setAttribute("onclick", "select(this)");
            }

            showsug(a);
        } else {
            sugbox.style.display = 'none';
        }
    } else {
        sugbox.style.display = 'none';
    }
};

function showsug(list) {
    var sugin;

    if (list.length === 0) { 
        sugin = '<li>' + input.value + '</li>';
    } else {
        sugin = list.join('');
    }

    var sugbox = document.getElementById('searchsug'); 
    sugbox.innerHTML = sugin;
}
