function dropart(dropdownID) {
    var dropdownContent = document.getElementById(dropdownID);
    dropdownContent.style.display = (dropdownContent.style.display === 'flex') ? 'none' : 'flex';

    var parentElement = dropdownContent.parentElement;
    var designs = document.querySelectorAll('.design');
    var images = parentElement.getElementsByClassName('artimg');
    var specs = parentElement.querySelector('itemspecs');

    for(var i=0; i < images.length; i++) {
        var img = images[i];
        if(dropdownContent.style.display === 'flex'){
            img.style.width = (img.style.width === '630px') ? '400px' : '630px';
            img.style.margin = (img.style.margin-left === '25px') ? 'none' : '25px';
            img.style.border = (img.style.border === '4px solid black') ? 'none' : '4px solid black';
        }else {
            img.style.width = '';
            specs.style.display = 'none';
        }
    }
    for(var i = 0; i < designs.length; i++) {
        var design = designs[i];
        if(dropdownContent.style.display === 'flex'){
            design.style.width = '640px'; 
        } else {
            design.style.width = ''; 
        }
    }


}
var articles = [
    { id: "artimg1", name: "Clara leather jacket black", page: "women.php" },
    { id: "artimg2", name: "aab", page: "women.php" },
    { id: "artimg3", name: "aac", page: "kids.php" },
    { id: "artimg4", name: "aad", page: "kids.php" },
    { id: "artimg5", name: "aae", page: "women.php" },
    { id: "artimg6", name: "aaf", page: "women.php" },
    { id: "artimg7", name: "aag", page: "kids.php" },
];

var coats = articles.filter(function(articles) {
    return articles.id.includes("coat");
});

var articleswomen = articles.filter(function(article) {
    return article.page === "women.php";
});

var articleskids = articles.filter(function(article){
    return article.page === "kids.php";
});

function opensearch() {
    var searchContainer = document.querySelector('.formcontainer');
    searchContainer.classList.toggle('show');
}

function select(element) {
    var selectedArticleName = element.innerText.toLowerCase();

    var selectedArticle = articles.find(function(article) {
        return article.name.toLowerCase() === selectedArticleName;
    });

    if (selectedArticle) {
        var fullURL = selectedArticle.page + '#' + selectedArticle.id;
        window.location.href = fullURL;
    } else {
        alert('Selected article not found');
    }
}

window.addEventListener('DOMContentLoaded', function() {
    function search() {
        var searchTerm = document.getElementById('searchinput').value.toLowerCase();

        var mat = articles.filter(function (article) {
            return article.name.toLowerCase().includes(searchTerm);
        });

        if (mat.length > 0) {
            var fullURL = mat[0].page + '#' + mat[0].id;
            window.location.href = fullURL;
            var divid = mat[0].id;
            var divelm = document.getElementById(divid);
            divelm.scrollIntoView({ behavior: 'smooth' });
        } else {
            alert('Article not found');
        }
    }

    document.getElementById('sb').addEventListener('click', search);
});

const input = document.getElementById('searchinput');
const ssug = document.getElementById('searchsug');

input.onkeyup = function (e) {
    var search = e.target.value;
    var suggestions;
    var currentPage = window.location.pathname;

    if(currentPage.includes("women.php")) {
        suggestions = articleswomen.map(function(article){
            return article.name;
        });
    }else if(currentPage.includes("kids.php")) {
        suggestions = articleskids.map(function(article){
            return article.name;
        });
    }else if(currentPage.includes("men.php")) {
        suggestions = articlesmen.map(function(article){
            return article.name;
        });
    }else if(currentPage.includes("accessories.php")) {
        suggestions = articlesacc.map(function(article) {
            return article.name;
        });
    }else {
        suggestions = articles.map(function(article){
            return article.name;
        });
    }

    var a = [];
    var sugbox = document.getElementById('searchsug');
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

            document.getElementById('searchsug').addEventListener('click', function(event) {
                var target = event.target;
            
                if (target.tagName === 'LI') {
                    select(target);
                }
            });

            showsug(a);
        } else {
            sugbox.style.display = 'none';
        }
    } else {
        sugbox.style.display = 'none';
    }
};

while(!input.value.trim()){
    sugbox.style.display = 'none';
}

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

function saveDiv(divisionId, button) {
    var divisionContent = document.getElementById(divisionId).innerHTML;
    localStorage.setItem(divisionId, divisionContent);
    alert("Division content saved successfully!");
    button.style.backgroundColor = "red";
}
