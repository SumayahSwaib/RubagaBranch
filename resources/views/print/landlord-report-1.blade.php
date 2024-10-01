<?php



use App\Models\Utils;

$logo_link = public_path('/logo-1.png');
$sign = public_path('/sign.jpg');
?>
<!DOCTYPE html>
<html lang="en">
<style>
    @page {
        size: A4 potrait;
        
    }

    .text-lowercase {
        text-transform: lowercase !important
    }

    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-capitalize {
        text-transform: capitalize !important
    }

    .font-weight-light {
        font-weight: 300 !important
    }

    .font-weight-normal {
        font-weight: 400 !important
    }

    .font-weight-bold {
        font-weight: 700 !important
    }

    .font-italic {
        font-style: italic !important
    }
    .text-center {
        text-align: center !important
    }

    .text-white {
        color: #fff !important
    }

    .text-primary {
        color: #007bff !important
    }

    a.text-primary:focus,
    a.text-primary:hover {
        color: #0062cc !important
    }

    .text-secondary {
        color: #6c757d !important
    }

    a.text-secondary:focus,
    a.text-secondary:hover {
        color: #545b62 !important
    }

    .text-success {
        color: #28a745 !important
    }

    a.text-success:focus,
    a.text-success:hover {
        color: #1e7e34 !important
    }

    .text-info {
        color: #17a2b8 !important
    }

    a.text-info:focus,
    a.text-info:hover {
        color: #117a8b !important
    }

    .text-warning {
        color: #ffc107 !important
    }

    a.text-warning:focus,
    a.text-warning:hover {
        color: #d39e00 !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    a.text-danger:focus,
    a.text-danger:hover {
        color: #bd2130 !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    a.text-light:focus,
    a.text-light:hover {
        color: #dae0e5 !important
    }

    .text-dark {
        color: #343a40 !important
    }

    a.text-dark:focus,
    a.text-dark:hover {
        color: #1d2124 !important
    }

    .text-muted {
        color: #6c757d !important
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .visible {
        visibility: visible !important
    }

    .invisible {
        visibility: hidden !important
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important
        }

        a:not(.btn) {
            text-decoration: underline
        }

        abbr[title]::after {
            content: " (" attr(title) ")"
        }

        pre {
            white-space: pre-wrap !important
        }

        blockquote,
        pre {
            border: 1px solid #999;
            page-break-inside: avoid
        }

        thead {
            display: table-header-group
        }

        img,
        tr {
            page-break-inside: avoid
        }

        h2,
        h3,
        p {
            orphans: 3;
            widows: 3
        }

        h2,
        h3 {
            page-break-after: avoid
        }

        @page {
            size: a3
        }

        body {
            min-width: 992px !important
        }

        .container {
            min-width: 992px !important
        }

        .navbar {
            display: none
        }

        .badge {
            border: 1px solid #000
        }

        .table {
            border-collapse: collapse !important
        }

        .table td,
        .table th {
            background-color: #fff !important
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid black !important
        }
    }


    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    p {
        padding: 0% !important;
        margin: 0% !important;
        line-height: 1 !important;
        font-family: Arial, Helvetica, sans-serif;
    }

    p {
        font-size: 16px;
    }

    .detail-item {
        font-size: 14px !important;
        line-height: 1rem !important;
    }

    .my-h2 {
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        text-decoration: underline;
        font-size: 24px;
        font-weight: 800;
        text-transform: uppercase !important;
    }

    .my-table {
        border: 1px solid green ! border-radius: 5px;
        font-size: 12px !important;
        line-height: .8rem !important;
        padding: 0.2rem !important;
    }

    .my-table tbody tr td {
        padding: 0.2rem !important;
        font-size: 12px !important;
        border: 1px solid #0b0080 ! border-radius: 5px;
    }

    .title {
        font-family: 'Courier New', Courier, monospace;
    }

    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 6px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 6px;
  padding-bottom: 6px;
  text-align: left;
  background-color: #0704aa;
  color: white;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--     <link rel="stylesheet" href="{{ $link }}">
 --}}    <title>Tenants Payment report</title>
</head>

