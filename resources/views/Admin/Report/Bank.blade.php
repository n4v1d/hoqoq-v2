<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>سیستم حقوق و دستمزد نوید </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/dist/css/custom-style.css">

</head>
<body class="

<?php $id = 1 ?>
    @foreach($payslips as $payslip)
        {{ $payslip->sum }},{{ $payslip->personel->account }},{{ $id }},{{ $payslip->personel->name }}
        <?php $id = $id + 1 ?>
    @endforeach
