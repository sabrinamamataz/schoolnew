<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHG</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="container p-5" id="invoice">

        <div class="toolbar hidden-print">
            <div class="text-right">
                <button id="printInvoice" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i>
                    Print</button>
                <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
            </div>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" href="https://lobianijs.com">
                                <img class="img-fluid h-50"
                                    src="http://localhost/hotel/public/frontend/logo.png"
                                    data-holder-rendered="true" />
                            </a>
                        </div>
                        <div class="col company-details">
                            <h2 class="name">
                                <a target="_blank" href="https://lobianijs.com">
                                    Green House Guesthouse
                                </a>
                            </h2>
                            <div>Sector 10, Uttara, Dhaka</div>
                            <div>(123) 456-789</div>
                            <div>greenhouseguesthouse@hotmail.com</div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">INVOICE TO:</div>
                            <h2 class="to">{{ $routineDetails->name }}</h2>
                            <div class="">Name: {{ $routineDetails->name }}</div>
                            <div class="">ID: {{ $routineDetails->id }}</div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id">INVOICE {{ $routineDetails->id }}</h1>
                            <div class="date">Date of Invoice: {{ date('d-m-Y') }}</div>
                        </div>
                    </div>

                    <div class="container p-5">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-left">Day</th>
                                    <th class="text-right">Period</th>
                                    <th class="text-right">Subject</th>
                                    <th class="text-right">Section</th>
                                    <th class="text-right">Teacher</th>
                                </tr>
                            </thead>
                            <tbody>
                                
        </div>
    </div>
</body>

</html>
