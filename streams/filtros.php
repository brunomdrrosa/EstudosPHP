<?php

require 'Filtro.php';

$arquivosCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', Filtro::class);
stream_filter_append($arquivosCursos, 'alura.partes');

echo fread($arquivosCursos, filesize('lista-cursos.txt'));