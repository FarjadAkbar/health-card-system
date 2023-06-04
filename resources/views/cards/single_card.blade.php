<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>


        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .sema-card {
            /*border-radius: 40px;*/
            background-color: transparent;
            background-position: center !important;
            background-size: cover !important;
            background-repeat: no-repeat;
            position: fixed;
            height: 350px;
            width: 550px;
            /*margin:20px auto;*/
        }

        .page-break {
            page-break-after: always;
        }

        #image {
            margin-right: 7px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            float: left;
            margin-left: 20px;
            margin-top: 10px;
        }

    </style>

</head>
<body>
<div class="row" id="print">
    @if($desin  == 1 )
        <div class="col-lg-4">

        </div>
        <div class="col-lg-12 col-md-12 sema-card"
             style="background-image: url({{public_path('assets/img/sama_card.jpg')}});background-size:cover; ">

            <div class="row align-items-center">
                <div class="col-lg-4 header" id="image"  style="margin-left: 30px; margin-top: 110px;width: 20%;">
                    @if($card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img != '')
                        <img style="height: 100px; width: 90px;"
                             src="{{ URL::to('customer_img')}}/{{$card->father_id}}/{{\App\Card::where('cpr_no', $card->father_id)->first()->img}}"/>
                    @endif

                </div> 

                <div class="col-lg-12" style="margin-left: {{ $card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img ? '130px' : '90px' }}">
                    <b>
                        <table style="font-size: 19px">
                            <tr>
                                <td><b>Name </b></td>
                                <td><b>: {{$card->name ?? ''}}</b></td>
                            </tr>
                            <tr>
                                <td><b>CPR No.</b></td>
                                <td>: {{$card->cpr_no ?? ''}}</td>
                            </tr>
                            <tr>
                                <td><b>ID No. </b></td>
                                <td>: SHC222{{$card->id ?? ''}}</td>
                            </tr>
                            <tr>
                                <td><b>Valid till </b></td>
                                <td>: {{$card->expiry ?? ''}}</td>
                            </tr>
                        </table>
                    </b>

<!--@if(!$card->group_company)-->
<!--                    <h2 style="margin-top: 12px">This is Not Insurance Card</h2>-->
<!--                                                            @endif-->
                </div>

                <div class="col-lg-4"></div>
            </div>

        </div>
        <div class="col-lg-4"></div>
    @elseif($desin  == 0)
        <div class="col-lg-12 col-md-12 sema-card">

            <div class="row">
                 <div class="col-lg-4 header" id="image" style="margin-left: 30px; margin-top: 90px;width: 20%;">
                    @if($card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img != '')
                        <img style="height: 100px; width: 90px;"
                             src="{{ URL::to('customer_img')}}/{{$card->father_id}}/{{\App\Card::where('cpr_no', $card->father_id)->first()->img}}"/>
                    @endif

                </div> 
                <div class="col-lg-12" style="margin-left: {{ $card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img ? '130px' : '90px' }}">
                    <b>
                        <table style="font-size: 19px">
                            <tr>
                                <td><b>Name </b></td>
                                <td><b>: {{$card->name ?? ''}}</b></td>
                            </tr>
                            <tr>
                                <td><b>CPR No.</b></td>
                                <td>: {{$card->cpr_no ?? ''}}</td>
                            </tr>
                            <tr>
                                <td><b>ID No. </b></td>
                                <td>: SHC222{{$card->id ?? ''}}</td>
                            </tr>
                            <tr>
                                <td><b>Valid till </b></td>
                                <td>: {{$card->expiry ?? ''}}</td>
                            </tr>
                        </table>
                    </b>

<!--@if(!$card->group_company)-->
<!--                    <h2 style="margin-top: 12px">This is Not Insurance Card</h2>-->
<!--                                                            @endif-->
                </div>

                <div class="col-lg-4"></div>
            </div>

        </div>
        <div class="col-lg-4"></div>

    @endif
    @if($desin == 2)

        @foreach($card_father as $f)

             <div class="col-lg-4 header" id="image" style="margin-left: 30px; margin-top: 90px;width: 20%;">
                    @if($card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img != '')
                        <img style="height: 100px; width: 90px;"
                             src="{{ URL::to('customer_img')}}/{{$card->father_id}}/{{\App\Card::where('cpr_no', $card->father_id)->first()->img}}"/>
                    @endif

                </div> 
            <div class="col-lg-12 col-md-12 sema-card">

                <div class="row">
                    <div class="col-lg-4 header" style="margin-top: 90px;"></div>
                    <div class="col-lg-12" style="margin-left: {{ $card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img ? '130px' : '90px' }}">
                        <b>
                            <table style="font-size: 19px; ">
                                <tr>
                                    <td><b>Name </b></td>
                                    <td><b>: {{$f->name ?? ''}}</b></td>
                                </tr>
                                <tr>
                                    <td><b>CPR No.</b></td>
                                    <td>: {{$f->cpr_no ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><b>ID No. </b></td>
                                    <td>: SHC222{{$f->id ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><b>Valid till </b></td>
                                    <td>: {{$f->expiry ?? ''}}</td>
                                </tr>
                            </table>
                        </b>

<!--@if(!$card->group_company)-->
<!--                    <h2 style="margin-top: 12px">This is Not Insurance Card</h2>-->
<!--                                                            @endif-->
                    </div>

                    <div class="col-lg-4"></div>
                </div>

            </div>
            <div class="col-lg-4  {{ $loop->index+1 < count($card_father) ? 'page-break' : '' }} "></div>


        @endforeach
    @endif

    @if($desin  == 3)

        @foreach($card_father as $f)

               <div class="col-lg-4 "></div>

                </div> 
            <div class="col-lg-12 col-md-12 sema-card"
                 style="background-image: url({{public_path('assets/img/sama_card.jpg')}});background-size:cover; ">

                <div class="row">
                    <div class="col-lg-4 header" id="image" style="margin-left: 30px; margin-top: 110px;width: 20%;">
                        @if($card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img != '')
                            <img style="height: 100px; width: 90px;"
                                 src="{{ URL::to('customer_img')}}/{{$card->father_id}}/{{\App\Card::where('cpr_no', $card->father_id)->first()->img}}"/>
                        @endif


                    </div>
                    <div class="col-lg-12" style="margin-left: {{ $card->group_company && \App\Card::where('cpr_no', $card->father_id)->first()->img ? '130px' : '90px' }} ">
                        <b>
                            <table style="font-size: 19px">
                                <tr>
                                    <td><b>Name </b></td>
                                    <td><b>: {{$f->name ?? ''}}</b></td>
                                </tr>
                                <tr>
                                    <td><b>CPR No.</b></td>
                                    <td>: {{$f->cpr_no ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><b>ID No. </b></td>
                                    <td>: SHC222 - {{$f->id ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><b>Valid till </b></td>
                                    <td>: {{$f->expiry ?? ''}}</td>
                                </tr>
                            </table>
                        </b>

<!--@if(!$card->group_company)-->
<!--                    <h2 style="margin-top: 12px">This is Not Insurance Card</h2>-->
<!--                                                            @endif-->
                    </div>

                    <div class="col-lg-4"></div>
                </div>

            </div>
            <div class="col-lg-4  {{ $loop->index+1 < count($card_father) ? 'page-break' : '' }} "></div>


        @endforeach
    @endif

</div>
</body>
</html>
