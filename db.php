<?php

$dbHost = 'aws-0-ap-northeast-2.pooler.supabase.com';
$dbUser = 'postgres.nnpjrzvaopiwzxdynhvf';
$dbPassword ='saranghaeiloveu';

$conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=postgres.nnpjrzvaopiwzxdynhvf  password=$dbPassword sslmode=require");

if (!$conn) {
    exit('Database connection failed.');
}

?>