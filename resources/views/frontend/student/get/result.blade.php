<html>

<head>
    <link href="{{ asset('css/student.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="https://www.nextgyaan.com/src/images/logo/nextgyaan_logo_150_blue.png">
    <title>Get Result | CITET.org</title>
</head>
<body>
    <div id='heading'>
        <h1><img src='{{ asset('img/citet-logo.jpg') }}' width='750px' /></h1>
    </div><br />
    <h2 style='text-align:center;'>Results</h2>
    <h3 style='text-align:center;'>TEE (Term End Examination)</h3>
    <center>
        <img src='https://api.qrserver.com/v1/create-qr-code/?{{route('getresult')}}?roll={{$flights['0']->roll}}{{$flights['0']->roll}}&result=Submit&size=100x100'
            alt='' width='100px' height='100px'>
    </center>
    <br />
    <table align='center' width='650px' border='0' cellpadding='2' cellspacing='0' bgcolor='#ffffff'>
        <tbody>
            <tr>
                <td valign=‘top’ width=‘319’><b>Student Name:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->name}}</td>
                <td rowspan='6'></td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Father's/ Husband Name:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->fname}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Roll Number-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->roll}}</td>

            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Registration Number:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->regno}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Course:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->course}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Examination Date:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->examdate}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Session:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->session}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Term End Examination:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->exam}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Study Centre:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->studycentre}}</td>
            </tr>
            <tr>
                <td valign=‘top’ width=‘319’><b>Duration:-</b></td>
                <td valign=‘top’ width=‘319’>{{$flights['0']->duration}}</td>
            </tr>
        </tbody>
    </table>
    <br />
    <h3 style='text-align:center;'>Marks</h3>
    <table align='center' width='650px' border='1' cellpadding='2' cellspacing='0' bgcolor='#ffffff'>
        <tr>
            <td rowspan='2'>Course Details</td>
            <td colspan='2'>Theory</td>
            <td colspan='2'>Practical</td>
            <td colspan='2'>Grand Total</td>
        </tr>
        <tr>
            <td>Max Marks</td>
            <td>%of Marks</td>
            <td>Max Marks</td>
            <td>%of Marks</td>
            <td>Max Marks</td>
            <td>Marks Agg.</td>
        </tr>
        <tr>
            <td>{{$flights['0']->coursedetails}}</td>
            <td>{{$flights['0']->theorytotal}}</td>
            <td>{{$flights['0']->tmasgg}}</td>
            <td>{{$flights['0']->pmt}}</td>
            <td>{{$flights['0']->pmagg}}</td>
            <td>-</td>
            <td>{{$flights['0']->ptmagg}}</td>
        </tr>
    </table>
    <br>
    <div class='in-box'>
        <p>Over All Percentage:- <b>{{$flights['0']->ovp}}</b>Grade:-<b>{{$flights['0']->grade}}</b></p>
        <p>Status: <b>{{$flights['0']->exam_status}}</b></p>
        <p>Grade:- >=85%- A++, >=75% - A+, >=65%- A, >=55%- B+, >= 40%, B </p>
    </div>
    <div id="heading" class='no-print'>
        <a href="javascript:window.print()"><IMG SRC="{{ asset('img/print_button.png') }}" BORDER="0"></a>
        <a href="javascript:history.go(-1)"><IMG SRC="{{ asset('img/go_back.png') }}" BORDER="0"></a>
    </div>
</body>

</html>
