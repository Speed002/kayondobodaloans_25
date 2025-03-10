<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Hirer Form</title>
    <style>
        /* Define CSS styles inline for compatibility with dompdf */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-size: 10px !important;
            font-family:'Times New Roman', Times, serif;
        }
        p{
            font-size: 14px !important;
        }
        .left-content {
            float: left;
            width: 50%;
        }
        .right-content {
            float: right;
            width: 50%;
        }
        .header:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Additional styling for content inside right-content */
        .right-content > div {
            padding: 0 10px; /* Adjust padding as needed */
        }
        .blue-color{
            color: rgb(0, 183, 255);
        }
        .bordered-table {
        width: 100%;
        border-collapse: collapse; /* Merges the borders into a single one */
        border: 1px solid #ccc; /* Border color for the whole table */
        }

        .bordered-table th, .bordered-table td {
        padding: 8px 16px;
        border: 1px solid #ccc; /* Border color for each cell */
        text-align: left;
        }
    </style>
</head>
<body style="font-family:'Poppins', sans-serif !important;">
    <div class="main-content">
        <div class="header">
            <div class="left-content">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 50%;" alt="BTS">
            </div>
            <div class="right-content">
                <div>
                    <span style="background-color:#c0c5c8; padding:5px; padding-right:300px; border-radius:2px;">
                        Date:
                    </span>
                    <br>
                    <br>
                    <span>New Hirer's Online Form</span>
                    <hr>
                    <span style="font-size: 8px;"><i>DRIVE EVERYDAY, SAVE EVERYDAY, PAY WEEKLY, THEN OWN FOREVER</i></span>
                </div>
            </div>
        </div>
        <br>
        <div class="header">
            <table class="bordered-table">
                <tbody>
                  <tr>
                    <th colspan="2">Personal Information</th>
                  </tr>
                  <tr>
                    <td>Names</td>
                    <td>{{$client->name}}</td>
                  </tr>
                  <tr>
                    <td>National ID Number (nin)</td>
                    <td>{{$client->nin}}</td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>{{$client->dob}}</td>
                  </tr>
                  <tr>
                    <td>Contact</td>
                    <td>{{$client->contact}}</td>
                  </tr>
                  <tr>
                    <td>Occupation</td>
                    <td>{{$client->occupation}}</td>
                  </tr>
                  <tr>
                    <td>Residence</td>
                    <td>{{$client->residence}}</td>
                  </tr>
                  <tr>
                    <td>Stage Name</td>
                    <td>{{$client->stage_name}}</td>
                  </tr>
                  <tr>
                    <td>Date of Agreement</td>
                    <td>{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}</td>
                  </tr>
                  <tr>
                    <td>Father's Name</td>
                    <td>{{$client->father_name}}</td>
                  </tr>
                  <tr>
                    <td>Father's Contact</td>
                    <td>{{$client->father_contact}}</td>
                  </tr>
                  <tr>
                    <td>Mother's Name</td>
                    <td>{{$client->mother_name}}</td>
                  </tr>
                  <tr>
                    <td>Mother's Contact</td>
                    <td>{{$client->mother_contact}}</td>
                  </tr>
                  <tr>
                    <th colspan="2">Vehilce/Motor Information</th>
                  </tr>
                  <tr>
                    <td>Vehicle Registration Number</td>
                    <td>{{$motor->registration}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle type</td>
                    <td>{{$motor->type}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle Make</td>
                    <td>{{$motor->make}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle Color</td>
                    <td>{{$motor->color}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle Engine Number</td>
                    <td>{{$motor->engine}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle Chassis Number</td>
                    <td>{{$motor->chasis}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle Condition</td>
                    <td>{{$motor->condition}}</td>
                  </tr>
                  <tr>
                    <td>Vehicle Registered Names</td>
                    <td>{{$motor->registered_names}}</td>
                  </tr>
                  <tr>
                    <th colspan="2">Loan/Payment Information</th>
                  </tr>
                  <tr>
                    <td>Selling Price</td>
                    <td>{{$loan->selling_price}}/=</td>
                  </tr>
                  <tr>
                    <td>Initial Deposit</td>
                    <td>{{$loan->initial_deposit}}/=</td>
                  </tr>
                  <tr>
                    <td>Weekly Deposit</td>
                    <td>{{$loan->weekly_deposit}}/=</td>
                  </tr>
                  <tr>
                    <td>Agreed Months</td>
                    <td>{{$loan->agreed_months}}</td>
                  </tr>
                  <tr>
                    <td>Total Number of Weeks</td>
                    <td>{{$loan->total_weeks}}</td>
                  </tr>
                  <tr>
                    <td>Starting Week Date</td>
                    <td>{{$loan->starting_week_date}}</td>
                  </tr>
                  <tr style="page-break-after: always;">
                    <td>Place of Agreement</td>
                    <td>{{$loan->agreement_place}}</td>
                  </tr>

                  <tr>
                    <th colspan="2">Referee Information</th>
                  </tr>
                  <tr>
                    <td>Referee One Name</td>
                    <td>{{$referee->referee_one_name}}</td>
                  </tr>
                  <tr>
                    <td>Referee One Contact</td>
                    <td>{{$referee->referee_one_contact}}</td>
                  </tr>
                  <tr>
                    <td>Referee One Relationship</td>
                    <td>{{$referee->referee_one_relationship}}</td>
                  </tr>
                  <tr>
                    <td>Referee Two Name</td>
                    <td>{{$referee->referee_two_name}}</td>
                  </tr>
                  <tr>
                    <td>Referee Two Contact</td>
                    <td>{{$referee->referee_two_contact}}</td>
                  </tr>
                  <tr>
                    <td>Referee Two Relationship</td>
                    <td>{{$referee->referee_two_relationship}}</td>
                  </tr>
                  <tr>
                    <td>Stage Chairperson Name</td>
                    <td>{{$referee->stage_chairperson_name}}</td>
                  </tr>
                  <tr>
                    <td>Stage Chairperson Contact</td>
                    <td>{{$referee->stage_chairperson_contact}}</td>
                  </tr>
                  <tr>
                    <td>LC Chairperson Name</td>
                    <td>{{$referee->lc_chairperson_name}}</td>
                  </tr>
                  <tr>
                    <td>LC Chairperson Contact</td>
                    <td>{{$referee->lc_chairperson_contact}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>
