<?php

namespace app\service;

use LinFly\Annotation\Annotation\Bean;

interface IndexService {
    function index(string $v);
    function mysql();
    function php(string $str);
}