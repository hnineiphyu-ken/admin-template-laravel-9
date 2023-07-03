@extends('layouts.admin')
@section('styles')
<style>
    html, body {
    min-height: 100%;
    }
    body, div, form, input, select, textarea, label { 
    padding: 0;
    margin: 0;
    outline: none;
    font-family: Roboto, Arial, sans-serif;
    font-size: 14px;
    color: #666;
    line-height: 22px;
    }
    h1 {
    position: absolute;
    margin: 0;
    font-size: 50px;
    color: #060606;
    z-index: 2;
    line-height: 83px;
    }
    legend {
    padding: 10px;      
    font-family: Roboto, Arial, sans-serif;
    font-size: 18px;
    color: #060606;
    /* background-color: #89DAFF; */
    }
    textarea {
    width: calc(100% - 12px);
    padding: 5px;
    }
    .testbox {
    display: flex;
    justify-content: center;
    align-items: center;
    height: inherit;
    padding: 20px;
    }
    form {
    width: 100%;
    padding: 20px;
    border-radius: 6px;
    background: #fff;
    box-shadow: 0 0 8px #89DAFF; 
    }
    .banner {
    position: relative;
    height: 250px;
    background-color: #ffff;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    }
    .banner::after {
    content: "";
    background-color: #89DAFF; 
    position: absolute;
    width: 100%;
    height: 100%;
    }
    input, select, textarea {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }
    input {
    width: calc(100% - 10px);
    padding: 5px;
    }
    input[type="date"] {
    padding: 4px 5px;
    }
    textarea {
    width: calc(100% - 12px);
    padding: 5px;
    }
    .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
    color:  #0a587c;
    }
    .item input:hover, .item select:hover, .item textarea:hover {
    border: 1px solid transparent;
    box-shadow: 0 0 3px 0  #0a587c;
    color: #0a587c;
    }
    .item {
    position: relative;
    margin: 10px 0;
    }
    .item span {
    color: red;
    }
    input[type="date"]::-webkit-inner-spin-button {
    display: none;
    }
    .item i, input[type="date"]::-webkit-calendar-picker-indicator {
    position: absolute;
    font-size: 20px;
    color: #00b33c;
    }
    .item i {
    right: 1%;
    top: 30px;
    z-index: 1;
    }
    .week {
    display:flex;
    justify-content:space-between;
    }
    .columns {
    display:flex;
    justify-content:space-between;
    flex-direction:row;
    flex-wrap:wrap;
    }
    .columns div {
    width:48%;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
    right: 1%;
    z-index: 2;
    opacity: 0;
    cursor: pointer;
    }
    input[type=radio], input[type=checkbox]  {
    display: none;
    }
    label.radio {
    position: relative;
    display: inline-block;
    margin: 5px 20px 15px 0;
    cursor: pointer;
    }
    .question span {
    margin-left: 30px;
    }
    .question-answer label {
    display: block;
    }
    label.radio:before {
    content: "";
    position: absolute;
    left: 0;
    width: 17px;
    height: 17px;
    border-radius: 50%;
    border: 2px solid #ccc;
    }
    input[type=radio]:checked + label:before, label.radio:hover:before {
    border: 2px solid  #0a587c;
    }
    label.radio:after {
    content: "";
    position: absolute;
    top: 6px;
    left: 5px;
    width: 8px;
    height: 4px;
    border: 3px solid  #89DAFF;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
    opacity: 0;
    }
    input[type=radio]:checked + label:after {
    opacity: 1;
    }
    .flax {
    display:flex;
    justify-content:space-around;
    }
    .btn-block {
    margin-top: 10px;
    text-align: center;
    }
    button {
    width: 150px;
    padding: 10px;
    border: none;
    border-radius: 5px; 
    background:  #89DAFF;
    font-size: 16px;
    color: #000;
    cursor: pointer;
    }
    button:hover {
    background:  #00b33c;
    }
    @media (min-width: 568px) {
    .name-item, .city-item {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }
    .name-item input, .name-item div {
    width: calc(50% - 20px);
    }
    .name-item div input {
    width:97%;}
    .name-item div label {
    display:block;
    padding-bottom:5px;
    }
    }
  </style>
