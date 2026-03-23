<?php

$projects = [
    "Web stránka 1",
    "Web stránka 2",
    "Web stránka 3",
    "Web stránka 4",
    "Web stránka 5",
    "Web stránka 6",
    "Web stránka 7",
    "Web stránka 8"
];

function generatePortfolio($projects) {
    echo '<section class="container">';

    $chunks = array_chunk($projects, 4);

    foreach ($chunks as $rowIndex => $row) {
        echo '<div class="row">';

        foreach ($row as $index => $project) {
            $id = $rowIndex * 4 + $index + 1;

            echo "
                <div class='col-25 portfolio text-white text-center' id='portfolio-$id'>
                    $project
                </div>
            ";
        }

        echo '</div>';
    }

    echo '</section>';
}
