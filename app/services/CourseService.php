<?php


namespace App\services;

use App\Models\Address;
use App\Models\Course;
use App\Models\File;
use App\Models\Media;

class CourseService implements CourseServiceInterface
{
    public static function getCourses()
    {
        $courses = Course::all();
        return $courses;
    }
    public static function getFiles()
    {
        $files = File::where('flag' ,'footer')->get();
        return $files;
    }
    public static function getLinks()
    {
        $media = Media::all();
        return $media;
    }
    public static function getAddress()
    {
        $address = Address::all();
        return $address;
    }
}