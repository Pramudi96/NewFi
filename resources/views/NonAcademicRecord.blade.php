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

<h1 class="h-bold" style ="color:black" align="center"> Academic Staff Salary Payment Details </h1>
<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">
        <body>

        <table width="100%" border="0">
            <td bgcolor="#90ee90"width="50%">

            <td>


                <table class="table">
                    <thead>
                    <tr style="background-color: #36c94e">

                        <th> Employee No</th>
                        <th>EmployeeName</th>
                        <th>Designation</th>
                        <th>PaySlipNo</th>
                        <th>MonthandYear</th>
                        <th>Year</th>
                        <th>ReceivedDate</th>
                        <th>Salary</th>

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($waters as $users)
                        <tr style="background-color: #8fcafe">

                            <td>{{$users->EmpNo}}</td>
                            <td>{{$users->EmpName}}</td>
                            <td>{{$users->Designation}}</td>
                            <td>{{$users->PayslipNo}}</td>
                            <td>{{$users->MonthYear}}</td>
                            <td>{{$users->Year}}</td>
                            <td>{{$users->receivedDate}}</td>
                            <td>{{$users->Salary}}</td>

                            <td><a href="Nedit/{{$users->EmpNo}}">Edit</a></td>
                            <td><a href="Ndelete/{{$users->EmpNo}}">Delete</a></td>

                        </tr>
                    @endforeach
                </table>
            </td>

            <td bgcolor="#90ee90"width="50%">
                <img src="/img/5.jpg"width="950" height="750"></td>


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