@endsection
@section('content')
    <div class="card">
        <div class="banner">
            <h1>Hotel Reservation Form</h1>
        </div>
        <br />
        <form>
            <fieldset>
                <legend>Reservation Details</legend>
                <div class="columns">
                    <div class="item">
                        <label for="fname">First Name<span>*</span></label>
                        <input id="fname" type="text" name="fname" />
                    </div>
                    <div class="item">
                        <label for="lname"> Last Name<span>*</span></label>
                        <input id="lname" type="text" name="lname" />
                    </div>
                    <div class="item">
                        <label for="address">Address<span>*</span></label>
                        <input id="address" type="text" name="address" />
                    </div>
                    <div class="item">
                        <label for="zip">Zip Code<span>*</span></label>
                        <input id="zip" type="text" name="zip" required />
                    </div>
                    <div class="item">
                        <label for="city">City<span>*</span></label>
                        <input id="city" type="text" name="city" />
                    </div>
                    <div class="item">
                        <label for="state">State<span>*</span></label>
                        <input id="state" type="text" name="state" />
                    </div>
                    <div class="item">
                        <label for="eaddress">Email Address<span>*</span></label>
                        <input id="eaddress" type="text" name="eaddress" />
                    </div>
                    <div class="item">
                        <label for="phone">Phone<span>*</span></label>
                        <input id="phone" type="tel" name="phone" />
                    </div>
            </fieldset>
            <br />
            <fieldset>
                <legend>Dates</legend>
                <div class="columns">
                    <div class="item">
                        <label for="checkindate">Check-in Date <span>*</span></label>
                        <input id="checkindate" type="date" name="checkindate" />
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="item">
                        <label for="checkoutdate">Check-out Date <span>*</span></label>
                        <input id="checkoutdate" type="date" name="checkoutdate" />
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="item">
                        <p>Check-in Time </p>
                        <select>
                            <option value="" disabled selected>Select time</option>
                            <option value="1">Morning</option>
                            <option value="2">Afternoon</option>
                            <option value="3">Evening</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Check-out Time </p>
                        <select>
                            <option value="4" disabled selected>Select time</option>
                            <option value="5">Morning</option>
                            <option value="6">Afternoon</option>
                            <option value="7">Evening</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>How many adults are coming?</p>
                        <select>
                            <option value="8" disabled selected>Number of adults</option>
                            <option value="9">1</option>
                            <option value="10">2</option>
                            <option value="11">3</option>
                            <option value="12">4</option>
                            <option value="13">5</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>How many children are coming?</p>
                        <select>
                            <option value="14" disabled selected>Number of children</option>
                            <option value="15">0</option>
                            <option value="16">1</option>
                            <option value="17">2</option>
                            <option value="18">3</option>
                            <option value="19">4</option>
                            <option value="19">5</option>
                        </select>
                    </div>
                    <div class="item" style=width:100%>
                        <label for="room">Number of rooms</label>
                        <input id="room" type="number" name="room" />
                    </div>
                    <div class="item">
                        <p>Room 1 type</p>
                        <select>
                            <option value="20" selected></option>
                            <option value="21">Standard</option>
                            <option value="22">Deluxe</option>
                            <option value="23">Suite</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Room 2 type</p>
                        <select>
                            <option value="24" selected></option>
                            <option value="25">Standard</option>
                            <option value="26">Deluxe</option>
                            <option value="27">Suite</option>
                        </select>
                    </div>
                </div>
                <div class="item">
                    <label for="instruction">Special Instructions</label>
                    <textarea id="instruction" rows="3"></textarea>
                </div>
            </fieldset>
            <div class="btn-block">
                <button type="submit" href="/">Submit</button>
            </div>
        </form>
    </div>
@endsection
