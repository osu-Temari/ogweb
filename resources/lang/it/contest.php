<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Competi in altri modi oltre che a cliccare cerchi.',
        'large' => 'Contest della Comunità',
    ],

    'index' => [
        'nav_title' => 'lista',
    ],

    'judge' => [
        'hide_judged' => '',
        'nav_title' => '',
        'no_current_vote' => '',
        'update' => '',
        'validation' => [
            'missing_score' => '',
            'contest_vote_judged' => '',
        ],
        'voted' => '',
    ],

    'judge_results' => [
        '_' => '',
        'creator' => '',
        'score' => '',
        'total_score' => '',
    ],

    'voting' => [
        'judge_link' => '',
        'judged_notice' => '',
        'login_required' => 'Effettua il login per poter votare.',
        'over' => 'Le votazioni per questo contest sono terminate',
        'show_voted_only' => 'Mostra votati',

        'best_of' => [
            'none_played' => "Sembra che tu non abbia giocato nessuna beatmap che si qualifica per questo contest!",
        ],

        'button' => [
            'add' => 'Vota',
            'remove' => 'Rimuovi voto',
            'used_up' => 'Hai usato tutti i tuoi voti',
        ],

        'progress' => [
            '_' => ':used / :max voti utilizzati',
        ],

        'requirement' => [
            'playlist_beatmapsets' => [
                'incomplete_play' => 'È necessario giocare tutte le beatmap nelle playlist specificate prima di votare',
            ],
        ],
    ],

    'entry' => [
        '_' => 'iscrizione',
        'login_required' => 'Effettua il login per poter entrare nel contest.',
        'silenced_or_restricted' => 'Non puoi entrare nei contest se sei limitato o silenziato.',
        'preparation' => 'Attualmente stiamo preparando il contest. Aspettate con pazienza!',
        'drop_here' => 'Trascina la tua iscrizione qui',
        'download' => 'Scarica .osz',

        'wrong_type' => [
            'art' => 'Solo file .jpg e .png sono accettati per questo contest.',
            'beatmap' => 'Solo file .osu sono accettati per questo contest.',
            'music' => 'Solo file .mp3 sono accettati per questo contest.',
        ],

        'wrong_dimensions' => 'Le iscrizioni per questo concorso devono essere :widthx:height',
        'too_big' => 'Le iscrizioni per questo contest non possono essere più grandi di :limit.',
    ],

    'beatmaps' => [
        'download' => 'Scarica Iscrizione',
    ],

    'vote' => [
        'list' => 'voti',
        'count' => ':count_delimited voto|:count_delimited voti',
        'points' => ':count_delimited punto|:count_delimited punti',
    ],

    'dates' => [
        'ended' => 'Terminato :date',
        'ended_no_date' => 'Terminato',

        'starts' => [
            '_' => 'Inizia :date',
            'soon' => 'presto™',
        ],
    ],

    'states' => [
        'entry' => 'Iscrizioni Aperte',
        'voting' => 'Votazione Iniziata',
        'results' => 'Risultati Pubblicati',
    ],
];
