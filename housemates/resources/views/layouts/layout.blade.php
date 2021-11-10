<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>HouseMates</title>
        <h>HouseMates</h>

        <style>
			body {
				text-align: left;
				background-color: #E6ECEF;
				background-size: cover;
				background-position: center;
				color: white;
				font-family: Roboto;
                margin: 0;
			}
            #nav-rectangle {
                width: 100%;
                height: 96px;
                background: #FFFFFF;
                position:absolute;
                top: 70px;
            }
            a {
                text-decoration: none;
                color: black;
                font-family: Roboto;
            }
            a:hover {
                color: #698384;
            }
            nav {
                width: 100vw;
                background-color: #FFFFF;
                position: absolute;
                top: 105px;
            }
            ul {
                margin: 0;
                padding: 0;
                display: flex;
            }
            li {
                list-style-type: none;
                margin: 0 6vw;
                font-size: 3vh;
            }
            h1 {
                color: #698384;
                text-align: center;

            }
            .office{
                position: relative;
                left: 25%;
                background: white;
                width: 50%;
                height: 160px;
                border-radius: 15px;
                margin-top: 4%;
            }
            .office h2{
                text-align: center;
                padding-top: 10px;
                color: black;
                font-size: 34px;
            }
            .office p{
                color: black;
                text-align: center;
                font-size: 18px;
            }
            .roommates{
                background: white;
                height: 500px;
                margin-top: 2%;
                display: flex;
            }
            .rm{
                background: #E6ECEF;
                margin-left: 1%;
                margin-right: 1%;
                margin-top: 2%;
                padding: 1%;
                height: 300px;
                flex: 1;
                border-radius: 15px;
                color: black;
            }
            .rm h3{
                text-align: center
            }
            .rm p{
                padding: 1%;
            }
        </style>    
    </head>
    <body class="">
        @yield('content')
    </body>
</html>