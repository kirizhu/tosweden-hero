<!-- Search Form -->
<div class="container my-3">
    <div class="col-xs-12 col-md-10 col-lg-8 col-center-block box">

        <!-- Data is send to "php/search.php" -->
        <form class="form-route" action="php/search.php" method="POST">
            <!-- From / To -->
            <div class="form-row">

                <div class="form-group col-10 col-md-12" style="margin-bottom:0">
                    <div class="form-row">
                        <!-- 2. From location -->
                        <div class="form-group box-center location-size col-md-4 col-10" >
                            <label class="sr-only lang" key="from" for="from-location"></label>
                            <input type="text" class="form-control search-text" id="fromLocation" placeholder="Anywhere..." name="fromLocation">
                        </div>

                        <!-- 3. Reverse button with large screen, Hide under narrow screan -->
                        <div class="form-group box-center col-md-1 d-none d-lg-block">
                            <i class="material-icons revers-button" onclick="fun-reverse()">swap_horiz</i>
                        </div>

                        
                        <div class="form-group col-md-2 d-none d-md-block">
                            <button class="box-center search-button lang" key="search" type="submit"></button>
                        </div>

                    </div>
                </div>

            </div>

        </form>
    </div>
</div>
<!-- End of Search Form -->
