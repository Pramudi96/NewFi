<!Doctype html>
<head>
    <title>View Student Records</title>
    <style>
        table,tr,td{
            border-collapse: collapse;

            padding-left: 1.5em;
        }
    </style>
</head>

<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>

<h1 class="h-bold" style ="color:black" align="center"> Funds and Donation Records </h1>
<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">
        <body>

        <table width="100%" border="0">
            <td bgcolor="#90ee90"width="50%">

            <td>


                <table class="table">
                    <thead>
                    <tr style="background-color: #36c94e">
                        <th>FundName</th>
                        <th>MonthYear</th>
                        <th> Year</th>
                        <th>Donor</th>
                        <th>ReceivedDate</th>
                        <th>Received Type</th>


                        <th>Amount</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($waters as $users)
                        <tr style="background-color: #8fcafe">
                            <td>{{$users->FundNameMonthYear}}</td>
                            <td>{{$users->MonthYear}}</td>
                            <td>{{$users->Year}}</td>
                            <td>{{$users->Donor}}</td>
                            <td>{{$users->ReceivedDate}}</td>
                            <td>{{$users->ReceivedType}}</td>
                            <td>{{$users->Amount}}</td>

                            <td><a href="fedit/{{$users->FundNameMonthYear}}">Edit</a></td>
                            <td><a href="fdelete/{{$users->FundNameMonthYear}}">Delete</a></td>

                        </tr>
                    @endforeach
                </table>
            </td>

            <td bgcolor="#90ee90"width="50%">
                <img src="/img/funds.jpg"width="1120" height="750"></td>


            </tbody>
        </table>

        <div class ="row">
            <div class ="col-md-12">
                @include('layout.footer')



            </div>
        </div>

        </body>
    </td>
</table>
</html>