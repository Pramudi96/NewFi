<!Doctype html>
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
<h1 class="h-bold" style ="color:black" align="center"> Student Fee Payment Records </h1>


<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">



        <body>

        <table width="100%" border="0">
            <td bgcolor="#90ee90"width="50%">

                <table class="table">
                    <thead>
                    <tr style="background-color: #36c94e">

                        <th>ClassYear</th>
                        <th>Year</th>
                        <th>Total Amount</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($waters as $users)
                        <tr style="background-color: #8fcafe">

                            <td>{{$users->ClassYear}}</td>
                            <td>{{$users->Year}}</td>
                            <td>{{$users->Total}}</td>

                        </tr>
                    @endforeach
                    </tbody>


                </table>

            </td>
            <td bgcolor="#90ee90"width="50%">


                <img src="/img/student.jpg"width="1100" height="750">





        </table>



        <div class ="row">
            <div class ="col-md-12">
                @include('layout.footer')



            </div>
        </div>

        </body>
        </html>