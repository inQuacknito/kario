@extends('layouts.umum')

@section('judulUmum')
    <title> Kario | Hasil Pemeriksaan </title>
@endsection

@section('isiUmum')
    <h1>Halo</h1><html>
    <head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

        <table>
        <tr>
            <th>Pertanyaan</th>
            <th>Parameter</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Caries Experience</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Related Disease</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Diet Contents</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Diet Frequency</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Plaque Amount</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Mutans Streptococci</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Fluoride Program</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Saliva Secretion</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Saliva Secretion</td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Clinical Judgement/td>
            <td><label for="points">Points (between 1 to 5):</label><input type="range" id="points" name="points" min="1" max="5"></td>
        </tr>
        </table>

        </body>
    </html>
@endsection