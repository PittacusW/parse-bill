<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $type->name }}</title>
    <style>
        @page {
            margin-top: 0;
            margin-bottom: 0;
        }

        html,
        body {
            margin: 2px;
            padding: 2%;
            width: 100%;
            height: 100%;
            font-size: {{ $body_font }}px;
            font-family: "Roboto", "Lucida Sans Typewriter", "Courier New", sans-serif;
        }

        table {
            border-spacing: 0;
            border-collapse: separate;
        }

        td {
            border: 0;
            padding: 3px 5px;
        }

        th {
            text-align: left;
            padding: 3px 5px;
            border-bottom: thin solid rgba(0, 0, 0, 0.52);
        }

        .seccion {
            width: 96%;
            height: auto;
            overflow: hidden;
            margin-bottom: 5px;
        }

        .cuadro {
            width: 30%;
            overflow: hidden;
            border: 1.8px #000 solid;
            font-weight: bold;
            text-align: center;
            margin-right: 10px;
        }

        .tabla {
            width: 94%;
            margin: 5px auto;
        }

        .sucursal {
            font-weight: bold;
            text-align: center;
            width: 30%;
        }

        .datos {
            width: 80%;
            text-align: left;
            margin-top: 10px;
            padding-left: 10px;
        }

        .datos > p {
            margin: 0;
        }


        .cliente > p {
            margin: 0;
        }

        .timbre {
            height: 54px;
            width: 60%;
        }

        .timbre-section {
            line-height: 1px;
            text-align: center;
        }


        .bordeTabla {
            border: thin solid rgba(0, 0, 0, 0.52);
            border-radius: 3px;
        }


        .small-font {
            font-size: {{ $small_font }}px;
        }

        .details {
            min-height: 400px;
        }

        .details td {
            color: rgba(0, 0, 0, 0.87);
            border-top: thin rgba(0, 0, 0, 0.12) solid;
        }

        .details th {
            background-color: rgba(0, 0, 0, 0.12);
        }

        .line {
            border-top: 1px rgba(0, 0, 0, 0.12) solid;
            width: 50%;
            margin: 3px 0;
            height: 1px;
        }

        .right {
            text-align: right;
        }

        .bottom {
            font-weight: bold;
        }

        .page_break {
            page-break-before: always;
        }
    </style>
  </head>

  <body>
    @include('layouts.bill-page',['page'=>1])
    @if(in_array($type->code,[33,34,52]))
      <div class="page_break"></div>
      @include('layouts.bill-page',['page'=>2])
    @endif
  </body>

</html>
