<!Doctype html>
<html>
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


        @include('layout.navbar')

<h1 class="h-bold" style ="color:green" align="center"> ANNUAL EXPENCES AND INCOME</h1>

<div class ="col-md-12">
<table width="100%" border="0">

            <td bgcolor="#90ee90" width="75%">

                <table class="table">
                    <thead>
                    <h1>Total Expences</h1>
                    <tr style="background-color: #36c94e">
                        <th><h4>Management Systems and Bill Payments</h4></th>

                        <th><h4 style="color:black">Expences</h4></th>

                    </tr>
                    </thead>

                    <tbody>

                        <tr style="background-color: #8fcafe">
                            <td><h4>Electricity Bill Payments</h4></td>
                            <td><h5>Rs. {{$E}}</h5></td>

                        </tr>


                            <tr style="background-color: #8fcafe">

                                <td><h4>Telephone Bill Payments</h4></td>
                                <td><h5>Rs. {{$T}}</h5></td>
                            </tr>

                        <tr style="background-color: #8fcafe">

                            <td><h4>Water Bill Payments</h4></td>
                            <td><h5>Rs. {{$W}}</h5></td>
                        </tr>
                        <tr style="background-color: #8fcafe">

                            <td><h4>Event Management System</h4></td>
                            <td><h5>Rs. {{$Event}}</h5></td>
                        </tr>

                        <tr style="background-color: #8fcafe">

                            <td><h4>NonAcademic Staff Salary Payments</h4></td>
                            <td><h5>Rs. {{$Nonacademic}}</h5></td>
                        </tr>
                        <tr style="background-color: #8fcafe">

                            <td><h4>Other Bill Payments</h4></td>
                            <td><h5>Rs. {{$other}}</h5></td>
                        </tr>


                        <tr style="background-color: #8fcafe">

                            <td><h3>Total Expences</h3></td>
                            <td><h3>Rs. {{$Tot1}}</h3></td>
                        </tr>


</tbody>
                </table>
           </table></div>



<div class ="col-md-12">
    <table width="100%" border="0">

        <td bgcolor="#90ee90" width="100%">


                <table class="table col-md-6">
                    <thead>
                    <h1>Total Income</h1>
                    <tr style="background-color: #36c94e">
                        <th><h4>Management System</h4></th>

                        <th><h4>Incomes</h4></th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr style="background-color: #8fcafe">
                        <td><h4>Library Management System</h4></td>
                        <td><h5>Rs. {{$Library}}</h5></td>

                    </tr>
                    <tr style="background-color: #8fcafe">

                        <td><h4>Funds And Donation</h4></td>
                        <td><h5>Rs. {{$funds}}</h5></td>
                    </tr>


                    <tr style="background-color: #8fcafe">

                        <td><h4>Event Management System</h4></td>
                        <td><h5>Rs. {{$Event1}}</h5></td>
                    </tr>



                    <tr style="background-color: #8fcafe">

                        <td><h3>Total Income</h3></td>
                        <td><h3>Rs. {{$Tot2}}</h3></td>
                    </tr>


                    </tbody>

                </table></td></table></div>
















                @include('layout.footer')


</html>