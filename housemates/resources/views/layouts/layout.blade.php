<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link href="/css/contact.css" type="text/css" rel="stylesheet">
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
        </style>    
    </head>
    <body class="">
        @yield('content')
    </body>
</html>