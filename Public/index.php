<?php 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Views\PhpRenderer;


require '../vendor/autoload.php';
/**
 * @OA\Info(title="Problema2", version="0.1")
 */

require '../server.php';
$app = AppFactory::create();
$app->setBasePath("/Problema2/Public");




$app->get('/', function ( $request,  $response, $args) {
$renderer = new PhpRenderer('../htmlpages');
return $renderer->render($response, "indexx.html",$args);
});

$app->post('/', function ( $request,  $response, $args) {
$renderer = new PhpRenderer('../htmlpages');
return $renderer->render($response, "indexx.html",$args);
   return $response;
    });

    $app->get('/zrenjanin', function ( $request,  $response, $args) {
        $renderer = new PhpRenderer('../htmlpages');
        return $renderer->render($response, "Zrenjanin.html",$args);
        return $response;
         });
            
                
        

$app->get('/timisoara', function ( $request,  $response, $args) {
$renderer = new PhpRenderer('../htmlpages');
return $renderer->render($response, "Timisoara.html",$args);
    return $response;
    });

    

$app->get('/login', function ( $request,  $response, $args) {
$renderer = new PhpRenderer('../htmlpages');
return $renderer->render($response, "login.php",$args);
});        


$app->post('/login', function ( $request,  $response, $args) {
    $renderer = new PhpRenderer('../htmlpages');
    return $renderer->render($response, "login.php",$args);
    });        
    
    

$app->get('/register', function ( $request,  $response, $args) {
    $renderer = new PhpRenderer('../htmlpages');
    return $renderer->render($response, "register.php",$args);
    return $response;
    });        
    


$app->get('/admin', function ( $request,  $response, $args) {
    $renderer = new PhpRenderer('../Admin');
    return $renderer->render($response, "index.php",$args);
    return $response;
    });        
    
    $app->post('/admin', function ( $request,  $response, $args) {
        $renderer = new PhpRenderer('../Admin');
        return $renderer->render($response, "index.php",$args);
        return $response;
        });        
        


        $app->get('/admin/dashboard', function ( $request,  $response, $args) {
            $renderer = new PhpRenderer('../Admin');
            return $renderer->render($response, "dashboard.php",$args);
            return $response;
            });       

$app->post('/admin/dashboard', function ( $request,  $response, $args) {
$renderer = new PhpRenderer('../Admin');
return $renderer->render($response, "dashboard.php",$args);
return $response;
});        


$app->get('/enquiry', function ( $request,  $response, $args) {
    $renderer = new PhpRenderer('../htmlpages');
    return $renderer->render($response, "enquiry.php",$args);
    return $response;
    });  
    

    $app->post('/enquiry', function ( $request,  $response, $args) {
        $renderer = new PhpRenderer('../htmlpages');
        return $renderer->render($response, "enquiry.php",$args);
        return $response;
        });  


    $app->get('/users[/{id}]', function ($request, $response, array $args) use($db) {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=problema2', 'root', '');
        // daca esueaza conectarea, arunca exceptie
     $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement= $pdo->prepare("SELECT username FROM users WHERE users.id=:oricum");
        $statement->bindValue(":oricum", $args['id']);
        $statement->execute();
        $users= $statement->fetchAll(PDO::FETCH_COLUMN);
        //var_dump($users);
        echo $users[0];

        return $response;
    });


    /**
 * @OA\Get(
 *     path="/Problema2/Public/Enquirys", tags = {"Enquirys"},
 *   @OA\Response  (response="200", description="Success"),
 *   @OA\Response  (response="404", description="Not Found")
 * )
 */
$app->get('/Enquirys', function($request, $response, $args) {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=problema2', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM tblenquiry");
    $statement->execute();
    $enquiry = $statement->fetchAll(PDO::FETCH_ASSOC);
    $enquiry = json_encode($enquiry);
    $response->getBody()->write($enquiry);
    return $response->withHeader('Content-Type', 'application/json')
    ->withStatus(200);
});

    /**
 * @OA\Get(
 *     path="/Problema2/Public/Users", tags = {"Users"},
 *   @OA\Response  (response="200", description="Success"),
 *   @OA\Response  (response="404", description="Not Found")
 * )
 */
$app->get('/Users', function($request, $response, $args) {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=problema2', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM users");
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    $users = json_encode($users);
    $response->getBody()->write($users);
    return $response->withHeader('Content-Type', 'application/json')
    ->withStatus(200);
});
    
    /**
 * @OA\Get(
 *     path="/Problema2/Public/Admins", tags = {"Admins"},
 *   @OA\Response  (response="200", description="Success"),
 *   @OA\Response  (response="404", description="Not Found")
 * )
 */
$app->get('/Admins', function($request, $response, $args) {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=problema2', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM admin ");
    $statement->execute();
    $admin = $statement->fetchAll(PDO::FETCH_ASSOC);
    $admin = json_encode($admin);
    $response->getBody()->write($admin);
    return $response->withHeader('Content-Type', 'application/json')
    ->withStatus(200);
});

    /**
     * @OA\Get(
     *     path="/Problema2/Public/Enquiry/{id}" ,tags={"Enquiry"},
     *     description="Returns a enquiry based on a single ID, if the user does not have access to the enquiry",
     *     operationId="findPetById",
     *     @OA\Parameter(
     *         description="ID of enquiry to fetch",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64",
     *         )
     *     ),
     *     @OA\Response  (response="200", description="Success"),
     *      @OA\Response  (response="404", description="Not Found")
     * )
     * */
$app->get('/Enquiry/{id}', function($request, $response, $args) {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=problema2', 'root', '');
    $statement= $pdo->prepare("SELECT EmailId FROM tblenquiry WHERE id=:id");
    $statement->bindValue(":id", $args['id']);
    $statement->execute();
    $EmailId= $statement->fetchAll(PDO::FETCH_COLUMN);
    //var_dump($users);
    if(empty($EmailId)){
        //$response->withStatus(400); // wrong
        return $response->withStatus(400);
    }
        
    $response->withStatus(200);
    
    $response->getBody()->write(json_encode($EmailId));
    //echo $enunt_intrebare[0];
    return $response->withHeader('Content-Type', 'application/json');
});





$app->addErrorMiddleware(true, true, true);
$app->run();
?>
    
    
    