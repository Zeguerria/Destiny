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
                <h2>Facture N° : </h2>
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
                    {{-- <th>N</th> --}}
                    {{-- <th>Nom du Produit</th> --}}
                    <th>Lieu de Livraison</th>
                    <th>Lieu de Recuperation</th>
                    <th>Prix</th>
                    <th>Statut </th>
                    
                    <th>Nom(s) & Prénom(s) Livreur</th>
                    
                    <th>Nom(s) & Prénom(s) Clients </th>
                    <th>Nom(s) & Prénom(s) Destinataire</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livraisons as $key => $value)
                    <tr class="items">
                        {{-- <td>{{$key+1}}</td> --}}
                        {{-- <td>{{$value->produits->nom}}</td> --}}
                        <td>{{$value->lieuLivraison}}</td>
                        <td>{{$value->lieuRecuperation}}</td>
                        <td>{{$value->prix}}</td>
                        <td>{{$value->statut_id}}</td>
                        <td>{{$value->livreurs->user->name}} {{$value->livreurs->user->prenom}}</td>
                        <td>{{$value->clients->nom}} {{$value->clients->prenom}}</td>
                        <td>{{$value->destinataires->nom}} {{$value->destinataires->prenom}}</td>
                    </tr>
                @endforeach
               


            </tbody>
            {{-- <tfoot>
                <tr>
                    <td>Nombre de Livrairson En Attentes {{$livraisonAttente}}</td>
                </tr>
                <tr>
                    <td>Nombre de Livrairson En cours {{$livraisonCours}}</td>
                </tr>
                <tr>
                    <td>Nombre de Livrairson Annulées {{$livraisonAnnuler}}</td>
                </tr>
                <tr>
                    <td>Nombre de Livrairson Repportées {{$livraisonReporter}}</td>
                </tr>
                <tr>
                    <td>Nombre de Livrairson Livrées {{$livraisonEffectuer}}</td>
                </tr>
               
            </tfoot> --}}
           
           
        </table>
    </div>

    <div class="total">
        <h4> Total Livrées : {{$sommes}} FCFA<br>
            <span>
                {{-- En Attentes {{$livraisonAttente}} , Montant : {{$sommesAt}} FCFA
                <br>
                En cours {{$livraisonCours}} , Montant : {{$sommesEc}} FCFA
                <br>
                Annulées {{$livraisonAnnuler}} , Montant : {{$sommesAn}} FCFA
                <br>
                Repportées {{$livraisonReporter}} , Montant : {{$sommesRe}} FCFA
                <br> --}}
                 {{--{{$livraisonEffectuer}} , Montant--}}
            </span>
        </h4>
       
    </div>

    <div class="footer margin-top">
        <div>Signature :</div>
    </div>






















</body>
</html>



















