<x-app-layout>
    <div class="container mx-auto">
        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
            <thead>
            <tr class="text-center font-bold">
                <td class="border px-6 py-4">Numero</td>
                <td class="border px-6 py-4">Nom de Rue</td>
                <td class="border px-6 py-4">Code Postal</td>
                <td class="border px-6 py-4">Ville</td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>

            @foreach($AdresseEtudiant as $AdresseEtudiant)
                <tr>
                    <td class="border px-6 py-4">{{$AdresseEtudiant['Numero']}}</td>
                    <td class="border px-6 py-4">{{$AdresseEtudiant['NomdeRue']}}</td>
                    <td class="border px-6 py-4">{{$AdresseEtudiant['CodePostal']}}</td>
                    <td class="border px-6 py-4">{{$AdresseEtudiant['Ville']}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
