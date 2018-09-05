<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>
<style>

    h2{

        font-size: 200px;
    }

    div.abc{
        border:1px solid ;
        padding: 20px 0;
        margin-bottom: 20px;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #666;
        color: #888;



        z-index: 2;
        display: block;
        width: 240px; /* default width for blocks */
        height: 250px; /* default height for blocks */

        border-radius: 3px;

        font: 600 12px/29px "Open Sans", sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;

        font: 700 17px "Open Sans", sans-serif;
        color: #456297;
        text-decoration: none;
        display: block;
        text-align: center;
        margin-bottom: 3px;

        font: italic 400 16px "Open Sans", sans-serif;
        color: #888888;
        text-align: center;
        font-style: normal;

        font: bold 16px/16px "Open Sans", sans-serif;
        margin-bottom: 6px;

        font: 400 14px "Open Sans", sans-serif;

        font: 400 16px "Open Sans", sans-serif;
        margin-top: 15px;
        line-height: 1.6em;

    }


</style>





            <body bgcolor="#32cd32">


            <div class="container-fluid" align="center" style="background-color:palegreen">
                <div class="row">
                    <div class="col-md-12">

                                <div class="section-heading text-center ">
                                    <h1 class="h-bold" style ="color:black">Finance Management </h1>

                                </div>




                        <div class="row">


                            <div class="col-md-3">

                                <div class="abc">
                                    <img alt="" width="100%" src="/img/5.jpg" /></div>
                                    <a href="/Staff"><h3>Academic and Non-Academic Staff Management System</h3></a>


        </div>


        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/student.jpg" /></div>
                <a href="Sindex"><h3>Student and Parent Management System </h3></a>



        </div>
        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/2-1.jpg" /></div>
            <a href="Eindex"><h3>Event Management System </h3></a>
        </div>
        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/canteen.jpg" /></div>
            <a href=""><h3>Bookshop and Canteen Management System </h3></a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/Library.jpg" /></div>
            <a href="Lindex"><h3>Library Management System </h3></a>
        </div>
        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/inventory2.jpg" /></div>
            <a href="Invindex"><h3>Inventory Management System </h3></a>
        </div>
        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/g.jpg" /></div>
            <a href="/Funds"><h3>Funds And Donations </h3></a>
        </div>
        <div class="col-md-3">
            <div class="abc">
                <img alt="" width="100%" src="/img/bill.jpg" /></div>
            <a href="/bill"><h3>Bill Payments and Other Payments</h3></a>

        </div>
    </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="abc">
                                    <img alt="" width="100%" src="/img/Budget.jpg" /></div>
                                <a href="/budget"><h3>Annual Budget </h3></a>
                            </div>
                            <div class="col-md-3">
                                <div class="abc">
                                    <img alt="" width="100%" src="/img/MReport.jpg" /></div>
                                <a href="/MonthlyReport"><h3>Monthly Expences and Income </h3></a>
                            </div>
                            <div class="col-md-3">
                                <div class="abc">
                                    <img alt="" width="100%" src="/img/AnnualReport.jpg" /></div>
                                <a href="/AnnualReport"><h3>Annual Expences and Income </h3></a>
                            </div>

                        </div>


</div></div></div>

            <div class ="row">
                <div class ="col-md-12">
                    @include('layout.footer')



                </div>
            </div>


            </body>
</html>