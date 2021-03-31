@extends('layouts.app')

@include('inc.lines')

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
                    <h2>Personal details</h2>
                    <p>Fields marked with an * are mandatory</p>
                    <div class="personal-info">
                        <div class="form-inline">
                            <label>Country: *</label>
                            <input class="form-control" type="text" class="form-inline"/>
                        </div>
                    </div>

                    <div class="form-inline">
                        <label>Phone: *</label>
                        <input class="form-control" type="text" class="form-inline"/>
                    </div>
                    <br>
                    <div class="form-inline">
                        <label>Confirm your<br>account password: *</label>
                        <input class="form-control" type="text" class="form-inline"/>
                    </div>
                    <button class="btn-primary btn">Save</button>
                </div>
            </div>

        </div>
    </div>

@endsection()
