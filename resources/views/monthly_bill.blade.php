<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>

            @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
            }

            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
            }

            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
            }

            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
            }

            body{
                font-family: 'THSarabunNew';
                font-size: 20px;
                border-style: double;
            }

            .th-1{
                width: 80%;
                text-align: left;
                font-size: 22px;
                padding-left: 5px
            }

            .th-2{
                width: 20%;
                text-align: center;
                font-size: 22px;
                padding-left: 5px
            }

            .td-1{
                width: 80%;
                text-align: left;
                font-size: 18px;
                padding-left: 5px
            }

            .td-2{
                width: 20%;
                text-align: center;
                font-size: 18px;
                padding-left: 5px
            }
            

            .table{
                width: 500px;
                margin-left: auto;
                margin-right: auto;
            }

            table, th, td{
                border: 1px solid;
                border-collapse: collapse;
            }

        </style>
        <div style="text-align: center;">
            <h1>VP Rangsit Apmartment</h1>
            <h3 style="margin-bottom:5px;">??????????????????????????????</h3>
            <h4 style="margin-top:5px;">?????????????????????????????? ???????????? {{$room_data->room_no}} ????????? {{$room_data->building_name}} ?????????????????????????????? {{$month}} {{$year}}</h4>
        </div>
    </head>
    <body>
        <table class="table">
            <tr>
                <th class="th-1">??????????????????</th>
                <th class="th-2">???????????????</th>
            </tr>
            <tr>
                <td class="td-1">?????????????????????</td>
                <td class="td-2">{{$room_data->rental_balance}}</td>
            </tr>
            <tr>
                <td class="td-1">??????????????????</td>
                <td class="td-2">{{$bill_data->water_amount}}</td>
            </tr>
            <tr>
                <td class="td-1">????????????????????????</td>
                <td class="td-2">{{$bill_data->electricity_amount}}</td>
            </tr>
            <tr>
                <td class="td-1">??????????????????</td>
                <td class="td-2">{{$bill_data->trash_amount}}</td>
            </tr>
            
            <tr>
                <td class="td-1"><b><u>?????????</u></b></td>
                <td class="td-2"><b><u>
                    {{$bill_data->total}}
                </u></b></td>
            </tr>
        </table>
        <div style="margin-left:100px">
            <h3>???.??????????????? 062-8365660 ????????? ???????????????????????? ?????????????????????????????????????????????</h3>
        </div>
        <div class="page-break"></div>
    </body>
</html>