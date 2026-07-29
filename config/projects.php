<?php

return [

    'kaay-mourite-by-fallu' => [
        'title' => 'Kaay Mourite By Fallu — boutique en ligne',
        'summary' => 'Site e-commerce pour une marque de vêtements traditionnels sénégalais, du catalogue au tunnel d\'achat, avec panneau d\'administration complet.',
        'role' => 'Développeur Front-End & Design',
        'timeline' => '2026 — projet personnel',
        'tools' => ['HTML/CSS/JS', 'PHP', 'MySQL'],
        'tag' => 'E-commerce',
        'gradient' => 'from-amber-600 via-orange-500 to-yellow-400',
        'image' => 'images/projects/kaay-mourite-hero.jpg',
        'problem' => 'La marque n\'avait aucune présence en ligne : les commandes se faisaient uniquement par message, sans catalogue consultable ni suivi des stocks.',
        'solution' => 'Développement d\'une boutique en ligne complète : catalogue filtrable (Femme/Homme), panier persistant, fiches produit détaillées, formulaire de commande, et un panneau d\'administration permettant de gérer le catalogue (ajout, modification, suppression de produits) sans toucher au code.',
        'outcome' => 'Une boutique autonome que la marque peut mettre à jour elle-même depuis l\'admin, avec une expérience d\'achat fluide du catalogue jusqu\'à la commande.',
        'links' => [
            'github' => 'https://github.com/Cheikhdiop07/KBH',
        ],
    ],

    'tazawoudou-choubane' => [
        'title' => 'Tazawoudou Choubane — plateforme de gestion de daara',
        'summary' => 'Application Laravel pour la gestion d\'une association religieuse (daara) à Dakar : membres, cotisations, contenus et projets communautaires.',
        'role' => 'Développeur Full-Stack',
        'timeline' => '2026 — projet personnel',
        'tools' => ['Laravel', 'MySQL', 'Blade', 'API REST'],
        'tag' => 'Web App',
        'gradient' => 'from-emerald-600 via-green-500 to-teal-400',
        'image' => 'images/projects/tazawoudou-web-hero.jpg',
        'problem' => 'L\'association gérait ses membres, cotisations et communications de façon informelle (papier, WhatsApp), sans vue d\'ensemble ni historique fiable.',
        'solution' => 'Construction d\'une plateforme avec un espace admin (membres, cotisations, annonces, galerie, khassaïdes, projets, rapports) et un espace membre (suivi des cotisations, contenus, profil), ainsi qu\'une API REST pour alimenter une application mobile compagnon.',
        'outcome' => 'Une plateforme centralisée qui digitalise la gestion de l\'association, avec authentification sécurisée et rôles distincts admin/membre.',
        'links' => [
            'github' => 'https://github.com/Cheikhdiop07/Tazawoudou_Choubane',
        ],
    ],

    'tazawoudou-choubane-mobile' => [
        'title' => 'Tazawoudou Choubane — application mobile',
        'summary' => 'Application Flutter compagnon de la plateforme Laravel, pour que les membres du daara accèdent à leurs cotisations et contenus depuis leur téléphone.',
        'role' => 'Développeur Mobile',
        'timeline' => '2026 — projet personnel',
        'tools' => ['Flutter', 'Dart', 'API REST'],
        'tag' => 'Mobile App',
        'gradient' => 'from-emerald-500 via-teal-500 to-indigo-500',
        'image' => 'images/projects/tazawoudou-mobile-hero.jpg',
        'problem' => 'Les membres devaient se connecter au site web pour consulter leurs cotisations ou les dernières annonces — peu pratique au quotidien.',
        'solution' => 'Développement d\'une application Flutter consommant l\'API Laravel existante (authentification par token, cotisations, khassaïdes, galerie, profil), avec une identité visuelle reprenant les couleurs de la plateforme web.',
        'outcome' => 'Une app mobile légère qui donne aux membres un accès direct à leurs informations, sans repasser par le navigateur.',
        'links' => [
            'github' => 'https://github.com/Cheikhdiop07/TC_FLUTTER',
        ],
    ],

    'portfolio-ndoongo' => [
        'title' => 'Portfolio — Seydina Mouhamed Touré',
        'summary' => 'Site portfolio pour un photographe et créateur de contenus sénégalais, pensé comme une vitrine visuelle de son travail.',
        'role' => 'Développeur Front-End',
        'timeline' => '2026 — projet client',
        'tools' => ['HTML/CSS', 'JavaScript'],
        'tag' => 'Portfolio Client',
        'gradient' => 'from-blue-600 via-indigo-500 to-slate-800',
        'image' => 'images/projects/portfolio-ndoongo-hero.jpg',
        'problem' => 'Le client avait besoin d\'un site simple et élégant pour présenter ses photos et son approche, sans dépendre d\'une plateforme tierce.',
        'solution' => 'Conception et développement d\'un site one-page sur-mesure : présentation, approche, portraits, intérieur, réalisations et contact, avec une mise en page pensée pour mettre les photos en valeur.',
        'outcome' => 'Un site livré et déployé, actuellement en ligne.',
        'links' => [
            'github' => 'https://github.com/Cheikhdiop07/Porfolio_SMT',
            'demo' => 'https://porfolio-smt.vercel.app',
        ],
    ],

];
