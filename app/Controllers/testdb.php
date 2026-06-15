<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;
use Throwable;

class TestDB extends Controller
{
    public function index()
    {
        try {

            $db = Database::connect();

            // Force a real query to trigger error if connection is bad
            $db->query("SELECT 1");

            echo "Database Connected Successfully!";

        } catch (Throwable $e) {

            echo "<h3>Database Connection Failed</h3>";
            echo "<b>Error Message:</b> " . $e->getMessage() . "<br>";
            echo "<b>File:</b> " . $e->getFile() . "<br>";
            echo "<b>Line:</b> " . $e->getLine() . "<br>";
        }
    }
}