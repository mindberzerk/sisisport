<!--Start of BetSlip-->

<div class="calculating">

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
               aria-controls="nav-home" aria-selected="true">Singles</a>
            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
               aria-controls="nav-profile" aria-selected="false">Doubles</a>
            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
               aria-controls="nav-contact" aria-selected="false">MyBets</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <!--START OF SINGLES BET-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="singles">
                <p>Man United</p>
                <p><em>Match result:</em> <span class="bet-result">Man United to <span
                            class="main-color">WIN</span></span>
                </p>
                <p><em>Price:</em> <span class="main-color">4.5</span></p>
            </div>

            <div class="singles">
                <p>Man City</p>
                <p>Match result</p>
                <p><em>Total kills:</em> <span class="bet-result">Down <span class="main-color">UNDER
													45</span></span>
                </p>
                <p><em>Price:</em> <span class="main-color">12.5</span></p>
            </div>

            <div class="singles-2">
                <form class="form-inline">
                    <label for="exampleInputName2">Total price: &nbsp; <span
                            class="main-color"> 8.325 </span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control" id="exampleInputName2">
                </form>
            </div>

            <div class="singles">
                <p>Total stake:<span class="main-color pull-right">10.25</span></p>
                <p>Potentional return:<span class="main-color pull-right">10.25</span></p>
            </div>

            <div class="btn-group">
                <button type="button" class="btn-outline-danger">Remove all</button>
                <button type="button" class="btn-outline-success" data-toggle="modal" data-target="#success-modal">
                    Place
                    bet
                </button>
            </div>
        </div>
        <!--END OF SINGLES BET-->

        <!--DOUBLES BET-->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="singles">
                <p>Man City</p>
                <p>Match result</p>
                <p><em>Total kills:</em> <span class="bet-result">Down <span class="main-color">UNDER
													45</span></span>
                </p>
                <p><em>Price:</em> <span class="main-color">12.5</span></p>
            </div>

            <div class="singles-2">
                <form class="form-inline">
                    <label for="exampleInputName2">Total price: &nbsp; <span
                            class="main-color"> 8.325 </span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control" id="exampleInputName2">
                </form>
            </div>

            <div class="btn-group">
                <button type="button" class="btn-outline-danger">Remove all</button>
                <button type="button" class="btn-outline-success" data-toggle="modal" data-target="#success-modal">
                    Place
                    bet
                </button>
            </div>

        </div>
        <!--DOUBLES BET-->

        <!--MY BETS-->
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="singles">
                <p>Man City</p>
                <p>Match result</p>
                <p><em>Total kills:</em> <span class="bet-result">Down <span class="main-color">UNDER
													45</span></span>
                </p>
                <p><em>Price:</em> <span class="main-color">12.5</span></p>
            </div>

            <div class="singles-2">
                <form class="form-inline">
                    <label for="exampleInputName2">Total price: &nbsp; <span
                            class="main-color"> 8.325 </span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control" id="exampleInputName2">
                </form>
            </div>

            <div class="btn-group">
                <button type="button" class="btn-outline-danger">Remove all</button>
                <button type="button" class="btn-outline-success" data-toggle="modal" data-target="#success-modal">
                    Place
                    bet
                </button>
            </div>
        </div>
        <!--MY BETS-->
    </div>

</div>
<!--betslip-->

<!-- Modal -->


<script>

    /*TABS*/
    $(document).ready(function () {
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });

    $('#myTab a').on('click', function (event) {
        event.preventDefault()
        $(this).tab('show')
    });
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });
</script>
