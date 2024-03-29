<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="userinfo.css">
</head>
<body>
    
    <form action="send.php" method="post">
        Subject<input type="text" name="subject" value=""> <br>
        <br>
        Message<input type="text" name="message" value=""> <br>
        <br>
        <button type="submit" name="send">Send</button>

    </form>
    <div class="artcon">
        <div id="savedDivisions" class="design">

        </div>
        
    </div>

    <div class="navbar">
        <a href="home.html">HOME</a>
        <a href="men.html">MEN</a>
        <a href="women.php">WOMEN</a>
        <a href="accessories.html">ACCESSORIES</a>
        <a href="userinfo.html" class="onpage">USER</a>
    </div>
    <br>
    <br>
    <br>
    <br>


<script>
    window.onload = function() {
        var savedDivisionsElement = document.getElementById("savedDivisions");

        
        for (var i = 0; i < localStorage.length; i++) {
            var divisionId = localStorage.key(i);
            var divisionContent = localStorage.getItem(divisionId);

           
            var divisionElement = document.createElement("div");
            divisionElement.id = divisionId;
            divisionElement.innerHTML = divisionContent;

            
            savedDivisionsElement.appendChild(divisionElement);

            var del = document.createElement("button");
            del.textContent = "Delete";
            del.onclick = function(){
                var divisionId = this.previousElementSibling.id;
                localStorage.removeItem(divisionId);
                this.previousElementSibling.remove();
                this.remove();
            };

            savedDivisionsElement.appendChild(del);
        }

    };
    
    function sendemail() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'send.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('Emails sent successfully');
            } else {
                alert('Error sending emails');
            }
        };
        xhr.send();
    }
</script>

<script src="home.js" defer></script>
</body>
</html>