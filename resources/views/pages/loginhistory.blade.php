@extends('layouts.app')

@section('content')

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
                    <h2>Login history</h2>
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
                    </form>
                    <table class="table table-bordered text-center" style="margin-top: 10px;">
                        <thead>
                        <tr>
                            <th>Login Date/Time</th>
                            <th>IP Adress</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        <tr>
                            <td>19 Nov 22:00</td>
                            <td>105.163.60.25</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
