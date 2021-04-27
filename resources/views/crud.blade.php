<html>

<head>
    <style>
        table {
            margin-top: 10rem;
            border: 1px solid #efefef;
        }

        tr,
        td {
            padding: 0.75rem 1rem;
        }

        tr {
            border-right: 1px solid red;
        }

        th {
            border-bottom: 1px solid #efefef;
            padding: 0.75rem 0;
        }

        tbody tr {
            &+tr {
                border-top: 1px solid #efefef;
            }
        }

        button {
            padding: 0.75rem 1rem;
            background: red;
            border: none;
            border-radius: 0.4rem;
            color: #fff;
            outline: 0;
            transition: filter 200ms;
            cursor: pointer;
        }

        button:hover,
        #submit:hover {
            filter: brightness(0.9);
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 1rem 2rem;
            width: 30%;
            background: darkblue;
        }

        input {
            width: 20rem;
            height: 3.5rem;
            border-radius: 0.5rem;
            padding-left: 0.75rem;
            margin-top: 1rem;
            outline: 0;
            border: none;
        }

        #submit {
            background: green;
            color: #fff;
            cursor: pointer;
            transition: filter 200ms;
        }

    </style>

</head>

<body>
    <h1>olá mundo</h1>
    <form action="/insert" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input id="submit" type="submit" value="Inserir">
    </form>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $query)
                <tr>
                    <td>{{ $query->id }}</td>
                    <td>{{ $query->name }}</td>
                    <td>{{ $query->email }}</td>
                    <td><button>Excluir</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
