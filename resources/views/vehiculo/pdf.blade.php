<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h2>Informe  de Vehiculos ACME</h2><br>

    
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>

										<th scope="col">Placa</th>
										<th scope="col">Marca</th>
										<th scope="col">Conductor</th>
										<th scope="col">Propietario</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>                                            
											<td>{{ $vehiculo->Placa }}</td>
											<td>{{ $vehiculo->marca->Marca }}</td>
                                            <td>{{ $vehiculo->personaP->Primernombre }} {{ $vehiculo->personaP->Segundonombre }} {{ $vehiculo->personaP->Apellidos }}</td>
											<td>{{ $vehiculo->persona->Primernombre }} {{ $vehiculo->persona->Segundonombre }} {{ $vehiculo->persona->Apellidos }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
