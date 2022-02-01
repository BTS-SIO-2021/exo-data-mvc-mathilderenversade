<?php

// Les différents articles sous forme de tableaux
$dataArticlesList = [
    1 => new Article("Comment caresser son chien dans le sens du poil", "<p> Il est important de caresser son chien dans le sens du poil pour notamment éviter les poils incarnés et la mauvaise humeur </p>", "Mathilde",'2020-07-13', 'Bien-être'),
    2 => new Article("Pourquoi les chiens sentent-ils mauvaise de la bouche ?", "<p> Senteur poubelle ou senteur caniveau, l'haleine de nos canidés est un vrai problème du quotidien. Il existe pourtant des solutions simples </p>", "Nicolas" , '2020-03-25', 'Soins et santé'),

    3 => new Article("Top 10 des meilleurs jouets à tester","<p> Peluche, baballe, pouet pouet, jeux d'intelligence et d'agilité, nous avons sélectionné pour vous les meilleurs jeux 2020 pour votre animal </p>", "Pierre", '2020-12-31', 'Loisirs'),
];

// Les catégories
$dataCategoriesList = [
    1 => 'Bien-être',
    2 => 'Soins et santé',
    3 => 'Loisirs',
    4 => 'Education'
];

// Les auteurs
$dataAuthorsList = [
    1 => 'Mathilde',
    2 => 'Nicolas',
    3 => 'Pierre',
    4 => 'Colette',
    5 => 'Lili',
    6 => 'Jean',
    7 => 'Pascal'
];