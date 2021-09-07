<html>
<head>
    <title>Online Certificate | CITET.ORG</title>
    <link href="{{ asset('css/student.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="https://www.nextgyaan.com/src/images/logo/nextgyaan_logo_150_blue.png">
</head>

<body>
    <div class='container'>
        <div class='row' style='margin-top: 33px; margin-bottom: 36px;'>
            <table align='center' width='1000px' border='0' cellpadding='2' cellspacing='0'
                style='font-size: 20px; line-height: 25px;'>
                <tbody>
                    <tr>
                        <td colspan='3'><img src='{{ asset('img/certh.jpg') }}' /></td>
                    </tr>
                    <tr align='center'>
                        <td width=33%>Serial No: {{$flights['0']->sl_no}}</td>
                        <td width=33%>
                            <h3 style='font-size: 40px;'>Certificate</h3>
                        </td>
                        <td width=33%>Cert. No: {{$flights['0']->cert_no}}&nbsp;&nbsp;<img
                                src='https://api.qrserver.com/v1/create-qr-code/?data={{route('getcerificatesubmit')}}?SlNo={{$flights['0']->sl_no}}&result=Submit&size=100x100'
                                alt='' width='100px' height='100px'>
                        </td>
                    </tr>
                    <tr align='center'>
                        <td colspan='3'>
                            <p style='width:76%'>This is to certify that Mr./Mrs./Miss <b>{{$flights['0']->name}}</b>
                                Son/ Wife/ Daughter of Sri <b>{{$flights['0']->fname}}</b> has completed
                                <b>{{$flights['0']->certificate}}</b> under. <b>{{$flights['0']->iname}}</b> Authorized
                                Study Center of <b>Computer Institute of Technology & Educational Trust</b>.
                                His/Her Reg. No. Is <b>{{$flights['0']->reg_no}}</b> and has procured the grade
                                <b>{{$flights['0']->grade}}</b> with <b>{{$flights['0']->gradeper}}</b>.</p>
                        </td>
                    </tr>
                    <tr align='center'>
                        <td></td>
                        <td style='width: 50%;'><b>For the period: <b>{{$flights['0']->period_from}} to
                                    {{$flights['0']->period_to}}</b></td>
                        <td></td>
                    </tr>
                    <tr align='center'>
                        <td colspan='3'>
                            <h4>Marks Statement</h4>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table align='center' border='0' cellpadding='2' width='700px' cellspacing='0'
                style='border: 1px solid black;'>
                <tbody>
                    <tr align='center'>
                        <td style='border: 1px solid black;'>Semester</td>
                        <td style='border: 1px solid black;'>Roll No.</td>
                        <td style='border: 1px solid black;'>Total Theory</td>
                        <td style='border: 1px solid black;'>Obt.</td>
                        <td style='border: 1px solid black;'>Total Pract.</td>
                        <td style='border: 1px solid black;'>Obt.</td>
                        <td style='border: 1px solid black;'>Grand Total</td>
                        <td style='border: 1px solid black;'>Course Details</td>
                    </tr>
                    <tr align='center'>
                        <td style='border: 1px solid black;'>Sem I</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->roll1}}</td>
                        <td style='border: 1px solid black;'>100</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->theory_1}}</td>
                        <td style='border: 1px solid black;'>100</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->practical_1}}"</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->total_1}}</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->course_1}}</td>
                    </tr>
                    <tr align='center'>
                        <td style='border: 1px solid black;'>Sem II</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->roll2}}</td>
                        <td style='border: 1px solid black;'>100</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->theory_2}}</td>
                        <td style='border: 1px solid black;'>100</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->practical_2}}</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->total_2}}</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->course_2}}</td>
                    </tr>
                    <tr align='center'>
                        <td colspan='5' style='border: 1px solid black;' align='right'>Total</td>
                        <td style='border: 1px solid black;'>{{$flights['0']->grandtotal}}</td>
                        <td style='border: 1px solid black;'>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <table align='center' border='0' cellpadding='2' width='1000px' cellspacing='0'>
                <tbody>
                    <tr align='center'>
                        <td style='margin-top: 3px; font-size: 16px;'>Date of Issue : <b>{{$flights['0']->doi}}</b></td>
                    </tr>
                    <tr align='center'>
                        <td colspan='3'><img src='{{ asset('img/certf.jpg') }}' /></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div id="heading" class='no-print'>
                <a href="javascript:window.print()"><IMG SRC="{{ asset('img/print_button.png') }}" BORDER=\"0\"></a>
                <a href="javascript:history.go(-1)"><IMG SRC="{{ asset('img/go_back.png') }}" BORDER=\"0\"></a>
            </div>
        </div>
</body>

</html>
