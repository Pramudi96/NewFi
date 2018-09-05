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

<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>
<h1 class="h-bold" style ="color:black" align="center">Annual Total Expences </h1>


<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">



        <body>

        <table width="100%" border="0">
            <td bgcolor="#90ee90"width="50%">

                <table class="table">
                    <thead>
                    <tr style="background-color: #36c94e">
                        <th>Type</th>

                        <th>Amount</th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr style="background-color: #8fcafe">
                        <td>Library</td>
                        <td>{{$Library}}</td>

                    </tr>



                    <tr style="background-color: #8fcafe">

                        <td>Event</td>
                        <td>{{$Event1}}</td>
                    </tr>

                    <tr style="background-color: #8fcafe">

                        <td>Total</td>
                        <td>{{$Tot}}</td>
                    </tr>







                    </tbody>
                    </td>

                </table>

            </td>
            <td bgcolor="#90ee90"width="50%">


                <img src="/img/Mreport.jpg"width="1100" height="750">





        </table>


        </body></td></table>
@include('layout.footer')


</html>