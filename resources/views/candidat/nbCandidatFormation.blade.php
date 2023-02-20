<thead>
                                        <tr>
                                            <th>Formation</th>
                                            <th>Candidat</th>
                                        <tr>
                                    </thead>
                                    <tbody>
                                        @foreach($formations as $formation)
                                            <tr>
                                                <td>{{ $formation->nom}}</td>
                                                <td>{{ $formation->candidats_count}}</td> 
                                            <tr>
                                        @endforeach
                                    </tbody>
                        </table>