<?php
    // Creating a PHP Array
        $projetMezima= $trop[0];
        $tacheMezimas=$trop[1];
    ?>

        <div class="projet">
            <div class="entete">
                <div class="titreProjet">Projet: {{ $projetMezima->nomProjet }} </div>
                <div class="voirDescrip">
                    <div class="burger-croix">
                        <div class="line1"></div>
                        <div class="line3"></div>
                    </div>
                </div>
            </div>
            <div class="corps">
                <div class="descrip">Description: {{ $projetMezima->description }}</div>
                <div class="client">Client: <i>{{ $projetMezima->nomClient }}</i> </div>
                <div class="pourcen" ><a href="{{ route('projet.edit', $projetMezima->id) }}">voir plus</a></div>
            </div>
        </div>

        @foreach($tacheMezimas as $tacheMezima)
        <div class="projet">
            <div class="entete">
                <div class="titreProjet">Projet: {{ $tacheMezima->nomTache }} </div>
                <div class="voirDescrip">
                    <div class="burger-croix">
                        <div class="line1"></div>
                        <div class="line3"></div>
                    </div>
                </div>
            </div>
            <div class="corps">
                <div class="descrip">Description: {{ $tacheMezima->nomTache }}</div>
                <div class="client">Client: <i>{{ $tacheMezima->dureeTache }}</i> </div>
                <div class="pourcen" ><a href="{{ route('projet.edit', $projetMezima->id) }}">voir plus</a></div>
            </div>
        </div>
        @endforeach