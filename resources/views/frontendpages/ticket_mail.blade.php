<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>report</title>
</head>
<body>
	@php
		$result=explode("|",$allData);
	@endphp


<!-- ----------------------------------------------------------------- -->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://scontent.fdac13-1.fna.fbcdn.net/v/t1.0-9/80412269_504256900181120_823137010628689920_n.jpg?_nc_cat=105&_nc_ohc=vWWGcvOrxi8AQkFHTfdl5jv0SZPQ7qKnoPWr1qt99qSmyP-vIbleHwULQ&_nc_ht=scontent.fdac13-1.fna&oh=2f8cb7197b536670dae6ff0f2bdd76d7&oe=5E72F72D" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                TICKET INVOICE
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Customer Name:{{$result[1]}}<br>
                                Customer Phone:{{$result[2]}}<br>
                                Boarding point:{{$result[9]}}
                                
                            </td>
                            
                            <td>
                                Bus Name:{{$result[3]}}<br>
                                Chassis No:{{$result[13]}}<br>
                                From:{{$result[7]}} To {{$result[8]}}<br>
                                Coach Type:{{$result[4]}}<br>
                                Date:{{$result[5]}}<br>
                                Time:{{$result[6]}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Online
                </td>
            </tr>
            
            
            
            <tr class="heading">
                <td>
                    Seat Number
                </td>
                
                <td>
                    {{$result[10]}}
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Total Seat
                </td>
                
                <td>
                    {{$result[11]}}
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Price (per seat)
                </td>
                
                <td>
                    {{$result[12]}}
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Total Price
                </td>
                
                <td>
                    {{$result[0]}}
                </td>
            </tr>
            
            
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: {{$result[0]}}.00 Paid
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
<!-- ----------------------------------------------------------------- -->

</body>
</html>