<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            table, thead, tbody, td{
                border: 1px solid black;
                text-align: left;
            }

            th{
                color: #eee;
                background-color:  rgb(30, 218, 86);
            }

            h1{
                text-align: center;
                color: green;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Table..</h1>
        {{-- === table === --}}
        <table style="width:100%">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                  </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                  </tr>
            </tbody>
          </table>
          {{-- === end table === --}}
    </body>
</html>
