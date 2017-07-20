<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/profiling.html
|
*/
//	Elapsed time of Benchmark points and total execution time
$config['benchmarks'] = TRUE;

//	CodeIgniterConfig variables
$config['config'] = TRUE;

//	The Controller class and method requested
$config['controller_info'] = TRUE;

//	Any GET data passed in the request
$config['get'] = TRUE;

// 	The HTTP headers for the current request
$config['http_headers'] = TRUE;

//	Amount of memory consumed by the current request, in bytes
$config['memory_usage'] = TRUE;

// 	Any POST data passed in the request
$config['post'] = TRUE;

// 	Listing of all database queries executed, including execution time
$config['queries'] = TRUE;

// The URI of the current request
$config['uri_string'] = TRUE;

// Data stored in the current session
$config['session_data'] = TRUE;

// The number of queries after which the query block will default to hidden.
$config['query_toggle_count'] = 50;
