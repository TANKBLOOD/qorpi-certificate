@php
    $certDate= strtotime($certInfo->course->course_date);
    $certYear= date("Y", $certDate);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
    box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;

        }

        #main-wraper {
            width: 210mm;
            margin: auto;
        }

        #cert-head {
            padding: 20px;
            width: 100%;
            background: linear-gradient(to right, rgb(51, 51, 51), rgba(51, 51, 51, 0.8));
            display: flex;
            justify-content: flex-start;
        }

        #head-desc {
            padding: 0 10%;
        }
        #head-desc > h1 {
            color: white;
            font-weight: bold;
            font-size: 50px;
        }
        #head-desc > p {
            color: white;
            font-weight: bold;
            margin-top: -1.7em;
            padding-top: 0;
        }

        #logo {
            /* position: absolute; */
            display: flex;
            content: "hello";
            width: 22%;
            height: 295px;
            margin-left: 8%;
            /* transform: skew(-20deg); */
            /* background: rgb(241, 241, 241); */
            border-radius: 3px;
        }

        #logo-svg {
            text-align:center;
            margin-top: 50px;
        }
        #logo-svg::after {
            display: block;
            text-align: center;
            margin-left: 25px;
            content: 'Al & ML Workgroup';
        }
        /* #logo::before{
            content: "";
            width: 0;
            height: 0;
            right: -59.5px;
            top: 0;
            border-left: 0px solid transparent;
            border-right: 60px solid transparent;
            border-bottom: 57px solid rgb(202, 202, 202);
            position: absolute;
        }
        #logo::after{
            content: "";
            width: 0;
            height: 0;
            left: -70px;
            bottom: 0;
            border-left: 70px solid transparent;
            border-right: 0px solid transparent;
            border-top: 65px solid rgb(202, 202, 202);
            position: absolute;
        } */

        #head-date {

        }

        #cert-body {
            padding: 75px 11%;
        }

        #body-start {
            margin-top: 0px;
            font-weight: bold;
            font-size: 20px;
        }

        #user-name {
            margin-top: -5px;
            font-size: 80px;
            font-weight: bold;
        }

        #body-text {
            margin-top: -20px;
            font-size:large;
        }
        #cert-footer {
            margin: 0%;
        }

        #company-info {
            margin-left: 10.8%;
        }

        #company-info > p {
            font-size: large;
        }

        #course-qr-code {
            margin-left: 55%;
            margin-top: 58px;
        }

    </style>
    <title>certificate|Template 1</title>
