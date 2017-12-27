offset = 50;

// onClick event for all navbar links("a")
$(".nav a").on("click", function (event) {
    
    // Making sure that the navbar's link has a hash value
    if (this.hash !== "") {
        
        var hash = this.hash;
        
        // Animation
        $("html").animate({

            // Scroll to said hash
            scrollTop: $(hash).offset().top - offset

        // Animation lasts 800ms 
        }, 800, function() {

            // Adding has to the page's URL
            window.location.hash = hash;
        });
    }
})