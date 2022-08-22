    function fetchHeader(){
        let xhttp = new XMLHttpRequest();
        xhttp.open("Post",'header.html',true);

        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('header').innerHTML = this.responseText;
            }
        }

        xhttp.send();
   }
