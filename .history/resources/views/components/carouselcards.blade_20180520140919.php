<link rel="stylesheet" href="css/carouselcard.css">
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div id="carouselitem" class="carousel-item col-md-4 active">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=2" alt="slide 2">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=3" alt="slide 3">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=4" alt="slide 4">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=5" alt="slide 5">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=6" alt="slide 6">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=7" alt="slide 7">
            </div>
            <div id="carouselitem" class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=8" alt="slide 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    <script>
$('#carouselExample').on('slide.bs.carousel', function (e) {

/*

CC 2.0 License Iatek LLC 2018
Attribution required

*/

var $e = $(e.relatedTarget);
var idx = $e.index();
var itemsPerSlide = 3;
var totalItems = $('#carouselitem').length;

if (idx >= totalItems-(itemsPerSlide-1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i=0; i<it; i++) {
        // append slides to end
        if (e.direction=="left") {
            $('#carouselitem').eq(i).appendTo('.carousel-inner');
        }
        else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
    }
}
});


    </script>


