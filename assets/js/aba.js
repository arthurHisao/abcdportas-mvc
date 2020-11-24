/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

       function openTab(evt, nomeAba) {
            var i, tabcontent, tablinks;
            // obtendo a class //
            tabcontent = document.getElementsByClassName("tabcontent");
            
            for (i=0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            
            document.getElementById(nomeAba).style.display = "block";
            evt.currentTarget.className += " active";
        }
        
        function show() {
        var senhaLogin = document.getElementById("senhaLogin");
            if (senhaLogin.type === "password") {
                senhaLogin.type = "text";
            } else {
              senhaLogin.type = "password";
            }
        }
     
        function showReset() {
        var senhaLogin = document.getElementById("senhaReset");
            if (senhaLogin.type === "password") {
                senhaLogin.type = "text";
            } else {
              senhaLogin.type = "password";
            }
        }
      
        function showActualPwd() {
        var senhaLogin = document.getElementById("senhaAtual");
            if (senhaLogin.type === "password") {
                senhaLogin.type = "text";
            } else {
              senhaLogin.type = "password";
            }
        }
        
        function showRegister() {
        var senhaLogin = document.getElementById("senhaCad");
            if (senhaLogin.type === "password") {
                senhaLogin.type = "text";
            } else {
              senhaLogin.type = "password";
            }
        }
        
//        var active = document.getElementById("btnFormLogin");
//        for (var i = 0; i < active.length; i++) {
//            active[i].addEventListener("click", function() {
//               var current = document.getElementsByClassName("active");
//               current[0].className = current[0].className.replace(" active", "");
//               this.className += " active";
//            });
//        }
        

        
        
        
