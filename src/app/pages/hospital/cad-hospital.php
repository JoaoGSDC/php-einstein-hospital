<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../styles.css">
    <title>Medicorp</title>
</head>

<body>

    <div class="navbar"><span>Medicorp</span></div>

    <div class="card">
        <div class="form-header"><h1>Cadastro Hospital</h1></div>
        <form class="form">

            <div class="container-input" style="width: 50%">
                <label>Razão Social</label>
                <input type="text" />
            </div>

            <div class="container-input" style="width: 45%">
                <label>Nome Fantasia</label>
                <input type="text" />
            </div>

            <div class="container-input">
                <label>CNPJ</label>
                <input type="text" />
            </div>

            <div class="container-input">
                <label>Endereço</label>
                <input type="text" />
            </div>

            <div class="container-input">
                <label>Número</label>
                <input type="number" />
            </div>

            <div class="container-input">
                <label>Cidade</label>
                <input type="text" />
            </div>

            <div class="container-input">
                <label>Estado</label>
                <select>
                    <option style="display: none;" selected></option>
                    <option>Rio de Janeiro</option>
                    <option>São Paulo</option>
                </select>
            </div>

            <div class="container-input">
                <label>Telefone</label>
                <input type="text" />
            </div>
            
            <div class="container-input">
                <label>E-mail</label>
                <input type="text" />
            </div>

            <div class="form-footer">
                <button class="btn-form btn-salvar">Salvar</button>
                <a href="JavaScript: window.history.back();"><button type="button" class="btn-form btn-voltar">Voltar</button></a>
            </div>

        </form>
    </div>

</body>

</html>