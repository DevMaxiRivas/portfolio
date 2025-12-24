<?php
return [
    "tables" => [
        "projects" => [
            "singular" => "Projecto",
            "plural" => "Projectos",
            "columns" => [
                "title" => "Título",
                "description" => "Descripción",
                "language" => "Idioma",
                "github_link" => "Enlace de GitHub",
                "access_link" => "Enlace de Acceso",
                "image_paths" => "Imágenes",
            ],
        ],
        "translation_projects" => [
            "singular" => "Traducción de Proyecto",
            "plural" => "Traducciones de Proyecto",
            "columns" => [
                "title" => "Título",
                "description" => "Descripción",
                "language" => "Idioma",
            ],
        ],
        "studies" => [
            "singular" => "Estudio",
            "plural" => "Estudios",
            "columns" => [
                "institution_name" => "Nombre de la Institución",
                "degree" => "Título",
                "field_of_study" => "Campo de Estudio",
                "description" => "Descripción",
                "certificate_link" => "Enlace al Certificado",
                "location" => "Ubicación",
                "start_date" => "Fecha de Inicio",
                "end_date" => "Fecha de Finalización",
                "created_at" => "Creado en",
                "updated_at" => "Actualizado en",
            ],
        ],
        "translation_studies" => [
            "singular" => "Traducción de Estudio",
            "plural" => "Traducciones de Estudio",
            "columns" => [
                "institution_name" => "Nombre de la Institución",
                "degree" => "Título",
                "field_of_study" => "Campo de Estudio",
                "description" => "Descripción",
                "certificate_link" => "Enlace al Certificado",
                "location" => "Ubicación",
            ],
        ],
    ]

];
