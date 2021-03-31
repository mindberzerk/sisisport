@extends('layouts.app')

@section('content')
    @include('inc.lines')
    <div class="container">
        <div class="row row-cols-2">

            @include('inc.sidemenu')

            <div class="col-md-8">
                <div class="center-content col-lg-24 col-md-24 col-sm-24">
                    <h2>My Account</h2>
                    <p>Name: <span style="color: rgb(233,185,12);">{{ Auth::user()->name }}</span></p>
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
                    <h1>Payment source</h1>
                    <h2>Mpesa Account No : <span>xxxx</span></h2>
                    <button class="btn-success btn">Click to deposit</button>
                    <br><br>
                    <h2>Airtel Money : <span>xxxx</span></h2>
                    <button class="btn-danger btn">Click to deposit</button>

                    <br><br>
                    <h2>Card type: <span>Visa Debit</span></h2>
                    <p>Card number: **** **** **** <span>xxxx</span></p>
                    <p>Name on card: <span>karani</span></p>
                    <div class="deposit-info-2">
                        <form class="form-inline">
                            <label>Valid from:</label>
                            <select class="form-control">
                                <option disabled selected hidden>Year</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                            </select>
                            <select class="form-control marg-l">
                                <option disabled selected hidden>Month</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </form>
                        <form class="form-inline">
                            <label>Expires:</label>
                            <select class="form-control">
                                <option disabled selected hidden>Year</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                            </select>
                            <select class="form-control marg-l">
                                <option disabled selected hidden>Month</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </form>
                        <form class="form-group form-inline">
                            <label>Issue number:</label>
                            <input class="form-control" type="text" class="form-inline"/>
                        </form>
                    </div>
                    <button class="btn-primary btn">Save</button>
                    <button class="btn-danger btn paymental-remove">Remove payment source</button>
                </div>
            </div>
        </div>
    </div>

@endsection()
