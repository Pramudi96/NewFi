
<head>
    <title>View Records</title>
    <style>
        table,tr,td{
            border-collapse: collapse;

            padding-left: 2.5em;
        }

        div.water{
            background-color: lightblue;
            width: 400px;
            padding: 105px;
            border: 15px solid navy;
        }







    </style>
</head>

<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>
<body>
<h1 class="h-bold" style ="color:black" align="center"> Inventory Management Payment Records </h1>


<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">



        <body>

        <table width="100%" border="0">
            <td bgcolor="#90ee90"width="50%">

                <table class="table">
                    <thead>
                    <tr style="background-color: #36c94e">
                        <th>Month and Year</th>
                        <th>Year</th>
                        <th>InventoryType</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Place</th>
                        <th>InvoiceNumber</th>
                        <th>FinancedDate</th>
                        <th>Amount</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($waters as $users)
                        <tr style="background-color: #8fcafe">
                            <td>{{$users->MonthYear}}</td>
                            <td>{{$users->Year}}</td>
                            <td>{{$users->InventoryType}}</td>
                            <td>{{$users->Item}}</td>
                            <td>{{$users->Quantity}}</td>
                            <td>{{$users->Place}}</td>
                            <td>{{$users->InvoiceNumber}}</td>
                            <td>{{$users->FinancedDate}}</td>
                            <td>{{$users->Amount}}</td>



                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </td>
            <td bgcolor="#90ee90"width="50%">


                <img src="/img/inventory2.jpg"width="950" height="750"  class="img-circle" alt="Cinque Terre">





        </table>



                @include('layout.footer')

        </td>
</table>
</body>


