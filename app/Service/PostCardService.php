<?php


namespace App\Service;


class PostCardService
{
    private $country;
    private $width;
    private $height;
    public function __construct($country,$width,$height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message,$email)
    {
        dd('Working'.$message);
    }

}
