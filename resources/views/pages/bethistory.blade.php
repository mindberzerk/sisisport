@extends('layouts.app')

@section('content')
    @include('inc.lines')

    <div class="container">
        <div class="row row-cols-2">

            @include('inc.sidemenu')

            <div class="col-md-8">
                <div class="center-content col-lg-24 col-md-24 col-sm-24">
                    <h2>My Account</h2>
                    <p>Name: <span>{{ Auth::user()->name }}</span></p>
                    <p>Account number: <span>+254 00606199</span></p>

                    <table class="info-balance">
                        <tbody>
                        <tr>
                            <td>Available balance:</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        <tr>
                            <td>Unsettled bets:</td>
                            <td>Kes 10.00</td>
                        </tr>
                        <tr>
                            <td>Pending withdrowals:</td>
                            <td>Kes 00.00</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="btn-group">
                        <button class="btn-success btn" style="margin: 20px 0 0 0;">Withdrow</button>
                    </div>
                    <div class="v-space"></div>
                    <h2>Bet history</h2>
                    <form class="form-inline">
                        <div class="form-group ">
                            <div class="input-daterange" id="datepicker">
                                <span>From:</span>
                                <div class="input-group">
                                    <input type="text" class="input-sm form-inline" name="start"/>
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg"
                                                                       aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-daterange" id="datepicker">
                                <span>To:</span>
                                <div class="input-group">
                                    <input type="text" class="input-sm form-inline" name="end"/>
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg"
                                                                       aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="form-inline">
                        <button class="btn-primary btn">Show</button>
                        <select class="form-control marg-l">
                            <option disabled selected hidden>-</option>
                            <option>All</option>
                            <option>Deposit</option>
                            <option>Withdrawal</option>
                            <option>Bets</option>
                        </select>
                    </form>
                    <table class="table table-bordered bg-dark text-center" style="margin-top: 10px;">
                        <thead>
                        <tr>
                            <th>Date/Time</th>
                            <th>Total stake</th>
                            <th>Bet type</th>
                            <th>Details</th>
                            <th>Return</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>19 Nov 12:32</td>
                            <td>Kes 2000</td>
                            <td>Double</td>
                            <td>Click here</td>
                            <td>Kes 0.00</td>
                        </tr>
                        <tr>
                            <td>18 Nov 18.00</td>
                            <td>Kes 2000</td>
                            <td>Double</td>
                            <td>Click here</td>
                            <td>Kes 2000</td>
                        </tr>
                        <tr>
                            <td>17 Nov 19:30</td>
                            <td>Kes 2000</td>
                            <td>Double</td>
                            <td>Click here</td>
                            <td>Kes 2000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection()
