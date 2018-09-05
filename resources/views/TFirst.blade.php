<div class ="row">

    <div class ="col-lg-12">

        @include('layout.navbar')
    </div>
</div>
<head>
    <style>



        div.water{
            background-color: lightblue;
            width: 400px;
            padding: 105px;
            border: 15px solid navy;
        }

        div.water{
            background-color: lightblue;
            width: 400px;
            padding: 105px;
            margin-top: 45px;
            border: 10px solid navy;
            padding-top: 200px;
        }
    </style>


</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h3 align="center">
                Telephone Records
            </h3>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <table width="100%">
                <td width="33%">
            <table class="table">

                <thead>
                <tr style="background-color: #36c94e" >


                    <th>Month and Year</th>
                    <th> Year</th>
                    <th>Place</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>PaidDate</th>

                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>


                <tbody>
                <tr>

                    <td>1</td>

                    <td>TB - Monthly</td>


                    <td>01/04/2012</td>


                    <td>Default</td>




                </tr>
                </tr>
                <tr class="table-active">

                </tr></tbody>

            </table></td>
                <td width="33%">

                    <div class="col-md-6">
                        <div class="water">

                            <a href=""> <h3>

                                </h3></a></div>
                    </div>

</td>

                <td width="33%">

                    <img src="/img/wa.jpg"width="1100" height="750"></td>


                </td>



            </table>
        </div>
    </div>
</div>

<div class ="row">
    <div class ="col-md-12">
        @include('layout.footer')



    </div>
</div>