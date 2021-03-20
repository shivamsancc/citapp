<hrml>

    <head>
        <title>Download AdmitCard| CITET.ORG</title>
        <link href="{{ asset('css/student.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="https://www.nextgyaan.com/src/images/logo/nextgyaan_logo_150_blue.png">
    </head>
    <body>
        <div id='heading'>
            <h1><img src='{{ asset('img/citet-logo.jpg') }}' width='750px' /></h1>
        </div><br />
        <h2 style='text-align:center;'>Admitcard:</h2>
        <center><img
                src='https://api.qrserver.com/v1/create-qr-code/?data=https://citet.org/vfm/apps/get-admit-card.php?RegNo=".$ar["regno"]."&result=Submit&size=100x100'
                alt='' width='100px' height='100px'></center>
        <table align='center' width='650px' border='0' cellpadding='2' cellspacing='0' bgcolor='#ffffff'>
            <tbody>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Registration No:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->regno}}</td>
                    <td class='pic-box' width='120px' rowspan='6'>Affix Photo here...
                    </td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Term end examination:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->ename}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Session:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->session}}</td>

                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Duration:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->duration}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Students name:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->name}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Father's Name:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->fname}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Examination Roll No:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->rollno}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Course Name:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->course}}</td>

                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Sem:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->semester}}</td>

                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Study centre:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->scenter}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Exam Date:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->edate}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Reporting Time:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->rtime}}</td>
                </tr>
                <tr>
                    <td valign=‘top’ width=‘319’><b>Exam Venue:-</b></td>
                    <td valign=‘top’ width=‘319’>{{$flights['0']->ecenter}}</td>
                </tr>
            </tbody>
        </table>
        <div id="heading" class='no-print'>
          <a href="javascript:window.print()"><IMG SRC="{{ asset('img/print_button.png') }}" BORDER="0"></a>
          <a href="javascript:history.go(-1)"><IMG SRC="{{ asset('img/go_back.png') }}" BORDER="0"></a>

        </div>

        <h3>Instructions:</h3>

        <div class='in-box'>
            <ol>

                <li>The candidate should ascertain exact location of the venue will in advance of the date of
                    examination.</li>
                <li>

                    Candidate who comes without this Admit Card and his/her passport size photograph. Photograph duly
                    pasted on it will not be allowed to take the examination. The candidate appearance should be same as
                    in the pasted on the application and Admit Card.</li>
                <li>

                    The actual examination will start at the time given in the schedule. You should be present in your
                    seat half an hour before the actual time of examination. Candidate arriving late will not be
                    admitted.</li>
                <li>

                    You must follow instructions given by the test administrator and the invigilator of the examination.
                    Candidate found violating these instructions will be disqualified and may be asked to leave the
                    examination.</li>
                <li>

                    The test booklet and answer sheet supplied by head office of CITET to the candidate must be returned
                    infect to the invigilator. Anyone try to take them away or found in unauthorized positions of these
                    liable to be prosecuted.</li>
                <li>

                    You have to use only ball pen (dot pen) in the examination.</li>
                <li>
                    Registration number and Enrollment number both are same.</li>
                <li> The result of Term End Examination will be available on our website www.citet.org after 30 Days of
                    TEE.<br />
                </li>
                <li> Photograph pasted on Admit Card must be attested by your centre head or concerned regional in
                    charge. We wish you success in the examination. <br />
                </li>
            </ol>
            <b>We wish you success in the examination</b>
        </div>
    </body>

    </html>
