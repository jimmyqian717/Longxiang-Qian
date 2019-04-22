<script>
        $(window).on("load", function() {
            console.log("Done loading image");
        });
        function animateBtn(x) {
            x.classList.toggle("change");
        }

        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        var counter = 0;
        var timer;
        var menuElement = document.getElementsByClassName("navMenu")[0];
        canvas.width  = window.innerWidth;
        canvas.height = window.innerHeight;
        
        canvas.onclick = function(){
            expandResponsiveMenu(x);
            document.getElementById("navIcon").classList.toggle("change");
        }

        //Random colors
        function getRandomColor() {
            var letters = '123456789ABC';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * letters.length)];
            }
            return color;
        }
        
        //Paint function
        function paintSquares(x){
            var width,height,ratioFactor,nRect,rectSize;
            width = canvas.width;
            height = canvas.height;
            //No over painting on Y axis
            ratioFactor = height/width;
            //Number of rectangles
            if (x.matches){
                nRect = 30;
            }else{
                nRect = 100;
            }
            rectSize = width/nRect;
            for(var y = 0; y < ratioFactor * nRect; y ++){
                for (var x = 0; x < nRect; x ++){
                    ctx.fillStyle = getRandomColor();
                    ctx.fillRect(x * rectSize, y * rectSize, rectSize, rectSize);
                }
            }

        }
        
        //Desktop
        function expandMenuDesktop(c){
            //First call no expanding
            if (c%2 == 0){
                //Expand menu
                menuElement.style.transform = "translateY(0)";
                    setTimeout(function(){
                    canvas.style.transform = "scale(1)";
                    canvas.style.opacity = "1";
                }, 400); 
                console.log("Painting...");
                //Paint rect
                paintSquares(x);  
                timer = setInterval(function(){paintSquares(x)}, 100);
            }
            else{
                //Hidemenu
                canvas.style.transform = "scale(1)";
                canvas.style.opacity = "0";
                setTimeout(function(){
                    menuElement.style.transform = "translateY(-100%)";
                }, 400); 
                //Stop painting
                clearInterval(timer);
            }
        }
        
        //Mobile
        function expandMenuMobile(c){
            if (c%2 == 0){
                //Expand menu
                menuElement.style.transform = "translateY(0)";
                setTimeout(function(){
                    canvas.style.opacity = "1";
                }, 400); 
                console.log("Painting...");
                //Paint rect
                paintSquares(x);
                timer = setInterval(function() {paintSquares(x)}, 100);
            }
            else{
                //Hidemenu
                canvas.style.opacity = "0";
                setTimeout(function(){
                    menuElement.style.transform = "translateY(-100%)";
                }, 400); 
                
                clearInterval(timer);
            }
        }
        
        //Responsive factors
        var x = window.matchMedia("(max-width: 576px)")
        expandResponsiveMenu(x) // Call listener function at run time
        x.addListener(expandResponsiveMenu) // Attach listener function on state changes
        function expandResponsiveMenu(x) {
            counter ++;
            if (x.matches) { // If media query matches
                expandMenuMobile(counter);
            } else {
                expandMenuDesktop(counter);
            }
        }

    </script>