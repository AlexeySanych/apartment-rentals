<?php

const DB_HOST = '127.0.0.1';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'Flats';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // удалить !!!!!!!!!!!

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
