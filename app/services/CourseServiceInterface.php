<?php

namespace App\services;

interface CourseServiceInterface
{
    public static function getCourses();
    public static function getFiles();
    public static function getLinks();
    public static function getAddress();
    // public static function getLessons();
}