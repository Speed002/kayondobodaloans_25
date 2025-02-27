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
                    <span style="background-color:#c0c5c8; padding:5px; padding-right:300px; border-radius:5px;">
                        Date:
                    </span>
                    <br>
                    <br>
                    <span>New Hirer's Online Form</span>
                    <hr>
                    <span style="font-size: 12px;"><i>DRIVE EVERYDAY, SAVE EVERYDAY, PAY WEEKLY, THEN OWN FOREVER</i></span>
                </div>
            </div>
        </div>
        <div class="header">
            <h5 style="margin-bottom:-5px;">HIRER'S INFO</h5>
            <div class="left-content">
                <p>NAME: <span class="blue-color">{{$client->name}}</span></p>
                <p>RESIDENCE/ADDRESS: <span class="blue-color">{{$client->residence}}</span></p>
                <p>FATHER'S NAME: <span class="blue-color">{{$client->father_name}}</span></p>
                <p>MOTHER'S NAME: <span class="blue-color">{{$client->mother_name}}</span></p>
                <p>OCCUPATION: <span class="blue-color">{{$client->occupation}}</span></p>
            </div>
            <div class="right-content">
                <p>NIN NUMBER: <span class="blue-color">{{$client->nin}}</span></p>
                <p>STAGE NAME: <span class="blue-color">{{$client->stage_name}}</span></p>
                <p>CONTACT: <span class="blue-color">{{$client->father_contact}}</span></p>
                <p>CONTACT: <span class="blue-color">{{$client->mother_contact}}</span></p>
            </div>
        </div>
        <div class="header" style="margin-top:-20px;">
            <h5 style="margin-bottom:-5px;">MOTOR INFO</h5>
            <div class="left-content">
                <p>MOTOR-TYPE: <span class="blue-color">{{$motor->type}}</span></p>
                <p>COLOR: <span class="blue-color">{{$motor->color}}</span></p>
            </div>
            <div class="right-content">
                <p>MAKE: <span class="blue-color">{{$motor->make}}</span></p>
                <p>CONDITION: <span class="blue-color">{{$motor->condition}}</span></p>
            </div>
        </div>
        <div class="header" style="margin-top:-20px;">
            <h5 style="margin-bottom:-5px;">PAYMENT INFO</h5>
            <div class="left-content">
                <p>INITIAL DEPOSIT: <span class="blue-color">{{$loan->initial_deposit}}</span></p>
                <p>WEEKLY DEPOSIT: <span class="blue-color">{{$loan->weekly_deposit}}</span></p>
                <p>HIRER'S ACCOUNT NUMBER: </p>
                <p>ACCOUNT NAMES: </p>
            </div>
            <div class="right-content">
                <p>WEEKS: <span class="blue-color">{{$loan->total_weeks}}</span></p>
            </div>
        </div>
        <div class="header" style="margin-top:-20px;">
            <h5 style="margin-bottom:-5px;">REFEREES' INFO</h5>
            <div class="left-content">
                <p>1. <span class="blue-color">{{$referee->referee_one_name}}</span></p>
                <p>2. <span class="blue-color">{{$referee->referee_two_name}}</span></p>
            </div>
            <div class="right-content">
                <p>
                    REL: <span class="blue-color">{{$referee->referee_one_relationship}}</span>
                    CONTACT: <span class="blue-color">{{$referee->referee_one_contact}}</span>
                </p>
                <p>
                    REL: <span class="blue-color">{{$referee->referee_two_relationship}}</span>
                    CONTACT: <span class="blue-color">{{$referee->referee_one_contact}}</span>
                </p>
            </div>
        </div>
        {{-- <div class="header" style="margin-top:-20px;">
            <div class="left-content">
                <p>3. <span class="blue-color">{{$referee->referee_one_name}}</span></p>
                <p>4. <span class="blue-color">{{$referee->referee_two_name}}</span></p>
            </div>
            <div class="right-content">
                <p>
                    <span>REL: <span class="blue-color">{{$referee->referee_one_relationship}}</span></span>
                    <span>CONTACT: <span class="blue-color">{{$referee->referee_one_contact}}</span></span>
                </p>
                <p>
                    <span>REL: <span class="blue-color">{{$referee->referee_two_relationship}}</span></span>
                    <span>CONTACT: <span class="blue-color">{{$referee->referee_one_contact}}</span></span>
                </p>
            </div>
        </div> --}}
        <div class="header">
            <h5 style="margin-bottom:-5px;">LC CHAIRMAN</h5>
            <div class="left-content">
                <p>NAME: <span class="blue-color">{{$referee->lc_chairperson_name}}</span></p>
            </div>
            <div class="right-content">
                <p>CONTACT: <span class="blue-color">{{$referee->lc_chairperson_contact}}</span></p>
            </div>
        </div>
        <div class="header">
            <h5 style="margin-bottom:-5px;">STAGE CHAIRMAN</h5>
            <div class="left-content">
                <p>NAME: <span class="blue-color">{{$referee->stage_chairperson_name}}</span></p>
            </div>
            <div class="right-content">
                <p>CONTACT: <span class="blue-color">{{$referee->stage_chairperson_contact}}</span></p>
            </div>
        </div>
        <div class="header">
            <div class="left-content">
                <p>__________________________________</p>
                <span class="blue-color">HIRER'S SIGNATURE</span>
            </div>
            <div class="right-content">
                <p>__________________________________</p>
                <span class="blue-color">FOR KAYONDO BODA LOANS</span>
            </div>
        </div>
    </div>
</body>
</html>
