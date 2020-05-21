<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../styles.css">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" type="text/css" href="./list.js">
    <title>Medicorp</title>
</head>

<body>

    <div class="navbar"><span>Medicorp</span></div>

    <div class="card">
        <div class="form-header">
            <h1>Consulta</h1>
        </div>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

        <div class="table-list">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>Hospital</th>
                        <th>Pacientes</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>São Paulo</td>
                        <td>24.041</td>
                    </tr>
                    <tr>
                        <td>Rio de Janeiro</td>
                        <td>8.504</td>
                    </tr>
                    <tr>
                        <td>Ceará</td>
                        <td>6.918</td>
                    </tr>
                    <tr>
                        <td>Pernambuco</td>
                        <td>5.724</td>
                    </tr>
                    <tr>
                        <td>Amazonas</td>
                        <td>4.337</td>
                    </tr>
                    <tr>
                        <td>Bahia</td>
                        <td>2.540</td>
                    </tr>
                    <tr>
                        <td>Maranhão</td>
                        <td>2.528</td>
                    </tr>
                    <tr>
                        <td>Pará</td>
                        <td>2.262</td>
                    </tr>
                    <tr>
                        <td>Espírito Santo</td>
                        <td>1.874</td>
                    </tr>
                    <tr>
                        <td>Espírito Santo</td>
                        <td>1.874</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer">
            <a href="JavaScript: window.history.back();"><button type="button" class="btn-form btn-voltar">Voltar</button></a>
        </div>

    </div>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</body>

</html>