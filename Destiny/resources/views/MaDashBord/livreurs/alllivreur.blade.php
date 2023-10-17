<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        h4 {
    margin: 0;
}
.w-full {
    width: 100%;
}
.w-half {
    width: 50%;
}
.margin-top {
    margin-top: 1.25rem;
}
.footer {
    font-size: 0.875rem;
    padding: 1rem;
    background-color: rgb(241 245 249);
}
table {
    width: 100%;
    border-spacing: 0;
    text-align: center;
}
table.products {
    font-size: 0.875rem;
}
table.products tr {
    background-color: rgb(96 165 250);
}
table.products th {
    color: #ffffff;
    padding: 0.5rem;
}
table tr.items {
    background-color: rgb(241 245 249);
}
table tr.items td {
    padding: 0.5rem;
}
.total {
    text-align: right;
    margin-top: 1rem;
    font-size: 0.875rem;
}
    </style>

</head>
<body>

    <table class="w-full">
        <tr>
            <td class="w-half">
                <img src="mesImages/D2.png" alt="laravel daily" width="200" />
            </td>
            <td class="w-half">
                <h2>Liste des Livreurs </h2>
            </td>
        </tr>
    </table>

    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>Responsable :</h4></div>
                    <div>{{Auth::user()->name}} {{Auth::user()->prenom}}</div>
                    <div>{{Auth::user()->email}}</div>
                </td>
                <td class="w-half">
                    <div><h4>Destiny</h4></div>
                    <div>Mindoube I</div>
                    <div>Destiny@gmail.com</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="margin-top">
        <table class="products">
            <thead >
                <tr style="background-color: rgb(188, 188, 184);">
                    <th>N</th>
                    <th>Domicile</th>
                    <th>Numero du Permis</th>
                    <th>Numero de Telephone</th>
                    <th>Nom et Prenom du Livreur</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($livreurs as $key => $value)
                    <tr class="items">
                        <td class="dtr-control" tabindex="0">{{$key+1}}</td>
                            <td>{{$value->domicile}}</td>
                            <td>{{$value->numeroPermis}}</td>
                            <td style="">{{$value->phone}}</td>
                            
                            <td style="">
                                {{$value->user->name}} {{$value->user->prenom}}
                            </td>
                       
                    </tr>
                @endforeach
               


            </tbody>

        </table>
    </div>

    






















</body>
</html>



















