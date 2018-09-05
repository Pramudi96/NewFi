<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>

<body>


<body id="page-top" data-spy="scroll" data-target=".navbar-custom">




<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">






        <h1 font-color="White" align="center" >Funds And Donations</h1>



        <div class="container" style="background-color: white">
            <div class="col-md-12 animate-box fadeInUp animated-fast" width="50%">
                <h3 > </h3>




                <div class="form-group">


                    <div class="col-md-8">
                        <form action="Asum" method="get">

                            <label for="Place" class="col-md-4 control-label">Water Bill</label>
                            <input id="Year" type="text" class="form-control" name="Year" value="Asum.$waters" required >
                            <button type="submit" class="btn btn-primary">
                                Calculate Total
                            </button>
                        </form>

                    </div>
                </div>

                <div class="col-md-8">
                    <form action="Tsum" method="get">

                        <label for="Place" class="col-md-4 control-label">Telephone Bill</label>
                        <input id="MonthYear" type="text" class="form-control" name="MonthYear" value="" required >
                        <button type="submit" class="btn btn-primary">
                            Calculate Total
                        </button>
                    </form>

                </div>
                <div class="col-md-8">
                    <form action="esum" method="get">

                        <label for="Place" class="col-md-4 control-label">Electricity Bill</label>
                        <input id="MonthYear" type="text" class="form-control" name="MonthYear" value="" required ><$total>
                        <button type="submit" class="btn btn-primary">
                            Calculate Total
                        </button>
                    </form>

                </div>
                <div class="col-md-8">
                    <form action="Tsum" method="get">

                        <label for="Place" class="col-md-4 control-label">Other Bill</label>
                        <input id="MonthYear" type="text" class="form-control" name="MonthYear" value="" required >
                        <button type="submit" class="btn btn-primary">
                            Calculate Total
                        </button>
                    </form>

                </div>







                </form>
            </div>
        </div></td></table>


</body>

<div class ="row">
    <div class ="col-md-12">
        @include('layout.footer')



    </div>
</div>