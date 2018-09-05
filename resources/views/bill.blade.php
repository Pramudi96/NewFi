<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>
<style>


    div.vg{

        width: 100px;
        height: 100px;

    }
    .search{
        width:45% ;
        padding:10px ;
        font-size:20px ;

    }
    .submit{
        width:15% ;
        padding:10px ;
        font-size:20px ;
        background-color:#333333;
        color: white;
    }



</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">



<div class="container-fluid" align="center" style="background-color: #90ee90">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h-bold" style ="color:black"> Bill Payments and Other Payments </h1>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img alt="Bootstrap Image Preview" width="40%" src="/img/water.jpg" />
            <a href="/water"> <h2>
                    Water bills
                </h2></a>
        </div>
        <div class="col-md-6">
            <img alt="Bootstrap Image Preview" width="45%" src="/img/ebill.jpg" />
            <a href="/Electric"> <h2>
                    Electricity Bills
                </h2></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img alt="Bootstrap Image Preview" width="45%" src="/img/123.jpg" />
            <a href="/Telephone"> <h2>
                    Telephone Bills
                </h2></a>
        </div>
        <div class="col-md-6">
            <img alt="Bootstrap Image Preview" width="45%" src="/img/other.jpg" />
            <a href="/Other"> <h2>
                    Other Payments
                </h2></a>
        </div>
    </div>
</div>



<div class ="row">
    <div class ="col-md-12">
        @include('layout.footer')



    </div>
</div>




</body>

</html>