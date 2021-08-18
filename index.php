<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>CMS</title>

    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333;
            background-color: #fff;
        }

        .header {
            display: flex;
            flex-direction: column;
            background-color: darkslateblue;

        }

        /* header text */
        .header_text {
            font: normal 100% "century gothic", arial, sans-serif;
            padding-left: 15px;
        }

        .header_text h1, h2 {
            font-family: inherit;
            font-weight: 500;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .header_text h1 {
            font-size: 36px;
            color: #fff;
            letter-spacing: 0.1em;

        }


        .main {
            padding-top: 35px;
        }


        /* table wrapper */
        .table_wrapper {

            max-height: 550px;
            overflow-x: auto;
            overflow-y: auto;
        }

        /* table */
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* table heading */

        .table th {
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: #dadfe1;
            text-align: center;
            padding: 8px;
            line-height: 1.5;
            border-bottom-width: 2px;

        }

        .table td {
            padding: 8px;
            line-height: 1.5;
            border: 1px solid #ddd;

        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        ::-webkit-input-placeholder {
            font-size: 13px!important;
        }

        :-moz-placeholder { /* Firefox 18- */
            font-size: 13px!important;
        }
        ::-moz-placeholder {  /* Firefox 19+ */
            font-size: 13px!important;
        }


    </style>

</head>

<body>
<div class="container">
    <?php include 'header.php';?>
    <main class="main">
        <?php include 'main.php';?>
    </main>
    <?php include 'footer.php';?>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/index.js"></script>
</body>
</html>