<body>
    <div class="main">

        <div>
            <hr style="height:3px;border-width:0;color:rgb(45, 18, 104);background-color:rgb(33, 9, 84)">

            <p class="p-0 m-0 text-center" style="font-size: 2.5rem;color:rgb(45, 18, 104)" >  <strong><b>NDEGE ESTATE LIMITED</b></strong></p>
            <hr style="height:3px;border-width:0;color:rgb(45, 18, 104);background-color:rgb(33, 9, 84)">
            <p class="mt-1 text-center" style="font-size: 1.5rem;color:rgb(216, 30, 30)"><strong>&#40; Rubaga Apartments&#41;</strong> </p>
            <p class="mt-1 text-center">P.O.BOX: <b>28044 - Kampala - Uganda</b> </p>
        </div>
      

        

        {{-- <p class="my-h2 mt-3 mb-2" style="font-size: 1.0rem">
            FINANCIAL REPORT FOR THE PERIOD {{ Utils::my_date($start_date) . ' - ' . Utils::my_date($end_date) }}
        </p> --}}

       

        <br>
        <p class="my-h2  mb-2 title text-left" style="font-size: 1.0rem; ">Tenants Payemnts for the period
            {{ Utils::my_date($start_date) . ' - ' . Utils::my_date($end_date) }}</p>
            <br>
        <table id="customers" class="my-table" style="width: 100%;">
            <thead class="bg-primary text-white text-uppercase">
                <tr style="background-color: rgb(45, 18, 104);"  class="p-4  text-white">
                    <th style="border-color: white; height: 23px; width: 15px;" class="py-1 text-white">S/n.</th>
                    <th style="border-color: white; height: 10px; " class=" p-1 px-1">Date</th>
                    <th style="border-color: white; height: 10px; " class=" p-1">Tenant</th>
                    {{-- <th style="border-color: white; height: 10px; " class=" p-1">Room</th> --}}
                    <th style="border-color: white; height: 10px; " class=" p-1">Amount (UGX)</th>
                    <th style="border-color: white; height: 10px; " class=" p-1">Due to Renting of</th>
                    {{-- <th style="border-color: white; height: 10px; " class=" p-1">Ref</th> --}}
                    <th style="border-color: white; height: 10px; " class=" p-1">Balance</th>
                </tr>
            </thead>
            <tbody class="table table-bordered p-2">
                @php
                    $i = 0;
                @endphp
                @foreach ($tenantPayments as $trans)
                    @php
                        $i++;
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ Utils::my_date($trans->created_at) }}</td>
                        <td style="text-align: left;"><b>{{ $trans->tenant->name }}</b></td>
                        {{-- <td style= "border-color: rgb(12, 12, 12); height: 10px; text-align: left;"><b>{{ $trans->tenant->room_id }}</b></td> --}}
                        <td style="text-align: left;"><b>{{ number_format($trans->amount) }}</b></td>
                        <td style="text-align: left;"><b>{{ $trans->renting->name_text2 }}</b></td>
                       {{--  <td style="text-align: left;"><b>#{{ $trans->renting->id }}</b></td> --}} 
                       {{--  <td style="text-align: left;"><b>#{{ $trans->renting->id }}</b></td> --}}
                        <td style="text-align: left;"><b>{{ number_format($trans->renting->balance) }}</b></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<br>

       

<p class="my-h2  mb-2 title text-left" style="font-size: 1.0rem; ">Tenants in over stay</p>

@foreach ($rentings as $rent )
@if ($rent->is_overstay == 'Yes')
@php
$i++;
@endphp
<p>{{ $i }}. {{ $rent->tenant->name }}</p>
@endif  
@endforeach

    <br>

    <hr style="height:3px;border-width:0;color:rgb(45, 18, 104);background-color:rgb(33, 9, 84)">

    
    <div >
        <p class="my-h2  ml-10 mt-10 mb-2 title text-left" style="font-size: 1.0rem">Summary</p>
               @include('components.detail-item', [
                   't' => 'Total Income',
                   's' => 'UGX ' . number_format($total_income),
               ])
              
       
               @include('components.detail-item', [
                   't' => 'Total Balance',
                   's' => 'UGX ' . number_format($report->total_expense),
               ])
       
              
       </div>
       
    <hr style="height:3px;border-width:0;color:rgb(45, 18, 104);background-color:rgb(33, 9, 84)">
</body>

</html>
