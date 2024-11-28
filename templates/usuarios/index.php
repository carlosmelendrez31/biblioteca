<header>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?= $this->Url->build('/');?>">Biblioteca Los Pipirisnais</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/usuarios/agregar'); ?>">Agregar Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/usuarios/listar'); ?>">Ver Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/Prestamos/index'); ?>">Ver Prestamos</a>
            </li>
        </ul>
    </div>
</nav>
</header>
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        .navbar {
            background-color: #5f27cd;
        }
        .navbar-brand, .nav-link {
            color: #1a2691 !important;
            
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ffeaa7 !important;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        div {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        h3 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div>
        <h1>Lista de Usuarios</h1>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Email</th>
                <th>Celular</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= h($usuario->id) ?></td>
                <td><?= h($usuario->nombre_completo) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->celular) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div>
</body>
</html>
