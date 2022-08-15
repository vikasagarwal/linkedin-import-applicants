<?php
//require_once realpath(__DIR__ . '/vendor/autoload.php');
print (__DIR__.'/../');

//require_once 'GraphHelper.php';
print('PHP Graph Tutorial'.PHP_EOL.PHP_EOL);
$searchTerm ="New application: Software Engineer Intern";
$searchEmailsURL= "https://graph.microsoft.com/v1.0/me/messages?\$search=".$searchTerm;

//$retrievedEmails = callandReturnAPIResponse($searchEmailsURL);
// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['CLIENT_ID', 'CLIENT_SECRET', 'TENANT_ID', 'AUTH_TENANT', 'GRAPH_USER_SCOPES']);

initializeGraph();

greetUser();

$choice = -1;

while ($choice != 0) {
    echo('Please choose one of the following options:'.PHP_EOL);
    echo('0. Exit'.PHP_EOL);
    echo('1. Display access token'.PHP_EOL);
    echo('2. List my inbox'.PHP_EOL);
    echo('3. Send mail'.PHP_EOL);
    echo('4. List users (requires app-only)'.PHP_EOL);
    echo('5. Make a Graph call'.PHP_EOL);

    $choice = (int)readline('');

    switch ($choice) {
        case 1:
            displayAccessToken();
            break;
        case 2:
            listInbox();
            break;
        case 3:
            sendMail();
            break;
        case 4:
            listUsers();
            break;
        case 5:
            makeGraphCall();
            break;
        case 0:
        default:
            print('Goodbye...'.PHP_EOL);
    }
}
function initializeGraph(): void {
    GraphHelper::initializeGraphForUserAuth();
}

function greetUser(): void {
    // TODO
}

function displayAccessToken(): void {
    try {
        $token = GraphHelper::getUserToken();
        print('User token: '.$token.PHP_EOL.PHP_EOL);
    } catch (Exception $e) {
        print('Error getting access token: '.$e->getMessage().PHP_EOL.PHP_EOL);
    }
}

function listInbox(): void {
    // TODO
}

function sendMail(): void {
    // TODO
}

function listUsers(): void {
    // TODO
}

function makeGraphCall(): void {
    // TODO
}
?>