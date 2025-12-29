<?php
return [
    "tables" => [
        "projects" => [
            "singular" => "Project",
            "plural" => "Projects",
            "columns" => [
                "title" => "Title",
                "is_visible" => "Visible?",
                "github_link" => "GitHub Link",
                "access_link" => "Access Link",
                "image_paths" => "Images",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
        "project_translations" => [
            "singular" => "Project Translation",
            "plural" => "Project Translations",
            "columns" => [
                "title" => "Title",
                "description" => "Description",
                "language" => "Language",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
        "studies" => [
            "singular" => "Study",
            "plural" => "Studies",
            "columns" => [
                "institution_name" => "Institution Name",
                "degree" => "Degree",
                "certificate_link" => "Certificate Link",
                "start_date" => "Start Date",
                "end_date" => "End Date",
                "is_visible" => "Visible?",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
        "study_translations" => [
            "singular" => "Study Translation",
            "plural" => "Study Translations",
            "columns" => [
                "institution_name" => "Institution Name",
                "degree" => "Degree",
                "field_of_study" => "Field of Study",
                "description" => "Description",
                "certificate_link" => "Certificate Link",
                "location" => "Location",
                "language" => "Language",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
        "experiences" => [
            "singular" => "Experience",
            "plural" => "Experiences",
            "columns" => [
                "company_name" => "Company Name",
                "position" => "Position",
                "start_date" => "Start Date",
                "end_date" => "End Date",
                "is_visible" => "Visible?",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
        "experience_translations" => [
            "singular" => "Experience Translation",
            "plural" => "Experience Translations",
            "columns" => [
                "company_name" => "Company Name",
                "position" => "Position",
                "description" => "Description",
                "language" => "Language",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
        "languages" => [
            "singular" => "Language",
            "plural" => "Languages",
            "columns" => [
                "name" => "Name",
                "acronym" => "Acronym",
                "proficiency_level" => "Proficiency Level",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ]
        ],
        "technologies" => [
            "singular" => "Technology",
            "plural" => "Technologies",
            "columns" => [
                "name" => "Name",
                "proficiency_level" => "Proficiency Level",
                "categories" => "Categories",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ]
        ],
        "categories" => [
            "singular" => "Category",
            "plural" => "Categories",
            "columns" => [
                "name" => "Name",
                "created_at" => "Created At",
                "updated_at" => "Updated At",
            ],
        ],
    ],
    "enums" => [
        "tables" => [
            "languages" => [
                "proficiency_level" => [
                    "beginner" => "Beginner",
                    "intermediate" => "Intermediate",
                    "advanced" => "Advanced",
                    "expert" => "Expert",
                ]
            ],
            "technologies" => [
                "proficiency_level" => [
                    "beginner" => "Beginner",
                    "intermediate" => "Intermediate",
                    "advanced" => "Advanced",
                    "expert" => "Expert",
                ]
            ]
        ]
    ]
];
