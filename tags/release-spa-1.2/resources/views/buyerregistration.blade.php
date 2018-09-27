<?php $cf = new \App\lib\CommonFunction();
    use App\Http\Controllers\UtilityController;
 ?>
@extends('common.default')
@section('extra-links')

    <style>
        #imagePreview {
            width: 80%;
            height: 220px;
            background: url("{{asset('images/placecards/dummy.jpg')}}");
            background-position: center center;
            background-size: cover;
            -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
            border: 1px solid;
            display: inline-block;
            margin-bottom: 5px;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

    </style>
@stop
@section('content')
    <section class="">
        <div class="container"><!--Begin main cotainer-->
            <div class="row">
                <div data-spy="scroll" style="display: none;" class="static-tab">
                    <div class="text-center tab-arrow"><span class="fa fa-sort"></span></div>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active floor-navigation"><a href="#buyer-detail">Buyer Detail</a>
                        </li>
                        {{-- <li role="presentation" class="floor-navigation"><a href="#open-biss">Open Biss</a></li> --}}
                        <li role="presentation" class="floor-navigation"><a href="#smm">SMM</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#open-wish">Open Wish</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#confirm">Send</a></li>
                    </ul>
                </div>
                <div class="col-sm-11 col-sm-offset-1">
                    <img src="images/Buyerregistration.png" title="banner" class="img-responsive banner">
                    <h1>Buyer</h1>
                    <hr/>
                    <h2>XXXBuyer Information</h2>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }} </div>
                        @endforeach
                    @endif
                    {{-- <form action="/buyerregistration" method="Post" class="form-horizontal"> --}}
                    <?php echo Form::open(array('id' => 'form', 'files' => true))?>

                    {{--<hr>--}}
                    <div id="buyer-detail">
                        <h6 class="col-xs-12 red-color">{{$special_instruction or ""}}</h6>
                        {{--<h4 class="col-xs-12"><h2>Buyer Information</h2></h4>--}}
                        <div class="row  bottom-margin-md">
                            <div class="col-xs-7">
                                <div class="col-xs-12 no-padding ">
                                    <label class="col-sm-2 col-xs-12 control-label bottom-margin-md">Username</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" placeholder="Type your email" name="username"
                                               class="form-control col-xs-12" value="{{Input::old("username")}}">
                                    </div>
                                </div>
                                <div class="col-xs-12 no-padding bottom-margin-sm">
                                    <label class="col-sm-2 col-xs-12 control-label">Password</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="password" placeholder="Type your password" name="password"
                                               class="form-control col-xs-12">
                                    </div>
                                </div>
                                <div class="col-xs-12 no-padding bottom-margin-sm">
                                    <label class="col-sm-2 col-xs-12 control-label">Reconfirm</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="password" name="password_confirmation"
                                               placeholder="Retype your password" class="form-control col-xs-12">
                                    </div>
                                </div>
                                <div class="col-xs-12 no-padding bottom-margin-sm">
                                    <label class="col-sm-2 col-xs-12 control-label">Name</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" class="form-control col-xs-12" name="full_name"
                                               placeholder="*Compulsory" value="{{Input::old("full_name")}}">
                                    </div>
                                </div>
                            </div>
                            {{--End Of col-xs-7--}}
                            <div class="col-xs-1"></div>
                            {{--End Of col-xs-1--}}
                            <div class="col-xs-4">
                                <div class="col-xs-12 no-padding bottom-margin-sm">
                                    <div id="imagePreview" class="pull-right"></div>
                                    <span class="btn btn-primary btn-file pull-right">
                                        Upload Photo <input type="file" id="photo" name="photo">
                                    </span>
                                </div>
                            </div>
                            {{--End Of col-xs-7--}}
                        </div>
                        {{--End Of row bottom-margin-md--}}
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-sm-2 col-xs-12 control-label">Salutation</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="radio radio-green radio-inline">
                                            <input type="radio" checked="" name="salutation" value="Mr"
                                                   id="Mr" class="salt">
                                            <label for="Mr">Mr</label>
                                        </div>
                                        <div class="radio radio-green radio-inline">
                                            <input type="radio" checked="" name="salutation" value="Ms"
                                                   id="Ms" class="salt">
                                            <label for="Ms"> Ms</label>
                                        </div>
                                        <div class="radio radio-green radio-inline">
                                            <input type="radio" checked="" name="salutation" value="Mrs"
                                                   id="Mrs" class="salt">
                                            <label for="Mrs">Mrs</label>
                                        </div>
                                        <div class="radio radio-green radio-inline">
                                            <input type="radio" name="salutation" value="option1" id="Other"
                                                   class="salt">
                                            <label for="Other"> Other</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="radio radio-green radio-inline">
                                            <input type="text" id="otherinput" name="otherinput" class="form-control">
                                        </div>
                                    </div>
                                    {{--    </div> --}}
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-xs-5 control-label">Date Of Birth:</label>
                                    <div class="col-xs-7">
                                        <input type="text" name="dob" id='dob' placeholder="year/mm/dd"
                                               class="date form-control" value="{{Input::old("dob")}}">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-sm-3 col-xs-12 control-label">Gender</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <select name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    {{--    </div> --}}


                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-xs-5 control-label">Language</label>
                                    <div class="col-xs-7">
                                        <select name="language" class="form-control col-xs-12">
                                            @if(isset($languages))
                                                @foreach ($languages as $language)
                                                    {{--  {{$language}} --}}
                                                    <option selected="selected"
                                                            value="{{$language->id}}">{{$language->description}}</option>
                                                    }
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                        {{-- 2nd row ends --}}
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-sm-3 col-xs-12 control-label">Annual Income</label>
                                    <div class="col-sm-6 col-xs-12">
                                        <select name="income" class="form-control col-xs-12 ">
                                            <option value="<30k"> < 30,000</option>
                                            <option value="30-49k">30,000 - 49,999</option>
                                            <option value="50-59k">50,000 - 59,999</option>
                                            <option value="60-75k">60,000 - 74,999</option>
                                            <option value="75-99k">75,000 - 99,999</option>
                                            <option value="100-119k">100,000 - 119,999</option>
                                            <option value="120-149k">120,000 - 149,999</option>
                                            <option value="150-299k">150,000 - 299,999</option>
                                            <option value=">300k"> 300,000</option>
                                        </select>
                                    </div>

                                    {{--    </div> --}}

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-xs-5 control-label">Mobile</label>
                                    <div class="col-xs-7">
                                        <input type="text" name="mobile" placeholder="*Required" class="form-control"
                                               value="{{Input::old("mobile")}}">
                                    </div>
                                </div>


                            </div>
                        </div>
                        {{-- 3rd row ends --}}
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-sm-3 col-xs-12 control-label">Occupation</label>
                                    <div class="col-sm-6 col-xs-12">
                                        {{-- Input One --}}
                                        <select name="occupation" class="form-control col-xs-12 ">
                                            @if(isset($occupations))
                                                @foreach ($occupations as $occupation)
                                                    <option selected="selected"
                                                            value="{{$occupation->id}}">{{$occupation->description}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="col-xs-12 no-padding bottom-margin-md">
                                    <label class="col-xs-5 control-label"></label>
                                    <div class="col-xs-7">
                                        {{-- Input Two --}}
                                    </div>
                                </div>


                            </div>
                        </div>
                        {{-- 4th row ends --}}
                        {{-- 5th row ends --}}

                        <div class="col-xs-12 no-padding">
                            <label class="col-sm-12 control-label">Interest</label>
                            <div class="col-xs-12 bottom-margin-md buy-registration-radio">
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">

                                        <input type="radio"  name="electronics" value="0;1" id="electronics" class="checkBox">
                                        <label for="electronics">Electronics</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="travel" value="1;0" id="Travel" class="checkBox">
                                        <label for="Travel"> Travel</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="industrial" value="0;10" id="Industrial" class="checkBox">
                                        <label for="Industrial">Industrial</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="food" value="0;3" id="food" class="checkBox">
                                        <label for="food"> Food & Beverage</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="books" value="1;113" id="books" class="checkBox">
                                        <label for="books">Books & Stationery</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="fashion" value="0;4" id="fashion" class="checkBox">
                                        <label for="fashion">Fashion</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="sports" value="1;87" id="Sports" class="checkBox">
                                        <label for="Sports">Sports & Outdoor</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="decoration" value="1;102" id="decoration" class="checkBox">
                                        <label for="decoration"> Home Decoration</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="present" value="0;6" id="Present" class="checkBox">
                                        <label for="Present">Present</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="weddings" value="2;0" id="Weddings" class="checkBox">
                                        <label for="Weddings">Weddings</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="furniture" value="0;5" id="Furniture" class="checkBox">
                                        <label for="Furniture">Furniture</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="health" value="0;2" id="Health" class="checkBox">
                                        <label for="Health">Health & Beauty</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="automotive" value="0;7" id="Automotive" class="checkBox">
                                        <label for="Automotive">Automotive</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="construction" value="0;9" id="Construction" class="checkBox">
                                        <label for="Construction">Construction</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="souvenirs" value="0;6" id="Souvenirs" class="checkBox">
                                        <label for="Souvenirs">Souvenirs</label>
                                    </div>
                                </div>

                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="restaurant" value="3;1" id="Restaurant" class="checkBox">
                                        <label for="Restaurant">Restaurant & Cafe</label>
                                    </div>
                                </div>
                                <div class="col-sm-2 reg-radio-container">
                                    <div class="radio radio-green radio-inline">
                                        <input type="radio"  name="pets" value="1;100" id="Pets" class="checkBox">
                                        <label for="Pets">Pets</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="shipping-detail" class="bottom-margin-md col-xs-12">
                        <h4>
                            <b>
                                <i>
                                    Shipping Detail
                                </i>
                            </b>
                        </h4>
                        <div class="col-md-12 col-sm-12 no-padding bottom-margin-md">
                            <div class="col-md-2">
                                <label class=" control-label ">Default Address</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="default1" placeholder="Address Line 1" class="form-control"
                                       value="{{Input::old("default1")}}">
                                <input type="text" name="default2" placeholder="Address Line 2" class="form-control"
                                       value="{{Input::old("default2")}}">
                                <input type="text" name="default3" placeholder="Address Line 3" class="form-control"
                                       value="{{Input::old("default3")}}">
                                <input type="text" name="default4" placeholder="Address Line 4" class="form-control"
                                       value="{{Input::old("default4")}}">
                            </div>

                            <div class="col-sm-2">
                                <label class="control-label">Billing Address</label>
                                <button class="btn btn-sm btn-info" onclick="FillBilling(this.form)" name="fillbill">
                                    <span class="glyphicon glyphicon-book"></span> Copy Default Address
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="billing1" placeholder="Address Line 1" class="form-control"
                                       value="{{Input::old("billing1")}}">
                                <input type="text" name="billing2" placeholder="Address Line 2" class="form-control"
                                       value="{{Input::old("billing2")}}">
                                <input type="text" name="billing3" placeholder="Address Line 3" class="form-control"
                                       value="{{Input::old("billing3")}}">
                                <input type="text" name="billing4" placeholder="Address Line 4" class="form-control"
                                       value="{{Input::old("billing4")}}">
                            </div>
                            <p>&nbsp</p>
                            {{-- ROW --}}


                            {{-- ENDS --}}

                            <div class="col-xs-12 no-padding">
                                <div class="col-sm-2">
                                    <label class="control-label">Delivery Address</label>
                                    <button class="btn btn-sm btn-info" onclick="FillDelivery(this.form)"
                                            name="filldel"><span class="glyphicon glyphicon-book"></span> Copy Default
                                        Address
                                    </button>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="delivery1" placeholder="Address Line 1"
                                           class="form-control" value="{{Input::old("delivery1")}}">
                                    <input type="text" name="delivery2" placeholder="Address Line 2"
                                           class="form-control" value="{{Input::old("delivery2")}}">
                                    <input type="text" name="delivery3" placeholder="Address Line 3"
                                           class="form-control" value="{{Input::old("delivery3")}}">
                                    <input type="text" name="delivery4" placeholder="Address Line 4"
                                           class="form-control" value="{{Input::old("delivery4")}}">
                                </div>
                                <div class="col-sm-2">
                                    <label class="control-label">Country: </label>
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::select('country',[''=>'Country of Origin']+$cf->getCountry(), $userModel['city_id'], ['class' => 'form-control validator','id' => 'country_id']) !!}
                                </div>
                                <div class="col-sm-2">
                                    <label class="control-label">State: </label>
                                </div>
                                <div class="col-sm-4">
                                    @if(isset($userModel['city_id']))
                                        {!! Form::select('state', $cf->getState(),$userModel['city_id'], ['class' => 'form-control']) !!}
                                    @else
                                        <select class="form-control validator" id="states" required></select>

                                    @endif
                                </div>
                                <div class="col-sm-2">
                                    <label class="control-label">City: </label>
                                </div>
                                <div class="col-sm-4">
                                    @if(isset($userModel['city_id']))
                                        {!! Form::select('city', $cf->getCity(), $userModel['city_id'], ['class' => 'form-control']) !!}
                                    @else
                                        <select class="form-control validator" id="cities" name="city_name"
                                                required></select>
                                    @endif
                                </div>

                            </div>

                            <hr>
                            <div id="payment-method">
                                <h4>
                                    <b>
                                        <i>
                                            Payment Method
                                        </i>
                                    </b>
                                </h4>
                                <div class="col-sm-10">
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="debit_r" value="debit" class="pm" name="method"
                                               checked="checked">
                                        <label>Visa/Master</label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="banking_r" value="online_banking" class="pm"
                                               name="method">
                                        <label> Online Banking</label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="paypal_r" value="paypal" name="method" class="pm">
                                        <label>Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div id="debit">
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">Card Number</label>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="text" name="card_number" placeholder=""
                                               class="form-control col-xs-12" value="{{Input::old("card_number")}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">Name on Card</label>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="text" name="name_on_card" placeholder=""
                                               class="form-control col-xs-12" value="{{Input::old("name_on_card")}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">Expiry Date</label>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="text" name="expiry_date" placeholder=""
                                               class="date form-control col-xs-12"
                                               value="{{Input::old("expiry_date")}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1 col-xs-12">
                                        <input type="text" name="cvv" placeholder="" class="form-control col-xs-12"
                                               value="{{Input::old("cvv")}}">
                                    </div>
                                    <label class="col-sm-4 control-label">cvv/cv2</label>
                                </div>
                            </div>

                            <div id="paypal">
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">Payee Email</label>
                                    <div class="col-sm-3 col-xs-12">
                                        <input name="paypal_payee_email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div id="banking">
                                <label class="col-sm-12 control-label">Bank</label>
                                <div class="col-sm-3 col-xs-6">
                                    <select name="online_banking_bank" class="form-control col-xs-12 ">
                                        @if(isset($banks))
                                            @foreach($banks as $bank)
                                                <option value="{{$bank->id}}">{{$bank->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <label class="col-sm-12 control-label">Account No.</label>
                                <div class="col-sm-3 col-xs-6">
                                    <input class="form-control" name="account2" value="{{Input::old("account2")}}">
                                </div>
                            </div>
                            <div id="buyer-detail">
                                <h6 class="col-xs-12 red-color"><i>for potential dealer, social media marketeer and
                                        Merchant Consultant</i></h6>

                                <div class="col-xs-12 bottom-margin-md" id="open-biss">
                                <div id="smm" class="col-xs-12">

                                    <div class="col-xs-12">
                                        <hr>
                                        <a class="btn btn-blue col-sm-3" href="#"><i
                                                    class="glyphicon glyphicon-tower"></i> Social Media
                                            Marketeer</a>
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function () {


                                            $('.popup_fb_test').click(function () {
                                                newwindow = window.open("{{URL::route('testfbtoken')}}", 'Token Status', 'height=200,width=350');
                                                if (window.focus) {
                                                    newwindow.focus()
                                                }
                                                setTimeout(function () {
                                                    newwindow
                                                            .close();
                                                }, 30000);
                                                return false;
                                            });
                                            $('.popup_fb_token').click(function () {
                                                newwindow = window.open("{{URL::route('fbtoken')}}", 'Link Token', 'height=400,width=auto');
                                                if (window.focus) {
                                                    newwindow.focus()
                                                }
                                                return false;
                                            });

                                        });
                                    </script>
                                    <div class="col-xs-12">
                                        <br>
                                        <p class="text-center "><strong>to establish OpenWish you need to link the
                                                following Social Media</strong></p><br>
                                        <label>I wish to:</label>
                                    </div>
                                    <div class="link-facebook">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="popup_fb_token btn btn-facebook col-sm-12" href="#">Facebook</a>
                                            <a class="popup_fb_test btn col-sm-12" href="#">Test</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-linkedin">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-linkedin col-sm-12" href="#">Linked In</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-instagram">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-instagram col-sm-12" href="#"><em>Instagram</em></a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-wechat">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-wechat col-sm-12" href="#">WeChat</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-weibo">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-weibo col-sm-12" href="#">Weibo</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-twitter">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-twitter col-sm-12" href="#">Twitter</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-gplus">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-gplus col-sm-12" href="#">Google+</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                                <div id="open-wish" class="col-xs-12">

                                    <div class="col-xs-12">
                                        <hr>
                                        <p class="text-pink"><em>for buyer with OpenWish function</em></p>
                                        <a href="#" class="btn  col-sm-2" style="background-color:#D8E26D;"><i class="fa fa-heart"></i>
                                            OpenWish</a>
                                    </div>
                                    <div class="col-xs-12">
                                        <br>
                                        <p class="text-center "><strong>to establish OpenWish you need to link the
                                                following Social
                                                Media</strong>
                                        </p><br>
                                        <label>I wish to:</label>
                                    </div>
                                    <div class="link-facebook">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="popup_fb_token btn btn-facebook col-sm-12" href="#">Facebook</a>
                                            <a class="popup_fb_test btn  col-sm-12" href="#">Test</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-linkedin">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-linkedin col-sm-12" href="#">Linked In</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-instagram">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-instagram col-sm-12" href="#"><em>Instagram</em></a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-wechat">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-wechat col-sm-12" href="#">WeChat</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-weibo">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-weibo col-sm-12" href="#">Weibo</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-twitter">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-twitter col-sm-12" href="#">Twitter</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="link-gplus">
                                        <label class="col-sm-2 control-label">Link with</label>
                                        <div class="col-sm-2 text-center">
                                            <div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>
                                            <a class="btn btn-gplus col-sm-12" href="#">Google+</a>
                                        </div>
                                        <div class="col-sm-1 text-center"><strong>or</strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="email" placeholder="username" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                                <p><em>*anyone who register as social media marketeer will automatically register for
                                        OpenWish</em></p>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="pull-right" id="confirm">
                                    <input type="submit" class="btn btn-green btn-lg" value="Send">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div><!--End main cotainer-->
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $('.openwish').show();

            // *********
            $('#banking').hide();
            $('#paypal').hide();
            $('#debit').show();
            $('.pm').change(function () {
                if (this.value == "paypal") {
                    $('#paypal').show();
                    $('#debit').hide();
                    $('#banking').hide();

                }
                else if (this.value == "online_banking") {
                    $('#banking').show();
                    $('#debit').hide();
                    $('#paypal').hide();
                }
                else if (this.value == "debit") {
                    $('#debit').show();
                    $('#paypal').hide();
                    $('#banking').hide();

                }
                ;
                ;
            });

            $('.date').datetimepicker({
                viewMode: 'days',
                format: 'YYYY/MM/DD'
            });
        });
    </script>
    <script type="text/javascript">

        function FillBilling(f) {

            // if (f.fillbill.checked == true) {
            f.billing1.value = f.default1.value;
            f.billing2.value = f.default2.value;
            f.billing3.value = f.default3.value;
            f.billing4.value = f.default4.value;

        }
        function FillDelivery(f) {

            // if (f.filldel.checked == true) {
            f.delivery1.value = f.default1.value;
            f.delivery2.value = f.default2.value;
            f.delivery3.value = f.default3.value;
            f.delivery4.value = f.default4.value;
            // }
            // if (f.billingtoo.checked == false) {

            // }
        }
        // Salutation

    </script>

    <script type="text/javascript">
        //added by imran
        $(document).ready(function () {
            $('.checkBox').click(function(){
                if($(this).attr("checked")){
                    $(this).removeAttr("checked");
                }else{
                    $(this).attr("checked",true);
                }
            });
       //end function
            $('#form').bootstrapValidator({
                framework: 'bootstrap',
                // Feedback icons
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                // fields
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: "Username cannot be left empty"
                            },
                            stringLength: {
                                min: 7,
                                max: 50,
                                message: "The username must be more than 7 and less than 20 characters"
                            }
                        }
                    }
                    ,

                    password: {
                        validators: {
                            notEmpty: {
                                message: "Password cannot be left empty"
                            },
                            stringLength: {
                                min: 7,
                                max: 20,
                                message: "The Password must be more than 7 and less than 20 characters"
                            }
                        }
                    }
                    ,
                    password_confirmation: {
                        validators: {
                            notEmpty: {
                                message: "This field cannot be left empty"
                            },
                            stringLength: {
                                min: 7,
                                max: 20,
                                message: "The password must be more than 4 and less than 20 characters"
                            }
                        }
                    },

                    mobile: {
                        validators: {
                            notEmpty: {
                                message: "Mobile number is required"
                            },
                            digit: {
                                message: "Mobile number is not valid"
                            }
                        }
                    }
                    ,
                    default1: {
                        notEmpty: {
                            message: "Required"
                        },
                    }
                    ,
                    default2: {
                        notEmpty: {
                            message: "Required"
                        },
                    }
                    ,
                    billing1: {
                        notEmpty: {
                            message: "Required"
                        },
                    }
                    ,
                    billing2: {
                        notEmpty: {
                            message: "Required"
                        },
                    }
                    ,
                    delivery1: {
                        notEmpty: {
                            message: "Required"
                        },
                    }
                    ,
                    delivery2: {
                        notEmpty: {
                            message: "Required"
                        },
                    }
                    ,
                    card_number: {
                        validators: {
                            creditCard: {
                                message: "The card number is not valid"
                            }
                        }
                    },
                    name_on_card: {
                        validators: {
                            notEmpty: {
                                message: "Required"
                            }
                        },
                        cvv: {
                            validators: {
                                creditCardField: 'card_number',
                                message: 'The cvv is not valid'
                            }
                        },
                        paypal_payee_email: {
                            validators: {
                                emailAddress: {
                                    message: "Not a valid email"
                                }
                            }
                        }
                        ,

                    }
                }//fields

            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#otherinput').hide();
            $('.salt').change(function () {

                if (this.value == 'option1') {
                    $('#otherinput').show();
                }
                else {

                    $('#otherinput').hide();
                }
                ;
            });
        });

    </script>
    {{-- Bank Account --}}


    <script type="text/javascript">
        $(function () {

            $("#photo").on("change", function () {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function () { // set image data as background of div
                        $("#imagePreview").css("background-image", "url(" + this.result + ")");
                    }
                }
            });
        });
    </script>
@stop
