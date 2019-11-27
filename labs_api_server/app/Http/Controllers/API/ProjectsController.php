<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index(Request $req)
    {
        $projects = $this->getProjects();
        return response()->json( $projects );
    }

    public function show($project_id)
    {
        $projects = $this->getProjects();

        if(isset($projects[$project_id]))
            $response = $projects[$project_id];
        else {
            $response = ["message" => "Sinto muito, não foi encontrado o projeto solicitado.
            Talvez ele tenha sido movido ou sua visualização é restrita"];
        }
        return response()->json( $response );
    }

    public function getProjects()
    {
        return
        $projects = [
            "1" => [
                "id" => 1,
                "title" => ['Project Title #1'],
                "techs" => ['PHP','CSS','Laravel','JavaScript'],
                "licence" => [
                    "type"=>"MIT",
                    "content" => "MIT Licence content ... Content..."
                ],
                "description" => "Some description",
                "todos" => ["Some todo","Another todo"],
                "dones" => ["Some done","Another done"],
                "demo_url" => "http://urltodemo.com",
                "prod_url" => "http://urltoprod.com",
                "repo_details" => [
                    "url" => "http://repo.com/us/repo",
                    "project_type" => "", //can be: fork, authored, colaboration
                ],
                "images" => [
                    "cover_photo" => "cover_photo.jpg",
                    "screenshots" => ["first.jpg", "second.jpg", "third.jpg"]
                ]

            ],
            "2" => [
                "id" => 2,
                "title" => ['Project Title #2'],
                "techs" => ['PHP','CSS','Laravel','JavaScript'],
                "licence" => [
                    "type"=>"MIT",
                    "content" => "MIT Licence content ... Content..."
                ],
                "description" => "Some description",
                "todos" => ["Some todo","Another todo"],
                "dones" => ["Some done","Another done"],
                "demo_url" => "http://urltodemo.com",
                "prod_url" => "http://urltoprod.com",
                "repo_details" => [
                    "url" => "http://repo.com/us/repo",
                    "project_type" => "", //can be: fork, authored, colaboration
                ],
                "images" => [
                    "cover_photo" => "cover_photo.jpg",
                    "screenshots" => ["first.jpg", "second.jpg", "third.jpg"]
                ]

            ],
            "3" => [
                "id" => 3,
                "title" => ['Project Title #3'],
                "techs" => ['PHP','CSS','Laravel','JavaScript'],
                "licence" => [
                    "type"=>"MIT",
                    "content" => "MIT Licence content ... Content..."
                ],
                "description" => "Some description",
                "todos" => ["Some todo","Another todo"],
                "dones" => ["Some done","Another done"],
                "demo_url" => "http://urltodemo.com",
                "prod_url" => "http://urltoprod.com",
                "repo_details" => [
                    "url" => "http://repo.com/us/repo",
                    "project_type" => "", //can be: fork, authored, colaboration
                ],
                "images" => [
                    "cover_photo" => "cover_photo.jpg",
                    "screenshots" => ["first.jpg", "second.jpg", "third.jpg"]
                ]

            ],
        ];
    }
}
