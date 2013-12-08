<?php
		session_start(); // needs to be specified to track user information.  Needs to be on top of every page;
		// header('Location: test_file.php'); // header has to be set before the content.  so header has to be at the top of the page
		// this is a way so that if someone refreshes or navigate back to this page it won't overwrite the cookie
		if (isset($_GET['music'])) {
			$_SESSION['music'] = $_GET['music'];
		}
		if (isset($_GET['music'])) {
			$_SESSION['name'] = $_GET['name'];
		}
		// exit;


		// echo '<h1>$_SERVER</h1>';
		// var_dump($_SERVER);
		echo '<h1>$_REQUEST</h1>';
		var_dump($_REQUEST);
		echo '<h1>$_GET</h1>';
		var_dump($_GET);
		echo '<h1>$_POST</h1>';
		var_dump($_POST);

		

		echo '<h1>$_FILES</h1>';
		var_dump($_FILES);
		echo '<h1>$_COOKIE</h1>';
		var_dump($_COOKIE);
		echo '<h1>$_SESSION</h1><p>this is a special superglobal variable that allows you to carry variables from page to page.<p>';
		var_dump($_SESSION);
	?>
	$_SESSION is an array, but it is a special type of array that will only allow you to add 
	values with an association. In order to add values to $_SESSION you must specify 
	an association

	There are a number of different ways to remove $_SESSION values. We use different methods 
	for different purposes. No matter what page we decide to remove session values from, it will 
	be removed from all pages.

	session_start();
	unset($_SESSION['name']) // This will only remove 'name' and its value from $_SESSION
	$_SESSION = array(); // Removes all variables currently set in $_SESSION.
	session_destroy(); // Destroys all the data associated with the current session.

	Headers
	In php there is a function that allows to you customize the HTTP headers that are being sent 
	when a request is made for a page. Headers are actually very simple, but we haven't talked 
	much about them. In this lesson we will briefly talk about what headers are and how we will 
	be using the header function in php.

	We looked at an overview of Server Side vs Client Side and we said that the client makes a 
	request and the server sends a response. We are going to dig a little bit deeper into what 
	is contained within that request and response. When you make a request for a page from your 
	browser by clicking a link or typing a url into the address bar, your browser is sending 
	information using HTTP protocol.

	The request of a client and the response of a server can be viewed on any page by using the 
	Chrome inspect element, clicking on the Network tab and clicking on the requested document.

	The Request and Response Headers will display the raw header info if you click on the down 
	arrows and click view source.
	
	Each Request and Response contains the following 4 components

	1. An Initial line
	Request Line
	The initial line is different for the request than for the response. A request line has three 
	parts, separated by spaces: a method name (POST or GET), the local path of the requested 
	resource, and the version of HTTP being used. A typical request line is:

	GET /path/to/file/index.php HTTP/1.1
  
	or
	
	POST /path/to/process/file/process.php HTTP/1.1
  
	Response Line
	The initial response line, called the status line, also has three parts separated by spaces: 
	the HTTP version, a response status code that gives the result of the request, and a 
	description of the status code. Typical status lines are:

	HTTP/1.1 200 OK
  
	or

	HTTP/1.1 404 Not Found
  	
  	2. Zero or more header lines
	HTTP header lines are specified as HeaderName: HeaderValue and have a line break at the end 
	of each one. HTTP 1.1 defines 46 headers, and one (Host:) is required in requests. Here is 
	an example of a response header.

		Date: Wed, 16 Oct 2013 04:34:03 GMT
		Server: Apache/2.2.24 (Unix) DAV/2 PHP/5.3.26 with Suhosin-Patch
		X-Powered-By: PHP/5.3.26
		Expires: Thu, 19 Nov 1981 08:52:00 GMT
		Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
		Pragma: no-cache
		Content-Length: 6535
		Keep-Alive: timeout=15, max=100
		Connection: Keep-Alive
		Content-Type: text/html
 
	Most of this won't make any sense to you, but it is giving the browser information about what 
	is being sent within the request.

	This is where our PHP header() function will come into play. If you remember from last chapter 
	we learned that when a request is made to the server for a PHP file. All the php tags within 
	the document get interpreted and a response gets sent back with a file that contains HTML.

	This is the important part of this lesson. If the php file does NOT output any content
	(i.e. HTML, echo, print, etc.), then we still have a chance to write our own headers. The 
	header we will be using is called Location. It is going to tell the browser to send a new 
	response to the location that is specified.

	3. A blank line

	4. An optional message body (html file).
	The goal of this lesson is not to have you walk away understanding how to manually write HTTP
	protocol. That is why we have browsers! You don't need to understand anything in this lesson 
	to build an enterprise level application. What I want you to take from this lesson is a deeper 
	understanding of how a webpage is being brought to your browser and some of the steps that it 
	goes through to get there. It will help you to become a more well rounded web developer.

	FORM VALIDATION
	Demo Source Code: https://github.com/codingdojoinstructor/validation

	So far we've been talking about a lot of different components of a web application, but have yet 
	to see how they all fit together. In this chapter we will be demonstrating how to piece together 
	the form, information in $_POST, setting $_SESSION variables, and using header('Location') to 
	redirect us where we need to be.

	New Built in PHP Functions

	There were a couple of new functions that were introduced in the video that were used for 
	validation.

	filter_var - filters a variable with a specified filter.

	check_date - checks to see if the date is a valid date.

