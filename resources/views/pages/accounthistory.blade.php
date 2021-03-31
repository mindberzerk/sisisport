@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row row-cols-2">

            @include('inc.sidemenu')

            <div class="col-md-8">
                <div class="center-content">
                    <h2>My Account</h2>
                    <<p>Name: <span style="color: rgb(233,185,12);">{{ Auth::user()->name }}</span></p>
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

                    <div class="v-space"></div>
                    <h2>Account history</h2>
                    <form class="form-inline">
                        <div class="form-group">
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

                    <table class="table table-bordered text-center" style="margin-top: 10px;">
                        <thead>
                        <tr>
                            <th>Date/Time</th>
                            <th>Operation</th>
                            <th>Value</th>
                            <th>Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>18 Nov 18:00</td>
                            <td>Bet stoke</td>
                            <td>Kes 2000.00</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        <tr>
                            <td>18 Nov 18:00</td>
                            <td>Bet stoke</td>
                            <td>Kes 2000.00</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        <tr>
                            <td>18 Nov 18:00</td>
                            <td>Bet stoke</td>
                            <td>Kes 2000.00</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        <tr>
                            <td>18 Nov 18:00</td>
                            <td>Bet stoke</td>
                            <td>Kes 2000.00</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        <tr>
                            <td>18 Nov 18:00</td>
                            <td>Bet stoke</td>
                            <td>Kes 2000.00</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        <tr>
                            <td>18 Nov 18:00</td>
                            <td>Bet stoke</td>
                            <td>Kes 2000.00</td>
                            <td>Kes 4000.00</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection()
