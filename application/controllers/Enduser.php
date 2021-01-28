<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Enduser (EnduserController)
 * User Class to control all user related operations.
 * @author : 
 * @version : 
 * @since : 
 */
class Enduser extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This is Te End User Controller of User WebAppliction and App
     */

    public function index(){
        
         $this->global['pageTitle'] = 'The Printing World : home';
        
        $this->loadViewsEndUser("enduser/home", $this->global, NULL , NULL);
    }

    public function about(){
        
         $this->global['pageTitle'] = 'The Printing World : about';
        
        $this->loadViewsEndUser("enduser/about", $this->global, NULL , NULL);
    }

     public function contact(){
        
         $this->global['pageTitle'] = 'The Printing World : contact';
        
        $this->loadViewsEndUser("enduser/contact", $this->global, NULL , NULL);
    }

     public function products(){
        
         $this->global['pageTitle'] = 'The Printing World : products';
        
        $this->loadViewsEndUser("enduser/products", $this->global, NULL , NULL);
    }
    public function cart(){
        
         $this->global['pageTitle'] = 'The Printing World : products';
        
        $this->loadViewsEndUser("enduser/cart-page", $this->global, NULL , NULL);
    }
    public function login(){
        
         $this->global['pageTitle'] = 'The Printing World : products';
        
        $this->loadViewsEndUser("enduser/login-register", $this->global, NULL , NULL);
    }
    public function checkout(){
        
         $this->global['pageTitle'] = 'The Printing World : products';
        
        $this->loadViewsEndUser("enduser/checkout", $this->global, NULL , NULL);
    }

}

?>