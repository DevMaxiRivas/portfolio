<?php
return [
    "tables" => [
        "projects" => [
            "singular" => "Project",
            "plural" => "Projects",
            "columns" => [
                "title" => "Title",
                "description" => "Description",
                "language" => "Language",
                "github_link" => "GitHub Link",
                "access_link" => "Access Link",
            ],
        ],
        "translation_projects" => [
            "singular" => "Translation Project",
            "plural" => "Translation Projects",
            "columns" => [
                "title" => "Title",
                "description" => "Description",
                "language" => "Language",
            ],
        ],
        "languages" => [
            "singular" => "Language",
            "plural" => "Languages",
            "columns" => [
                "name" => "Name",
                "proficiency_level" => "Proficiency Level",
                "acronym" => "Acronym",
            ],
        ],
        "categories" => [
            "singular" => "Category",
            "plural" => "Categories",
            "columns" => [
                "name" => "Name",
            ],
        ],
        "studies" => [
            "singular" => "Study",
            "plural" => "Studies",
            "columns" => [
                "institution_name" => "Institution",
                "degree" => "Degree",
                "start_date" => "Start Date",
                "end_date" => "End Date",
                "field_of_study" => "Field of Study",
                "description" => "Description",
                "certificate_link" => "Certificate Link",
                "location" => "Location",
            ]
        ],
        "translation_studies" => [
            "singular" => "Translation Study",
            "plural" => "Translation Studies",
            "columns" => [
                "institution_name" => "Institution Name",
                "degree" => "Degree",
                "field_of_study" => "Field of Study",
                "description" => "Description",
                "certificate_link" => "Certificate Link",
                "location" => "Location",
                "language" => "Language",
            ],
        ],
    ]
];
