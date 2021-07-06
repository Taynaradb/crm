# crm

<li class="nav-item">
  <a onmouseover = "changePic1()" onmouseout="changePic2()" id="instagram"><img id="insta" src="images/instagram"></img></a>
</li>

<script>
  function changePic1() {
    document.getElementById("insta").src = "images/facebook";
    }
    function changePic2() {
    document.getElementById("insta").src = "images/instagram"; ---> 
    /* ID ON IMAGE FOR THE COMMAND && ONMOUSEOVER ONMOUSEOUT ON THE LINK */ 
    }
</script>