</head>
<body>
    <div id="main-wraper">
        <div id="cert-head">
            <div id="head-desc">
                <h1>CERTIFICATE</h1>
                <p>OF ACHIEVEMENTS <span id="head-date">{{$certYear}}</span></p>
            </div>
        </div>
        <div id="cert-body">
            <div>
                <div id="body-start">This is to certify that <span>Ms</span></div>
                <h1 id="user-name">
                    {{$certInfo->student_name}}
                </h1>
                <div id="body-text">
                    with <span style="font-weight: bold; font-size:larger;">{{$certInfo->student_code}}</span> code has participated in the <span style="font-weight: bold;font-size:larger">{{$certInfo->course->name}} course</span> held in the <span style="font-weight: bold;font-size:larger;">Qorpi</span> Research and Training Academy, Tehran-Iran <span>{{date("d F , Y")}}</span>
                </div>
            </div>
        </div>
        <div id="cert-footer">
            <div id="company-info">
                <h2>Qorpi Academy</h2>
                <p>Artificial Intelligence  and Machine Learning Workgroup</p>
                <h3>Mail:qorpi.edu@gmail.com</h3>
            </div>
            <div id="logo">
                <div id="logo-svg">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="150px" height="150px" viewBox="0 0 874.000000 883.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,883.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M3565 8666 c-251 -40 -442 -174 -545 -382 l-24 -50 -116 0 c-126 0
                        -167 -9 -274 -59 -90 -42 -154 -88 -234 -167 -248 -245 -265 -626 -46 -1018
                        69 -125 205 -303 308 -404 109 -106 126 -130 126 -176 0 -100 -113 -168 -206
                        -124 -79 37 -270 244 -367 396 -115 178 -217 444 -249 643 -6 39 -14 73 -18
                        78 -15 18 -214 -169 -285 -268 -84 -118 -153 -264 -181 -384 -30 -128 -35
                        -167 -35 -278 0 -158 29 -291 89 -416 26 -53 44 -101 41 -105 -15 -15 -61
                        -114 -75 -164 -21 -70 -21 -221 1 -294 66 -228 266 -426 522 -517 132 -47 359
                        -75 367 -44 35 129 54 185 86 252 78 162 121 205 205 205 62 0 106 -25 128
                        -73 25 -52 21 -82 -23 -163 -113 -208 -146 -465 -90 -693 61 -251 185 -357
                        499 -427 88 -19 124 -34 169 -68 81 -59 121 -151 146 -333 9 -62 21 -134 26
                        -160 19 -86 93 -223 167 -308 107 -123 191 -182 449 -316 77 -39 153 -80 170
                        -90 31 -19 31 -19 41 4 48 105 107 302 138 462 36 189 36 401 0 561 -39 168
                        -132 368 -232 497 l-46 59 17 106 c9 59 16 142 16 186 0 67 -2 77 -16 72 -76
                        -29 -269 -25 -397 9 -130 34 -262 110 -349 199 -111 113 -170 213 -212 358
                        -46 160 -43 340 15 923 11 110 24 245 30 300 17 170 28 355 29 461 0 80 -6
                        121 -25 190 -69 240 -156 329 -339 345 -77 8 -95 13 -125 37 -20 16 -42 47
                        -50 69 -14 38 -13 43 10 88 36 73 71 88 189 81 111 -7 165 -22 259 -71 67 -35
                        169 -127 212 -191 64 -93 129 -259 150 -379 13 -79 8 -424 -10 -585 -6 -52
                        -18 -162 -26 -245 -9 -82 -20 -186 -25 -230 -6 -44 -15 -172 -21 -285 -12
                        -238 -2 -373 37 -488 31 -92 59 -137 125 -196 96 -86 209 -127 359 -130 75 -1
                        91 2 140 27 58 30 148 111 180 162 37 60 70 212 70 322 0 211 -55 358 -197
                        532 -29 36 -53 67 -53 70 0 4 21 29 46 56 183 200 258 455 210 707 -25 128
                        -72 226 -178 365 l-40 53 62 72 c69 82 150 236 178 338 27 104 22 319 -11 430
                        -52 174 -120 287 -237 393 -70 63 -200 130 -302 156 -100 25 -254 33 -353 17z"/>
                        <path d="M4185 8657 c180 -61 309 -155 407 -300 108 -160 152 -374 114 -557
                        -14 -67 -10 -80 24 -80 9 0 72 -16 140 -35 732 -209 1308 -720 1620 -1438 228
                        -527 327 -1137 299 -1844 -10 -258 -13 -295 -45 -518 -101 -693 -350 -1240
                        -754 -1659 l-106 -109 -99 78 c-332 260 -735 465 -1202 615 -90 28 -168 50
                        -175 48 -6 -2 -22 -34 -34 -70 l-22 -65 74 -62 c131 -111 240 -267 297 -428
                        30 -83 57 -216 57 -282 0 -25 4 -51 8 -57 4 -7 52 -35 107 -64 55 -29 140 -78
                        189 -108 l89 -55 -34 -17 c-27 -14 -227 -83 -275 -95 -6 -2 -14 -40 -17 -88
                        -19 -246 -137 -500 -309 -663 -89 -85 -166 -133 -307 -191 l-106 -45 150 7
                        c397 17 752 80 1095 195 187 62 286 103 491 202 l167 80 141 -105 c349 -261
                        711 -483 1063 -651 208 -100 466 -203 477 -191 9 10 301 698 301 709 0 3 -4 6
                        -10 6 -18 0 -294 122 -435 192 -152 76 -384 206 -535 301 -198 124 -340 220
                        -340 229 0 5 42 53 94 106 631 647 992 1522 1066 2582 13 188 13 606 0 785
                        -59 803 -288 1519 -676 2107 -329 499 -768 885 -1324 1163 -173 87 -228 110
                        -415 177 -356 126 -742 197 -1165 213 l-155 6 70 -24z"/>
                        <path d="M1097 5521 c-93 -145 -171 -333 -218 -526 -33 -135 -33 -398 -1 -545
                        111 -496 474 -929 1022 -1218 129 -68 203 -98 417 -173 184 -63 240 -97 342
                        -205 88 -92 145 -193 179 -316 22 -80 21 -261 -1 -331 -8 -26 -12 -49 -9 -51
                        4 -2 33 -9 64 -15 47 -10 233 -71 289 -95 14 -6 14 1 6 66 -5 40 -7 127 -5
                        193 4 136 17 172 78 212 85 58 219 -4 221 -103 1 -16 -2 -83 -6 -149 -5 -89
                        -3 -146 8 -220 24 -153 48 -202 173 -360 97 -123 191 -356 181 -451 -11 -101
                        -122 -158 -214 -110 -44 22 -63 54 -79 131 -23 108 -72 221 -130 298 -139 185
                        -388 308 -694 343 -59 6 -59 6 -112 -38 -102 -86 -181 -131 -328 -189 -82 -32
                        -124 -36 -173 -16 -59 25 -91 92 -75 157 13 52 49 81 138 115 279 105 430 302
                        390 510 -18 91 -64 179 -129 244 -63 63 -103 85 -250 135 -309 106 -501 204
                        -751 381 -104 73 -326 292 -404 398 -32 42 -59 77 -61 77 -2 0 -15 -37 -29
                        -82 -178 -567 83 -1019 659 -1140 27 -6 116 -11 197 -12 l148 -1 36 -37 c30
                        -29 38 -45 42 -86 4 -46 2 -52 -33 -91 -48 -53 -80 -61 -240 -61 -132 0 -270
                        18 -358 46 -27 9 -51 13 -54 10 -4 -3 -8 -52 -11 -108 -11 -272 134 -581 358
                        -761 250 -200 558 -252 904 -152 98 28 99 28 111 -34 9 -51 65 -168 113 -238
                        82 -121 236 -240 394 -305 216 -88 481 -95 709 -17 309 105 576 399 665 734
                        15 56 19 106 19 255 0 203 -5 229 -72 413 -94 259 -313 508 -523 596 -179 75
                        -346 187 -486 326 -198 197 -278 364 -323 675 -10 72 -24 136 -30 144 -6 8
                        -42 19 -79 26 -149 28 -339 104 -422 170 -42 34 -59 36 -98 16 -90 -46 -334
                        -79 -487 -66 -239 20 -546 135 -591 221 -33 65 -7 146 58 180 56 28 99 24 186
                        -20 145 -72 302 -111 449 -111 58 0 248 31 259 43 2 2 -12 39 -31 83 -33 77
                        -58 181 -70 296 l-6 56 -97 6 c-281 18 -474 80 -688 222 -142 94 -275 256
                        -337 412 -33 81 -44 127 -64 254 l-8 48 -38 -59z"/>
                        </g>
                    </svg>
                </div>
                <div id="course-qr-code">
                    <img src="{{asset($certInfo->course->qr_code_path)}}" alt="your certificate qr codeS">
                </div>
            </div>

        </div>
    </div>
</body>
</html>
