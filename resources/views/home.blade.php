<!DOCTYPE html>

@extends('layouts.app')

@section('title-block')
    <h1>Home</h1>
@endsection

@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        .form-group, .alert alert-danger {
            background-color: darkgray;
            padding-: 5px;
            float: right;
            width: 20%;
        }
        .table {
            padding: 5px;
            float: left;
            width: 80%;
        }
        @media screen and (max-width: 200px) {
             .form-group, .alert alert-danger ,.table {
                width: 100%;
            }
        }
    </style>
    <body>


    @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action='/contact' method="post" id="email1">
        @csrf
        <div class="form-group">
            <?php
            echo "Today is " . date("Y/m/d H:i") . "<br>";
            ?>
            <label style="font-size:2vw" for="email">Enter email->DB</label><br>
            <input type="email" name="email" placeholder="enter your email" id="email" class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
            <label style="font-size:2vw" for="word">Enter word->DB</label><br>
            <input type="text" name="word" placeholder="enter word" id="word" class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
            <label  style="font-size:1vw" for="country" type="country" name="country">Choose your country</label><br>
            <select name="country" id="country">
                <option value="Ukraine">Ukraine</option>
                <option value="notUkraine">Not Ukraine</option>
            </select><br><br>
        <button  type="submit" class="btn btn-success" >send</button><br><br>
            <label for="coments" >Your Coments</label><br>
            <textarea type="text" value="Doe" id="coments" name="coments" rows="5" cols="30" placeholder="this text saving in file" ></textarea><br>
        </div>

    </form>
    @endsection



    <div class="button">
        <button value="Refresh Page" onClick="window.location.reload();">Refresh Button</button><br>
    </div>

    <div class="table">
        <table>
        <caption><h3>HTML</h3></caption>
        <colgroup>
            <col span="1" style="background-color: #a0aec0">
            <col  span="2,3" style="background-color: #cbd5e0">

        </colgroup>
        <thead>
        <tr>
            <th> <h5>#</h5></th>
            <th> <h5>Task</h5></th>
            <th> <h5>Resalt</h5></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="first table">1</td>
            <td style="text-align:center;">Links</td>
            <td>
                <a href="http://127.0.0.1:8000/word"> Gazzle task </a> <br>
                <a href="http://127.0.0.1:8000/array"> file.csv </a> <br>
                <a href="http://127.0.0.1:8000/testar" title="Go to test Array"> Test array </a><br>
            </td>
        </tr>
        <tr>
            <td class="first table">2</td>
            <td style="text-align:center;">Buttons</td>
            <td>
            <button type="button"  onСlick="http://127.0.0.1:8000/testar"> link button not working?!</button><br>
            <button  value="Refresh Page" onClick="window.location.reload();">Refresh Button</button><br>
            </td>
        </tr>
        <tr>
            <td class="first table">3</td>
            <td style="text-align:center;">Image links</td>
            <td>
                <img src="https://www.w3schools.com/html/workplace.jpg" alt="My comp" usemap="#mycomp">
                <map name="mycomp">
                    <area shape="rect" coords="34,44,270,350" alt="Word" href="http://127.0.0.1:8000/word" title="Go to work">
                    <area shape="circle" coords="337,300,44" alt="Contact" href="http://127.0.0.1:8000/testar" title="Go to work too">
                </map>
            </td>
        </tr>
        <tr>
            <td class="first table">4</td>
            <td style="text-align:center;">Favikon</td>
            <td>not working (views/app.blade.php</td>
        </tr>
        <tr>
            <td class="first table">5</td>
            <td style="text-align:center;">Class,ID,thead,tbody</td>
        </tr>
        <tr>
            <td class="first table">6</td>
            <td style="text-align:center;">iframe</td>
            <td>
                <iframe src="https://www.bugsfighter.com/ru/how-to-fix-err_connection_refused-error-in-google-chrome/" style="border:none;" height="200" width="700" title="syte"></iframe>
            </td>
        </tr>
        <tr>
            <td class="first table">7</td>
            <td style="text-align:center;"> <button  value="Refresh Page" onClick="window.location.reload();">Refresh Button</button><br>JavaScript</td>
            <td>
               <script>
                   function myFunction(sw){
                       var number;
                       if (sw == 1){document.getElementById("demo").innerHTML = "1";}
                        else {
                           if (sw == 2){document.getElementById("demo").innerHTML = "2";}
                           else {if (sw == 3){document.getElementById("demo").innerHTML = "3";document.getElementById("demo").style.color = "green";}
                               else {document.getElementById("demo").innerHTML = "4";
                                     document.getElementById("demo").style.color = "red";
                           }
                           }
                       }
                       document.getElementById('myImage').src = number;
                   }
               </script>
                <p id="demo">Hello JavaScript!</p>
                <p>
                    <button type="button" onclick="myFunction(1)">1</button>
                    <button type="button" onclick="myFunction(2)">2</button>
                    <button type="button" onclick="myFunction(3)">3</button>
                    <button type="button" onclick="myFunction(4)">4</button>
                </p>
            </td>

        </tr>
        <tr>
            <td class="first table">8</td>
            <td style="text-align:center;">Forms</td>
            <td>
                <form method="get" action="none">
                    <textarea id="noneid" name="none" rows="15" cols="20"></textarea><br>
                    <input type="button" onclick="alert('Demo version!')" value="Go!">

                </form>
                <form  style="right: auto" action="/action_page.php"
                      oninput="x.value=parseInt(a.value)+parseInt(b.value)">
                    0
                    <input type="range"  id="a" name="a" value="50">
                    100 +
                    <input type="number" id="b" name="b" value="50">
                    =
                    <output name="x" for="a b"></output>
                    <br>
                    <input type="reset"><br>

                </form>
            </td>
        </tr>
        <tr>
            <td class="first table">9</td>
            <td style="text-align:center;">Graphic</td>
            <td>
                <canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
                </canvas>
                <script>
                    var c =document.getElementById("myCanvas");
                    var ctx = c.getContext("2d");

                    var grd = ctx.createLinearGradient(0, 0, 200, 0);
                    grd.addColorStop(0, "red");
                    grd.addColorStop(1, "white");
                    ctx.fillStyle = grd;
                    ctx.fillRect(50,0,200,100);

                    var grd1 = ctx.createLinearGradient(0, 0, 200, 0);
                    grd1.addColorStop(0, "black");
                    grd1.addColorStop(1, "white");
                    ctx.fillStyle = grd1;
                    ctx.fillRect(0,0,55,100);

                    ctx.moveTo(0,0);
                    ctx.lineTo(200,100);
                    ctx.stroke();
                    var ctn = c.getContext("2d");
                    ctn.beginPath();
                    ctn.arc(161, 38, 38, 0, 2 * Math.PI);
                    ctn.stroke();
                    var ctm = c.getContext("2d");
                    ctm.font = "20px Arial";
                    ctm.strokeText("Java Script", 10, 95);
                </script>

                <canvas id="myCanvas2" width="200" height="100" style="border:1px solid #000000;">
                </canvas>
                <script>
                    var b = document.getElementById("myCanvas2");
                    var btc = b.getContext("2d");
                    var gdt = btc.createRadialGradient(90, 50, 3, 90, 60, 200);
                    gdt.addColorStop(0, "green");
                    gdt.addColorStop(1, "white");
                    btc.fillStyle = gdt;
                    btc.fillRect(0, 0, 200,100);
                </script>
            </td>
        </tr>
        <tr>

            <td class="first table">10</td>
            <td style="text-align:center;">SVG</td>
            <td>
                <svg height="100" width="100">
                    <circle r="40" cx="50" cy="50" stroke="green" stroke-width="4" fill="yellow">
                    </circle>
                </svg>
                <svg width="400" height="180">
                    <rect x="50" y="20" rx="20" ry="20" width="150" height="150"
                          style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
                    Sorry, your browser does not support inline SVG.
                </svg>
                <svg width="200" height="200" >
                    <defs>
                        <linearGradient id="logo" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                            <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <ellipse cx="100" cy="100" rx="85" ry="55" fill="url(#logo)"/>
                    <text fill="#ffffff" font-size="45" font-family="Verdana" x="40" y="110">LOGO</text>
                    Sorry, your browser does not support inline SVG.
                </svg>
            </td>
        </tr>
        </tbody>
        </table>
    </div>
    <div class="green line">

    </div>
</body>
