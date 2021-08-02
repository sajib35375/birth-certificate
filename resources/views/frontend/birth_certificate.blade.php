
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Birth Certificate</title>
</head>

<body>

<div class="title">
    <h1>People's Republic of Bangladesh</h1>
    <h5>Birth and death registrar's office</h5>
</div>
<br><br><br>

<h1>Birth Certificate</h1>



<strong>Resistration No :</strong><span> {{ $app_data->registration_number }}</span><br><br>

<strong>Resistration Date:</strong><span> {{ $app_data->day }}/{{ $app_data->month }}/{{ $app_data->year }}</span><br><br>
<strong class="date">Certificate issue Date: <span class="date"> {{ $app_data->Cday }}/{{ $app_data->Cmonth }}/{{ $app_data->Cyear }}</span></strong>

<strong>Personal Identification No :</strong><span>{{ $app_data->pin }}</span><br><br>

<label for="">Name :</label><span>{{ $data->name }}</span><br><br>


<label for="">Fathers Name :</label><span>{{ $data->father_name }}</span><br><br>


<label for="">Mothers Name :</label><span>{{ $data->mother_name }}</span><br><br>

<strong class="lft">Date of Birth : <span>{{ $data->date }}/{{ $data->month }}/{{ $data->year }}</span></strong>

<strong class="cen">Birth Place :<span>{{ $data->birth_place }}</span></strong>

<strong class="rgh">Address : <span>{{ $data->address }}</span></strong>











<style>
    h1,
    h5 {
        text-align: center;
    }

    .date {
        float: right;
    }

    body {
        margin: 100px;
        font-size: large;

    }

    .lft {
        text-align: left;

        display: block;

    }

    .cen {
        text-align: center;

        display: block;
    }

    .rgh {
        text-align: right;

        display: block;
    }
    span {
        color:red;
    }

</style>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
