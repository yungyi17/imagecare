$(document).ready(function(){
    /*  Retrieve the images' data from DB and save as json data format. The data from json file
        will be operated to display the images as slides. */
    $.ajax({
        url: "json/imagefile.json", 
        success: function(result){
            /* Prepend images beyond endPoint class section to display those images as slides. */
            for (var i = result.length - 1; i >= 0; i--) {
                $(".endPoint").prepend("<div class='mySlides'><div class='numbertext'></div><img src='" + result[i].Location + "' style='width:100%'></div>");
            }

            /* Append the images row class section to select an image from the slides as a browser. */
            for (var i = 0; i < result.length; i++) {
                $(".row").append("<div class='column'><img class='demo cursor' src='" + result[i].Location + "' style='width:100%' alt='" + result[i].Description + "'></div>");
            }

            /* Previous button */
            $("a.prev").click(function(){
                plusSlides(-1);
            });

            /* Next button */
            $("a.next").click(function(){
                plusSlides(1);
            });

            /*  Get an image index number from the lists of images displayed as browser and pass the index number 
                as an argument to a function for the current image position. Index number starts 0 so that the passed 
                index number should be added 1. */
            $(".demo").click(function(){
                var imgIndex = $(this).index(".demo");
                currentSlide(imgIndex+1);
            });

            /* Initialize image slide index */
            var slideIndex = 1;
            showSlides(slideIndex);

            /* Add 1 to the slide index or subtract 1 from the slide index when a user clicks previous or next button. */
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            /* Current index position of an image */
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

                /* Prevent image slides displayed */
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                /* Prevent image browser displayed */
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                
                /* Image slides are displayed with active class and caption of the images. */
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                captionText.innerHTML = dots[slideIndex-1].alt;
            }
        }
    });

    /* Upload image button */
    $("button.upbtn").click(function(){
        window.location.href = "uploadImage.html";
    });

    /* Delete image button*/
    $("button.delbtn").click(function(){
        window.location.href = "read.php";
    });
});