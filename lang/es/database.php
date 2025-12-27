<?php
return [
    "tables" => [
        "projects" => [
            "singular" => "Projecto",
            "plural" => "Projectos",
            "columns" => [
                "title" => "Título",
                "is_visible" => "¿Visible?",
                "github_link" => "Enlace de GitHub",
                "access_link" => "Enlace de Acceso",
                "image_paths" => "Imágenes",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "project_translations" => [
            "singular" => "Traducción de Proyecto",
            "plural" => "Traducciones de Proyecto",
            "columns" => [
                "title" => "Título",
                "description" => "Descripción",
                "language" => "Idioma",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "studies" => [
            "singular" => "Estudio",
            "plural" => "Estudios",
            "columns" => [
                "institution_name" => "Nombre de la Institución",
                "degree" => "Título",
                "certificate_link" => "Enlace al Certificado",
                "start_date" => "Fecha de Inicio",
                "end_date" => "Fecha de Finalización",
                "is_visible" => "¿Visible?",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "study_translations" => [
            "singular" => "Traducción de Estudio",
            "plural" => "Traducciones de Estudio",
            "columns" => [
                "institution_name" => "Nombre de la Institución",
                "degree" => "Título",
                "field_of_study" => "Campo de Estudio",
                "description" => "Descripción",
                "certificate_link" => "Enlace al Certificado",
                "location" => "Ubicación",
                "language" => "Idioma",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "experiences" => [
            "singular" => "Experiencia",
            "plural" => "Experiencias",
            "columns" => [
                "company_name" => "Nombre de la Compañía",
                "position" => "Posición",
                "start_date" => "Fecha de Inicio",
                "end_date" => "Fecha de Finalización",
                "is_visible" => "¿Visible?",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "experience_translations" => [
            "singular" => "Traducción de Experiencia",
            "plural" => "Traducciones de Experiencia",
            "columns" => [
                "company_name" => "Nombre de la Compañía",
                "position" => "Posición",
                "description" => "Descripción",
                "language" => "Idioma",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "languages" => [
            "singular" => "Idioma",
            "plural" => "Idiomas",
            "columns" => [
                "name" => "Nombre",
                "acronym" => "Acronimo",
                "proficiency_level" => "Nivel de Proficiencia",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ]
        ],
        "technologies" => [
            "singular" => "Tecnología",
            "plural" => "Tecnologías",
            "columns" => [
                "name" => "Nombre",
                "proficiency_level" => "Nivel de Proficiencia",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ]
        ]
    ],
    "enums" => [
        "tables" => [
            "languages" => [
                "proficiency_level" => [
                    "beginner" => "Principiante",
                    "intermediate" => "Intermedio",
                    "advanced" => "Avanzado",
                    "expert" => "Experto",
                ]
            ],
            "technologies" => [
                "proficiency_level" => [
                    "beginner" => "Principiante",
                    "intermediate" => "Intermedio",
                    "advanced" => "Avanzado",
                    "expert" => "Experto",
                ]
            ]
        ]
    ]
];
