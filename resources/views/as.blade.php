<div class ="row">

    <div class ="col-lg-12">

        @include('layout.navbar')
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h3 align="center">
                Telephone Records
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6x">
            <table class="table">
                <thead>
                <tr style="background-color: #36c94e">
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
                <tr class="table-active">




                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class ="row">
    <div class ="col-md-12">
        @include('layout.footer')



    </div>
</div>