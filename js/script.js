(function($){

    $(document).ready(function(){

        // goto top of  page
        $("#goto-top").on("click", function(e) {
            e.preventDefault();
            goToTop();
        })

        // show hide ships cruise table
        $(".toggle-ship-cruises").on("click",function(e){
            modal(this);
            return false;
        })

        //  remove modal
        $("body").on("click keyup","#overlay, #close", function(e) {
            destroyModal();
        })
        $("body").on("keyup",function(e){
            if (e.keyCode == 27) destroyModal();
        })

        // ships menu smooth scroll
        $("#ships-nav").on("click", "a", function(e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: $(this.hash).offset().top
            });
        });

        // TV carousel
        var slider = $(".tv-slides").bxSlider({
            controls: false,
            minSlides: 3,
            maxSlides: 3,
            slideWidth: 156,
            pager: false,
            slideMargin: 36
        });

        $(".slide-next").click(function(){
            slider.goToNextSlide();
            return false;
        });
        $(".slide-previous").click(function(){
            slider.goToPrevSlide();
            return false;
        });

        // Contact form get/set text on focus/blur
        $("input").on("focus blur", function (e) {

            this.setAttribute("rel", this.defaultValue);

            if (e.type == "focus") {
                if (this.value == this.getAttribute("rel")) this.value = "";
            }

            if (e.type == "blur") {
                if (this.value == "") this.value = this.getAttribute("rel");
            }
        });

    })



    function goToTop() {
        $("html, body").animate({scrollTop: 0})
    }

    function destroyModal() {
        $("#overlay").remove();
        $(".modal").hide();
    }

    function modal(t) {
        var scrollTop = $(window).scrollTop();
        var $modal = $(".modal");
        var $overlay = $('<div>', {
            id: "overlay",
            css: {
                position: "fixed",
                top: 0,
                width: "100%",
                height: "100%",
                backgroundColor: "#000",
                opacity: "0.8"
            }
        }).appendTo("body")

        $closeBtn = $('<div id="close">&times;</div>').appendTo($modal).css({
            "border-radius": "50%",
            "width": "36px",
            "height": "36px",
            "background-color": "#fff",
            "color": "#222",
            "font-size": "36px",
            "line-height": "1",
            "font-weight": "bold",
            "position": "absolute",
            "top": "-32px",
            "right": "-32px",
            "cursor": "pointer",
            "display": "flex",
            "justify-content": "center",
            "align-items": "center"
        })

        $modal.css({
            "position": "absolute",
            "top": scrollTop + 40,
            "left": "50%",
            "margin-bottom": "100px",
            "margin-left": "-520px",
            "z-index": "10000"
        })

        $(t).parent().nextAll(".modal").toggle();
    }
})(jQuery);