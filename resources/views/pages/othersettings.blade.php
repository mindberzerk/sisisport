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
                    <h2>Other settings</h2>
                    <div class="deposit-info">
                        <form class="form-inline">
                            <label>Inactivity timeout:</label>
                            <select class="form-control">
                                <option disabled selected hidden>--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <span>minutes</span>
                        </form>
                        <form class="form-inline">
                            <label>Time zone:</label>
                            <select class="form-control">
                                <option disabled selected hidden>--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </form>
                        <form class="form-inline">
                            <label>Odds type:</label>
                            <select class="form-control">
                                <option disabled selected hidden>--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </form>
                        <form class="form-inline">
                            <label>Automatical confirmation<br>of the change of odds:</label>
                            <select class="form-control">
                                <option disabled selected hidden>--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </form>
                        <form class="form-inline">
                            <label>Show current balance:</label>
                            <div class="check-pos">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios1"
                                               value="option1" checked>
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios2"
                                               value="option2">
                                        No
                                    </label>
                                </div>
                            </div>
                        </form>
                        <button class="btn-primary btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
