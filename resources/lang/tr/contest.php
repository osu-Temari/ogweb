<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Yalnızca dairelere tıklamaktan başka yollarda yarışın.',
        'large' => 'Topluluk Yarışmaları',
    ],

    'index' => [
        'nav_title' => 'katalog',
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
        'login_required' => 'Oylamak için lütfen giriş yapınız.',
        'over' => 'Bu yarışma için oylama sona erdi',
        'show_voted_only' => 'Oy verilenleri göster',

        'best_of' => [
            'none_played' => "Bu yarışma için geçerli olan hiçbir beatmapi oynamamışsınız!",
        ],

        'button' => [
            'add' => 'Oyla',
            'remove' => 'Oyu Kaldır',
            'used_up' => 'Tüm oylarını kullandın',
        ],

        'progress' => [
            '_' => ':used / :max oy kullanıldı',
        ],

        'requirement' => [
            'playlist_beatmapsets' => [
                'incomplete_play' => 'Oylama yapabilmek için belirli playlistlerdeki bütün haritaları oynamanız gerekmektedir',
            ],
        ],
    ],

    'entry' => [
        '_' => 'girdi',
        'login_required' => 'Yarışmaya katılmak için giriş yapınız.',
        'silenced_or_restricted' => 'Kısıtlanmış veya susturulmuşken yarışmalara katılamazsınız.',
        'preparation' => 'Şu an bu yarışmayı hazırlıyoruz. Lütfen sabırla bekleyiniz!',
        'drop_here' => 'Girdinizi buraya bırakın',
        'download' => '.osz indir',

        'wrong_type' => [
            'art' => 'Bu yarışma için sadece .jpg ve .png dosyaları kabul edilir.',
            'beatmap' => 'Bu yarışma için sadece .osu dosyaları kabul edilir.',
            'music' => 'Bu yarışma için sadece .mp3 dosyaları kabul edilir.',
        ],

        'wrong_dimensions' => 'Bu yarışma için başvurular şu şekilde olmalıdır: :widthx:height',
        'too_big' => 'Bu yarışma için :limit girdi gönderilebilir.',
    ],

    'beatmaps' => [
        'download' => 'Girdiyi İndir',
    ],

    'vote' => [
        'list' => 'oylar',
        'count' => ':count_delimited oy|:count_delimited oy',
        'points' => ':count_delimited puan|:count_delimited puan',
    ],

    'dates' => [
        'ended' => ':date tarihinde sona erdi',
        'ended_no_date' => 'Sona erdi',

        'starts' => [
            '_' => 'Başlangıç :date',
            'soon' => 'yakında™',
        ],
    ],

    'states' => [
        'entry' => 'Girişler Açık',
        'voting' => 'Oylama Başladı',
        'results' => 'Sonuçlar Çıktı',
    ],
];
