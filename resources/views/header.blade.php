<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .print-title {
            display: none;
        }

        @media print {
        @page {
            margin:0;
        }
        body {
            margin: 12mm;
        }

        .no-print,
        input,
        button,
        .btn,
        a,
        #users-table th:last-child,
        #users-table td:last-child:not([colspan]) {
            display: none !important;
        }

        .print-title {
            display: block;
        }
    }
    </style>
</head>
<body>
    
