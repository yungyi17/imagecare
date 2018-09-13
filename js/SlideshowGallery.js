$(document).ready(function(){
    $.ajax({
        url: "json/imagefile.json", 
        success: function(result){
            for (var i = result.length - 1; i >= 0; i--) {
                $(".endPoint").prepend("<div class='mySlides'><div class='numbertext'></div><img src='" + result[i].Location + "' style='width:100%'></div>");
            }

            for (var i = 0; i < result.length; i++) {
                $(".row").append("<div class='column'><img class='demo cursor' src='" + result[i].Location + "' style='width:100%' alt='" + result[i].Description + "'></div>");
            }

            $("a.prev").click(function(){
                plusSlides(-1);
            });

            $("a.next").click(function(){
                plusSlides(1);
            });

            $(".demo").click(function(){
                var imgIndex = $(this).index(".demo");
                currentSlide(imgIndex+1);
            });

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");

                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}

                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                captionText.innerHTML = dots[slideIndex-1].alt;
            }
        }
    });

    $("button.upbtn").click(function(){
        window.location.href = "uploadImage.html";
    });

    $("button.delbtn").click(function(){
        window.location.href = "read.php";
    });
});