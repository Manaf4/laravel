<table class="table">
                            <thead>
                                <tr>
                                    <th>Referentiel</th>
                                    <th>Formation</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($referentiels_counts as $referentiels_count)
                                    <tr>
                                        <td>{{ $referentiels_count->libelle}}</td>
                                        <td>{{ $referentiels_count->formations_count}} </td> 
                                    <tr>
                                @endforeach
                            </tbody>
                        </table>