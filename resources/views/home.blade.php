<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link rel="stylesheet" href="./css/index.css">
        <title>demoProject</title>
    </head>
    {{-- <body>
       
        <h1>YOUR SHOPPING BAG</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>SIZE</th>
                        <th>GENDER</th>
                        <th>DISCOUNT</th>
                        <th>Image</th>
                        <th>PRICE</th>
                        <th>remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>
                            {{$data->size == 1 ? 'M':'S'}}
                        </td>
                        <td>
                            {{$data->gender == 1 ? 'MALE':'FEMALE'}}
                        </td>
                        <td>{{$data->discount}}</td>
                        <td>
                            <img class="img-responsive" style="max-height:40px;max-width:40px" src="{{!empty($data->image) && file_exists(public_path('images/').$data->image) ? asset('images/'.$data->image): asset('images/noimage.png') }}">
                        </td>
                        <td>{{$data->price}}</td>
                        <td>
                            <span>
                                <form action="{{ route('deleteProduct', $data->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class='col-md-12'>
            <div class="col-md-6"><h5>Enter Promotional code</h5></div>
            <div class="col-md-3"><input type="text" id="promoCode"></div>
            <div class="col-md-3"><button type="button" id ="apply">Apply</button></div>
        </div>

        <div class='col-md-12'><h5>Subtotal</h5></div>

    </body> --}}

    <body>
        <div class='container'>
                @if(session()->get('success'))
                <div class='alert alert-success'>
                    {{session()->get('success')}}
                </div> <br/>
                @endif
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>
                        YOUR SHOPPING BAG
                    </h1>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 customPadding15">
                    <hr />
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            ITEMS
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            SIZE
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            QTY.
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            PRICE
                        </div>
                    </div>
                    <hr class='boldHrLine' />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-1">
                    @foreach ($data as $data)
                        <div class="row mb-2">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <img class="product" src="{{!empty($data->image) && file_exists(public_path('images/').$data->image) ? asset('images/'.$data->image): asset('images/noimage.png') }}" alt="..." />
                                        {{-- <img class="img-responsive" style="max-height:40px;max-width:40px" src="{{!empty($data->image) && file_exists(public_path('images/').$data->image) ? asset('images/'.$data->image): asset('images/noimage.png') }}"> --}}
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Solid Rubics Cube.</h4>
                                            <div class="descProduct"><b>Style:</b> #MS13KT1906</div>
                                            <div class="descProduct"><b>Colour:</b> Multi-Colour</div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                                            <span>
                                                <form action="{{ route('deleteProduct', $data->id)}}" method="post">
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                {{$data->gender == 1 ? 'MALE':'FEMALE'}}
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <span class="centerBorder">
                                    {{$data->quantity}}
                                </span>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <b>₹</b> {{$data->price}}
                            </div>
                        </div>
                    @endforeach
                    <hr class='boldHrLine' />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <p>
                                Need help or have question?
                            </p>
                            <p>
                                Call Customer Service at <br />
                                1-800-555-5555
                            </p>
                            <p>
                                <u>Chat with one of <br />
                                    our styles</u>
                            </p>
                            <p>
                                <u>See return <br />
                                    & exchange policy</u>
                            </p>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    ENTER PROMOTION CODE OR GIFT CARDS
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                    <input type="text" />
                                    <input type="button" value="APPLY" />
                                </div>
                            </div>
                            <hr class='boldHrLine' />
                            <div class="row mb-5">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    SUBTOTAL
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    $ 37.00
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    PORMOTION CODE <b>JF10</b> APPLIED
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    - $ 37.00
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    ESTIMATED SHIPPING* <br />
                                    <dd>You quality for free shipping</dd>
                                    <dd>because your order is over $50*</dd>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    FREE
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <h4 class="marginBottom">ESTIMATED TOTAL</h4>
                                    <span>Tax will be applied during checkout</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    FREE
                                </div>
                            </div>
                            <hr class='boldHrLine' />
                            <div class="row" style="float:right">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-5">
                                    <span><u>CONTINUE SHOPPING</u></span>
                                    <button class="btn btn-primary submitBtn"> Checkout </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </body>
</html>

<style>

.customPadding15{
    padding-top: 15px; 
}
.boldHrLine{
    border: 2px solid black;
}
.centerBorder{
    padding: 5px;
    text-align: center;
    border: 1px solid black;
}
.product{
    height: 300px;
    width: 250px;
    border: 1px solid black;
}
.descProduct{
    font-size: 13px;
}
h4{
    margin-bottom: 0 !important;
}
p u{
    font-weight: lighter !important;
}
input{
    vertical-align: middle;
}
dd{
    margin-bottom: 0 !important;
    font-size: 10px;
}
.marginBottom{
    margin-bottom: 0 !important;
}
.submitBtn{
    margin-left: 10px;
}
#footer{
    min-height: 100px;
}

</style>
